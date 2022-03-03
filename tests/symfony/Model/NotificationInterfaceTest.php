<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Symfony\Model\NotificationInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Notification interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class NotificationInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", NotificationInterface::NOTIFICATION_DANGER);
        $this->assertEquals("info", NotificationInterface::NOTIFICATION_INFO);
        $this->assertEquals("success", NotificationInterface::NOTIFICATION_SUCCESS);
        $this->assertEquals("warning", NotificationInterface::NOTIFICATION_WARNING);
    }
}