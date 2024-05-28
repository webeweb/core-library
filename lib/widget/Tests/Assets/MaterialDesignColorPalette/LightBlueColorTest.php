<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette;

use JsonSerializable;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\LightBlueColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\LightBlueColorInterface;
use WBW\Library\Widget\Component\Color\LightBlueColorInterface as BaseLightBlueColorInterface;
use WBW\Library\Widget\Component\ColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Light blue color test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette
 */
class LightBlueColorTest extends AbstractTestCase {

    /**
     * Test getValues()
     *
     * @return void
     */
    public function testGetValues(): void {

        $obj = new LightBlueColor();

        $res = $obj->getValues();
        $this->assertCount(12, $res);

        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_50, $res[ColorInterface::COLOR_VALUE_50]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_100, $res[ColorInterface::COLOR_VALUE_100]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_200, $res[ColorInterface::COLOR_VALUE_200]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_300, $res[ColorInterface::COLOR_VALUE_300]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_400, $res[ColorInterface::COLOR_VALUE_400]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_500, $res[ColorInterface::COLOR_VALUE_500]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_500, $res[ColorInterface::COLOR_VALUE_500]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_600, $res[ColorInterface::COLOR_VALUE_600]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_700, $res[ColorInterface::COLOR_VALUE_700]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_A100, $res[ColorInterface::COLOR_VALUE_A100]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_A200, $res[ColorInterface::COLOR_VALUE_A200]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_A400, $res[ColorInterface::COLOR_VALUE_A400]);
        $this->assertEquals(LightBlueColorInterface::LIGHT_BLUE_COLOR_VALUE_A700, $res[ColorInterface::COLOR_VALUE_A700]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LightBlueColor();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ColorInterface::class, $obj);
        $this->assertInstanceOf(LightBlueColorInterface::class, $obj);

        $this->assertEquals(BaseLightBlueColorInterface::LIGHT_BLUE_COLOR_NAME, $obj->getName());
    }
}
