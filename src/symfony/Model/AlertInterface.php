<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

/**
 * Alert interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface AlertInterface {

    /**
     * Alert "danger".
     *
     * @var string
     */
    const ALERT_DANGER = "danger";

    /**
     * Alert "info".
     *
     * @var string
     */
    const ALERT_INFO = "info";

    /**
     * Alert "success".
     *
     * @var string
     */
    const ALERT_SUCCESS = "success";

    /**
     * Alert "warning".
     *
     * @var string
     */
    const ALERT_WARNING = "warning";

    /**
     * Get the content.
     *
     * @return string|null Returns the content.
     */
    public function getContent(): ?string;

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType(): string;

    /**
     * Set the content.
     *
     * @param string|null $content The content.
     * @return AlertInterface Returns this alert.
     */
    public function setContent(?string $content);
}
