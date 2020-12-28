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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Transformer\PregReplaceTransformer;

/**
 * preg_replace transformer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Transformer
 */
class PregReplaceTransformerTest extends AbstractTestCase {

    /**
     * Tests the transform() method.
     *
     * @return void
     */
    public function testTransform(): void {

        $obj = new PregReplaceTransformer("/pattern/", "replacement");

        $this->assertNull($obj->transform(null));
        $this->assertNull($obj->transform(true));
        $this->assertEquals("replacement", $obj->transform("pattern"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PregReplaceTransformer("/pattern/", "replacement");

        $this->assertEquals("/pattern/", $obj->getPattern());
        $this->assertEquals("replacement", $obj->getReplacement());
    }
}
