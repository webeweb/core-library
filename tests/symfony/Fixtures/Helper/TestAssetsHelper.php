<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Helper;

use WBW\Library\Symfony\Helper\AssetsHelper;

/**
 * Test assets helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Helper
 */
class TestAssetsHelper extends AssetsHelper {

    /**
     * {@inheritDoc}
     */
    public static function listAssets(string $directory): array {
        return parent::listAssets($directory);
    }
}
