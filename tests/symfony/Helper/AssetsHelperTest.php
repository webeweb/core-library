<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Helper;

use Exception;
use InvalidArgumentException;
use WBW\Library\Symfony\Helper\AssetsHelper;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Assets helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Helper
 */
class AssetsHelperTest extends AbstractTestCase {

    /**
     * Destination directory.
     *
     * @var string
     */
    private $dstDirectory;

    /**
     * Exception directory.
     *
     * @var string
     */
    private $exDirectory;

    /**
     * Source directory.
     *
     * @var string
     */
    private $srcDirectory;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the directories.
        $this->srcDirectory = realpath(__DIR__ . "/../Fixtures/Resources/assets");
        $this->dstDirectory = realpath(__DIR__ . "/../Fixtures/app/public");
        $this->exDirectory  = realpath(__DIR__ . "/../../../composer.json");
    }

    /**
     * Tests listAssets()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testListAssets(): void {

        $res = AssetsHelper::listAssets($this->srcDirectory);
        $this->assertCount(1, $res);

        $this->assertRegExp("/php\.zip$/", $res[0]);
    }

    /**
     * Tests listAssets()
     *
     * @return void
     */
    public function testListAssetsWithInvalidArgumentException(): void {

        try {

            AssetsHelper::listAssets($this->exDirectory);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('"' . $this->exDirectory . '" is not a directory', $ex->getMessage());
        }
    }

    /**
     * Tests unzipAssets()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testUnzipAssets(): void {

        $res = AssetsHelper::unzipAssets($this->srcDirectory, $this->dstDirectory);
        $this->assertCount(1, $res);

        foreach ($res as $k => $v) {
            $this->assertDirectoryExists(str_replace([$this->srcDirectory, ".zip"], [$this->dstDirectory, ""], $k));
            $this->assertTrue($v);
        }
    }

    /**
     * Tests unzipAssets()
     *
     * @return void
     */
    public function testUnzipAssetsWithInvalidArgumentException(): void {

        try {

            AssetsHelper::unzipAssets($this->srcDirectory, $this->exDirectory);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('"' . $this->exDirectory . '" is not a directory', $ex->getMessage());
        }
    }
}
