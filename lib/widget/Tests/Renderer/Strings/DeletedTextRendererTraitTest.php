<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Renderer\Strings;

use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Renderer\Strings\TestDeletedTextRendererTrait;

/**
 * Deleted text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Renderer\Strings
 */
class DeletedTextRendererTraitTest extends AbstractTestCase {

    /**
     * Test renderDeletedText()
     *
     * @return void
     */
    public function testRenderDeletedText(): void {

        $obj = new TestDeletedTextRendererTrait();

        $this->assertNull($obj->renderDeletedText(null));
        $this->assertNull($obj->renderDeletedText(""));
        $this->assertEquals('<del>content</del>', $obj->renderDeletedText("content"));
    }
}
