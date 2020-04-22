<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatSizeTrait;

/**
 * Float size trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatSizeTraitTest extends AbstractTestCase {

    /**
     * Tests the setSize() method.
     *
     * @return void
     */
    public function testSetSize() {

        $obj = new TestFloatSizeTrait();

        $obj->setSize(1.01);
        $this->assertEquals(1.01, $obj->getSize());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestFloatSizeTrait();

        $this->assertNull($obj->getSize());
    }
}
