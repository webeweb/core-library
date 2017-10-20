<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use WBW\Library\Core\Exception\Argument\ArrayArgumentException;
use WBW\Library\Core\Exception\Argument\BooleanArgumentException;
use WBW\Library\Core\Exception\Argument\DateArgumentException;
use WBW\Library\Core\Exception\Argument\DoubleArgumentException;
use WBW\Library\Core\Exception\Argument\FloatArgumentException;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Exception\Argument\NumberArgumentException;
use WBW\Library\Core\Exception\Argument\ObjectArgumentException;
use WBW\Library\Core\Exception\Argument\ResourceArgumentException;
use WBW\Library\Core\Exception\Argument\StringArgumentException;
use WBW\Library\Core\Exception\Argument\TimestampArgumentException;

/**
 * Argument validator.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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
    public static function isValid($value, $type) {
        switch ($type) {
            case (self::TYPE_ARRAY):
                if (!is_array($value)) {
                    throw new ArrayArgumentException($value);
                }
                break;
            case (self::TYPE_BOOLEAN):
                if (!is_bool($value)) {
                    throw new BooleanArgumentException($value);
                }
                break;
            case (self::TYPE_DATE):
                if (!date_parse($value)) {
                    throw new DateArgumentException($value);
                }
                break;
            case (self::TYPE_DOUBLE):
                if (!is_double($value)) {
                    throw new DoubleArgumentException($value);
                }
                break;
            case (self::TYPE_FLOAT):
                if (!is_float($value)) {
                    throw new FloatArgumentException($value);
                }
                break;
            case (self::TYPE_INTEGER):
                if (!is_integer($value)) {
                    throw new IntegerArgumentException($value);
                }
                break;
            case (self::TYPE_NUMBER):
                if (!is_numeric($value)) {
                    throw new NumberArgumentException($value);
                }
                break;
            case (self::TYPE_OBJECT):
                if (!is_object($value)) {
                    throw new ObjectArgumentException($value);
                }
                break;
            case (self::TYPE_RESOURCE):
                if (!is_resource($value)) {
                    throw new ResourceArgumentException($value);
                }
                break;
            case (self::TYPE_STRING):
                if (!is_string($value)) {
                    throw new StringArgumentException($value);
                }
                break;
            case (self::TYPE_TIMESTAMP):
                if (!date_parse($value)) {
                    throw new TimestampArgumentException($value);
                }
                break;
            default:
                throw new IllegalArgumentException("The type \"" . $type . "\" is not implemented");
        }
        return true;
    }

}
