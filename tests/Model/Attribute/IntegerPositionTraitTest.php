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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestIntegerPositionTrait;

/**
 * Integer position trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class IntegerPositionTraitTest extends AbstractTestCase {

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new TestIntegerPositionTrait();

        $obj->setPosition(1);
        $this->assertEquals(1, $obj->getPosition());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestIntegerPositionTrait();

        $this->assertNull($obj->getPosition());
    }
}
