<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Directory\DirectoryNotFoundException;
use WBW\Library\Core\Exception\File\FileNotFoundException;
use WBW\Library\Core\Utility\FileUtility;

/**
 * File utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class FileUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the getContents() method.
     *
     * @return void
     */
    public function testGetContents() {

        $filename = getcwd() . "/Tests/Utility/FileUtilityTest.txt";

        $this->assertEquals("FileUtilityTest", FileUtility::getContents($filename), 'The method getContents() does not return the expected content');

        try {
            FileUtility::getContents("FileNotFoundException");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex, "The method getContents() does not return the expected exception");
            $this->assertEquals("The file \"FileNotFoundException\" is not found", $ex->getMessage(), "The method getMessage() does not return the expected string");
        }
    }

    /**
     * Test the getFilenames() method.
     *
     * @return void
     */
    public function testGetFilenames() {

        $pathname = getcwd() . "/Tests/Utility";

        $this->assertContains("FileUtilityTest.php", FileUtility::getFilenames($pathname), "The method getFilenames() does not return the expected filenames");
        $this->assertEquals(["FileUtilityTest.txt"], FileUtility::getFilenames($pathname, ".txt"), "The method getFilenames() does not return the expected filenames with extension");

        try {
            FileUtility::getFilenames("DirectoryNotFoundException");
        } catch (Exception $ex) {
            $this->assertInstanceOf(DirectoryNotFoundException::class, $ex, "The method getFilenames() does not return the expected exception");
            $this->assertEquals("The directory \"DirectoryNotFoundException\" is not found", $ex->getMessage(), "The method getMessage() does not return the expected string");
        }
    }

}
