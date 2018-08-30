<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
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

/**
 * Argument helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class ArgumentHelper implements ArgumentInterface {

    /**
     * Convert a string value into type $type.
     *
     * @param string $value The string value.
     * @param int $type The type.
     * @param string $dateFormat The date format.
     * @return mixed Returns the value.
     * @throws IllegalArgumentException Throws an illegal argument exception if the value is not of expected type.
     * @throws NullPointerException Throws a null pointer exception if the type is date and the date format is null.
     */
    public static function convert($value, $type, $dateFormat = null) {
        switch ($type) {
            case self::ARGUMENT_BOOLEAN:
                return BooleanHelper::parseString($value);
            case self::ARGUMENT_DATE:
                if (null === $dateFormat) {
                    throw new NullPointerException("The date format is null");
                }
                $datetime = DateTime::createFromFormat($dateFormat, $value);
                if (false === $datetime) {
                    throw new DateArgumentException($value);
                }
                return $datetime;
            case self::ARGUMENT_DOUBLE:
                return DoubleHelper::parseString($value);
            case self::ARGUMENT_FLOAT:
                return FloatHelper::parseString($value);
            case self::ARGUMENT_INTEGER:
                return IntegerHelper::parseString($value);
            case self::ARGUMENT_STRING:
                return $value;
            case self::ARGUMENT_TIMESTAMP:
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

    /**
     * Determines if the $value is of type $type.
     *
     * @param mixed $value The value.
     * @param int $type The type.
     * @throws IllegalArgumentException Throws an illegal argument exception if the value is not of expected type.
     */
    public static function isTypeOf($value, $type) {
        switch ($type) {
            case self::ARGUMENT_ARRAY:
                ArrayHelper::isArray($value);
                break;
            case self::ARGUMENT_BOOLEAN:
                BooleanHelper::isBoolean($value);
                break;
            case self::ARGUMENT_DATE:
                DateTimeHelper::isDate($value);
                break;
            case self::ARGUMENT_DOUBLE:
                DoubleHelper::isDouble($value);
                break;
            case self::ARGUMENT_FLOAT:
                FloatHelper::isFloat($value);
                break;
            case self::ARGUMENT_INTEGER:
                IntegerHelper::isInteger($value);
                break;
            case self::ARGUMENT_NUMBER:
                NumberHelper::isNumber($value);
                break;
            case self::ARGUMENT_OBJECT:
                ObjectHelper::isObject($value);
                break;
            case self::ARGUMENT_RESOURCE:
                ResourceHelper::isResource($value);
                break;
            case self::ARGUMENT_STRING:
                StringHelper::isString($value);
                break;
            case self::ARGUMENT_TIMESTAMP:
                TimestampHelper::isTimestamp($value);
                break;
            default:
                throw new IllegalArgumentException("The type \"" . $type . "\" is not implemented");
        }
        return true;
    }

}
