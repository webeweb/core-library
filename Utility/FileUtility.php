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

use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Directory\DirectoryNotFoundException;
use WBW\Library\Core\Exception\File\FileNotFoundException;
use WBW\Library\Core\File\FileSizeInterface;

/**
 * File utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class FileUtility implements FileSizeInterface {

	/**
	 * Format a size.
	 *
	 * @param  $size The size.
	 * @param string $unit The unit.
	 * @return string Returns the formated size.
	 */
	public static function formatSize($size, $unit = null, $decimals = 2) {


		// Initialize the units.
		$units = self::getUnits();

		// Find the unit.
		$index = array_search($unit, $units);
		if (is_null($unit) === false && $index === false) {
			throw new IllegalArgumentException("The unit \"" . $unit . "\" does not exists");
		}

		// Initialize the output.
		$output = $size;

		$iteration = 0;
		while (1000 <= $output || $iteration < $index) {
			$output /= 1000;
			++$iteration;
		}

		// Return the output.
		return implode(" ", [sprintf("%." . $decimals . "f", $output), $units[$iteration]]);
	}

	/**
	 * Get a file contents.
	 *
	 * @param string $filename The filename.
	 * @return string Returns the file contents.
	 * @throws FileNotFoundException Throws a file not found exception if the file does not exists.
	 */
	public static function getContents($filename) {
		if (!file_exists($filename)) {
			throw new FileNotFoundException($filename);
		}
		return file_get_contents($filename);
	}

	/**
	 * Get the filenames.
	 *
	 * @param string $pathname The pathname.
	 * @param string $extension The file extension.
	 * @return array Returns the filenames.
	 * @throws DirectoryNotFoundException Throws a directory not found exception if the directory does not exists.
	 */
	public static function getFilenames($pathname, $extension = null) {

		// Check if the directory exists.
		if (!file_exists($pathname)) {
			throw new DirectoryNotFoundException($pathname);
		}

		// Initialize the filenames.
		$filenames = [];

		// Open the directory.
		if (($directory = opendir($pathname)) !== false) {

			// Initialize the offset.
			$offset = strlen($extension);

			// Read the directory.
			while (($file = readdir($directory)) !== false) {

				// Determines if the file should be added.
				if ($file !== "." && $file !== ".." && ((is_null($extension)) || substr_compare($file, $extension, -$offset) === 0)) {
					$filenames[] = $file;
				}
			}

			// Close the directory.
			closedir($directory);
		}

		// Return the filenames.
		return $filenames;
	}

	/**
	 * Get a file size.
	 *
	 * @param string $filename The filename.
	 * @return integer Returns the file size.
	 * @throws FileNotFoundException Throws a File not found exception if the file does not exists.
	 */
	public static function getSize($filename) {
		if (file_exists($filename) === false) {
			throw new FileNotFoundException($filename);
		}
		clearstatcache();
		return filesize($filename);
	}

	/**
	 * Get the units.
	 *
	 * @return array Returns the units.
	 */
	public static function getUnits() {
		return [
			self::FILE_SIZE_UNIT_B,
			self::FILE_SIZE_UNIT_KB,
			self::FILE_SIZE_UNIT_MB,
			self::FILE_SIZE_UNIT_GB,
			self::FILE_SIZE_UNIT_TB,
			self::FILE_SIZE_UNIT_PB,
			self::FILE_SIZE_UNIT_EB,
			self::FILE_SIZE_UNIT_ZB,
			self::FILE_SIZE_UNIT_YB,
		];
	}

}
