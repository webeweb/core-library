<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Component\Color;

use WBW\Library\Widget\Component\Color\LightBlueColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Light blue color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class LightBlueColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("light-blue", LightBlueColorInterface::LIGHT_BLUE_COLOR_NAME);
    }
}