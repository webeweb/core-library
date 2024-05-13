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

        $exp = ["align" => "right", "verticalAlign" => "bottom", "x" => 45.0, "y" => 57.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();
        $obj->setAlign("right");
        $obj->setVerticalAlign("bottom");
        $obj->setX(45.0);
        $obj->setY(57.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();

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
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();

        $obj->setX(23.0);
        $this->assertEquals(23.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Credits\HighchartsPosition();

        $obj->setY(100.0);
        $this->assertEquals(100.0, $obj->getY());
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
