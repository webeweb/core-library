<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility\IO;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\IO\FileNotFoundException;
use WBW\Library\Core\Utility\IO\FileUtility;

/**
 * File utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\IO
 * @final
 */
final class FileUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Filename.
     *
     * @var string
     */
    private $filename;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        $this->filename = getcwd() . "/phpunit.txt";

        fclose(fopen($this->filename, "w"));
    }

    /**
     * {@inheritdoc}
     */
    public static function tearDownAfterClass() {
        $filenames = [
            getcwd() . "/README.md.zip",
            getcwd() . "/Tests.zip",
            getcwd() . "/phpunit.txt",
            getcwd() . "/unittest.txt",
        ];
        foreach ($filenames as $current) {
            if (false === file_exists($current)) {
                continue;
            }
            unlink($current); // Remove files for local unit tests.
        }
    }

    /**
     * Tests the delete() method.
     *
     * @return void
     */
    public function testDelete() {

        $this->assertFileExists($this->filename);
        $this->assertTrue(FileUtility::delete($this->filename));

        try {
            FileUtility::delete($this->filename);
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"" . $this->filename . "\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the formatSize() method.
     *
     * @return void
     */
    public function testFormatSize() {

        $this->assertEquals("99.00 B", FileUtility::formatSize(99));
        $this->assertEquals("1.00 KB", FileUtility::formatSize(1000));
        $this->assertEquals("1.00 MB", FileUtility::formatSize(1000000));
        $this->assertEquals("1.00 GB", FileUtility::formatSize(1000000000));
        $this->assertEquals("1.00 TB", FileUtility::formatSize(1000000000000));
        $this->assertEquals("1.00 PB", FileUtility::formatSize(1000000000000000));
        $this->assertEquals("1.00 EB", FileUtility::formatSize(1000000000000000000));
        $this->assertEquals("1.00 ZB", FileUtility::formatSize(1000000000000000000000));
        $this->assertEquals("1.00 YB", FileUtility::formatSize(1000000000000000000000000));

        $this->assertEquals("0.099 KB", FileUtility::formatSize(99, "KB", 3));
        $this->assertEquals("0.001 MB", FileUtility::formatSize(1000, "MB", 3));
        $this->assertEquals("0.001 GB", FileUtility::formatSize(1000000, "GB", 3));
        $this->assertEquals("0.001 TB", FileUtility::formatSize(1000000000, "TB", 3));
        $this->assertEquals("0.001 PB", FileUtility::formatSize(1000000000000, "PB", 3));
        $this->assertEquals("0.001 EB", FileUtility::formatSize(1000000000000000, "EB", 3));
        $this->assertEquals("0.001 ZB", FileUtility::formatSize(1000000000000000000, "ZB", 3));
        $this->assertEquals("0.001 YB", FileUtility::formatSize(1000000000000000000000, "YB", 3));

        try {
            FileUtility::formatSize(99, "exception");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The unit \"exception\" does not exists", $ex->getMessage());
        }
    }

    /**
     * Tests the getContents() method.
     *
     * @return void
     */
    public function testGetContents() {

        $filename = getcwd() . "/Tests/Utility/IO/FileUtilityTest.txt";

        $this->assertEquals("FileUtilityTest", FileUtility::getContents($filename), 'The method getContents() does not return the expected content');

        try {
            FileUtility::getContents("exception");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the getFilenames() method.
     *
     * @return void
     */
    public function testGetFilenames() {

        $pathname = getcwd() . "/Tests/Utility/IO";

        $this->assertContains("FileUtilityTest.php", FileUtility::getFilenames($pathname));
        $this->assertContains("FileUtilityTest.txt", FileUtility::getFilenames($pathname, ".txt"));

        try {
            FileUtility::getFilenames("exception");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the getSize() method.
     *
     * @return void
     */
    public function testGetSize() {

        $this->assertEquals(15, FileUtility::getSize(getcwd() . "/Tests/Utility/IO/FileUtilityTest.txt"));

        try {
            FileUtility::getSize("exception");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the getUnits() method.
     *
     * @return void
     */
    public function testGetUnits() {

        $res = ["B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"];
        $this->assertEquals($res, FileUtility::getUnits());
    }

    /**
     * Tests the rename() method.
     *
     * @return void
     * @depends testDelete
     */
    public function testRename() {

        $oldname = $this->filename;
        $newname = getcwd() . "/unittest.txt";

        $this->assertTrue(FileUtility::rename($oldname, $newname));

        try {
            FileUtility::rename($oldname, $newname);
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"" . $oldname . "\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the zip() method.
     *
     * @return void
     */
    public function testZip() {

        try {
            FileUtility::zip("exception", "exception.zip");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" is not found", $ex->getMessage());
        }

        $srcF = getcwd() . "/README.md";
        $dstF = getcwd() . "/README.md.zip";

        FileUtility::zip($srcF, $dstF);
        $this->assertFileExists($dstF);
        $this->assertGreaterThan(900, FileUtility::getSize($dstF));

        $srcD = getcwd() . "/Tests";
        $dstD = getcwd() . "/Tests.zip";

        FileUtility::zip($srcD, $dstD);
        $this->assertFileExists($dstD);
        $this->assertGreaterThan(38000, FileUtility::getSize($dstD));
    }

}
