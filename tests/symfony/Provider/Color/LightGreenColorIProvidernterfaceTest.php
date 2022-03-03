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

use WBW\Library\Symfony\Provider\Color\LightGreenColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Light green color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class LightGreenColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("light-green", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_NAME);

        $this->assertEquals("#F1F8E9", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_50);
        $this->assertEquals("#DCEDC8", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_100);
        $this->assertEquals("#C5E1A5", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_200);
        $this->assertEquals("#AED581", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_300);
        $this->assertEquals("#9CCC65", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_400);
        $this->assertEquals("#8BC34A", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_500);
        $this->assertEquals("#7CB342", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_600);
        $this->assertEquals("#689F38", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_700);
        $this->assertEquals("#558B2F", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_800);
        $this->assertEquals("#33691E", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_900);
        $this->assertEquals("#CCFF90", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_A100);
        $this->assertEquals("#B2FF59", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_A200);
        $this->assertEquals("#76FF03", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_A400);
        $this->assertEquals("#64DD17", LightGreenColorProviderInterface::LIGHT_GREEN_COLOR_A700);
    }
}
