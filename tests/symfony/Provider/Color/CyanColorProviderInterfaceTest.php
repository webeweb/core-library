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

use WBW\Library\Symfony\Provider\Color\CyanColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Cyan color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class CyanColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("cyan", CyanColorProviderInterface::CYAN_COLOR_NAME);

        $this->assertEquals("#E0F7FA", CyanColorProviderInterface::CYAN_COLOR_50);
        $this->assertEquals("#B2EBF2", CyanColorProviderInterface::CYAN_COLOR_100);
        $this->assertEquals("#80DEEA", CyanColorProviderInterface::CYAN_COLOR_200);
        $this->assertEquals("#4DD0E1", CyanColorProviderInterface::CYAN_COLOR_300);
        $this->assertEquals("#26C6DA", CyanColorProviderInterface::CYAN_COLOR_400);
        $this->assertEquals("#00BCD4", CyanColorProviderInterface::CYAN_COLOR_500);
        $this->assertEquals("#00ACC1", CyanColorProviderInterface::CYAN_COLOR_600);
        $this->assertEquals("#0097A7", CyanColorProviderInterface::CYAN_COLOR_700);
        $this->assertEquals("#00838F", CyanColorProviderInterface::CYAN_COLOR_800);
        $this->assertEquals("#006064", CyanColorProviderInterface::CYAN_COLOR_900);
        $this->assertEquals("#84FFFF", CyanColorProviderInterface::CYAN_COLOR_A100);
        $this->assertEquals("#18FFFF", CyanColorProviderInterface::CYAN_COLOR_A200);
        $this->assertEquals("#00E5FF", CyanColorProviderInterface::CYAN_COLOR_A400);
        $this->assertEquals("#00B8D4", CyanColorProviderInterface::CYAN_COLOR_A700);
    }
}
