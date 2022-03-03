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
use WBW\Library\Symfony\Tests\Fixtures\Renderer\Strings\TestInsertedTextRendererTrait;

/**
 * Inserted text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer\Strings
 */
class InsertedTextRendererTraitTest extends AbstractTestCase {

    /**
     * Tests renderInsertedText()
     *
     * @return void
     */
    public function testRenderInsertedText(): void {

        $obj = new TestInsertedTextRendererTrait();

        $this->assertNull($obj->renderInsertedText(null));
        $this->assertNull($obj->renderInsertedText(""));
        $this->assertEquals('<ins>content</ins>', $obj->renderInsertedText("content"));
    }
}
