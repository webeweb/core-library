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

use WBW\Library\Widget\Component\Color\YellowColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Yellow color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class YellowColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("yellow", YellowColorInterface::YELLOW_COLOR_NAME);
    }
}