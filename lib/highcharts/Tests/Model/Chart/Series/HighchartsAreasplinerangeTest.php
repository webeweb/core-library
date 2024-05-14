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
 * Highcharts areasplinerange test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsAreasplinerangeTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents();
        $point  = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint();
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animation" => true, "animationLimit" => 37.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 17.0, "connectNulls" => false, "cropThreshold" => 1.0, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 78.0, "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88.0, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 75.0, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 91.0, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 46.0, "selected" => true, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showCheckbox" => false, "showInLegend" => true, "skipKeyboardNavigation" => true, "states" => $states->jsonSerialize(), "stickyTracking" => true, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => true, "turboThreshold" => 51.0, "type" => "waterfall", "visible" => true, "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 9.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();
        $obj->setAllowPointSelect(true);
        $obj->setAnimation(true);
        $obj->setAnimationLimit(37.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(17.0);
        $obj->setConnectNulls(false);
        $obj->setCropThreshold(1.0);
        $obj->setCursor("crosshair");
        $obj->setDashStyle("LongDashDotDot");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setFillOpacity(78.0);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(92.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLegendIndex(88.0);
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(75.0);
        $obj->setLinecap("square");
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setNegativeFillColor("a966442d64e00bf8663e7c5d9708074a");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(91.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointPlacement("between");
        $obj->setPointStart(46.0);
        $obj->setSelected(true);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(true);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setStates($states);
        $obj->setStickyTracking(true);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTrackByArea(true);
        $obj->setTurboThreshold(51.0);
        $obj->setType("waterfall");
        $obj->setVisible(true);
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(9.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setAnimation(false);
        $this->assertEquals(false, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setAnimationLimit(6.0);
        $this->assertEquals(6.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setColorIndex(0.0);
        $this->assertEquals(0.0, $obj->getColorIndex());
    }

    /**
     * Tests setConnectNulls()
     *
     * @return void.
     */
    public function testSetConnectNulls(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setConnectNulls(false);
        $this->assertEquals(false, $obj->getConnectNulls());
    }

    /**
     * Tests setCropThreshold()
     *
     * @return void.
     */
    public function testSetCropThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setCropThreshold(28.0);
        $this->assertEquals(28.0, $obj->getCropThreshold());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setCursor(null);
        $this->assertEquals(null, $obj->getCursor());

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
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

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
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $this->assertEquals(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setEnableMouseTracking(true);
        $this->assertEquals(true, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setExposeElementToA11y(true);
        $this->assertEquals(true, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setFillOpacity()
     *
     * @return void.
     */
    public function testSetFillOpacity(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setFillOpacity(16.0);
        $this->assertEquals(16.0, $obj->getFillOpacity());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setGetExtremesFromAll(true);
        $this->assertEquals(true, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setIndex(90.0);
        $this->assertEquals(90.0, $obj->getIndex());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setLegendIndex(28.0);
        $this->assertEquals(28.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setLineWidth(91.0);
        $this->assertEquals(91.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinecap()
     *
     * @return void.
     */
    public function testSetLinecap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setLinecap("round");
        $this->assertEquals("round", $obj->getLinecap());

        $obj->setLinecap("square");
        $this->assertEquals("square", $obj->getLinecap());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setNegativeFillColor()
     *
     * @return void.
     */
    public function testSetNegativeFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setNegativeFillColor("a966442d64e00bf8663e7c5d9708074a");
        $this->assertEquals("a966442d64e00bf8663e7c5d9708074a", $obj->getNegativeFillColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setPointInterval(56.0);
        $this->assertEquals(56.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setPointIntervalUnit(null);
        $this->assertEquals(null, $obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("day");
        $this->assertEquals("day", $obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("month");
        $this->assertEquals("month", $obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointPlacement()
     *
     * @return void.
     */
    public function testSetPointPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setPointPlacement(null);
        $this->assertEquals(null, $obj->getPointPlacement());

        $obj->setPointPlacement("between");
        $this->assertEquals("between", $obj->getPointPlacement());

        $obj->setPointPlacement("on");
        $this->assertEquals("on", $obj->getPointPlacement());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setPointStart(12.0);
        $this->assertEquals(12.0, $obj->getPointStart());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setShowCheckbox(true);
        $this->assertEquals(true, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setShowInLegend(false);
        $this->assertEquals(false, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setSkipKeyboardNavigation(true);
        $this->assertEquals(true, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setStickyTracking(false);
        $this->assertEquals(false, $obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTrackByArea()
     *
     * @return void.
     */
    public function testSetTrackByArea(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setTrackByArea(true);
        $this->assertEquals(true, $obj->getTrackByArea());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setTurboThreshold(2.0);
        $this->assertEquals(2.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setType(null);
        $this->assertEquals(null, $obj->getType());

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setZIndex(19.0);
        $this->assertEquals(19.0, $obj->getZIndex());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertEquals(true, $obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getColorIndex());
        $this->assertEquals(false, $obj->getConnectNulls());
        $this->assertEquals(300, $obj->getCropThreshold());
        $this->assertNull($obj->getCursor());
        $this->assertEquals("Solid", $obj->getDashStyle());
        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFillColor());
        $this->assertEquals(0.75, $obj->getFillOpacity());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getKeys());
        $this->assertNull($obj->getLegendIndex());
        $this->assertNull($obj->getLineColor());
        $this->assertEquals(1, $obj->getLineWidth());
        $this->assertEquals("round", $obj->getLinecap());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getNegativeColor());
        $this->assertNull($obj->getNegativeFillColor());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj->getPointInterval());
        $this->assertNull($obj->getPointIntervalUnit());
        $this->assertNull($obj->getPointPlacement());
        $this->assertEquals(0, $obj->getPointStart());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowCheckbox());
        $this->assertEquals(true, $obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertNull($obj->getStates());
        $this->assertEquals(true, $obj->getStickyTracking());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(true, $obj->getTrackByArea());
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
