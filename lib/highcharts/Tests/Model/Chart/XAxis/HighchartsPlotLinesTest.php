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

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => $label->jsonSerialize(), "value" => 21.0, "width" => 19.0, "zIndex" => 53.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setDashStyle("LongDashDotDot");
        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabel($label);
        $obj->setValue(21.0);
        $obj->setWidth(19.0);
        $obj->setZIndex(53.0);

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

        $obj->setDashStyle("Dash");
        $this->assertEquals("Dash", $obj->getDashStyle());

        $obj->setDashStyle("DashDot");
        $this->assertEquals("DashDot", $obj->getDashStyle());

        $obj->setDashStyle("Dot");
        $this->assertEquals("Dot", $obj->getDashStyle());

        $obj->setDashStyle("LongDash");
        $this->assertEquals("LongDash", $obj->getDashStyle());

        $obj->setDashStyle("LongDashDot");
        $this->assertEquals("LongDashDot", $obj->getDashStyle());

        $obj->setDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getDashStyle());

        $obj->setDashStyle("ShortDash");
        $this->assertEquals("ShortDash", $obj->getDashStyle());

        $obj->setDashStyle("ShortDashDot");
        $this->assertEquals("ShortDashDot", $obj->getDashStyle());

        $obj->setDashStyle("ShortDashDotDot");
        $this->assertEquals("ShortDashDotDot", $obj->getDashStyle());

        $obj->setDashStyle("ShortDot");
        $this->assertEquals("ShortDot", $obj->getDashStyle());

        $obj->setDashStyle("Solid");
        $this->assertEquals("Solid", $obj->getDashStyle());
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

        $obj->setValue(83.0);
        $this->assertEquals(83.0, $obj->getValue());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setWidth(20.0);
        $this->assertEquals(20.0, $obj->getWidth());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotLines();

        $obj->setZIndex(24.0);
        $this->assertEquals(24.0, $obj->getZIndex());
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