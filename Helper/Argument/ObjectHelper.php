<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Helper\Argument;

use WBW\Library\Core\Exception\Argument\ObjectArgumentException;

/**
 * Object helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Helper\Argument
 */
class ObjectHelper {

    /**
     * Determines if a value is an object.
     *
     * @param mixed $value The value.
     * @throws ObjectArgumentException Throws an Object argument exception if the value is not of expected type.
     */
    public static function isObject($value) {
        if (false === is_object($value)) {
            throw new ObjectArgumentException($value);
        }
    }

}
