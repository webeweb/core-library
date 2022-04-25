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

use WBW\Library\Image\Factory\ImageFactory;
use WBW\Library\Image\Helper\ImageHelper;
use WBW\Library\Image\Model\Image;
use WBW\Library\Image\Tests\AbstractTestCase;
use WBW\Library\Image\Tests\Fixtures\Helper\TestImageHelper;
use WBW\Library\Image\Tests\Fixtures\TestFixtures;

/**
 * Image helper test.
 *
 * @author webeweb <https://github.com/webeweb>
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

        // Set the Image mocks.
        $this->images = TestFixtures::getImages();
    }

    /**
     * Tests base64Encode()
     *
     * @return void
     */
    public function testBase64Encode(): void {

        // Set the mocks.
        $uri = realpath($this->images[0]);
        $url = "https://raw.githubusercontent.com/webeweb/core-library/master/tests/image/Fixtures/TestImage_1920x1037.jpg";

        $res = file_get_contents(__DIR__ . "/ImageHelperTest.testBase64Encode.txt");
        $this->assertEquals($res, ImageHelper::base64Encode($uri));
        $this->assertEquals($res, ImageHelper::base64Encode($url));

        $this->assertNull(ImageHelper::base64Encode(null));
    }

    /**
     * Tests resize()
     *
     * @return void
     */
    public function testResize(): void {

        // Set a pathname mock.
        $pathname = str_replace(".jpg", "_thumb.jpg", $this->images[0]);
        if (true === file_exists($pathname)) {
            unlink($pathname);
        }

        // Set an Image mock.
        $image = new Image($this->images[0]);

        $this->assertTrue(ImageHelper::resize($image, 1000, 500, $pathname));
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

        $outJpg = ImageFactory::newOutputStream($jpg, 100, 100);
        $this->assertTrue(TestImageHelper::saveOutputStream($jpg, $outJpg, $paths[0]));

        $outPng = ImageFactory::newOutputStream($png, 100, 100);
        $this->assertTrue(TestImageHelper::saveOutputStream($png, $outPng, $paths[1]));

        // Clean up
        foreach ($paths as $current) {
            if (true === file_exists($current)) {
                unlink($current);
            }
        }
    }
}
