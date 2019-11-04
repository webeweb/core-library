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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestIntegerMaximumTrait;

/**
 * Integer maximum trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class IntegerMaximumTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestIntegerMaximumTrait();

        $this->assertNull($obj->getMaximum());
    }

    /**
     * Tests the setMaximum() method.
     *
     * @return void
     */
    public function testSetMaximum() {

        $obj = new TestIntegerMaximumTrait();

        $obj->setMaximum(1);
        $this->assertEquals(1, $obj->getMaximum());
    }
}
