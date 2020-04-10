<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatXTrait;

/**
 * Float x trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatXTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestFloatXTrait();

        $this->assertNull($obj->getX());
    }

    /**
     * Tests the setX() method.
     *
     * @return void
     */
    public function testSetX() {

        $obj = new TestFloatXTrait();

        $obj->setX(1.01);
        $this->assertEquals(1.01, $obj->getX());
        $this->assertEquals(1, $obj->getXInt());
    }
}
