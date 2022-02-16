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
use WBW\Library\OcrLad\Geometry\Point;
use WBW\Library\OcrLad\Tests\AbstractTestCase;

/**
 * Point test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Geometry
 */
class PointTest extends AbstractTestCase {

    /**
     * Tests d()
     *
     * @return void
     */
    public function testD(): void {

        $obj = new Point(3, 4);

        $this->assertEquals(5, $obj->d(new Point(0, 0)));
    }

    /**
     * Tests deg()
     *
     * @return void
     */
    public function testDeg(): void {

        $obj = new Point(5, 5);

        $this->assertEquals(45, $obj->deg(new Point(0, 0))->getValue());
        $this->assertEquals(90, $obj->deg(new Point(5, 0))->getValue());
        $this->assertEquals(-90, $obj->deg(new Point(5, 10))->getValue());
    }

    /**
     * Tests m()
     *
     * @return void
     */
    public function testM(): void {

        $obj = new Point(5, 5);

        $this->assertEquals(1, $obj->m(new Point(0, 0)));
        $this->assertEquals(INF, $obj->m(new Point(5, 10)));
    }

    /**
     * Tests rotate()
     *
     * @return void
     */
    public function testRotate(): void {

        $obj = new Point(5, 5);

        $res = $obj->rotate(new Point(0, 0), new Angle(90, Angle::UNIT_DEGREE));
        $this->assertEquals(5, $res->getX());
        $this->assertEquals(-5, $res->getY());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Point();

        $this->assertNull($obj->getX());
        $this->assertNull($obj->getY());
    }
}
