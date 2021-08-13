<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Geometry;

use WBW\Library\OcrLad\Geometry\Angle;
use WBW\Library\OcrLad\Tests\AbstractTestCase;

/**
 * Angle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Geometry
 */
class AngleTest extends AbstractTestCase {

    /**
     * Tests the deg() method.
     *
     * @return void
     */
    public function testDeg(): void {

        $this->assertEquals(180, (new Angle(180, Angle::UNIT_DEGREE))->deg());
        $this->assertEquals(180, (new Angle(pi(), Angle::UNIT_RADIAN))->deg());
    }

    /**
     * Tests the isDegree() method.
     *
     * @return void
     */
    public function testIsDegree(): void {

        $obj = new Angle(180, Angle::UNIT_DEGREE);

        $this->assertTrue($obj->isDegree());
        $this->assertFalse($obj->isRadian());
    }

    /**
     * Tests the isRadian() method.
     *
     * @return void
     */
    public function testIsRadian(): void {

        $obj = new Angle(pi(), Angle::UNIT_RADIAN);

        $this->assertTrue($obj->isRadian());
        $this->assertFalse($obj->isDegree());
    }

    /**
     * Tests the rad() method.
     *
     * @return void
     */
    public function testRad(): void {

        $this->assertEquals(pi(), (new Angle(180, Angle::UNIT_DEGREE))->rad());
        $this->assertEquals(pi(), (new Angle(pi(), Angle::UNIT_RADIAN))->rad());
    }

    /**
     * Tests the setValue() method.
     *
     * @return void
     */
    public function testSetValue(): void {

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
    public function test__construct(): void {

        $this->assertEquals("degree", Angle::UNIT_DEGREE);
        $this->assertEquals("radian", Angle::UNIT_RADIAN);

        $obj = new Angle(180, Angle::UNIT_DEGREE);

        $this->assertEquals(Angle::UNIT_DEGREE, $obj->getUnits());
        $this->assertEquals(180, $obj->getValue());
    }
}
