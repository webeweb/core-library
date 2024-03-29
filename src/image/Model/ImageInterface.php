<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Model;

/**
 * Image interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Model
 */
interface ImageInterface {

    /**
     * Mime type "jpeg".
     *
     * @var string
     */
    public const MIME_TYPE_JPEG = "image/jpeg";

    /**
     * Mime type "png".
     *
     * @var string
     */
    public const MIME_TYPE_PNG = "image/png";

    /**
     * Orientation "horizontal".
     *
     * @var string
     */
    public const ORIENTATION_HORIZONTAL = "horizontal";

    /**
     * Orientation "vertical".
     *
     * @var string
     */
    public const ORIENTATION_VERTICAL = "vertical";
}
