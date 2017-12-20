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
 * Directory utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class DirectoryUtility {

	/**
	 * Create a directory.
	 *
	 * @param string $dirname The directory name.
	 * @return boolean Returns true in case of success, false otherwise or null if the directory exists.
	 */
	public static function create($dirname) {
		if (file_exists($dirname) === true) {
			return null;
		}
		return mkdir($dirname);
	}

	/**
	 * Delete a directory.
	 *
	 * @param string $dirname The directory name.
	 * @return boolean Returns true in case of success, false otherwise or null if the directory can't be deleted.
	 */
	public static function delete($dirname) {
		if (self::isEmpty($dirname) !== true) {
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
		if (is_readable($dirname) === false) {
			return null;
		}
		return (count(scandir($dirname)) == 2);
	}

	/**
	 * Rename a directory.
	 *
	 * @param string $oldname The old directory name.
	 * @param string $newname The new directory name.
	 * @return boolean Returns true in case of success, false otherwise or null if the directory can't be renamed.
	 */
	public static function rename($oldname, $newname) {
		if (file_exists($oldname) === false || file_exists($newname) === true) {
			return null;
		}
		return rename($oldname, $newname);
	}

}
