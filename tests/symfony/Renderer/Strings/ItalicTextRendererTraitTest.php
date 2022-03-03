<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Renderer\Strings;

use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Renderer\Strings\TestItalicTextRendererTrait;

/**
 * Italic text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer\Strings
 */
class ItalicTextRendererTraitTest extends AbstractTestCase {

    /**
     * Tests renderItalicText()
     *
     * @return void
     */
    public function testRenderItalicText(): void {

        $obj = new TestItalicTextRendererTrait();

        $this->assertNull($obj->renderItalicText(null));
        $this->assertNull($obj->renderItalicText(""));
        $this->assertEquals('<em>content</em>', $obj->renderItalicText("content"));
    }
}
