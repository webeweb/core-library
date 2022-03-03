<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Component\Notification;

use WBW\Library\Symfony\Component\AbstractNotification;

/**
 * Warning notification.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Component\Notification
 */
class WarningNotification extends AbstractNotification {

    /**
     * Constructor.
     *
     * @param string $content The content.
     */
    public function __construct(string $content) {
        parent::__construct(self::NOTIFICATION_WARNING, $content);
    }
}
