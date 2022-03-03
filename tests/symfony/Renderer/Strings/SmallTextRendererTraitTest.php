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
use WBW\Library\Symfony\Tests\Fixtures\Renderer\Strings\TestSmallTextRendererTrait;

/**
 * Small text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer\Strings
 */
class SmallTextRendererTraitTest extends AbstractTestCase {

    /**
     * Tests renderSmallText()
     *
     * @return void
     */
    public function testRenderSmallText(): void {

        $obj = new TestSmallTextRendererTrait();

        $this->assertNull($obj->renderSmallText(null));
        $this->assertNull($obj->renderSmallText(""));
        $this->assertEquals('<small>content</small>', $obj->renderSmallText("content"));
    }
}
