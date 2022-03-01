<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Alert;

use WBW\Library\Symfony\Assets\Alert\AlertInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Alert interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Alert
 */
class AlertInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", AlertInterface::ALERT_DANGER);
        $this->assertEquals("info", AlertInterface::ALERT_INFO);
        $this->assertEquals("success", AlertInterface::ALERT_SUCCESS);
        $this->assertEquals("warning", AlertInterface::ALERT_WARNING);
    }
}
