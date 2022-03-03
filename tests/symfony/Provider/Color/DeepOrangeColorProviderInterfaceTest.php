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

use WBW\Library\Symfony\Provider\Color\DeepOrangeColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Deep orange color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class DeepOrangeColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("deep-orange", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_NAME);

        $this->assertEquals("#FBE9E7", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_50);
        $this->assertEquals("#FFCCBC", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_100);
        $this->assertEquals("#FFAB91", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_200);
        $this->assertEquals("#FF8A65", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_300);
        $this->assertEquals("#FF7043", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_400);
        $this->assertEquals("#FF5722", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_500);
        $this->assertEquals("#F4511E", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_600);
        $this->assertEquals("#E64A19", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_700);
        $this->assertEquals("#D84315", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_800);
        $this->assertEquals("#BF360C", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_900);
        $this->assertEquals("#FF9E80", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_A100);
        $this->assertEquals("#FF6E40", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_A200);
        $this->assertEquals("#FF3D00", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_A400);
        $this->assertEquals("#DD2C00", DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_A700);
    }
}
