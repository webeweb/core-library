<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Component;

use WBW\Library\Symfony\Component\ButtonInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Button interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component
 */
class ButtonInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", ButtonInterface::BUTTON_DANGER);
        $this->assertEquals("info", ButtonInterface::BUTTON_INFO);
        $this->assertEquals("success", ButtonInterface::BUTTON_SUCCESS);
        $this->assertEquals("warning", ButtonInterface::BUTTON_WARNING);
    }
}
