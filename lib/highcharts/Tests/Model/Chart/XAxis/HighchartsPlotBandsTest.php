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
 * Highcharts plot bands test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsPlotBandsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $label = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel();

        $exp = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 8.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 83.0, "id" => "b80bb7740288fda1f201890375a60c8f", "label" => $label->jsonSerialize(), "to" => 75.0, "zIndex" => 24.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(8.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);
        $obj->setFrom(83.0);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabel($label);
        $obj->setTo(75.0);
        $obj->setZIndex(24.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newLabel()
     *
     * @return void.
     */
    public function testNewLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $res = $obj->newLabel();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel::class, $res);
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setBorderWidth(26.0);
        $this->assertEquals(26.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);
        $this->assertEquals(["events" => "16908b0605f2645dfcb4c3a8d248cef3"], $obj->getEvents());
    }

    /**
     * Tests setFrom()
     *
     * @return void.
     */
    public function testSetFrom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setFrom(15.0);
        $this->assertEquals(15.0, $obj->getFrom());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabel()
     *
     * @return void.
     */
    public function testSetLabel(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel mock.
        $label = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel();

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setLabel($label);
        $this->assertSame($label, $obj->getLabel());
    }

    /**
     * Tests setTo()
     *
     * @return void.
     */
    public function testSetTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setTo(91.0);
        $this->assertEquals(91.0, $obj->getTo());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $obj->setZIndex(70.0);
        $this->assertEquals(70.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands();

        $this->assertNull($obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getFrom());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getTo());
        $this->assertNull($obj->getZIndex());
    }
}
