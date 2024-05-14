<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Highcharts\Tests\Model\Chart\Credits;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts position test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Credits
 * @version 5.0.14
 */
class HighchartsPositionTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "verticalAlign" => "bottom", "x" => 46.0, "y" => 85.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();
        $obj->setAlign("right");
        $obj->setVerticalAlign("bottom");
        $obj->setX(46.0);
        $obj->setY(85.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();

        $obj->setAlign("center");
        $this->assertEquals("center", $obj->getAlign());

        $obj->setAlign("left");
        $this->assertEquals("left", $obj->getAlign());

        $obj->setAlign("right");
        $this->assertEquals("right", $obj->getAlign());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());

        $obj->setVerticalAlign("middle");
        $this->assertEquals("middle", $obj->getVerticalAlign());

        $obj->setVerticalAlign("top");
        $this->assertEquals("top", $obj->getVerticalAlign());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();

        $obj->setX(77.0);
        $this->assertEquals(77.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();

        $obj->setY(94.0);
        $this->assertEquals(94.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();

        $this->assertEquals("right", $obj->getAlign());
        $this->assertEquals("bottom", $obj->getVerticalAlign());
        $this->assertEquals(-10, $obj->getX());
        $this->assertEquals(-5, $obj->getY());
    }
}
