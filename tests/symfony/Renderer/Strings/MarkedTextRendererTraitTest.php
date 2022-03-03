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
use WBW\Library\Symfony\Tests\Fixtures\Renderer\Strings\TestMarkedTextRendererTrait;

/**
 * Marked text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer\Strings
 */
class MarkedTextRendererTraitTest extends AbstractTestCase {

    /**
     * Tests renderMarkedText()
     *
     * @return void
     */
    public function testRenderMarkedText(): void {

        $obj = new TestMarkedTextRendererTrait();

        $this->assertNull($obj->renderMarkedText(null));
        $this->assertNull($obj->renderMarkedText(""));
        $this->assertEquals('<mark>content</mark>', $obj->renderMarkedText("content"));
    }
}
