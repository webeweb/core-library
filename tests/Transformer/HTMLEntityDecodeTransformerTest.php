<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Transformer;

use WBW\Library\Core\Transformer\HTMLEntityDecodeTransformer;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * html_entity_decode transformer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Transformer
 */
class HTMLEntityDecodeTransformerTest extends AbstractTestCase {

    /**
     * Tests the transform() method.
     *
     * @return void
     */
    public function testTransform() {

        $obj = new HTMLEntityDecodeTransformer();

        $this->assertNull($obj->transform(null));
        $this->assertNull($obj->transform(true));
        $this->assertEquals("&", $obj->transform("&amp;"));
    }
}
