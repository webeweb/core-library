<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Renderer\Component;

use WBW\Library\Widget\Component\IconInterface;
use WBW\Library\Widget\Renderer\Component\IconRenderer;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Icon renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Renderer\Component
 */
class IconRendererTest extends AbstractTestCase {

    /**
     * Test renderStyle()
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
