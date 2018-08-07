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

use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Helper\Argument\ArgumentInterface;
use WBW\Library\Core\Helper\Argument\ArrayHelper;
use WBW\Library\Core\Helper\Argument\BooleanHelper;
use WBW\Library\Core\Helper\Argument\DateTimeHelper;
use WBW\Library\Core\Helper\Argument\DoubleHelper;
use WBW\Library\Core\Helper\Argument\FloatHelper;
use WBW\Library\Core\Helper\Argument\IntegerHelper;
use WBW\Library\Core\Helper\Argument\NumberHelper;
use WBW\Library\Core\Helper\Argument\ObjectHelper;
use WBW\Library\Core\Helper\Argument\ResourceHelper;
use WBW\Library\Core\Helper\Argument\StringHelper;
use WBW\Library\Core\Helper\Argument\TimestampHelper;

/**
 * Argument validator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 * @final
 */
final class ArgumentValidator implements ArgumentInterface {

    /**
     * Determines if the $value is of type $type.
     *
     * @param mixed $value The value.
     * @param integer $type The type.
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
