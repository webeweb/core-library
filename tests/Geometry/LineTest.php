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
use WBW\Library\Core\Geometry\Line;
use WBW\Library\Core\Geometry\Point;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Line test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Geometry
 */
class LineTest extends AbstractTestCase {

    /**
     * Tests the d() method.
     *
     * @return void
     */
    public function testD(): void {

        $obj = new Line(new Point(0, 0), new Point(3, 4));

        $this->assertEquals(5, $obj->d());
    }

    /**
     * Tests the deg() method.
     *
     * @return void
     */
    public function testDeg(): void {

        $obj = new Line(new Point(0, 0), new Point(5, 5));

        $this->assertEquals(45, $obj->deg()->getValue());
    }

    /**
     * Tests the m() method.
     *
     * @return void
     */
    public function testM(): void {

        $obj = new Line(new Point(0, 0), new Point(5, 5));

        $this->assertEquals(1, $obj->m());
    }

    /**
     * Tests the originallyAbscissa() method.
     *
     * @return void
     */
    public function testOriginallyAbscissa(): void {

        $obj = new Line(new Point(5, 10), new Point(10, 15));

        $res = $obj->originallyAbscissa();
        $this->assertEquals(-5, $res->getX());
        $this->assertEquals(0, $res->getY());
    }

    /**
     * Tests the originallyOrdered() method.
     *
     * @return void
     */
    public function testOriginallyOrdered(): void {

        $obj = new Line(new Point(5, 10), new Point(10, 15));

        $res = $obj->originallyOrdered();
        $this->assertEquals(0, $res->getX());
        $this->assertEquals(5, $res->getY());
    }

    /**
     * Tests the rad() method.
     *
     * @return void
     */
    public function testRad(): void {

        $obj = new Line(new Point(0, 0), new Point(5, 5));

        $this->assertEquals(pi() / 4, $obj->rad()->getValue());
    }

    /**
     * Tests the rotate() method.
     *
     * @return void
     */
    public function testRotate(): void {

        $obj = new Line(new Point(1, 1), new Point(5, 5));

        $res = $obj->rotate(new Point(0, 0), new Angle(90, Angle::UNIT_DEGREE));
        $this->assertEquals(1, $res->getA()->getX());
        $this->assertEquals(-1, $res->getA()->getY());
        $this->assertEquals(5, $res->getB()->getX());
        $this->assertEquals(-5, $res->getB()->getY());
    }

    /**
     * Tests the setA() method.
     *
     * @return void
     */
    public function testSetA(): void {

        // Set a Point mock.
        $point = new Point();

        $obj = new Line();

        $obj->setA($point);
        $this->assertSame($point, $obj->getA());
    }

    /**
     * Tests the setB() method.
     *
     * @return void
     */
    public function testSetB(): void {

        // Set a Point mock.
        $point = new Point();

        $obj = new Line();

        $obj->setB($point);
        $this->assertSame($point, $obj->getB());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Line();

        $this->assertNull($obj->getA());
        $this->assertNull($obj->getB());
    }
}
