<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Renderer;

use WBW\Library\Symfony\Renderer\StringsRendererTrait;

/**
 * Test strings renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Renderer
 */
class TestStringsRendererTrait {

    use StringsRendererTrait {
        renderBoldText as public;
        renderDeletedText as public;
        renderItalicText as public;
        renderInsertedText as public;
        renderMarkedText as public;
        renderSmallText as public;
        renderStrikethroughText as public;
        renderUnderlinedText as public;
    }
}
