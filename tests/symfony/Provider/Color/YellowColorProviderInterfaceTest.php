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

use WBW\Library\Symfony\Provider\Color\YellowColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Yellow color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class YellowColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("yellow", YellowColorProviderInterface::YELLOW_COLOR_NAME);

        $this->assertEquals("#FFFDE7", YellowColorProviderInterface::YELLOW_COLOR_50);
        $this->assertEquals("#FFF9C4", YellowColorProviderInterface::YELLOW_COLOR_100);
        $this->assertEquals("#FFF59D", YellowColorProviderInterface::YELLOW_COLOR_200);
        $this->assertEquals("#FFF176", YellowColorProviderInterface::YELLOW_COLOR_300);
        $this->assertEquals("#FFEE58", YellowColorProviderInterface::YELLOW_COLOR_400);
        $this->assertEquals("#FFEB3B", YellowColorProviderInterface::YELLOW_COLOR_500);
        $this->assertEquals("#FDD835", YellowColorProviderInterface::YELLOW_COLOR_600);
        $this->assertEquals("#FBC02D", YellowColorProviderInterface::YELLOW_COLOR_700);
        $this->assertEquals("#F9A825", YellowColorProviderInterface::YELLOW_COLOR_800);
        $this->assertEquals("#F57F17", YellowColorProviderInterface::YELLOW_COLOR_900);
        $this->assertEquals("#FFFF8D", YellowColorProviderInterface::YELLOW_COLOR_A100);
        $this->assertEquals("#FFFF00", YellowColorProviderInterface::YELLOW_COLOR_A200);
        $this->assertEquals("#FFEA00", YellowColorProviderInterface::YELLOW_COLOR_A400);
        $this->assertEquals("#FFD600", YellowColorProviderInterface::YELLOW_COLOR_A700);
    }
}
