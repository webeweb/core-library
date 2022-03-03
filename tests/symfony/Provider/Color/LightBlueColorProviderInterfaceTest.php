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

use WBW\Library\Symfony\Provider\Color\LightBlueColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Light blue color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class LightBlueColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("light-blue", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_NAME);

        $this->assertEquals("#E1F5FE", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_50);
        $this->assertEquals("#B3E5FC", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_100);
        $this->assertEquals("#81D4FA", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_200);
        $this->assertEquals("#4FC3F7", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_300);
        $this->assertEquals("#29B6F6", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_400);
        $this->assertEquals("#03A9F4", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_500);
        $this->assertEquals("#039BE5", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_600);
        $this->assertEquals("#0288D1", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_700);
        $this->assertEquals("#0277BD", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_800);
        $this->assertEquals("#01579B", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_900);
        $this->assertEquals("#80D8FF", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_A100);
        $this->assertEquals("#40C4FF", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_A200);
        $this->assertEquals("#00B0FF", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_A400);
        $this->assertEquals("#0091EA", LightBlueColorProviderInterface::LIGHT_BLUE_COLOR_A700);
    }
}
