<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Fixtures\Renderer\Strings;

use WBW\Library\Widget\Renderer\Strings\SmallTextRendererTrait;

/**
 * Test small text renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Fixtures\Renderer\Strings
 */
class TestSmallTextRendererTrait {

    use SmallTextRendererTrait {
        renderSmallText as public;
    }
}
