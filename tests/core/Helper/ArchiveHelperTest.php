<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Helper;

use InvalidArgumentException;
use Throwable;
use WBW\Library\Core\Helper\ArchiveHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Archive helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Helper
 */
class ArchiveHelperTest extends AbstractTestCase {

    /**
     * {@inheritDoc}
     */
    public static function tearDownAfterClass(): void {

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
     * Test zip()
     *
     * @return void
     */
    public function testZip(): void {

        $src = getcwd() . "/README.md";
        $dst = getcwd() . "/README.md.zip";

        ArchiveHelper::zip($src, $dst);
        $this->assertFileExists($dst);
        $this->assertGreaterThan(900, filesize($dst));
    }

    /**
     * Test zip()
     *
     * @return void
     */
    public function testZipWithDirectory(): void {

        $src = getcwd() . "/tests";
        $dst = getcwd() . "/tests.zip";

        ArchiveHelper::zip($src, $dst);
        $this->assertFileExists($dst);
        $this->assertGreaterThan(38000, filesize($dst));
    }

    /**
     * Test zip()
     *
     * @return void
     */
    public function testZipWithInvalidArgumentException(): void {

        try {

            ArchiveHelper::zip("exception", "exception.zip");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The file "exception" was not found', $ex->getMessage());
        }
    }
}
