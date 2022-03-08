<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Renderer;

use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Renderer\TestStringsRendererTrait;

/**
 * Strings renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer
 */
class StringsRendererTraitTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestStringsRendererTrait();

        $this->assertNull($obj->renderBoldText(null));
        $this->assertNull($obj->renderDeletedText(null));
        $this->assertNull($obj->renderInsertedText(null));
        $this->assertNull($obj->renderItalicText(null));
        $this->assertNull($obj->renderMarkedText(null));
        $this->assertNull($obj->renderSmallText(null));
        $this->assertNull($obj->renderStrikethroughText(null));
        $this->assertNull($obj->renderUnderlinedText(null));
    }
}
