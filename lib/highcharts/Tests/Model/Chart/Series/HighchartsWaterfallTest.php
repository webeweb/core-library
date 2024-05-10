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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts waterfall test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsWaterfallTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsEvents();
        $point      = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animation" => true, "animationLimit" => 38.0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 57.0, "borderWidth" => 86.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => false, "colorIndex" => 75.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => false, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => $dataLabels->jsonSerialize(), "depth" => 59.0, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 55.0, "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "groupPadding" => 87.0, "groupZPadding" => 38.0, "grouping" => true, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 57.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 10.0, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 85.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 47.0, "minPointLength" => 13.0, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 6.0, "pointIntervalUnit" => "year", "pointPadding" => 66.0, "pointPlacement" => "between", "pointRange" => 67.0, "pointStart" => 83.0, "pointWidth" => 94.0, "selected" => false, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showCheckbox" => false, "showInLegend" => false, "skipKeyboardNavigation" => true, "softThreshold" => false, "stack" => "fac2a47adace059aff113283a03f6760", "states" => $states->jsonSerialize(), "stickyTracking" => false, "threshold" => 30.0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => true, "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 65.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();
        $obj->setAllowPointSelect(true);
        $obj->setAnimation(true);
        $obj->setAnimationLimit(38.0);
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderRadius(57.0);
        $obj->setBorderWidth(86.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorByPoint(false);
        $obj->setColorIndex(75.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCrisp(false);
        $obj->setCursor("crosshair");
        $obj->setDashStyle("5ad5e24042182b1974cdf57345defe8e");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDataLabels($dataLabels);
        $obj->setDepth(59.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $obj->setEdgeWidth(55.0);
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setGroupPadding(87.0);
        $obj->setGroupZPadding(38.0);
        $obj->setGrouping(true);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(57.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLegendIndex(10.0);
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(85.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMaxPointWidth(47.0);
        $obj->setMinPointLength(13.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(6.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointPadding(66.0);
        $obj->setPointPlacement("between");
        $obj->setPointRange(67.0);
        $obj->setPointStart(83.0);
        $obj->setPointWidth(94.0);
        $obj->setSelected(false);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setSoftThreshold(false);
        $obj->setStack("fac2a47adace059aff113283a03f6760");
        $obj->setStates($states);
        $obj->setStickyTracking(false);
        $obj->setThreshold(30.0);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setType("waterfall");
        $obj->setUpColor("a0ad37cccbf214955f19b240232be957");
        $obj->setVisible(true);
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(65.0);
        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newDataLabels()
     *
     * @return void.
     */
    public function testNewDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setAnimation(true);
        $this->assertEquals(true, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setAnimationLimit(40.0);
        $this->assertEquals(40.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderRadius()
     *
     * @return void.
     */
    public function testSetBorderRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setBorderRadius(24.0);
        $this->assertEquals(24.0, $obj->getBorderRadius());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setBorderWidth(58.0);
        $this->assertEquals(58.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorByPoint()
     *
     * @return void.
     */
    public function testSetColorByPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setColorByPoint(true);
        $this->assertEquals(true, $obj->getColorByPoint());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setColorIndex(96.0);
        $this->assertEquals(96.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCrisp()
     *
     * @return void.
     */
    public function testSetCrisp(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setCrisp(false);
        $this->assertEquals(false, $obj->getCrisp());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setDashStyle("5ad5e24042182b1974cdf57345defe8e");
        $this->assertEquals("5ad5e24042182b1974cdf57345defe8e", $obj->getDashStyle());
    }

    /**
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setDepth(27.0);
        $this->assertEquals(27.0, $obj->getDepth());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEdgeColor()
     *
     * @return void.
     */
    public function testSetEdgeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $this->assertEquals("acbab0d2e7e54e5a7a32fc80409601fc", $obj->getEdgeColor());
    }

    /**
     * Tests setEdgeWidth()
     *
     * @return void.
     */
    public function testSetEdgeWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setEdgeWidth(83.0);
        $this->assertEquals(83.0, $obj->getEdgeWidth());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setEnableMouseTracking(true);
        $this->assertEquals(true, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setExposeElementToA11y(true);
        $this->assertEquals(true, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setGroupPadding()
     *
     * @return void.
     */
    public function testSetGroupPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setGroupPadding(96.0);
        $this->assertEquals(96.0, $obj->getGroupPadding());
    }

    /**
     * Tests setGroupZPadding()
     *
     * @return void.
     */
    public function testSetGroupZPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setGroupZPadding(68.0);
        $this->assertEquals(68.0, $obj->getGroupZPadding());
    }

    /**
     * Tests setGrouping()
     *
     * @return void.
     */
    public function testSetGrouping(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setGrouping(true);
        $this->assertEquals(true, $obj->getGrouping());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setIndex(9.0);
        $this->assertEquals(9.0, $obj->getIndex());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setLegendIndex(75.0);
        $this->assertEquals(75.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setLineWidth(52.0);
        $this->assertEquals(52.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMaxPointWidth()
     *
     * @return void.
     */
    public function testSetMaxPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setMaxPointWidth(76.0);
        $this->assertEquals(76.0, $obj->getMaxPointWidth());
    }

    /**
     * Tests setMinPointLength()
     *
     * @return void.
     */
    public function testSetMinPointLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setMinPointLength(57.0);
        $this->assertEquals(57.0, $obj->getMinPointLength());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPointInterval(45.0);
        $this->assertEquals(45.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointPadding()
     *
     * @return void.
     */
    public function testSetPointPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPointPadding(9.0);
        $this->assertEquals(9.0, $obj->getPointPadding());
    }

    /**
     * Tests setPointPlacement()
     *
     * @return void.
     */
    public function testSetPointPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPointPlacement("between");
        $this->assertEquals("between", $obj->getPointPlacement());
    }

    /**
     * Tests setPointRange()
     *
     * @return void.
     */
    public function testSetPointRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPointRange(83.0);
        $this->assertEquals(83.0, $obj->getPointRange());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPointStart(70.0);
        $this->assertEquals(70.0, $obj->getPointStart());
    }

    /**
     * Tests setPointWidth()
     *
     * @return void.
     */
    public function testSetPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setPointWidth(61.0);
        $this->assertEquals(61.0, $obj->getPointWidth());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setSelected(false);
        $this->assertEquals(false, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setShowCheckbox(true);
        $this->assertEquals(true, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setShowInLegend(true);
        $this->assertEquals(true, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setSoftThreshold()
     *
     * @return void.
     */
    public function testSetSoftThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setSoftThreshold(false);
        $this->assertEquals(false, $obj->getSoftThreshold());
    }

    /**
     * Tests setStack()
     *
     * @return void.
     */
    public function testSetStack(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setStack("fac2a47adace059aff113283a03f6760");
        $this->assertEquals("fac2a47adace059aff113283a03f6760", $obj->getStack());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setStickyTracking(false);
        $this->assertEquals(false, $obj->getStickyTracking());
    }

    /**
     * Tests setThreshold()
     *
     * @return void.
     */
    public function testSetThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setThreshold(4.0);
        $this->assertEquals(4.0, $obj->getThreshold());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setType("waterfall");
        $this->assertEquals("waterfall", $obj->getType());
    }

    /**
     * Tests setUpColor()
     *
     * @return void.
     */
    public function testSetUpColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setUpColor("a0ad37cccbf214955f19b240232be957");
        $this->assertEquals("a0ad37cccbf214955f19b240232be957", $obj->getUpColor());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setZIndex(31.0);
        $this->assertEquals(31.0, $obj->getZIndex());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsWaterfall();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertEquals(true, $obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertEquals("#333333", $obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderRadius());
        $this->assertEquals(1, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertEquals(false, $obj->getColorByPoint());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertEquals(true, $obj->getCrisp());
        $this->assertNull($obj->getCursor());
        $this->assertEquals("Dot", $obj->getDashStyle());
        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDataLabels());
        $this->assertEquals(25, $obj->getDepth());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getEdgeColor());
        $this->assertEquals(1, $obj->getEdgeWidth());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertEquals(0.2, $obj->getGroupPadding());
        $this->assertEquals(1, $obj->getGroupZPadding());
        $this->assertEquals(true, $obj->getGrouping());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getKeys());
        $this->assertNull($obj->getLegendIndex());
        $this->assertEquals("#333333", $obj->getLineColor());
        $this->assertEquals(1, $obj->getLineWidth());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMaxPointWidth());
        $this->assertEquals(0, $obj->getMinPointLength());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj->getPointInterval());
        $this->assertNull($obj->getPointIntervalUnit());
        $this->assertEquals(0.1, $obj->getPointPadding());
        $this->assertNull($obj->getPointPlacement());
        $this->assertNull($obj->getPointRange());
        $this->assertEquals(0, $obj->getPointStart());
        $this->assertNull($obj->getPointWidth());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowCheckbox());
        $this->assertEquals(true, $obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj->getSoftThreshold());
        $this->assertNull($obj->getStack());
        $this->assertNull($obj->getStates());
        $this->assertEquals(true, $obj->getStickyTracking());
        $this->assertEquals(0, $obj->getThreshold());
        $this->assertNull($obj->getTooltip());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUpColor());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals("0", $obj->getXAxis());
        $this->assertEquals("0", $obj->getYAxis());
        $this->assertNull($obj->getZIndex());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
