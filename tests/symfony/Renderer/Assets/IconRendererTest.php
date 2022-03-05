<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Renderer\Assets;

use WBW\Library\Symfony\Assets\IconInterface;
use WBW\Library\Symfony\Renderer\Assets\IconRenderer;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Icon renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer\Assets
 */
class IconRendererTest extends AbstractTestCase {

    /**
     * Tests renderStyle()
     *
     * @return void
     */
    public function testRenderStyle(): void {

        // Set an Icon mock.
        $icon = $this->getMockBuilder(IconInterface::class)->getMock();
        $icon->expects($this->any())->method("getStyle")->willReturn("color: #000000;");

        $this->assertEquals("color: #000000;", IconRenderer::renderStyle($icon));
    }
}
