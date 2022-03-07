<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use JsonSerializable;

/**
 * Button interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface ButtonInterface extends JsonSerializable {

    /**
     * Button "danger".
     *
     * @var string
     */
    const BUTTON_DANGER = "danger";

    /**
     * Button "info".
     *
     * @var string
     */
    const BUTTON_INFO = "info";

    /**
     * Button "success".
     *
     * @var string
     */
    const BUTTON_SUCCESS = "success";

    /**
     * Button "warning".
     *
     * @var string
     */
    const BUTTON_WARNING = "warning";

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
     * @return ButtonInterface Returns this button.
     */
    public function setContent(?string $content);
}
