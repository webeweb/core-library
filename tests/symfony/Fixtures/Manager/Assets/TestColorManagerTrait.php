<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Manager\Assets;

use WBW\Library\Symfony\Manager\Assets\ColorManagerTrait;

/**
 * Test color manager trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Manager\Assets
 */
class TestColorManagerTrait {

    use ColorManagerTrait {
        setColorManager as public;
    }
}
