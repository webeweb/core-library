<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Renderer\Assets;

use WBW\Library\Symfony\Renderer\Assets\ColorRendererTrait;

/**
 * Test color renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Renderer\Assets
 */
class TestColorRendererTrait {

    use ColorRendererTrait {
        renderColor as public;
    }
}
