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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestIntegerMinimumTrait;

/**
 * Integer minimum trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class IntegerMinimumTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestIntegerMinimumTrait();

        $this->assertNull($obj->getMinimum());
    }

    /**
     * Tests the setMinimum() method.
     *
     * @return void
     */
    public function testSetMinimum() {

        $obj = new TestIntegerMinimumTrait();

        $obj->setMinimum(1);
        $this->assertEquals(1, $obj->getMinimum());
    }
}
