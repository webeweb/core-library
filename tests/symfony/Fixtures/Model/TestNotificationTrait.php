<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Model;

use WBW\Library\Symfony\Model\NotificationTrait;

/**
 * Test notification trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Model
 */
class TestNotificationTrait {

    use NotificationTrait {
        setNotification as public;
    }
}