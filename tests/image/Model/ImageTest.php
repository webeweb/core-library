<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Tests\Model;

use Exception;
use InvalidArgumentException;
use WBW\Library\Image\Model\Image;
use WBW\Library\Image\Tests\AbstractTestCase;
use WBW\Library\Image\Tests\Fixtures\TestFixtures;

/**
 * Image test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Image\Tests\Model
 */
class ImageTest extends AbstractTestCase {

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
     * Tests the init() method.
     *
     * @return void
     */
    public function testInit(): void {

        $obj = new Image($this->images[1]);

        $obj->init();
        $this->assertEquals([1920, 1037], $obj->getDimensions());
        $this->assertEquals(realpath(__DIR__ . "/../Fixtures"), $obj->getDirectory());
        $this->assertEquals("png", $obj->getExtension());
        $this->assertEquals("TestImage_1920x1037.png", $obj->getFilename());
        $this->assertEquals(1037, $obj->getHeight());
        $this->assertEquals("image/png", $obj->getMimeType());
        $this->assertEquals(Image::ORIENTATION_HORIZONTAL, $obj->getOrientation());
        $this->assertEquals(127373, $obj->getSize());
        $this->assertEquals(1920, $obj->getWidth());
    }

    /**
     * Tests the resize() method.
     *
     * @return void
     */
    public function testResize(): void {

        // Set a pathname mock.
        $pathname = str_replace(".jpg", "_thumb.jpg", $this->images[0]);
        if (true === file_exists($pathname)) {
            unlink($pathname);
        }

        $obj = new Image($this->images[0]);

        $res = $obj->resize(1000, 500, $pathname);
        $this->assertTrue($res);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Image($this->images[0]);

        $this->assertEquals($this->images[0], $obj->getPathname());

        $this->assertEquals([null, null], $obj->getDimensions());
        $this->assertNull($obj->getDirectory());
        $this->assertNull($obj->getExtension());
        $this->assertNull($obj->getFilename());
        $this->assertNull($obj->getMimeType());
        $this->assertNull($obj->getOrientation());
        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getWidth());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructWithInvalidArgumentException(): void {

        // Set a pathname mock.
        $pathname = getcwd() . "/exception.txt";

        try {

            new Image($pathname);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The image \"{$pathname}\" was not found", $ex->getMessage());
        }
    }
}