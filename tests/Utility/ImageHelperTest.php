<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\TestFixtures;
use WBW\Library\Core\Utility\Image;
use WBW\Library\Core\Utility\ImageHelper;

/**
 * Image helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
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
    protected function setUp() {
        parent::setUp();

        // Set the images mock.
        $this->images = TestFixtures::getImages();
    }

    /**
     * Tests the newDimensions() method.
     *
     * @return void
     */
    public function testNewDimensions() {

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
     * Tests the newInputStream() method.
     *
     * @return void
     */
    public function testNewInputStream() {

        $jpg = new Image($this->images[0]);
        $png = new Image($this->images[1]);

        $this->assertNotNull(ImageHelper::newInputStream($jpg));
        $this->assertNotNull(ImageHelper::newInputStream($png));
    }

    /**
     * Tests the newOutputStream() method.
     *
     * @return void
     */
    public function testNewOutputStream() {

        $jpg = new Image($this->images[0]);
        $png = new Image($this->images[1]);

        $this->assertNotNull(ImageHelper::newOutputStream($jpg, 1920, 1080));
        $this->assertNotNull(ImageHelper::newOutputStream($png, 1920, 1080));
    }

    /**
     * Tests the saveOutputStream() method.
     *
     * @return void
     */
    public function testSaveOutputStream() {

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
