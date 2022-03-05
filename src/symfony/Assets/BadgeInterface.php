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

/**
 * Badge interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface BadgeInterface {

    /**
     * Badge "danger".
     *
     * @var string
     */
    const BADGE_DANGER = "danger";

    /**
     * Badge "info".
     *
     * @var string
     */
    const BADGE_INFO = "info";

    /**
     * Badge "success".
     *
     * @var string
     */
    const BADGE_SUCCESS = "success";

    /**
     * Badge "warning".
     *
     * @var string
     */
    const BADGE_WARNING = "warning";

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
     * @return BadgeInterface Returns this badge.
     */
    public function setContent(?string $content);
}
