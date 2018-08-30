<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\IO;

use Exception;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\IO\FileNotFoundException;
use WBW\Library\Core\IO\FileHelper;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * File utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\IO
 * @final
 */
final class FileHelperTest extends AbstractCoreFrameworkTestCase {

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
            getcwd() . "/tests.zip",
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
        $this->assertTrue(FileHelper::delete($this->filename));

        try {
            FileHelper::delete($this->filename);
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

        $this->assertEquals("99.00 B", FileHelper::formatSize(99));
        $this->assertEquals("1.00 KB", FileHelper::formatSize(1000));
        $this->assertEquals("1.00 MB", FileHelper::formatSize(1000000));
        $this->assertEquals("1.00 GB", FileHelper::formatSize(1000000000));
        $this->assertEquals("1.00 TB", FileHelper::formatSize(1000000000000));
        $this->assertEquals("1.00 PB", FileHelper::formatSize(1000000000000000));
        $this->assertEquals("1.00 EB", FileHelper::formatSize(1000000000000000000));
        $this->assertEquals("1.00 ZB", FileHelper::formatSize(1000000000000000000000));
        $this->assertEquals("1.00 YB", FileHelper::formatSize(1000000000000000000000000));

        $this->assertEquals("0.099 KB", FileHelper::formatSize(99, "KB", 3));
        $this->assertEquals("0.001 MB", FileHelper::formatSize(1000, "MB", 3));
        $this->assertEquals("0.001 GB", FileHelper::formatSize(1000000, "GB", 3));
        $this->assertEquals("0.001 TB", FileHelper::formatSize(1000000000, "TB", 3));
        $this->assertEquals("0.001 PB", FileHelper::formatSize(1000000000000, "PB", 3));
        $this->assertEquals("0.001 EB", FileHelper::formatSize(1000000000000000, "EB", 3));
        $this->assertEquals("0.001 ZB", FileHelper::formatSize(1000000000000000000, "ZB", 3));
        $this->assertEquals("0.001 YB", FileHelper::formatSize(1000000000000000000000, "YB", 3));

        try {
            FileHelper::formatSize(99, "exception");
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

        $filename = getcwd() . "/tests/IO/FileHelperTest.txt";

        $this->assertEquals("FileHelperTest", FileHelper::getContents($filename), 'The method getContents() does not return the expected content');

        try {
            FileHelper::getContents("exception");
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

        $pathname = getcwd() . "/tests/IO";

        $this->assertContains("FileHelperTest.php", FileHelper::getFilenames($pathname));
        $this->assertContains("FileHelperTest.txt", FileHelper::getFilenames($pathname, ".txt"));

        try {
            FileHelper::getFilenames("exception");
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

        $this->assertEquals(14, FileHelper::getSize(getcwd() . "/tests/IO/FileHelperTest.txt"));

        try {
            FileHelper::getSize("exception");
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
        $this->assertEquals($res, FileHelper::getUnits());
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

        $this->assertTrue(FileHelper::rename($oldname, $newname));

        try {
            FileHelper::rename($oldname, $newname);
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
            FileHelper::zip("exception", "exception.zip");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" is not found", $ex->getMessage());
        }

        $srcF = getcwd() . "/README.md";
        $dstF = getcwd() . "/README.md.zip";

        FileHelper::zip($srcF, $dstF);
        $this->assertFileExists($dstF);
        $this->assertGreaterThan(900, FileHelper::getSize($dstF));

        $srcD = getcwd() . "/tests";
        $dstD = getcwd() . "/tests.zip";

        FileHelper::zip($srcD, $dstD);
        $this->assertFileExists($dstD);
        $this->assertGreaterThan(38000, FileHelper::getSize($dstD));
    }

}
