<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Helper;

/**
 * Operating System helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Helper
 */
class OSHelper {

    /**
     * Determines if the operating system is Linux.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isLinux(): bool {
        return !static::isWindows();
    }

    /**
     * Determines if the operating system is Windows.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isWindows(): bool {
        return "\\" === DIRECTORY_SEPARATOR;
    }
}
