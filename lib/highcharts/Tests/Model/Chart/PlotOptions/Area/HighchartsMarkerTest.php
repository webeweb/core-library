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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Area;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts marker test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Area
 * @version 5.0.14
 */
class HighchartsMarkerTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\Marker\HighchartsStates();

        $exp = ["enabled" => true, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 26.0, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 55.0, "radius" => 14.0, "states" => $states->jsonSerialize(), "symbol" => "triangle-down", "width" => 68.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();
        $obj->setEnabled(true);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setHeight(26.0);
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(55.0);
        $obj->setRadius(14.0);
        $obj->setStates($states);
        $obj->setSymbol("triangle-down");
        $obj->setWidth(68.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\Marker\HighchartsStates::class, $res);
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $obj->setEnabled(false);
        $this->assertFalse($obj->getEnabled());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $obj->setHeight(61.0);
        $this->assertEquals(61.0, $obj->getHeight());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $obj->setLineWidth(78.0);
        $this->assertEquals(78.0, $obj->getLineWidth());
    }

    /**
     * Tests setRadius()
     *
     * @return void.
     */
    public function testSetRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $obj->setRadius(86.0);
        $this->assertEquals(86.0, $obj->getRadius());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\Marker\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\Marker\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setSymbol()
     *
     * @return void.
     */
    public function testSetSymbol(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

        $obj->setWidth(46.0);
        $this->assertEquals(46.0, $obj->getWidth());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Area\HighchartsMarker();

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
