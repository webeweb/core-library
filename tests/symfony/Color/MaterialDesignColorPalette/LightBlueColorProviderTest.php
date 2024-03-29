<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Color\MaterialDesignColorPalette;

use JsonSerializable;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPaletteInterface;
use WBW\Library\Symfony\Provider\Color\LightBlueColorProviderInterface;
use WBW\Library\Symfony\Provider\ColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Light blue color provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Color\MaterialDesignColorPalette
 */
class LightBlueColorProviderTest extends AbstractTestCase {

    /**
     * Test getColors()
     *
     * @return void
     */
    public function testGetColors(): void {

        $obj = new LightBlueColorProvider();

        $res = $obj->getColors();
        $this->assertCount(12, $res);

        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_50, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_100, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_200, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_300, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_400, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_500, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_600, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_700, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_A100, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_A200, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_A400, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_A700, $res);

        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_50, $res[MaterialDesignColorPaletteInterface::COLOR_50]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_100, $res[MaterialDesignColorPaletteInterface::COLOR_100]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_200, $res[MaterialDesignColorPaletteInterface::COLOR_200]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_300, $res[MaterialDesignColorPaletteInterface::COLOR_300]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_400, $res[MaterialDesignColorPaletteInterface::COLOR_400]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_600, $res[MaterialDesignColorPaletteInterface::COLOR_600]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_700, $res[MaterialDesignColorPaletteInterface::COLOR_700]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_A100, $res[MaterialDesignColorPaletteInterface::COLOR_A100]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_A200, $res[MaterialDesignColorPaletteInterface::COLOR_A200]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_A400, $res[MaterialDesignColorPaletteInterface::COLOR_A400]);
        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_A700, $res[MaterialDesignColorPaletteInterface::COLOR_A700]);
    }

    /**
     * Test getName()
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new LightBlueColorProvider();

        $this->assertEquals(LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_NAME, $obj->getName());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.color.material_design_color_palette.light_blue", LightBlueColorProvider::SERVICE_NAME);

        $obj = new LightBlueColorProvider();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ColorProviderInterface::class, $obj);
        $this->assertInstanceOf(LightBlueColorProviderInterface::class, $obj);
        $this->assertInstanceOf(MaterialDesignColorPaletteInterface::class, $obj);

        $this->assertEquals(MaterialDesignColorPaletteInterface::COLOR_DOMAIN, $obj->getDomain());
    }
}
