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

use WBW\Library\Widget\Component\AlertInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Alert interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class AlertInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", AlertInterface::ALERT_TYPE_DANGER);
        $this->assertEquals("info", AlertInterface::ALERT_TYPE_INFO);
        $this->assertEquals("success", AlertInterface::ALERT_TYPE_SUCCESS);
        $this->assertEquals("warning", AlertInterface::ALERT_TYPE_WARNING);
    }
}
