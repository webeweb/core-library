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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 * @final
 */
final class ArgumentValidator implements ArgumentInterface {

    /**
     * Determines if a value is an array.
     *
     * @param mixed $value The value.
     * @throws ArrayArgumentException Throws an Array argument exception if the value is not of expected type.
     */
    private static function isArray($value) {
        if (false === is_array($value)) {
            throw new ArrayArgumentException($value);
        }
    }

    /**
     * Determines if a value is a boolean.
     *
     * @param mixed $value The value.
     * @throws BooleanArgumentException Throws a Boolean argument exception if the value is not of expected type.
     */
    private static function isBoolean($value) {
        if (false === is_bool($value)) {
            throw new BooleanArgumentException($value);
        }
    }

    /**
     * Determines if a value is a date.
     *
     * @param mixed $value The value.
     * @throws DateArgumentException Throws a Date argument exception if the value is not of expected type.
     */
    private static function isDate($value) {
        if (false === strtotime($value)) {
            throw new DateArgumentException($value);
        }
    }

    /**
     * Determines if a value is a double.
     *
     * @param mixed $value The value.
     * @throws DoubleArgumentException Throws a Double argument exception if the value is not of expected type.
     */
    private static function isDouble($value) {
        if (false === is_double($value)) {
            throw new DoubleArgumentException($value);
        }
    }

    /**
     * Determines if a value is a float.
     *
     * @param mixed $value The value.
     * @throws FloatArgumentException Throws a Float argument exception if the value is not of expected type.
     */
    private static function isFloat($value) {
        if (false === is_float($value)) {
            throw new FloatArgumentException($value);
        }
    }

    /**
     * Determines if a value is an integer.
     *
     * @param mixed $value The value.
     * @throws IntegerArgumentException Throws a Integer argument exception if the value is not of expected type.
     */
    private static function isInteger($value) {
        if (false === is_integer($value)) {
            throw new IntegerArgumentException($value);
        }
    }

    /**
     * Determines if a value is a number.
     *
     * @param mixed $value The value.
     * @throws NumberArgumentException Throws a Number argument exception if the value is not of expected type.
     */
    private static function isNumber($value) {
        if (false === is_numeric($value)) {
            throw new NumberArgumentException($value);
        }
    }

    /**
     * Determines if a value is an object.
     *
     * @param mixed $value The value.
     * @throws ObjectArgumentException Throws an Object argument exception if the value is not of expected type.
     */
    private static function isObject($value) {
        if (false === is_object($value)) {
            throw new ObjectArgumentException($value);
        }
    }

    /**
     * Determines if a value is a resource.
     *
     * @param mixed $value The value.
     * @throws ResourceArgumentException Throws a Resource argument exception if the value is not of expected type.
     */
    private static function isResource($value) {
        if (false === is_resource($value)) {
            throw new ResourceArgumentException($value);
        }
    }

    /**
     * Determines if a value is a string.
     *
     * @param mixed $value The value.
     * @throws StringArgumentException Throws a String argument exception if the value is not of expected type.
     */
    private static function isString($value) {
        if (false === is_string($value)) {
            throw new StringArgumentException($value);
        }
    }

    /**
     * Determines if a value is a timestamp.
     *
     * @param mixed $value The value.
     * @throws TimestampArgumentException Throws a Timestamp argument exception if the value is not of expected type.
     */
    private static function isTimestamp($value) {
        if (false === strtotime($value)) {
            throw new TimestampArgumentException($value);
        }
    }

    /**
     * Determines if the $value is of type $type.
     *
     * @param mixed $value The value.
     * @param integer $type The type.
     * @throws IllegalArgumentException Throws an illegal argument exception if the value is not of expected type.
     */
    public static function isTypeOf($value, $type) {
        switch ($type) {
            case self::TYPE_ARRAY:
                self::isArray($value);
                break;
            case self::TYPE_BOOLEAN:
                self::isBoolean($value);
                break;
            case self::TYPE_DATE:
                self::isDate($value);
                break;
            case self::TYPE_DOUBLE:
                self::isDouble($value);
                break;
            case self::TYPE_FLOAT:
                self::isFloat($value);
                break;
            case self::TYPE_INTEGER:
                self::isInteger($value);
                break;
            case self::TYPE_NUMBER:
                self::isNumber($value);
                break;
            case self::TYPE_OBJECT:
                self::isObject($value);
                break;
            case self::TYPE_RESOURCE:
                self::isResource($value);
                break;
            case self::TYPE_STRING:
                self::isString($value);
                break;
            case self::TYPE_TIMESTAMP:
                self::isTimestamp($value);
                break;
            default:
                throw new IllegalArgumentException("The type \"" . $type . "\" is not implemented");
        }
        return true;
    }

}
