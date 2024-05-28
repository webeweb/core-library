<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette;

use WBW\Library\Widget\Assets\MaterialDesignColorPalette\BlueGreyColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Blue grey color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette
 */
class BlueGreyColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("#eceff1", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_50);
        $this->assertEquals("#cfd8dc", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_100);
        $this->assertEquals("#b0bec5", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_200);
        $this->assertEquals("#90a4ae", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_300);
        $this->assertEquals("#78909c", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_400);
        $this->assertEquals("#607d8b", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_500);
        $this->assertEquals("#546e7a", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_600);
        $this->assertEquals("#455a64", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_700);
        $this->assertEquals("#37474f", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_800);
        $this->assertEquals("#263238", BlueGreyColorInterface::BLUE_GREY_COLOR_VALUE_900);
    }
}
