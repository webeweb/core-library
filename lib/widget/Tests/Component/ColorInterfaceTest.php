<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\ColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class ColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("*", ColorInterface::COLOR_VALUE_DEFAULT);

        $this->assertEquals("50", ColorInterface::COLOR_VALUE_50);
        $this->assertEquals("100", ColorInterface::COLOR_VALUE_100);
        $this->assertEquals("200", ColorInterface::COLOR_VALUE_200);
        $this->assertEquals("300", ColorInterface::COLOR_VALUE_300);
        $this->assertEquals("400", ColorInterface::COLOR_VALUE_400);
        $this->assertEquals("500", ColorInterface::COLOR_VALUE_500);
        $this->assertEquals("600", ColorInterface::COLOR_VALUE_600);
        $this->assertEquals("700", ColorInterface::COLOR_VALUE_700);
        $this->assertEquals("800", ColorInterface::COLOR_VALUE_800);
        $this->assertEquals("900", ColorInterface::COLOR_VALUE_900);

        $this->assertEquals("A100", ColorInterface::COLOR_VALUE_A100);
        $this->assertEquals("A200", ColorInterface::COLOR_VALUE_A200);
        $this->assertEquals("A400", ColorInterface::COLOR_VALUE_A400);
        $this->assertEquals("A700", ColorInterface::COLOR_VALUE_A700);
    }
}
