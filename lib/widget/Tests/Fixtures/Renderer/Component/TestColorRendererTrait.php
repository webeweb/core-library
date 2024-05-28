<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Fixtures\Renderer\Component;

use WBW\Library\Widget\Renderer\Component\ColorRendererTrait;

/**
 * Test color renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Fixtures\Renderer\Component
 */
class TestColorRendererTrait {

    use ColorRendererTrait {
        previewColor as public;
    }
}
