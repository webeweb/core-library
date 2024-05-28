<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Utility;

use InvalidArgumentException;
use Throwable;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Utility\ArchiveUtility;

/**
 * Archive utility test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Utility
 */
class ArchiveUtilityTest extends AbstractTestCase {

    /**
     * {@inheritDoc}
     */
    public static function tearDownAfterClass(): void {

        $filenames = [
            __DIR__ . "/../../README.md.zip",
            __DIR__ . "/../../var/tests.zip",
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

        $src = __DIR__ . "/../../README.md";
        $dst = __DIR__ . "/../../var/README.md.zip";

        ArchiveUtility::zip($src, $dst);
        $this->assertFileExists($dst);
        $this->assertGreaterThan(900, filesize($dst));
    }

    /**
     * Test zip()
     *
     * @return void
     */
    public function testZipWithDirectory(): void {

        $src = __DIR__ . "/../../tests";
        $dst = __DIR__ . "/../../var/tests.zip";

        ArchiveUtility::zip($src, $dst);
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
            ArchiveUtility::zip("exception", "exception.zip");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The file "exception" was not found', $ex->getMessage());
        }
    }
}
