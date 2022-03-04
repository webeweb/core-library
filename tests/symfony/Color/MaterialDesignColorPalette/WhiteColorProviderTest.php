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
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\WhiteColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPaletteInterface;
use WBW\Library\Symfony\Provider\Color\WhiteColorProviderInterface;
use WBW\Library\Symfony\Provider\ColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * White color provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Color\MaterialDesignColorPalette
 */
class WhiteColorProviderTest extends AbstractTestCase {

    /**
     * Tests getColors()
     *
     * @return void
     */
    public function testGetColors(): void {

        $obj = new WhiteColorProvider();

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

        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_50]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_100]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_200]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_300]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_400]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_600]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_700]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_A100]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_A200]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_A400]);
        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_A700]);
    }

    /**
     * Tests getName()
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new WhiteColorProvider();

        $this->assertEquals(WhiteColorProviderInterface::WHITE_COLOR_NAME, $obj->getName());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.color.material_design_color_palette.white", WhiteColorProvider::SERVICE_NAME);

        $obj = new WhiteColorProvider();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ColorProviderInterface::class, $obj);
        $this->assertInstanceOf(WhiteColorProviderInterface::class, $obj);
        $this->assertInstanceOf(MaterialDesignColorPaletteInterface::class, $obj);

        $this->assertEquals(MaterialDesignColorPaletteInterface::COLOR_DOMAIN, $obj->getDomain());
    }
}
