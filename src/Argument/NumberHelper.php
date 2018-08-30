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

use WBW\Library\Core\Exception\Argument\NumberArgumentException;

/**
 * Number helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class NumberHelper {

    /**
     * Determines if a value is a number.
     *
     * @param mixed $value The value.
     * @throws NumberArgumentException Throws a Number argument exception if the value is not of expected type.
     */
    public static function isNumber($value) {
        if (false === is_numeric($value)) {
            throw new NumberArgumentException($value);
        }
    }

}
