<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Component;

/**
 * Progress bar interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Component
 */
interface ProgressBarInterface {

    /**
     * Progress bar "danger".
     *
     * @var string
     */
    const PROGRESS_BAR_DANGER = "danger";

    /**
     * Progress bar "info".
     *
     * @var string
     */
    const PROGRESS_BAR_INFO = "info";

    /**
     * Progress bar "success".
     *
     * @var string
     */
    const PROGRESS_BAR_SUCCESS = "success";

    /**
     * Progress bar "warning".
     *
     * @var string
     */
    const PROGRESS_BAR_WARNING = "warning";

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
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setContent(?string $content);
}
