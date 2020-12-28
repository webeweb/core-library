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

use WBW\Library\Core\Argument\Exception\ObjectArgumentException;

/**
 * Object helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument\Helper
 */
class ObjectHelper {

    /**
     * Determines if a value is an object.
     *
     * @param mixed $value The value.
     * @return void
     * @throws ObjectArgumentException Throws an Object argument exception if the value is not of expected type.
     */
    public static function isObject($value): void {
        if (false === is_object($value)) {
            throw new ObjectArgumentException($value);
        }
    }
}
