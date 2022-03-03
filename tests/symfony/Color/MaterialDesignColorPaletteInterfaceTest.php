<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Color;

use WBW\Library\Symfony\Color\MaterialDesignColorPaletteInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Color
 */
class MaterialDesignColorPaletteInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() mmethod.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("MaterialDesignColorPalette", MaterialDesignColorPaletteInterface::COLOR_DOMAIN);

        $this->assertEquals("50", MaterialDesignColorPaletteInterface::COLOR_50);
        $this->assertEquals("100", MaterialDesignColorPaletteInterface::COLOR_100);
        $this->assertEquals("200", MaterialDesignColorPaletteInterface::COLOR_200);
        $this->assertEquals("300", MaterialDesignColorPaletteInterface::COLOR_300);
        $this->assertEquals("400", MaterialDesignColorPaletteInterface::COLOR_400);
        $this->assertEquals("500", MaterialDesignColorPaletteInterface::COLOR_500);
        $this->assertEquals("600", MaterialDesignColorPaletteInterface::COLOR_600);
        $this->assertEquals("700", MaterialDesignColorPaletteInterface::COLOR_700);

        $this->assertEquals("A100", MaterialDesignColorPaletteInterface::COLOR_A100);
        $this->assertEquals("A200", MaterialDesignColorPaletteInterface::COLOR_A200);
        $this->assertEquals("A400", MaterialDesignColorPaletteInterface::COLOR_A400);
        $this->assertEquals("A700", MaterialDesignColorPaletteInterface::COLOR_A700);
    }
}
