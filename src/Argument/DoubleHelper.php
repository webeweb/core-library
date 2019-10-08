<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use WBW\Library\Core\Exception\Argument\DoubleArgumentException;
use WBW\Library\Core\Exception\Argument\FloatArgumentException;

/**
 * Double helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class DoubleHelper {

    /**
     * Determines if a value is a double.
     *
     * @param mixed $value The value.
     * @return void
     * @throws DoubleArgumentException Throws a Double argument exception if the value is not of expected type.
     */
    public static function isDouble($value) {
        if (false === is_double($value)) {
            throw new DoubleArgumentException($value);
        }
    }

    /**
     * Parse a string.
     *
     * @param string $value The string value.
     * @return double Returns the double represented by the string value.
     * @throws DoubleArgumentException Throws a double argument exception if the string value does not represent a double.
     */
    public static function parseString($value) {
        try {
            return FloatHelper::parseString($value);
        } catch (FloatArgumentException $ex) {
            throw new DoubleArgumentException($value, $ex);
        }
    }
}
