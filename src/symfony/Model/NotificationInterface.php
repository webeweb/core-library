<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

/**
 * Notification interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface NotificationInterface {

    /**
     * Notification "danger".
     *
     * @var string
     */
    const NOTIFICATION_DANGER = "danger";

    /**
     * Notification "info".
     *
     * @var string
     */
    const NOTIFICATION_INFO = "info";

    /**
     * Notification "success".
     *
     * @var string
     */
    const NOTIFICATION_SUCCESS = "success";

    /**
     * Notification "warning".
     *
     * @var string
     */
    const NOTIFICATION_WARNING = "warning";

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent(): string;

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType(): string;
}
