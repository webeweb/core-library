<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use WBW\Library\Symfony\Assets\NotificationInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Notification interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class NotificationInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", NotificationInterface::NOTIFICATION_TYPE_DANGER);
        $this->assertEquals("info", NotificationInterface::NOTIFICATION_TYPE_INFO);
        $this->assertEquals("success", NotificationInterface::NOTIFICATION_TYPE_SUCCESS);
        $this->assertEquals("warning", NotificationInterface::NOTIFICATION_TYPE_WARNING);
    }
}
