<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

use WBW\Library\Core\Exception\Directory\DirectoryNotFoundException;
use WBW\Library\Core\Exception\File\FileNotFoundException;

/**
 * File utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class FileUtility {

    /**
     * Constructor.
     */
    private function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get a file contents.
     *
     * @param string $filename The filename.
     * @return string Returns the file contents.
     * @throws FileNotFoundException Throws a file not found exception if the file does not exists.
     */
    public static function getContents($filename) {
        if (file_exists($filename)) {
            return file_get_contents($filename);
        } else {
            throw new FileNotFoundException($filename);
        }
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

        // Initialize the filenames.
        $filenames = [];

        // Check if the directory exists.
        if (!file_exists($pathname)) {
            throw new DirectoryNotFoundException($pathname);
        }

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

}
