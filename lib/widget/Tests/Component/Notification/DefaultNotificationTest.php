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
use WBW\Library\Widget\Component\Notification\DefaultNotification;
use WBW\Library\Widget\Component\NotificationInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Default notification test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Notification
 */
class DefaultNotificationTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultNotification("type", "default");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(NotificationInterface::class, $obj);

        $this->assertEquals("type", $obj->getType());
        $this->assertEquals("default", $obj->getContent());
    }
}
