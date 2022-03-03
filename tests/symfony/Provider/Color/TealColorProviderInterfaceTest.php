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

use WBW\Library\Symfony\Provider\Color\TealColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Teal color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class TealColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("teal", TealColorProviderInterface::TEAL_COLOR_NAME);

        $this->assertEquals("#E0F2F1", TealColorProviderInterface::TEAL_COLOR_50);
        $this->assertEquals("#B2DFDB", TealColorProviderInterface::TEAL_COLOR_100);
        $this->assertEquals("#80CBC4", TealColorProviderInterface::TEAL_COLOR_200);
        $this->assertEquals("#4DB6AC", TealColorProviderInterface::TEAL_COLOR_300);
        $this->assertEquals("#26A69A", TealColorProviderInterface::TEAL_COLOR_400);
        $this->assertEquals("#009688", TealColorProviderInterface::TEAL_COLOR_500);
        $this->assertEquals("#00897B", TealColorProviderInterface::TEAL_COLOR_600);
        $this->assertEquals("#00796B", TealColorProviderInterface::TEAL_COLOR_700);
        $this->assertEquals("#00695C", TealColorProviderInterface::TEAL_COLOR_800);
        $this->assertEquals("#004D40", TealColorProviderInterface::TEAL_COLOR_900);
        $this->assertEquals("#A7FFEB", TealColorProviderInterface::TEAL_COLOR_A100);
        $this->assertEquals("#64FFDA", TealColorProviderInterface::TEAL_COLOR_A200);
        $this->assertEquals("#1DE9B6", TealColorProviderInterface::TEAL_COLOR_A400);
        $this->assertEquals("#00BFA5", TealColorProviderInterface::TEAL_COLOR_A700);
    }
}
