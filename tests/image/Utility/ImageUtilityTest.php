<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Tests\Utility;

use WBW\Library\Image\Tests\AbstractTestCase;
use WBW\Library\Image\Utility\ImageUtility;

/**
 * Image utility test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Tests\Utility
 */
class ImageUtilityTest extends AbstractTestCase {

    /**
     * Tests getDimensions()
     *
     * @return void
     */
    public function testGetDimensions(): void {

        $this->assertNull(ImageUtility::getDimensions(null, null, null, null));
        $this->assertNull(ImageUtility::getDimensions(null, 1280, 1920, 1280));
        $this->assertNull(ImageUtility::getDimensions(1920, null, 1920, 1280));
        $this->assertNull(ImageUtility::getDimensions(1920, 1280, null, 1280));
        $this->assertNull(ImageUtility::getDimensions(1920, 1280, 1920, null));

        // Landscape
        $this->assertEquals([1920, 1280], ImageUtility::getDimensions(6000, 4000, 1920, 1280));
        $this->assertEquals([1920, 1280], ImageUtility::getDimensions(6000, 4000, 1280, 1920));
        $this->assertEquals([1920, 1280], ImageUtility::getDimensions(6000, 4000, 1920, 1920));

        $this->assertEquals([1920, 1280], ImageUtility::getDimensions(1920, 1280, 6000, 4000));
        $this->assertEquals([1920, 1280], ImageUtility::getDimensions(1920, 1280, 4000, 6000));
        $this->assertEquals([1920, 1280], ImageUtility::getDimensions(1920, 1280, 6000, 6000));

        // Portrait
        $this->assertEquals([1280, 1920], ImageUtility::getDimensions(4000, 6000, 1280, 1920));
        $this->assertEquals([1280, 1920], ImageUtility::getDimensions(4000, 6000, 1920, 1280));
        $this->assertEquals([1280, 1920], ImageUtility::getDimensions(4000, 6000, 1920, 1920));

        $this->assertEquals([1280, 1920], ImageUtility::getDimensions(1280, 1920, 4000, 6000));
        $this->assertEquals([1280, 1920], ImageUtility::getDimensions(1280, 1920, 6000, 4000));
        $this->assertEquals([1280, 1920], ImageUtility::getDimensions(1280, 1920, 6000, 6000));

        // Squarish
        $this->assertEquals([1920, 1920], ImageUtility::getDimensions(6000, 6000, 1920, 1280));
        $this->assertEquals([1920, 1920], ImageUtility::getDimensions(6000, 6000, 1280, 1920));
        $this->assertEquals([1920, 1920], ImageUtility::getDimensions(6000, 6000, 1920, 1920));

        $this->assertEquals([1920, 1920], ImageUtility::getDimensions(1920, 1920, 6000, 4000));
        $this->assertEquals([1920, 1920], ImageUtility::getDimensions(1920, 1920, 4000, 6000));
        $this->assertEquals([1920, 1920], ImageUtility::getDimensions(1920, 1920, 6000, 6000));
    }

    /**
     * Tests getOrientation()
     *
     * @return void
     */
    public function testGetOrientation(): void {

        $this->assertNull(ImageUtility::getOrientation(null, null));
        $this->assertNull(ImageUtility::getOrientation(null, 1280));
        $this->assertNull(ImageUtility::getOrientation(1920, null));

        $this->assertEquals(0, ImageUtility::getOrientation(1920, 1920));
        $this->assertEquals(1, ImageUtility::getOrientation(1920, 1280));
        $this->assertEquals(-1, ImageUtility::getOrientation(1280, 1920));
    }

    /**
     * Tests getRatio()
     *
     * @return void
     */
    public function testGetRatio(): void {

        $this->assertNull(ImageUtility::getRatio(null, null));
        $this->assertNull(ImageUtility::getRatio(null, 1280));
        $this->assertNull(ImageUtility::getRatio(1920, null));

        $this->assertEquals(1, ImageUtility::getRatio(1920, 1920));
        $this->assertEquals(1.5, ImageUtility::getRatio(1920, 1280));
        $this->assertEquals(0.6666666666666666, ImageUtility::getRatio(1280, 1920));
    }
}
