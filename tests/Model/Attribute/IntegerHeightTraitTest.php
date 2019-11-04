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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestIntegerHeightTrait;

/**
 * Integer height trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class IntegerHeightTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestIntegerHeightTrait();

        $this->assertNull($obj->getHeight());
    }

    /**
     * Tests the setHeight() method.
     *
     * @return void
     */
    public function testSetHeight() {

        $obj = new TestIntegerHeightTrait();

        $obj->setHeight(1);
        $this->assertEquals(1, $obj->getHeight());
    }
}
