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

use WBW\Library\Symfony\Provider\Color\AmberColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Amber color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class AmberColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("amber", AmberColorProviderInterface::AMBER_COLOR_NAME);

        $this->assertEquals("#FFF8E1", AmberColorProviderInterface::AMBER_COLOR_50);
        $this->assertEquals("#FFECB3", AmberColorProviderInterface::AMBER_COLOR_100);
        $this->assertEquals("#FFE082", AmberColorProviderInterface::AMBER_COLOR_200);
        $this->assertEquals("#FFD54F", AmberColorProviderInterface::AMBER_COLOR_300);
        $this->assertEquals("#FFCA28", AmberColorProviderInterface::AMBER_COLOR_400);
        $this->assertEquals("#FFC107", AmberColorProviderInterface::AMBER_COLOR_500);
        $this->assertEquals("#FFB300", AmberColorProviderInterface::AMBER_COLOR_600);
        $this->assertEquals("#FFA000", AmberColorProviderInterface::AMBER_COLOR_700);
        $this->assertEquals("#FF8F00", AmberColorProviderInterface::AMBER_COLOR_800);
        $this->assertEquals("#FF6F00", AmberColorProviderInterface::AMBER_COLOR_900);
        $this->assertEquals("#FFE57F", AmberColorProviderInterface::AMBER_COLOR_A100);
        $this->assertEquals("#FFD740", AmberColorProviderInterface::AMBER_COLOR_A200);
        $this->assertEquals("#FFC400", AmberColorProviderInterface::AMBER_COLOR_A400);
        $this->assertEquals("#FFAB00", AmberColorProviderInterface::AMBER_COLOR_A700);
    }
}
