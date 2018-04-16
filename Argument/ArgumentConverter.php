<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use DateTime;
use WBW\Library\Core\Exception\Argument\DateArgumentException;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Argument\TimestampArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\Core\Utility\Argument\BooleanUtility;
use WBW\Library\Core\Utility\Argument\DoubleUtility;
use WBW\Library\Core\Utility\Argument\FloatUtility;
use WBW\Library\Core\Utility\Argument\IntegerUtility;

/**
 * Argument converter.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 * @final
 */
final class ArgumentConverter implements ArgumentInterface {

    /**
     * Convert a string value into type $type.
     *
     * @param string $value The string value.
     * @param integer $type The type.
     * @param string $dateFormat The date format.
     * @return mixed Returns the value.
     * @throws IllegalArgumentException Throws an illegal argument exception if the value is not of expected type.
     * @throws NullPointerException Throws a null pointer exception if the type is date and the date format is null.
     */
    public static function convert($value, $type, $dateFormat = null) {
        switch ($type) {
            case self::TYPE_BOOLEAN:
                return BooleanUtility::parseString($value);
            case self::TYPE_DATE:
                if (null === $dateFormat) {
                    throw new NullPointerException("The date format is null");
                }
                $datetime = DateTime::createFromFormat($dateFormat, $value);
                if (false === $datetime) {
                    throw new DateArgumentException($value);
                }
                return $datetime;
            case self::TYPE_DOUBLE:
                return DoubleUtility::parseString($value);
            case self::TYPE_FLOAT:
                return FloatUtility::parseString($value);
            case self::TYPE_INTEGER:
                return IntegerUtility::parseString($value);
            case self::TYPE_STRING:
                return $value;
            case self::TYPE_TIMESTAMP:
                if (null === $dateFormat) {
                    throw new NullPointerException("The datetime format is null");
                }
                $datetime = DateTime::createFromFormat($dateFormat, $value);
                if (false === $datetime) {
                    throw new TimestampArgumentException($value);
                }
                return $datetime;
            default:
                throw new IllegalArgumentException("The type \"" . $type . "\" is not implemented");
        }
    }

}
