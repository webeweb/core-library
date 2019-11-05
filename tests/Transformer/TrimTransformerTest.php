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

use WBW\Library\Core\Transformer\TrimTransformer;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * trim transformer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Transformer
 */
class TrimScrapingTransformerTest extends AbstractTestCase {

    /**
     * Tests the transform() method.
     *
     * @return void
     */
    public function testTransform() {

        $obj = new TrimTransformer();

        $this->assertNull($obj->transform(null));
        $this->assertNull($obj->transform(true));
        $this->assertEquals("string", $obj->transform(" string "));
    }
}
