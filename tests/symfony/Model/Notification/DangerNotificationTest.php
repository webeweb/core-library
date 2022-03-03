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

use WBW\Library\Symfony\Model\Notification\DangerNotification;
use WBW\Library\Symfony\Model\NotificationInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Danger notification test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model\Notification
 */
class DangerNotificationTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DangerNotification("danger");

        $this->assertEquals(NotificationInterface::NOTIFICATION_DANGER, $obj->getType());
        $this->assertEquals("danger", $obj->getContent());
    }
}
