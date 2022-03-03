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

use WBW\Library\Symfony\Provider\Color\PurpleColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Purple color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class PurpleColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("purple", PurpleColorProviderInterface::PURPLE_COLOR_NAME);

        $this->assertEquals("#F3E5F5", PurpleColorProviderInterface::PURPLE_COLOR_50);
        $this->assertEquals("#E1BEE7", PurpleColorProviderInterface::PURPLE_COLOR_100);
        $this->assertEquals("#CE93D8", PurpleColorProviderInterface::PURPLE_COLOR_200);
        $this->assertEquals("#BA68C8", PurpleColorProviderInterface::PURPLE_COLOR_300);
        $this->assertEquals("#AB47BC", PurpleColorProviderInterface::PURPLE_COLOR_400);
        $this->assertEquals("#9C27B0", PurpleColorProviderInterface::PURPLE_COLOR_500);
        $this->assertEquals("#8E24AA", PurpleColorProviderInterface::PURPLE_COLOR_600);
        $this->assertEquals("#7B1FA2", PurpleColorProviderInterface::PURPLE_COLOR_700);
        $this->assertEquals("#6A1B9A", PurpleColorProviderInterface::PURPLE_COLOR_800);
        $this->assertEquals("#4A148C", PurpleColorProviderInterface::PURPLE_COLOR_900);
        $this->assertEquals("#EA80FC", PurpleColorProviderInterface::PURPLE_COLOR_A100);
        $this->assertEquals("#E040FB", PurpleColorProviderInterface::PURPLE_COLOR_A200);
        $this->assertEquals("#D500F9", PurpleColorProviderInterface::PURPLE_COLOR_A400);
        $this->assertEquals("#AA00FF", PurpleColorProviderInterface::PURPLE_COLOR_A700);
    }
}
