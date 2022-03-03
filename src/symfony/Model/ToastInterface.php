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
 * Toast interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface ToastInterface {

    /**
     * Toast "danger".
     *
     * @var string
     */
    const TOAST_DANGER = "danger";

    /**
     * Toast "info".
     *
     * @var string
     */
    const TOAST_INFO = "info";

    /**
     * Toast "success".
     *
     * @var string
     */
    const TOAST_SUCCESS = "success";

    /**
     * Toast "warning".
     *
     * @var string
     */
    const TOAST_WARNING = "warning";

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
