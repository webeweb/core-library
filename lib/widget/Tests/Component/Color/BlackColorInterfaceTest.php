<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Component\Color;

use WBW\Library\Widget\Component\Color\BlackColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Black color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class BlackColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("black", BlackColorInterface::BLACK_COLOR_NAME);

        $this->assertEquals("#000000", BlackColorInterface::BLACK_COLOR_VALUE);
    }
}
