<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Tests\Helper;

use WBW\Library\Image\Helper\ImageHelper;
use WBW\Library\Image\Model\Image;
use WBW\Library\Image\Tests\AbstractTestCase;
use WBW\Library\Image\Tests\Fixtures\TestFixtures;

/**
 * Image helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Image\Tests\Helper
 */
class ImageHelperTest extends AbstractTestCase {

    /**
     * Images.
     *
     * @var string[]
     */
    private $images;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the images mock.
        $this->images = TestFixtures::getImages();
    }

    /**
     * Tests newDimensions()
     *
     * @return void
     */
    public function testNewDimensions(): void {

        $hImage = new Image($this->images[1]); // Horizontal image
        $sImage = new Image($this->images[2]); // Square image
        $vImage = new Image($this->images[3]); // Vertical image

        $this->assertEquals([1920, 1037], ImageHelper::newDimensions($hImage, 2000, 1100));
        $this->assertEquals([1000, 540], ImageHelper::newDimensions($hImage, 1000, 900));

        $this->assertEquals([1600, 1600], ImageHelper::newDimensions($sImage, 1600, 1200));
        $this->assertEquals([1600, 1600], ImageHelper::newDimensions($sImage, 1200, 1600));

        $this->assertEquals([540, 1000], ImageHelper::newDimensions($vImage, 900, 1000));
    }

    /**
     * Tests newInputStream()
     *
     * @return void
     */
    public function testNewInputStream(): void {

        $jpg = new Image($this->images[0]);
        $png = new Image($this->images[1]);

        $this->assertNotNull(ImageHelper::newInputStream($jpg));
        $this->assertNotNull(ImageHelper::newInputStream($png));
    }

    /**
     * Tests newOutputStream()
     *
     * @return void
     */
    public function testNewOutputStream(): void {

        $jpg = new Image($this->images[0]);
        $png = new Image($this->images[1]);

        $this->assertNotNull(ImageHelper::newOutputStream($jpg, 1920, 1080));
        $this->assertNotNull(ImageHelper::newOutputStream($png, 1920, 1080));
    }

    /**
     * Tests saveOutputStream()
     *
     * @return void
     */
    public function testSaveOutputStream(): void {

        // Set a paths mock.
        $paths = [
            getcwd() . "/out.jpg",
            getcwd() . "/out.png",
        ];

        $jpg = new Image($this->images[0]);
        $png = new Image($this->images[1]);

        $outJpg = ImageHelper::newOutputStream($jpg, 100, 100);
        $this->assertTrue(ImageHelper::saveOutputStream($jpg, $outJpg, $paths[0]));

        $outPng = ImageHelper::newOutputStream($png, 100, 100);
        $this->assertTrue(ImageHelper::saveOutputStream($png, $outPng, $paths[1]));

        // Clean up
        foreach ($paths as $current) {
            if (true === file_exists($current)) {
                unlink($current);
            }
        }
    }
}
