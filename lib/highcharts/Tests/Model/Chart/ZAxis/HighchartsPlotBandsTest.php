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

namespace WBW\Library\Highcharts\Tests\Model\Chart\ZAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts plot bands test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\ZAxis
 * @version 5.0.14
 */
class HighchartsPlotBandsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $label = new \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotBands\HighchartsLabel();

        $exp = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 54.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 7.0, "id" => "b80bb7740288fda1f201890375a60c8f", "label" => $label->jsonSerialize(), "to" => 33.0, "zIndex" => 67.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(54.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);
        $obj->setFrom(7.0);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabel($label);
        $obj->setTo(33.0);
        $obj->setZIndex(67.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newLabel()
     *
     * @return void.
     */
    public function testNewLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $res = $obj->newLabel();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\ZAxis\PlotBands\HighchartsLabel::class, $res);
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setBorderWidth(58.0);
        $this->assertEquals(58.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);
        $this->assertEquals(["events" => "16908b0605f2645dfcb4c3a8d248cef3"], $obj->getEvents());
    }

    /**
     * Tests setFrom()
     *
     * @return void.
     */
    public function testSetFrom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setFrom(7.0);
        $this->assertEquals(7.0, $obj->getFrom());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabel()
     *
     * @return void.
     */
    public function testSetLabel(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotBands\HighchartsLabel mock.
        $label = new \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotBands\HighchartsLabel();

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setLabel($label);
        $this->assertSame($label, $obj->getLabel());
    }

    /**
     * Tests setTo()
     *
     * @return void.
     */
    public function testSetTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setTo(28.0);
        $this->assertEquals(28.0, $obj->getTo());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

        $obj->setZIndex(78.0);
        $this->assertEquals(78.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotBands();

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
