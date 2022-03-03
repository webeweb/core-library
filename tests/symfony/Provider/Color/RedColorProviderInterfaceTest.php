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

use WBW\Library\Symfony\Provider\Color\RedColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Red color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class RedColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("red", RedColorProviderInterface::RED_COLOR_NAME);

        $this->assertEquals("#FFEBEE", RedColorProviderInterface::RED_COLOR_50);
        $this->assertEquals("#FFCDD2", RedColorProviderInterface::RED_COLOR_100);
        $this->assertEquals("#EF9A9A", RedColorProviderInterface::RED_COLOR_200);
        $this->assertEquals("#E57373", RedColorProviderInterface::RED_COLOR_300);
        $this->assertEquals("#EF5350", RedColorProviderInterface::RED_COLOR_400);
        $this->assertEquals("#F44336", RedColorProviderInterface::RED_COLOR_500);
        $this->assertEquals("#E53935", RedColorProviderInterface::RED_COLOR_600);
        $this->assertEquals("#D32F2F", RedColorProviderInterface::RED_COLOR_700);
        $this->assertEquals("#C62828", RedColorProviderInterface::RED_COLOR_800);
        $this->assertEquals("#B71C1C", RedColorProviderInterface::RED_COLOR_900);
        $this->assertEquals("#FF8A80", RedColorProviderInterface::RED_COLOR_A100);
        $this->assertEquals("#FF5252", RedColorProviderInterface::RED_COLOR_A200);
        $this->assertEquals("#FF1744", RedColorProviderInterface::RED_COLOR_A400);
        $this->assertEquals("#D50000", RedColorProviderInterface::RED_COLOR_A700);
    }
}
