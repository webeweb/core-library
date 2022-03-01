<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Color\MaterialDesignColorPalette;

use JsonSerializable;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPaletteInterface;
use WBW\Library\Symfony\Provider\Assets\Color\DeepPurpleColorProviderInterface;
use WBW\Library\Symfony\Provider\Assets\ColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Deep purple color provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Color\MaterialDesignColorPalette
 */
class DeepPurpleColorProviderTest extends AbstractTestCase {

    /**
     * Tests getColors()
     *
     * @return void
     */
    public function testGetColors(): void {

        $obj = new DeepPurpleColorProvider();

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

        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_50, $res[MaterialDesignColorPaletteInterface::COLOR_50]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_100, $res[MaterialDesignColorPaletteInterface::COLOR_100]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_200, $res[MaterialDesignColorPaletteInterface::COLOR_200]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_300, $res[MaterialDesignColorPaletteInterface::COLOR_300]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_400, $res[MaterialDesignColorPaletteInterface::COLOR_400]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_600, $res[MaterialDesignColorPaletteInterface::COLOR_600]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_700, $res[MaterialDesignColorPaletteInterface::COLOR_700]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_A100, $res[MaterialDesignColorPaletteInterface::COLOR_A100]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_A200, $res[MaterialDesignColorPaletteInterface::COLOR_A200]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_A400, $res[MaterialDesignColorPaletteInterface::COLOR_A400]);
        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_A700, $res[MaterialDesignColorPaletteInterface::COLOR_A700]);
    }

    /**
     * Tests getName()
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new DeepPurpleColorProvider();

        $this->assertEquals(DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_NAME, $obj->getName());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.assets.color.material_design_color_palette.deep_purple", DeepPurpleColorProvider::SERVICE_NAME);

        $obj = new DeepPurpleColorProvider();

        $this->assertInstanceOf(ColorProviderInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertInstanceOf(MaterialDesignColorPaletteInterface::class, $obj);
        $this->assertInstanceOf(DeepPurpleColorProviderInterface::class, $obj);

        $this->assertEquals(MaterialDesignColorPaletteInterface::COLOR_DOMAIN, $obj->getDomain());
    }
}
