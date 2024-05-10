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
 * Highcharts column test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsColumnTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsEvents();
        $point      = new \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsStates();

        $exp = ["allowPointSelect" => false, "animation" => false, "animationLimit" => 38.0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92.0, "borderWidth" => 94.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => false, "colorIndex" => 2.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => false, "cropThreshold" => 40.0, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => $dataLabels->jsonSerialize(), "depth" => 53.0, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17.0, "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => false, "findNearestPointBy" => "xy", "getExtremesFromAll" => true, "groupPadding" => 72.0, "groupZPadding" => 9.0, "grouping" => false, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 3.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 71.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 71.0, "minPointLength" => 31.0, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61.0, "pointIntervalUnit" => "year", "pointPadding" => 61.0, "pointPlacement" => "between", "pointRange" => 55.0, "pointStart" => 94.0, "pointWidth" => 75.0, "selected" => false, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showCheckbox" => true, "showInLegend" => true, "skipKeyboardNavigation" => true, "softThreshold" => true, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => $states->jsonSerialize(), "stickyTracking" => false, "threshold" => 6.0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 23.0, "type" => "waterfall", "visible" => true, "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 0.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();
        $obj->setAllowPointSelect(false);
        $obj->setAnimation(false);
        $obj->setAnimationLimit(38.0);
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderRadius(92.0);
        $obj->setBorderWidth(94.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorByPoint(false);
        $obj->setColorIndex(2.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCrisp(false);
        $obj->setCropThreshold(40.0);
        $obj->setCursor("crosshair");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDataLabels($dataLabels);
        $obj->setDepth(53.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $obj->setEdgeWidth(17.0);
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(false);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(true);
        $obj->setGroupPadding(72.0);
        $obj->setGroupZPadding(9.0);
        $obj->setGrouping(false);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(3.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLegendIndex(71.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMaxPointWidth(71.0);
        $obj->setMinPointLength(31.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(61.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointPadding(61.0);
        $obj->setPointPlacement("between");
        $obj->setPointRange(55.0);
        $obj->setPointStart(94.0);
        $obj->setPointWidth(75.0);
        $obj->setSelected(false);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowCheckbox(true);
        $obj->setShowInLegend(true);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setSoftThreshold(true);
        $obj->setStack("fac2a47adace059aff113283a03f6760");
        $obj->setStacking("percent");
        $obj->setStates($states);
        $obj->setStickyTracking(false);
        $obj->setThreshold(6.0);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTurboThreshold(23.0);
        $obj->setType("waterfall");
        $obj->setVisible(true);
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(0.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setAnimation(true);
        $this->assertEquals(true, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setAnimationLimit(41.0);
        $this->assertEquals(41.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderRadius()
     *
     * @return void.
     */
    public function testSetBorderRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setBorderRadius(86.0);
        $this->assertEquals(86.0, $obj->getBorderRadius());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setBorderWidth(52.0);
        $this->assertEquals(52.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorByPoint()
     *
     * @return void.
     */
    public function testSetColorByPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setColorByPoint(true);
        $this->assertEquals(true, $obj->getColorByPoint());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setColorIndex(59.0);
        $this->assertEquals(59.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCrisp()
     *
     * @return void.
     */
    public function testSetCrisp(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setCrisp(true);
        $this->assertEquals(true, $obj->getCrisp());
    }

    /**
     * Tests setCropThreshold()
     *
     * @return void.
     */
    public function testSetCropThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setCropThreshold(32.0);
        $this->assertEquals(32.0, $obj->getCropThreshold());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setDepth(31.0);
        $this->assertEquals(31.0, $obj->getDepth());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEdgeColor()
     *
     * @return void.
     */
    public function testSetEdgeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $this->assertEquals("acbab0d2e7e54e5a7a32fc80409601fc", $obj->getEdgeColor());
    }

    /**
     * Tests setEdgeWidth()
     *
     * @return void.
     */
    public function testSetEdgeWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setEdgeWidth(62.0);
        $this->assertEquals(62.0, $obj->getEdgeWidth());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setEnableMouseTracking(true);
        $this->assertEquals(true, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setExposeElementToA11y(false);
        $this->assertEquals(false, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setGroupPadding()
     *
     * @return void.
     */
    public function testSetGroupPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setGroupPadding(21.0);
        $this->assertEquals(21.0, $obj->getGroupPadding());
    }

    /**
     * Tests setGroupZPadding()
     *
     * @return void.
     */
    public function testSetGroupZPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setGroupZPadding(65.0);
        $this->assertEquals(65.0, $obj->getGroupZPadding());
    }

    /**
     * Tests setGrouping()
     *
     * @return void.
     */
    public function testSetGrouping(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setGrouping(true);
        $this->assertEquals(true, $obj->getGrouping());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setIndex(83.0);
        $this->assertEquals(83.0, $obj->getIndex());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setLegendIndex(20.0);
        $this->assertEquals(20.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMaxPointWidth()
     *
     * @return void.
     */
    public function testSetMaxPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setMaxPointWidth(88.0);
        $this->assertEquals(88.0, $obj->getMaxPointWidth());
    }

    /**
     * Tests setMinPointLength()
     *
     * @return void.
     */
    public function testSetMinPointLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setMinPointLength(57.0);
        $this->assertEquals(57.0, $obj->getMinPointLength());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPointInterval(23.0);
        $this->assertEquals(23.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointPadding()
     *
     * @return void.
     */
    public function testSetPointPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPointPadding(55.0);
        $this->assertEquals(55.0, $obj->getPointPadding());
    }

    /**
     * Tests setPointPlacement()
     *
     * @return void.
     */
    public function testSetPointPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPointPlacement("between");
        $this->assertEquals("between", $obj->getPointPlacement());
    }

    /**
     * Tests setPointRange()
     *
     * @return void.
     */
    public function testSetPointRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPointRange(36.0);
        $this->assertEquals(36.0, $obj->getPointRange());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPointStart(99.0);
        $this->assertEquals(99.0, $obj->getPointStart());
    }

    /**
     * Tests setPointWidth()
     *
     * @return void.
     */
    public function testSetPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setPointWidth(40.0);
        $this->assertEquals(40.0, $obj->getPointWidth());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setSelected(false);
        $this->assertEquals(false, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setShowCheckbox(false);
        $this->assertEquals(false, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setShowInLegend(true);
        $this->assertEquals(true, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setSoftThreshold()
     *
     * @return void.
     */
    public function testSetSoftThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setSoftThreshold(false);
        $this->assertEquals(false, $obj->getSoftThreshold());
    }

    /**
     * Tests setStack()
     *
     * @return void.
     */
    public function testSetStack(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setStack("fac2a47adace059aff113283a03f6760");
        $this->assertEquals("fac2a47adace059aff113283a03f6760", $obj->getStack());
    }

    /**
     * Tests setStacking()
     *
     * @return void.
     */
    public function testSetStacking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setStacking("percent");
        $this->assertEquals("percent", $obj->getStacking());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Column\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setStickyTracking(false);
        $this->assertEquals(false, $obj->getStickyTracking());
    }

    /**
     * Tests setThreshold()
     *
     * @return void.
     */
    public function testSetThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setThreshold(36.0);
        $this->assertEquals(36.0, $obj->getThreshold());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setTurboThreshold(47.0);
        $this->assertEquals(47.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setType("waterfall");
        $this->assertEquals("waterfall", $obj->getType());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setZIndex(89.0);
        $this->assertEquals(89.0, $obj->getZIndex());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsColumn();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertEquals(true, $obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderRadius());
        $this->assertEquals(1, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertEquals(false, $obj->getColorByPoint());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertEquals(true, $obj->getCrisp());
        $this->assertEquals(50, $obj->getCropThreshold());
        $this->assertNull($obj->getCursor());
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
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMaxPointWidth());
        $this->assertEquals(0, $obj->getMinPointLength());
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
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowCheckbox());
        $this->assertEquals(true, $obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj->getSoftThreshold());
        $this->assertNull($obj->getStack());
        $this->assertNull($obj->getStacking());
        $this->assertNull($obj->getStates());
        $this->assertEquals(true, $obj->getStickyTracking());
        $this->assertEquals(0, $obj->getThreshold());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(1000, $obj->getTurboThreshold());
        $this->assertNull($obj->getType());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals("0", $obj->getXAxis());
        $this->assertEquals("0", $obj->getYAxis());
        $this->assertNull($obj->getZIndex());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
