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

use WBW\Library\Symfony\Component\NotificationInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Component\TestNotificationTrait;

/**
 * Notification trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component
 */
class NotificationTraitTest extends AbstractTestCase {

    /**
     * Tests setNotification()
     *
     * @return void
     */
    public function testSetNotification(): void {

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();

        $obj = new TestNotificationTrait();

        $obj->setNotification($notification);
        $this->assertSame($notification, $obj->getNotification());
    }
}
