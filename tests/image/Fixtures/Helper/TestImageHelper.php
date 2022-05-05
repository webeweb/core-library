<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Tests\Fixtures\Helper;

use WBW\Library\Image\Helper\ImageHelper;
use WBW\Library\Image\Model\Image;

/**
 * Test image helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Tests\Fixtures\Helper
 */
class TestImageHelper extends ImageHelper {

    /**
     * {@inheritdoc}
     */
    public static function saveOutputStream(Image $image, $outputStream, string $pathname): bool {
        return parent::saveOutputStream($image, $outputStream, $pathname);
    }
}
