<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\FileSystem;

use Exception;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\FileSystem\FileNotFoundException;
use WBW\Library\Core\Exception\FileSystem\IOException;
use WBW\Library\Core\FileSystem\FileHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * File helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\IO
 */
class FileHelperTest extends AbstractTestCase {

    /**
     * {@inheritdoc}
     */
    public static function tearDownAfterClass() {

        // Initialize the filenames.
        $filenames = [
            getcwd() . "/FileHelper.appendTo.txt",
            getcwd() . "/README.md.zip",
            getcwd() . "/tests.zip",
            getcwd() . "/phpunit.txt",
            getcwd() . "/unittest.txt",
        ];

        // Handle each filename.
        foreach ($filenames as $current) {
            if (false === file_exists($current)) {
                continue;
            }
            unlink($current); // Remove files for local unit tests.
        }
    }

    /**
     * Tests the appendTo() method.
     *
     * @return void
     */
    public function testAppendTo() {

        // Initialize the filenames.
        $src = getcwd() . "/README.md";
        $dst = getcwd() . "/FileHelper.appendTo.txt";

        FileHelper::appendTo($src, $dst, true);
        $this->assertFileExists($dst);
        $this->assertRegExp("/^.*details\.\n\n$/s", file_get_contents($dst));
    }

    /**
     * Tests the appendTo() method.
     *
     * @return void
     */
    public function testAppendToWithFileNotFoundException() {

        // Initialize the filenames.
        $src = getcwd() . "FileNotFoundException";
        $dst = getcwd() . "/FileHelper.appendTo.txt";

        try {

            FileHelper::appendTo($src, $dst);
        } catch (Exception $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertRegExp("/The file \"(.*)FileNotFoundException\" is not found/", $ex->getMessage());
        }
    }

    /**
     * Tests the appendTo() method.
     *
     * @return void
     */
    public function testAppendToWithIOException() {

        // Initialize the filenames.
        $src = getcwd() . "/README.md";
        $dst = getcwd() . "/DirectoryNotFound/FileHelper.appendTo.txt";

        try {

            FileHelper::appendTo($src, $dst);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IOException::class, $ex);
            $this->assertRegExp("/Failed to open \"(.*)FileHelper.appendTo.txt\"/", $ex->getMessage());
        }
    }

    /**
     * Tests the delete() method.
     *
     * @return void
     */
    public function testDelete() {

        $filename = getcwd() . "/phpunit.txt";

        fclose(fopen($filename, "w"));
        $this->assertTrue(FileHelper::delete($filename));
    }

    /**
     * Tests the delete() method.
     *
     * @return void
     * @depends testDelete
     */
    public function testDeleteWithFileNotFoundException() {

        $filename = getcwd() . "/phpunit.txt";

        try {

            FileHelper::delete($filename);
        } catch (Exception $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"" . $filename . "\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the formatSize() method.
     *
     * @return void
     */
    public function testFormatSize() {

        // ===
        $this->assertEquals("99.00 B", FileHelper::formatSize(99));
        $this->assertEquals("1.00 KB", FileHelper::formatSize(1000));
        $this->assertEquals("1.00 MB", FileHelper::formatSize(1000000));
        $this->assertEquals("1.00 GB", FileHelper::formatSize(1000000000));
        $this->assertEquals("1.00 TB", FileHelper::formatSize(1000000000000));
        $this->assertEquals("1.00 PB", FileHelper::formatSize(1000000000000000));
        $this->assertEquals("1.00 EB", FileHelper::formatSize(1000000000000000000));
        $this->assertEquals("1.00 ZB", FileHelper::formatSize(1000000000000000000000));
        $this->assertEquals("1.00 YB", FileHelper::formatSize(1000000000000000000000000));

        // ===
        $this->assertEquals("0.099 KB", FileHelper::formatSize(99, "KB", 3));
        $this->assertEquals("0.001 MB", FileHelper::formatSize(1000, "MB", 3));
        $this->assertEquals("0.001 GB", FileHelper::formatSize(1000000, "GB", 3));
        $this->assertEquals("0.001 TB", FileHelper::formatSize(1000000000, "TB", 3));
        $this->assertEquals("0.001 PB", FileHelper::formatSize(1000000000000, "PB", 3));
        $this->assertEquals("0.001 EB", FileHelper::formatSize(1000000000000000, "EB", 3));
        $this->assertEquals("0.001 ZB", FileHelper::formatSize(1000000000000000000, "ZB", 3));
        $this->assertEquals("0.001 YB", FileHelper::formatSize(1000000000000000000000, "YB", 3));
    }

    /**
     * Tests the formatSize() method.
     *
     * @return void
     */
    public function testFormatSizeWithFileNotFoundException() {

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

        $filename = getcwd() . "/tests/FileSystem/FileHelperTest.txt";

        $this->assertEquals("FileHelperTest", FileHelper::getContents($filename), 'The method getContents() does not return the expected content');
    }

    /**
     * Tests the getContents() method.
     *
     * @return void
     */
    public function testGetContentsWithFileNotFoundException() {

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

        $pathname = getcwd() . "/tests/FileSystem";

        $this->assertContains("FileHelperTest.php", FileHelper::getFilenames($pathname));
        $this->assertContains("FileHelperTest.txt", FileHelper::getFilenames($pathname, ".txt"));
    }

    /**
     * Tests the getFilenames() method.
     *
     * @return void
     */
    public function testGetFilenamesWithFileNotFoundException() {

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

        $this->assertEquals(14, FileHelper::getSize(getcwd() . "/tests/FileSystem/FileHelperTest.txt"));
    }

    /**
     * Tests the getSize() method.
     *
     * @return void
     */
    public function testGetSizeWithFileNotFoundException() {

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

        $oldname = getcwd() . "/phpunit.txt";
        $newname = getcwd() . "/unittest.txt";

        fclose(fopen($oldname, "w"));
        $this->assertTrue(FileHelper::rename($oldname, $newname));
    }

    /**
     * Tests the rename() method.
     *
     * @return void
     * @depends testRename
     */
    public function testRenameWithFileNotFoundException() {

        $oldname = getcwd() . "/phpunit.txt";
        $newname = getcwd() . "/unittest.txt";

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

        // ===
        $srcF = getcwd() . "/README.md";
        $dstF = getcwd() . "/README.md.zip";

        FileHelper::zip($srcF, $dstF);
        $this->assertFileExists($dstF);
        $this->assertGreaterThan(900, FileHelper::getSize($dstF));

        // ===
        $srcD = getcwd() . "/tests";
        $dstD = getcwd() . "/tests.zip";

        FileHelper::zip($srcD, $dstD);
        $this->assertFileExists($dstD);
        $this->assertGreaterThan(38000, FileHelper::getSize($dstD));
    }

    /**
     * Tests the zip() method.
     *
     * @return void
     */
    public function testZipWithFileNotFoundException() {

        try {

            FileHelper::zip("exception", "exception.zip");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" is not found", $ex->getMessage());
        }
    }
}
