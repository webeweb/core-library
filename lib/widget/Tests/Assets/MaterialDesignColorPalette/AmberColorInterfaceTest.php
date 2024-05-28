<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette;

use WBW\Library\Widget\Assets\MaterialDesignColorPalette\AmberColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Amber color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette
 */
class AmberColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("#fff8e1", AmberColorInterface::AMBER_COLOR_VALUE_50);
        $this->assertEquals("#ffecb3", AmberColorInterface::AMBER_COLOR_VALUE_100);
        $this->assertEquals("#ffe082", AmberColorInterface::AMBER_COLOR_VALUE_200);
        $this->assertEquals("#ffd54f", AmberColorInterface::AMBER_COLOR_VALUE_300);
        $this->assertEquals("#ffca28", AmberColorInterface::AMBER_COLOR_VALUE_400);
        $this->assertEquals("#ffc107", AmberColorInterface::AMBER_COLOR_VALUE_500);
        $this->assertEquals("#ffb300", AmberColorInterface::AMBER_COLOR_VALUE_600);
        $this->assertEquals("#ffa000", AmberColorInterface::AMBER_COLOR_VALUE_700);
        $this->assertEquals("#ff8f00", AmberColorInterface::AMBER_COLOR_VALUE_800);
        $this->assertEquals("#ff6f00", AmberColorInterface::AMBER_COLOR_VALUE_900);
        $this->assertEquals("#ffe57f", AmberColorInterface::AMBER_COLOR_VALUE_A100);
        $this->assertEquals("#ffd740", AmberColorInterface::AMBER_COLOR_VALUE_A200);
        $this->assertEquals("#ffc400", AmberColorInterface::AMBER_COLOR_VALUE_A400);
        $this->assertEquals("#ffab00", AmberColorInterface::AMBER_COLOR_VALUE_A700);
    }
}
