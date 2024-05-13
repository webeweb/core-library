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

namespace WBW\Library\Highcharts\Tests\Model\Chart\XAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts plot lines test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsPlotLinesTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $label = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => $label->jsonSerialize(), "value" => 59.0, "width" => 2.0, "zIndex" => 77.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setDashStyle("LongDashDotDot");
        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabel($label);
        $obj->setValue(59.0);
        $obj->setWidth(2.0);
        $obj->setZIndex(77.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newLabel()
     *
     * @return void.
     */
    public function testNewLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $res = $obj->newLabel();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel::class, $res);
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getDashStyle());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);
        $this->assertEquals(["events" => "16908b0605f2645dfcb4c3a8d248cef3"], $obj->getEvents());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabel()
     *
     * @return void.
     */
    public function testSetLabel(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel mock.
        $label = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setLabel($label);
        $this->assertSame($label, $obj->getLabel());
    }

    /**
     * Tests setValue()
     *
     * @return void.
     */
    public function testSetValue(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setValue(58.0);
        $this->assertEquals(58.0, $obj->getValue());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setWidth(94.0);
        $this->assertEquals(94.0, $obj->getWidth());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setZIndex(33.0);
        $this->assertEquals(33.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertEquals("Solid", $obj->getDashStyle());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getValue());
        $this->assertNull($obj->getWidth());
        $this->assertNull($obj->getZIndex());
    }
}
