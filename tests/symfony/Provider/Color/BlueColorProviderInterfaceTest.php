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

use WBW\Library\Symfony\Provider\Color\BlueColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Blue color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class BlueColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("blue", BlueColorProviderInterface::BLUE_COLOR_NAME);

        $this->assertEquals("#E3F2FD", BlueColorProviderInterface::BLUE_COLOR_50);
        $this->assertEquals("#BBDEFB", BlueColorProviderInterface::BLUE_COLOR_100);
        $this->assertEquals("#90CAF9", BlueColorProviderInterface::BLUE_COLOR_200);
        $this->assertEquals("#64B5F6", BlueColorProviderInterface::BLUE_COLOR_300);
        $this->assertEquals("#42A5F5", BlueColorProviderInterface::BLUE_COLOR_400);
        $this->assertEquals("#2196F3", BlueColorProviderInterface::BLUE_COLOR_500);
        $this->assertEquals("#1E88E5", BlueColorProviderInterface::BLUE_COLOR_600);
        $this->assertEquals("#1976D2", BlueColorProviderInterface::BLUE_COLOR_700);
        $this->assertEquals("#1565C0", BlueColorProviderInterface::BLUE_COLOR_800);
        $this->assertEquals("#0D47A1", BlueColorProviderInterface::BLUE_COLOR_900);
        $this->assertEquals("#82B1FF", BlueColorProviderInterface::BLUE_COLOR_A100);
        $this->assertEquals("#448AFF", BlueColorProviderInterface::BLUE_COLOR_A200);
        $this->assertEquals("#2979FF", BlueColorProviderInterface::BLUE_COLOR_A400);
        $this->assertEquals("#2962FF", BlueColorProviderInterface::BLUE_COLOR_A700);
    }
}
