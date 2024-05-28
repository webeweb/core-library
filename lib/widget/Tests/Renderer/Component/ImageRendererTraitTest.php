<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Renderer\Component;

use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Renderer\Component\TestImageRendererTrait;

/**
 * Image renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Renderer\Component
 */
class ImageRendererTraitTest extends AbstractTestCase {

    /**
     * Test renderImage()
     *
     * @return void
     */
    public function testRenderImage(): void {

        $obj = new TestImageRendererTrait();

        $this->assertNull($obj->renderImage(null));
        $this->assertEquals('<img src="src"/>', $obj->renderImage("src"));
        $this->assertEquals('<img src="src" alt="alt"/>', $obj->renderImage("src", "alt"));
        $this->assertEquals('<img src="src" alt="alt" width="width"/>', $obj->renderImage("src", "alt", "width"));
        $this->assertEquals('<img src="src" alt="alt" width="width" height="height"/>', $obj->renderImage("src", "alt", "width", "height"));
    }
}
