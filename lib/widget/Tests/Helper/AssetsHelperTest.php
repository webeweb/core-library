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

namespace WBW\Library\Widget\Tests\Helper;

use InvalidArgumentException;
use Throwable;
use WBW\Library\Widget\Helper\AssetsHelper;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Assets helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Helper
 */
class AssetsHelperTest extends AbstractTestCase {

    /**
     * Destination directory.
     *
     * @var string|null
     */
    private $dstDirectory;

    /**
     * Not directory.
     *
     * @var string|null
     */
    private $notDirectory;

    /**
     * Source directory.
     *
     * @var string|null
     */
    private $srcDirectory;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the directories.
        $this->srcDirectory = realpath(__DIR__ . "/../Fixtures/Helper");
        $this->dstDirectory = realpath(__DIR__ . "/../../../../var");
        $this->notDirectory = realpath(__DIR__ . "/../../../../composer.json");
    }

    /**
     * Test listAssets()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testListAssets(): void {

        $res = AssetsHelper::listAssets($this->srcDirectory);
        $this->assertCount(1, $res);

        $this->assertRegExp("/AssetsHelper\.unzipAssets\.zip$/", $res[0]);
    }

    /**
     * Test listAssets()
     *
     * @return void
     */
    public function testListAssetsWithInvalidArgumentException(): void {

        try {

            AssetsHelper::listAssets($this->notDirectory);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('"' . $this->notDirectory . '" is not a directory', $ex->getMessage());
        }
    }

    /**
     * Test unzipAssets()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testUnzipAssets(): void {

        $res = AssetsHelper::unzipAssets($this->srcDirectory, $this->dstDirectory);
        $this->assertCount(1, $res);

        foreach ($res as $k => $v) {
            $this->assertDirectoryExists("$this->dstDirectory/assets", $k);
            $this->assertTrue($v);
        }
    }

    /**
     * Test unzipAssets()
     *
     * @return void
     */
    public function testUnzipAssetsWithInvalidArgumentException(): void {

        try {

            AssetsHelper::unzipAssets($this->srcDirectory, $this->notDirectory);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('"' . $this->notDirectory . '" is not a directory', $ex->getMessage());
        }
    }
}
