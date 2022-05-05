<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Tests\Factory;

use WBW\Library\Image\Factory\ImageFactory;
use WBW\Library\Image\Model\Image;
use WBW\Library\Image\Tests\AbstractTestCase;
use WBW\Library\Image\Tests\Fixtures\TestFixtures;

/**
 * Image factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Tests\Factory
 */
class ImageFactoryTest extends AbstractTestCase {

    /**
     * Images.
     *
     * @var string[]
     */
    private $images;

    /**
     * {@inheritdoc}
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

        $hImage = new Image($this->images[1]); // Landscape image
        $sImage = new Image($this->images[2]); // Squarish image
        $vImage = new Image($this->images[3]); // Portrait image

        $this->assertEquals([1920, 1037], ImageFactory::newDimensions($hImage, 2000, 1100));
        $this->assertEquals([1000, 900], ImageFactory::newDimensions($hImage, 1000, 900));

        $this->assertEquals([1600, 1600], ImageFactory::newDimensions($sImage, 1600, 1200));
        $this->assertEquals([1600, 1600], ImageFactory::newDimensions($sImage, 1200, 1600));

        $this->assertEquals([900, 1000], ImageFactory::newDimensions($vImage, 900, 1000));
    }

    /**
     * Tests newInputStream()
     *
     * @return void
     */
    public function testNewInputStream(): void {

        $jpg = new Image($this->images[0]);
        $png = new Image($this->images[1]);

        $this->assertNotNull(ImageFactory::newInputStream($jpg));
        $this->assertNotNull(ImageFactory::newInputStream($png));
    }

    /**
     * Tests newOutputStream()
     *
     * @return void
     */
    public function testNewOutputStream(): void {

        $jpg = new Image($this->images[0]);
        $png = new Image($this->images[1]);

        $this->assertNotNull(ImageFactory::newOutputStream($jpg, 1920, 1080));
        $this->assertNotNull(ImageFactory::newOutputStream($png, 1920, 1080));
    }
}
