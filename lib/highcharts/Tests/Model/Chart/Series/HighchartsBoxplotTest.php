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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts boxplot test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsBoxplotTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsEvents();
        $point  = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsPoint();
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsStates();

        $exp = ["allowPointSelect" => false, "animationLimit" => 59.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => false, "colorIndex" => 59.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => true, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 74.0, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 16.0, "enableMouseTracking" => false, "events" => $events->jsonSerialize(), "exposeElementToA11y" => false, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "groupPadding" => 98.0, "groupZPadding" => 41.0, "grouping" => false, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 39.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 85.0, "lineWidth" => 67.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 83.0, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 67.0, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 90.0, "pointIntervalUnit" => "year", "pointPadding" => 25.0, "pointPlacement" => "between", "pointRange" => 4.0, "pointStart" => 42.0, "pointWidth" => 15.0, "selected" => false, "showCheckbox" => true, "showInLegend" => true, "skipKeyboardNavigation" => true, "states" => $states->jsonSerialize(), "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 87.0, "stickyTracking" => false, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 12.0, "type" => "waterfall", "visible" => true, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => "37518c6619bd2f0f7e6872160a81d6bb", "whiskerWidth" => 95.0, "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 71.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();
        $obj->setAllowPointSelect(false);
        $obj->setAnimationLimit(59.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorByPoint(false);
        $obj->setColorIndex(59.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCrisp(true);
        $obj->setCursor("crosshair");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDepth(74.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $obj->setEdgeWidth(16.0);
        $obj->setEnableMouseTracking(false);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(false);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setGroupPadding(98.0);
        $obj->setGroupZPadding(41.0);
        $obj->setGrouping(false);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(39.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLegendIndex(85.0);
        $obj->setLineWidth(67.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMaxPointWidth(83.0);
        $obj->setMedianColor("c7dbc658d3d58056469f6d2d5a8a3626");
        $obj->setMedianWidth(67.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(90.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointPadding(25.0);
        $obj->setPointPlacement("between");
        $obj->setPointRange(4.0);
        $obj->setPointStart(42.0);
        $obj->setPointWidth(15.0);
        $obj->setSelected(false);
        $obj->setShowCheckbox(true);
        $obj->setShowInLegend(true);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setStates($states);
        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");
        $obj->setStemDashStyle("LongDashDotDot");
        $obj->setStemWidth(87.0);
        $obj->setStickyTracking(false);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTurboThreshold(12.0);
        $obj->setType("waterfall");
        $obj->setVisible(true);
        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");
        $obj->setWhiskerLength("37518c6619bd2f0f7e6872160a81d6bb");
        $obj->setWhiskerWidth(95.0);
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(71.0);
        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setAllowPointSelect(false);
        $this->assertFalse($obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setAnimationLimit(54.0);
        $this->assertEquals(54.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorByPoint()
     *
     * @return void.
     */
    public function testSetColorByPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setColorByPoint(false);
        $this->assertFalse($obj->getColorByPoint());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setColorIndex(83.0);
        $this->assertEquals(83.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCrisp()
     *
     * @return void.
     */
    public function testSetCrisp(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setCrisp(true);
        $this->assertTrue($obj->getCrisp());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setCursor(null);
        $this->assertNull($obj->getCursor());

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());

        $obj->setCursor("default");
        $this->assertEquals("default", $obj->getCursor());

        $obj->setCursor("help");
        $this->assertEquals("help", $obj->getCursor());

        $obj->setCursor("none");
        $this->assertEquals("none", $obj->getCursor());

        $obj->setCursor("pointer");
        $this->assertEquals("pointer", $obj->getCursor());
    }

    /**
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setDepth(59.0);
        $this->assertEquals(59.0, $obj->getDepth());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEdgeColor()
     *
     * @return void.
     */
    public function testSetEdgeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $this->assertEquals("acbab0d2e7e54e5a7a32fc80409601fc", $obj->getEdgeColor());
    }

    /**
     * Tests setEdgeWidth()
     *
     * @return void.
     */
    public function testSetEdgeWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setEdgeWidth(21.0);
        $this->assertEquals(21.0, $obj->getEdgeWidth());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setEnableMouseTracking(true);
        $this->assertTrue($obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setExposeElementToA11y(true);
        $this->assertTrue($obj->getExposeElementToA11y());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setFindNearestPointBy("x");
        $this->assertEquals("x", $obj->getFindNearestPointBy());

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setGetExtremesFromAll(true);
        $this->assertTrue($obj->getGetExtremesFromAll());
    }

    /**
     * Tests setGroupPadding()
     *
     * @return void.
     */
    public function testSetGroupPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setGroupPadding(89.0);
        $this->assertEquals(89.0, $obj->getGroupPadding());
    }

    /**
     * Tests setGroupZPadding()
     *
     * @return void.
     */
    public function testSetGroupZPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setGroupZPadding(96.0);
        $this->assertEquals(96.0, $obj->getGroupZPadding());
    }

    /**
     * Tests setGrouping()
     *
     * @return void.
     */
    public function testSetGrouping(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setGrouping(false);
        $this->assertFalse($obj->getGrouping());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setIndex(55.0);
        $this->assertEquals(55.0, $obj->getIndex());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setLegendIndex(79.0);
        $this->assertEquals(79.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setLineWidth(13.0);
        $this->assertEquals(13.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMaxPointWidth()
     *
     * @return void.
     */
    public function testSetMaxPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setMaxPointWidth(45.0);
        $this->assertEquals(45.0, $obj->getMaxPointWidth());
    }

    /**
     * Tests setMedianColor()
     *
     * @return void.
     */
    public function testSetMedianColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setMedianColor("c7dbc658d3d58056469f6d2d5a8a3626");
        $this->assertEquals("c7dbc658d3d58056469f6d2d5a8a3626", $obj->getMedianColor());
    }

    /**
     * Tests setMedianWidth()
     *
     * @return void.
     */
    public function testSetMedianWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setMedianWidth(3.0);
        $this->assertEquals(3.0, $obj->getMedianWidth());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPointInterval(18.0);
        $this->assertEquals(18.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPointIntervalUnit(null);
        $this->assertNull($obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("day");
        $this->assertEquals("day", $obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("month");
        $this->assertEquals("month", $obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointPadding()
     *
     * @return void.
     */
    public function testSetPointPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPointPadding(88.0);
        $this->assertEquals(88.0, $obj->getPointPadding());
    }

    /**
     * Tests setPointPlacement()
     *
     * @return void.
     */
    public function testSetPointPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPointPlacement(null);
        $this->assertNull($obj->getPointPlacement());

        $obj->setPointPlacement("between");
        $this->assertEquals("between", $obj->getPointPlacement());

        $obj->setPointPlacement("on");
        $this->assertEquals("on", $obj->getPointPlacement());
    }

    /**
     * Tests setPointRange()
     *
     * @return void.
     */
    public function testSetPointRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPointRange(19.0);
        $this->assertEquals(19.0, $obj->getPointRange());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPointStart(37.0);
        $this->assertEquals(37.0, $obj->getPointStart());
    }

    /**
     * Tests setPointWidth()
     *
     * @return void.
     */
    public function testSetPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setPointWidth(46.0);
        $this->assertEquals(46.0, $obj->getPointWidth());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setSelected(true);
        $this->assertTrue($obj->getSelected());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setShowCheckbox(false);
        $this->assertFalse($obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setShowInLegend(false);
        $this->assertFalse($obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertFalse($obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Boxplot\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStemColor()
     *
     * @return void.
     */
    public function testSetStemColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");
        $this->assertEquals("98696f23b6ed2a881042dfa365a28d23", $obj->getStemColor());
    }

    /**
     * Tests setStemDashStyle()
     *
     * @return void.
     */
    public function testSetStemDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setStemDashStyle("Dash");
        $this->assertEquals("Dash", $obj->getStemDashStyle());

        $obj->setStemDashStyle("DashDot");
        $this->assertEquals("DashDot", $obj->getStemDashStyle());

        $obj->setStemDashStyle("Dot");
        $this->assertEquals("Dot", $obj->getStemDashStyle());

        $obj->setStemDashStyle("LongDash");
        $this->assertEquals("LongDash", $obj->getStemDashStyle());

        $obj->setStemDashStyle("LongDashDot");
        $this->assertEquals("LongDashDot", $obj->getStemDashStyle());

        $obj->setStemDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getStemDashStyle());

        $obj->setStemDashStyle("ShortDash");
        $this->assertEquals("ShortDash", $obj->getStemDashStyle());

        $obj->setStemDashStyle("ShortDashDot");
        $this->assertEquals("ShortDashDot", $obj->getStemDashStyle());

        $obj->setStemDashStyle("ShortDashDotDot");
        $this->assertEquals("ShortDashDotDot", $obj->getStemDashStyle());

        $obj->setStemDashStyle("ShortDot");
        $this->assertEquals("ShortDot", $obj->getStemDashStyle());

        $obj->setStemDashStyle("Solid");
        $this->assertEquals("Solid", $obj->getStemDashStyle());
    }

    /**
     * Tests setStemWidth()
     *
     * @return void.
     */
    public function testSetStemWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setStemWidth(41.0);
        $this->assertEquals(41.0, $obj->getStemWidth());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setStickyTracking(false);
        $this->assertFalse($obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setTurboThreshold(16.0);
        $this->assertEquals(16.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setType(null);
        $this->assertNull($obj->getType());

        $obj->setType("area");
        $this->assertEquals("area", $obj->getType());

        $obj->setType("arearange");
        $this->assertEquals("arearange", $obj->getType());

        $obj->setType("areaspline");
        $this->assertEquals("areaspline", $obj->getType());

        $obj->setType("areasplinerange");
        $this->assertEquals("areasplinerange", $obj->getType());

        $obj->setType("boxplot");
        $this->assertEquals("boxplot", $obj->getType());

        $obj->setType("bubble");
        $this->assertEquals("bubble", $obj->getType());

        $obj->setType("column");
        $this->assertEquals("column", $obj->getType());

        $obj->setType("columnrange");
        $this->assertEquals("columnrange", $obj->getType());

        $obj->setType("errorbar");
        $this->assertEquals("errorbar", $obj->getType());

        $obj->setType("funnel");
        $this->assertEquals("funnel", $obj->getType());

        $obj->setType("gauge");
        $this->assertEquals("gauge", $obj->getType());

        $obj->setType("line");
        $this->assertEquals("line", $obj->getType());

        $obj->setType("pie");
        $this->assertEquals("pie", $obj->getType());

        $obj->setType("scatter");
        $this->assertEquals("scatter", $obj->getType());

        $obj->setType("spline");
        $this->assertEquals("spline", $obj->getType());

        $obj->setType("waterfall");
        $this->assertEquals("waterfall", $obj->getType());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setVisible(false);
        $this->assertFalse($obj->getVisible());
    }

    /**
     * Tests setWhiskerColor()
     *
     * @return void.
     */
    public function testSetWhiskerColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");
        $this->assertEquals("3176f361ab524a038497eb1a6c93df38", $obj->getWhiskerColor());
    }

    /**
     * Tests setWhiskerLength()
     *
     * @return void.
     */
    public function testSetWhiskerLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setWhiskerLength("37518c6619bd2f0f7e6872160a81d6bb");
        $this->assertEquals("37518c6619bd2f0f7e6872160a81d6bb", $obj->getWhiskerLength());
    }

    /**
     * Tests setWhiskerWidth()
     *
     * @return void.
     */
    public function testSetWhiskerWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setWhiskerWidth(18.0);
        $this->assertEquals(18.0, $obj->getWhiskerWidth());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setZIndex(71.0);
        $this->assertEquals(71.0, $obj->getZIndex());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsBoxplot();

        $this->assertFalse($obj->getAllowPointSelect());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertFalse($obj->getColorByPoint());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertTrue($obj->getCrisp());
        $this->assertNull($obj->getCursor());
        $this->assertNull($obj->getData());
        $this->assertEquals(25, $obj->getDepth());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getEdgeColor());
        $this->assertEquals(1, $obj->getEdgeWidth());
        $this->assertTrue($obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertEquals("#ffffff", $obj->getFillColor());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertFalse($obj->getGetExtremesFromAll());
        $this->assertEquals(0.2, $obj->getGroupPadding());
        $this->assertEquals(1, $obj->getGroupZPadding());
        $this->assertTrue($obj->getGrouping());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getKeys());
        $this->assertNull($obj->getLegendIndex());
        $this->assertEquals(1, $obj->getLineWidth());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMaxPointWidth());
        $this->assertNull($obj->getMedianColor());
        $this->assertEquals(2, $obj->getMedianWidth());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getNegativeColor());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj->getPointInterval());
        $this->assertNull($obj->getPointIntervalUnit());
        $this->assertEquals(0.1, $obj->getPointPadding());
        $this->assertNull($obj->getPointPlacement());
        $this->assertNull($obj->getPointRange());
        $this->assertEquals(0, $obj->getPointStart());
        $this->assertNull($obj->getPointWidth());
        $this->assertFalse($obj->getSelected());
        $this->assertFalse($obj->getShowCheckbox());
        $this->assertTrue($obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertNull($obj->getStates());
        $this->assertNull($obj->getStemColor());
        $this->assertEquals("Solid", $obj->getStemDashStyle());
        $this->assertNull($obj->getStemWidth());
        $this->assertTrue($obj->getStickyTracking());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(1000, $obj->getTurboThreshold());
        $this->assertNull($obj->getType());
        $this->assertTrue($obj->getVisible());
        $this->assertNull($obj->getWhiskerColor());
        $this->assertEquals("50%", $obj->getWhiskerLength());
        $this->assertEquals(2, $obj->getWhiskerWidth());
        $this->assertEquals("0", $obj->getXAxis());
        $this->assertEquals("0", $obj->getYAxis());
        $this->assertNull($obj->getZIndex());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
