<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model\Notification;

use WBW\Library\Symfony\Model\Notification\SuccessNotification;
use WBW\Library\Symfony\Model\NotificationInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Success notification test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model\Notification
 */
class SuccessNotificationTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuccessNotification("success");

        $this->assertEquals(NotificationInterface::NOTIFICATION_SUCCESS, $obj->getType());
        $this->assertEquals("success", $obj->getContent());
    }
}
