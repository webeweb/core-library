<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Notification;

use WBW\Library\Symfony\Assets\Notification\DefaultNotification;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Default notification test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Notification
 */
class DefaultNotificationTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultNotification("type", "default");

        $this->assertEquals("type", $obj->getType());
        $this->assertEquals("default", $obj->getContent());
    }
}
