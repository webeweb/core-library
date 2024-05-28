<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\ButtonInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Button interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class ButtonInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", ButtonInterface::BUTTON_TYPE_DANGER);
        $this->assertEquals("info", ButtonInterface::BUTTON_TYPE_INFO);
        $this->assertEquals("success", ButtonInterface::BUTTON_TYPE_SUCCESS);
        $this->assertEquals("warning", ButtonInterface::BUTTON_TYPE_WARNING);
    }
}
