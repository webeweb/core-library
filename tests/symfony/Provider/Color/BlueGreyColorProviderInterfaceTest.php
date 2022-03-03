<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Color;

use WBW\Library\Symfony\Provider\Color\BlueGreyColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Blue grey color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class BlueGreyColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("blue-grey", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_NAME);

        $this->assertEquals("#ECEFF1", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_50);
        $this->assertEquals("#CFD8DC", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_100);
        $this->assertEquals("#B0BEC5", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_200);
        $this->assertEquals("#90A4AE", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_300);
        $this->assertEquals("#78909C", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_400);
        $this->assertEquals("#607D8B", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_500);
        $this->assertEquals("#546E7A", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_600);
        $this->assertEquals("#455A64", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_700);
        $this->assertEquals("#37474F", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_800);
        $this->assertEquals("#263238", BlueGreyColorProviderInterface::BLUE_GREY_COLOR_900);
    }
}
