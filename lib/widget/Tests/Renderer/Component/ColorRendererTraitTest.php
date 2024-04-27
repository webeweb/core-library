<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Renderer\Component;

use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Renderer\Component\TestColorRendererTrait;

/**
 * Color renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Renderer\Component
 */
class ColorRendererTraitTest extends AbstractTestCase {

    /**
     * Test previewColor()
     *
     * @return void
     */
    public function testPreviewColor(): void {

        $obj = new TestColorRendererTrait();

        $this->assertNull($obj->previewColor(null));
        $this->assertEquals('<div style="background-color: #ffffff;"></div>', $obj->previewColor("#ffffff"));
        $this->assertEquals('<div style="background-color: #ffffff; width: 50px;"></div>', $obj->previewColor("#ffffff", 50));
        $this->assertEquals('<div style="background-color: #ffffff; width: 50px; height: 30px;"></div>', $obj->previewColor("#ffffff", 50, 30));
    }
}
