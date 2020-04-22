<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Geometry;

use WBW\Library\Core\Geometry\Angle;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Angle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Geometry
 */
class AngleTest extends AbstractTestCase {

    /**
     * Tests the deg() method.
     *
     * @return void
     */
    public function testDeg() {

        $this->assertEquals(180, (new Angle(180, Angle::UNIT_DEGREE))->deg());
        $this->assertEquals(180, (new Angle(pi(), Angle::UNIT_RADIAN))->deg());
    }

    /**
     * Tests the isDegree() method.
     *
     * @return void
     */
    public function testIsDegree() {

        $obj = new Angle(180, Angle::UNIT_DEGREE);

        $this->assertTrue($obj->isDegree());
        $this->assertFalse($obj->isRadian());
    }

    /**
     * Tests the isRadian() method.
     *
     * @return void
     */
    public function testIsRadian() {

        $obj = new Angle(pi(), Angle::UNIT_RADIAN);

        $this->assertTrue($obj->isRadian());
        $this->assertFalse($obj->isDegree());
    }

    /**
     * Tests the rad() method.
     *
     * @return void
     */
    public function testRad() {

        $this->assertEquals(pi(), (new Angle(180, Angle::UNIT_DEGREE))->rad());
        $this->assertEquals(pi(), (new Angle(pi(), Angle::UNIT_RADIAN))->rad());
    }

    /**
     * Tests the setValue() method.
     *
     * @return void
     */
    public function testSetValue() {

        $arg = pi() / 2;

        $obj = new Angle(pi());

        $obj->setValue($arg);
        $this->assertEquals($arg, $obj->getValue());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("degree", Angle::UNIT_DEGREE);
        $this->assertEquals("radian", Angle::UNIT_RADIAN);

        $obj = new Angle(180, Angle::UNIT_DEGREE);

        $this->assertEquals(Angle::UNIT_DEGREE, $obj->getUnits());
        $this->assertEquals(180, $obj->getValue());
    }
}
