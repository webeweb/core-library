<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Line;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts marker test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Line
 * @version 5.0.14
 */
class HighchartsMarkerTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\HighchartsStates();

        $exp = ["enabled" => false, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 75.0, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 46.0, "radius" => 38.0, "states" => $states->jsonSerialize(), "symbol" => "triangle-down", "width" => 67.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();
        $obj->setEnabled(false);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setHeight(75.0);
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(46.0);
        $obj->setRadius(38.0);
        $obj->setStates($states);
        $obj->setSymbol("triangle-down");
        $obj->setWidth(67.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\HighchartsStates::class, $res);
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setHeight(20.0);
        $this->assertEquals(20.0, $obj->getHeight());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setLineWidth(64.0);
        $this->assertEquals(64.0, $obj->getLineWidth());
    }

    /**
     * Tests setRadius()
     *
     * @return void.
     */
    public function testSetRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setRadius(13.0);
        $this->assertEquals(13.0, $obj->getRadius());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setSymbol()
     *
     * @return void.
     */
    public function testSetSymbol(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setSymbol(null);
        $this->assertNull($obj->getSymbol());

        $obj->setSymbol("circle");
        $this->assertEquals("circle", $obj->getSymbol());

        $obj->setSymbol("diamond");
        $this->assertEquals("diamond", $obj->getSymbol());

        $obj->setSymbol("square");
        $this->assertEquals("square", $obj->getSymbol());

        $obj->setSymbol("triangle");
        $this->assertEquals("triangle", $obj->getSymbol());

        $obj->setSymbol("triangle-down");
        $this->assertEquals("triangle-down", $obj->getSymbol());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $obj->setWidth(72.0);
        $this->assertEquals(72.0, $obj->getWidth());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\HighchartsMarker();

        $this->assertNull($obj->getEnabled());
        $this->assertNull($obj->getFillColor());
        $this->assertNull($obj->getHeight());
        $this->assertEquals("#ffffff", $obj->getLineColor());
        $this->assertEquals(0, $obj->getLineWidth());
        $this->assertEquals(4, $obj->getRadius());
        $this->assertNull($obj->getStates());
        $this->assertNull($obj->getSymbol());
        $this->assertNull($obj->getWidth());
    }
}
