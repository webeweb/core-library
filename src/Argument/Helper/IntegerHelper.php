<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument\Helper;

use WBW\Library\Core\Argument\Exception\IntegerArgumentException;

/**
 * Integer helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument\Helper
 */
class IntegerHelper {

    /**
     * Determines if a value is an integer.
     *
     * @param mixed $value The value.
     * @return void
     * @throws IntegerArgumentException Throws a Integer argument exception if the value is not of expected type.
     */
    public static function isInteger($value) {
        if (false === is_integer($value)) {
            throw new IntegerArgumentException($value);
        }
    }

    /**
     * Parse a boolean.
     *
     * @param bool $value The boolean value.
     * @return int Returns 1 in case of success, 0 otherwise.
     */
    public static function parseBoolean($value) {
        return $value === true ? 1 : 0;
    }

    /**
     * Parse a string.
     *
     * @param string $value The string value.
     * @return int Returns the integer represented by the string value..
     * @throws IntegerArgumentException Throws an integer argument exception if the string value does not represent an integer.
     */
    public static function parseString($value) {
        if (null === $value) {
            return null;
        }
        if (0 === preg_match("/^-?[0-9]+$/", $value)) {
            throw new IntegerArgumentException($value);
        }
        return intval($value);
    }
}
