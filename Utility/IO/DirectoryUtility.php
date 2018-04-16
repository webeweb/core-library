<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility\IO;

use WBW\Library\Core\Exception\IO\FileNotFoundException;

/**
 * Directory utility.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility\IO
 * @final
 */
final class DirectoryUtility {

    /**
     * Create a directory.
     *
     * @param string $dirname The directory name.
     * @param integer $mode The directory mode.
     * @param boolean $recursive Recursive ?
     * @return boolean Returns true in case of success, false otherwise or null if the directory exists.
     */
    public static function create($dirname, $mode = 0755, $recursive = false) {
        if (true === file_exists($dirname)) {
            return null;
        }
        return mkdir($dirname, $mode, $recursive);
    }

    /**
     * Delete a directory.
     *
     * @param string $dirname The directory name.
     * @return boolean Returns true in case of success, false otherwise or null if the directory can't be deleted.
     */
    public static function delete($dirname) {
        if (true !== self::isEmpty($dirname)) {
            return null;
        }
        return rmdir($dirname);
    }

    /**
     * Determines if a directory is empty.
     *
     * @param string $dirname The directory name.
     * @return boolean Returns true in case of success, false otherwise or null if the directory is not readable.
     */
    public static function isEmpty($dirname) {
        if (false === is_readable($dirname)) {
            return null;
        }
        return (count(scandir($dirname)) == 2);
    }

    /**
     * Rename a directory.
     *
     * @param string $oldDirname The old directory name.
     * @param string $newDirname The new directory name.
     * @return boolean Returns true in case of success, false otherwise or null if the new directory name already exists.
     * @throws FileNotFoundException Throws a file not found exception if the directory does not exists.
     * @see FileUtility
     */
    public static function rename($oldDirname, $newDirname) {
        return FileUtility::rename($oldDirname, $newDirname);
    }

}
