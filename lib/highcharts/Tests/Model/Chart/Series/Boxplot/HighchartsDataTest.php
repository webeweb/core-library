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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Boxplot;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Boxplot
 * @version 5.0.14
 */
class HighchartsDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\Data\HighchartsEvents();

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 93.0, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => $events->jsonSerialize(), "high" => 93.0, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 40.0, "low" => 57.0, "median" => 62.0, "name" => "b068931cc450442b63f5b3d276ea4297", "q1" => 72.0, "q3" => 66.0, "selected" => false, "x" => 46.0, "y" => 2.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(93.0);
        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $obj->setEvents($events);
        $obj->setHigh(93.0);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabelrank(40.0);
        $obj->setLow(57.0);
        $obj->setMedian(62.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setQ1(72.0);
        $obj->setQ3(66.0);
        $obj->setSelected(false);
        $obj->setX(46.0);
        $obj->setY(2.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Boxplot\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setColorIndex(74.0);
        $this->assertEquals(74.0, $obj->getColorIndex());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $this->assertEquals(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setDrilldown()
     *
     * @return void.
     */
    public function testSetDrilldown(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $this->assertEquals("e3fd48c72943315f737d8a814fda4fd1", $obj->getDrilldown());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\Data\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\Data\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setHigh()
     *
     * @return void.
     */
    public function testSetHigh(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setHigh(20.0);
        $this->assertEquals(20.0, $obj->getHigh());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabelrank()
     *
     * @return void.
     */
    public function testSetLabelrank(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setLabelrank(55.0);
        $this->assertEquals(55.0, $obj->getLabelrank());
    }

    /**
     * Tests setLow()
     *
     * @return void.
     */
    public function testSetLow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setLow(73.0);
        $this->assertEquals(73.0, $obj->getLow());
    }

    /**
     * Tests setMedian()
     *
     * @return void.
     */
    public function testSetMedian(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setMedian(76.0);
        $this->assertEquals(76.0, $obj->getMedian());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setQ1()
     *
     * @return void.
     */
    public function testSetQ1(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setQ1(80.0);
        $this->assertEquals(80.0, $obj->getQ1());
    }

    /**
     * Tests setQ3()
     *
     * @return void.
     */
    public function testSetQ3(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setQ3(68.0);
        $this->assertEquals(68.0, $obj->getQ3());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setSelected(false);
        $this->assertFalse($obj->getSelected());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setX(16.0);
        $this->assertEquals(16.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $obj->setY(69.0);
        $this->assertEquals(69.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsData();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getDrilldown());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getHigh());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabelrank());
        $this->assertNull($obj->getLow());
        $this->assertNull($obj->getMedian());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getQ1());
        $this->assertNull($obj->getQ3());
        $this->assertFalse($obj->getSelected());
        $this->assertNull($obj->getX());
        $this->assertNull($obj->getY());
    }
}
