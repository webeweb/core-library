<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

/**
 * Array utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class ArrayUtility {

    /**
     * Get a value.
     *
     * @param array $array The array.
     * @param mixed $key The key.
     * @param mixed $default The default value.
     * @return mixed Returns the value in case of success, $default otherwise.
     */
    public static function get(array $array, $key, $default = null) {
        return true === array_key_exists($key, $array) ? $array[$key] : $default;
    }

}
