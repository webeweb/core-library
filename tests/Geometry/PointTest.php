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
use WBW\Library\Core\Geometry\Point;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Point test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Geometry
 */
class PointTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Point();

        $this->assertNull($obj->getX());
        $this->assertNull($obj->getY());
    }

    /**
     * Tests the d() method.
     *
     * @return void
     */
    public function testD() {

        $obj = new Point(3, 4);

        $this->assertEquals(5, $obj->d(new Point(0, 0)));
    }

    /**
     * Tests the deg() method.
     *
     * @return void
     */
    public function testDeg() {

        $obj = new Point(5, 5);

        $this->assertEquals(45, $obj->deg(new Point(0, 0)));
        $this->assertEquals(90, $obj->deg(new Point(5, 0)));
        $this->assertEquals(-90, $obj->deg(new Point(5, 10)));
    }

    /**
     * Tests the m() method.
     *
     * @return void
     */
    public function testM() {

        $obj = new Point(5, 5);

        $this->assertEquals(1, $obj->m(new Point(0, 0)));
        $this->assertEquals(INF, $obj->m(new Point(5, 10)));
    }

    /**
     * Tests the rotate() method.
     *
     * @return void
     */
    public function testRotate() {

        $obj = new Point(5, 5);

        $res = $obj->rotate(new Point(0, 0), new Angle(90, Angle::UNIT_DEGREE));
        $this->assertEquals(5, $res->getX());
        $this->assertEquals(-5, $res->getY());
    }
}
