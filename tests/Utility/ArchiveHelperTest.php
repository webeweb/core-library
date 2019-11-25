<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use Exception;
use InvalidArgumentException;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Utility\ArchiveHelper;

/**
 * Archive helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 */
class ArchiveHelperTest extends AbstractTestCase {

    /**
     * {@inheritdoc}
     */
    public static function tearDownAfterClass() {

        $filenames = [
            getcwd() . "/README.md.zip",
            getcwd() . "/tests.zip",
        ];

        foreach ($filenames as $current) {
            if (false === file_exists($current)) {
                continue;
            }
            unlink($current); // Remove files for local unit tests.
        }
    }

    /**
     * Tests the zip() method.
     *
     * @return void
     */
    public function testZip() {

        $src = getcwd() . "/README.md";
        $dst = getcwd() . "/README.md.zip";

        ArchiveHelper::zip($src, $dst);
        $this->assertFileExists($dst);
        $this->assertGreaterThan(900, filesize($dst));
    }

    /**
     * Tests the zip() method.
     *
     * @return void
     */
    public function testZipWithDirectory() {

        $src = getcwd() . "/tests";
        $dst = getcwd() . "/tests.zip";

        ArchiveHelper::zip($src, $dst);
        $this->assertFileExists($dst);
        $this->assertGreaterThan(38000, filesize($dst));
    }

    /**
     * Tests the zip() method.
     *
     * @return void
     */
    public function testZipWithInvalidArgumentException() {

        try {

            ArchiveHelper::zip("exception", "exception.zip");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The file \"exception\" was not found", $ex->getMessage());
        }
    }
}
