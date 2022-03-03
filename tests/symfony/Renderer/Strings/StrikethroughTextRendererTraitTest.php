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
use WBW\Library\Symfony\Tests\Fixtures\Renderer\Strings\TestStrikethroughTextRendererTrait;

/**
 * Strikethrough text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer\Strings
 */
class StrikethroughTextRendererTraitTest extends AbstractTestCase {

    /**
     * Tests renderStrikethroughText()
     *
     * @return void
     */
    public function testRenderStrikethroughText(): void {

        $obj = new TestStrikethroughTextRendererTrait();

        $this->assertNull($obj->renderStrikethroughText(null));
        $this->assertNull($obj->renderStrikethroughText(""));
        $this->assertEquals('<s>content</s>', $obj->renderStrikethroughText("content"));
    }
}
