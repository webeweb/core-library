<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component\Notification;

use JsonSerializable;
use WBW\Library\Widget\Component\Notification\WarningNotification;
use WBW\Library\Widget\Component\NotificationInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Warning notification test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Notification
 */
class WarningNotificationTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new WarningNotification("warning");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(NotificationInterface::class, $obj);

        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_WARNING, $obj->getType());
        $this->assertEquals("warning", $obj->getContent());
    }
}
