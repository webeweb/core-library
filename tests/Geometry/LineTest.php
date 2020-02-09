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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Line();

        $this->assertNull($obj->getA());
        $this->assertNull($obj->getB());
    }

    /**
     * Tests the originallyAbscissa() method.
     *
     * @return void
     */
    public function testOriginallyAbscissa() {

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
    public function testOriginallyOrdered() {

        $obj = new Line(new Point(5, 10), new Point(10, 15));

        $res = $obj->originallyOrdered();
        $this->assertEquals(0, $res->getX());
        $this->assertEquals(5, $res->getY());
    }

    /**
     * Tests the setA() method.
     *
     * @return void
     */
    public function testSetA() {

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
    public function testSetB() {

        // Set a Point mock.
        $point = new Point();

        $obj = new Line();

        $obj->setB($point);
        $this->assertSame($point, $obj->getB());
    }
}
