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

use WBW\Library\Symfony\Provider\Color\LimeColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Lime color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class LimeColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("lime", LimeColorProviderInterface::LIME_COLOR_NAME);

        $this->assertEquals("#F9FBE7", LimeColorProviderInterface::LIME_COLOR_50);
        $this->assertEquals("#F0F4C3", LimeColorProviderInterface::LIME_COLOR_100);
        $this->assertEquals("#E6EE9C", LimeColorProviderInterface::LIME_COLOR_200);
        $this->assertEquals("#DCE775", LimeColorProviderInterface::LIME_COLOR_300);
        $this->assertEquals("#D4E157", LimeColorProviderInterface::LIME_COLOR_400);
        $this->assertEquals("#CDDC39", LimeColorProviderInterface::LIME_COLOR_500);
        $this->assertEquals("#C0CA33", LimeColorProviderInterface::LIME_COLOR_600);
        $this->assertEquals("#AFB42B", LimeColorProviderInterface::LIME_COLOR_700);
        $this->assertEquals("#9E9D24", LimeColorProviderInterface::LIME_COLOR_800);
        $this->assertEquals("#827717", LimeColorProviderInterface::LIME_COLOR_900);
        $this->assertEquals("#F4FF81", LimeColorProviderInterface::LIME_COLOR_A100);
        $this->assertEquals("#EEFF41", LimeColorProviderInterface::LIME_COLOR_A200);
        $this->assertEquals("#C6FF00", LimeColorProviderInterface::LIME_COLOR_A400);
        $this->assertEquals("#AEEA00", LimeColorProviderInterface::LIME_COLOR_A700);
    }
}
