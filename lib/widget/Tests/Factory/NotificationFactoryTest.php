<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Factory;

use WBW\Library\Widget\Component\NotificationInterface;
use WBW\Library\Widget\Factory\NotificationFactory;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Notification factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Factory
 */
class NotificationFactoryTest extends AbstractTestCase {

    /**
     * Test newDangerNotification()
     *
     * @return void
     */
    public function testNewDangerNotification(): void {

        $obj = NotificationFactory::newDangerNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_DANGER, $obj->getType());
    }

    /**
     * Test newDefaultNotification()
     *
     * @return void
     */
    public function testNewDefaultNotification(): void {

        $obj = NotificationFactory::newDefaultNotification("content", "type");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test newInfoNotification()
     *
     * @return void
     */
    public function testNewInfoNotification(): void {

        $obj = NotificationFactory::newInfoNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_INFO, $obj->getType());
    }

    /**
     * Test newSuccessNotification()
     *
     * @return void
     */
    public function testNewSuccessNotification(): void {

        $obj = NotificationFactory::newSuccessNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Test newWarningNotification()
     *
     * @return void
     */
    public function testNewWarningNotification(): void {

        $obj = NotificationFactory::newWarningNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_WARNING, $obj->getType());
    }
}
