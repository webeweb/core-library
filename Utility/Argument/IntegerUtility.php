<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility\Argument;

use WBW\Library\Core\Exception\Argument\IntegerArgumentException;

/**
 * Integer utility.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility\Argument
 * @final
 */
final class IntegerUtility {

    /**
     * Parse a boolean.
     *
     * @param boolean $value The boolean value.
     * @return integer Returns 1 in case of success, 0 otherwise.
     */
    public static function parseBoolean($value) {
        return $value === true ? 1 : 0;
    }

    /**
     * Parse a string.
     *
     * @param string $value The string value.
     * @return integer Returns the integer represented by the string value..
     * @throws IntegerArgumentException Throws an integer argument exception if the string value does not represent an integer.
     */
    public static function parseString($value) {
        if (null === $value) {
            return null;
        }
        if (0 === preg_match("/^[0-9]{1,}$/", $value)) {
            throw new IntegerArgumentException($value);
        }
        return intval($value);
    }

}
