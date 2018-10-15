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

use WBW\Library\Core\Exception\Argument\BooleanArgumentException;

/**
 * Boolean helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class BooleanHelper {

    /**
     * Determines if a value is a boolean.
     *
     * @param mixed $value The value.
     * @return void
     * @throws BooleanArgumentException Throws a Boolean argument exception if the value is not of expected type.
     */
    public static function isBoolean($value) {
        if (false === is_bool($value)) {
            throw new BooleanArgumentException($value);
        }
    }

    /**
     * Parse a string.
     *
     * @param string $value The string value.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function parseString($value) {
        if (null === $value) {
            return false;
        }
        switch (strtolower($value)) {
            case "1":
            case "o":
            case "ok":
            case "oui":
            case "true":
            case "y":
            case "yes":
                return true;
        }
        return false;
    }

}
