<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Component\Notification;

use WBW\Library\Symfony\Component\Notification\InfoNotification;
use WBW\Library\Symfony\Component\NotificationInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Info notification test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component\Notification
 */
class InfoNotificationTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new InfoNotification("info");

        $this->assertEquals(NotificationInterface::NOTIFICATION_INFO, $obj->getType());
        $this->assertEquals("info", $obj->getContent());
    }
}
