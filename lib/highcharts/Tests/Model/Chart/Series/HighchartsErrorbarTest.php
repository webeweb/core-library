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
 * Highcharts errorbar test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsErrorbarTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsEvents();
        $point  = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsPoint();
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animationLimit" => 39.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => true, "colorIndex" => 92.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => true, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 61.0, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 6.0, "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => true, "groupZPadding" => 43.0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 68.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21.0, "lineWidth" => 24.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 71.0, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98.0, "pointIntervalUnit" => "year", "pointPadding" => 38.0, "pointPlacement" => "between", "pointRange" => 51.0, "pointStart" => 38.0, "pointWidth" => 90.0, "selected" => false, "skipKeyboardNavigation" => true, "states" => $states->jsonSerialize(), "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 26.0, "stickyTracking" => true, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 8.0, "type" => "waterfall", "visible" => true, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => "37518c6619bd2f0f7e6872160a81d6bb", "whiskerWidth" => 44.0, "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 68.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();
        $obj->setAllowPointSelect(true);
        $obj->setAnimationLimit(39.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorByPoint(true);
        $obj->setColorIndex(92.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCrisp(true);
        $obj->setCursor("crosshair");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDepth(61.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $obj->setEdgeWidth(6.0);
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(true);
        $obj->setGroupZPadding(43.0);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(68.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLegendIndex(21.0);
        $obj->setLineWidth(24.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMaxPointWidth(71.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(98.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointPadding(38.0);
        $obj->setPointPlacement("between");
        $obj->setPointRange(51.0);
        $obj->setPointStart(38.0);
        $obj->setPointWidth(90.0);
        $obj->setSelected(false);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setStates($states);
        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");
        $obj->setStemDashStyle("LongDashDotDot");
        $obj->setStemWidth(26.0);
        $obj->setStickyTracking(true);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTurboThreshold(8.0);
        $obj->setType("waterfall");
        $obj->setVisible(true);
        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");
        $obj->setWhiskerLength("37518c6619bd2f0f7e6872160a81d6bb");
        $obj->setWhiskerWidth(44.0);
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(68.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setAnimationLimit(45.0);
        $this->assertEquals(45.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorByPoint()
     *
     * @return void.
     */
    public function testSetColorByPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setColorByPoint(true);
        $this->assertEquals(true, $obj->getColorByPoint());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setColorIndex(73.0);
        $this->assertEquals(73.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCrisp()
     *
     * @return void.
     */
    public function testSetCrisp(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setCrisp(true);
        $this->assertEquals(true, $obj->getCrisp());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setDepth(22.0);
        $this->assertEquals(22.0, $obj->getDepth());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEdgeColor()
     *
     * @return void.
     */
    public function testSetEdgeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $this->assertEquals("acbab0d2e7e54e5a7a32fc80409601fc", $obj->getEdgeColor());
    }

    /**
     * Tests setEdgeWidth()
     *
     * @return void.
     */
    public function testSetEdgeWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setEdgeWidth(64.0);
        $this->assertEquals(64.0, $obj->getEdgeWidth());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setExposeElementToA11y(true);
        $this->assertEquals(true, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setGetExtremesFromAll(true);
        $this->assertEquals(true, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setGroupZPadding()
     *
     * @return void.
     */
    public function testSetGroupZPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setGroupZPadding(33.0);
        $this->assertEquals(33.0, $obj->getGroupZPadding());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setIndex(61.0);
        $this->assertEquals(61.0, $obj->getIndex());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setLegendIndex(42.0);
        $this->assertEquals(42.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setLineWidth(76.0);
        $this->assertEquals(76.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMaxPointWidth()
     *
     * @return void.
     */
    public function testSetMaxPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setMaxPointWidth(29.0);
        $this->assertEquals(29.0, $obj->getMaxPointWidth());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPointInterval(63.0);
        $this->assertEquals(63.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointPadding()
     *
     * @return void.
     */
    public function testSetPointPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPointPadding(0.0);
        $this->assertEquals(0.0, $obj->getPointPadding());
    }

    /**
     * Tests setPointPlacement()
     *
     * @return void.
     */
    public function testSetPointPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPointPlacement("between");
        $this->assertEquals("between", $obj->getPointPlacement());
    }

    /**
     * Tests setPointRange()
     *
     * @return void.
     */
    public function testSetPointRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPointRange(100.0);
        $this->assertEquals(100.0, $obj->getPointRange());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPointStart(61.0);
        $this->assertEquals(61.0, $obj->getPointStart());
    }

    /**
     * Tests setPointWidth()
     *
     * @return void.
     */
    public function testSetPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setPointWidth(38.0);
        $this->assertEquals(38.0, $obj->getPointWidth());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setSkipKeyboardNavigation(true);
        $this->assertEquals(true, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStemColor()
     *
     * @return void.
     */
    public function testSetStemColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");
        $this->assertEquals("98696f23b6ed2a881042dfa365a28d23", $obj->getStemColor());
    }

    /**
     * Tests setStemDashStyle()
     *
     * @return void.
     */
    public function testSetStemDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setStemDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getStemDashStyle());
    }

    /**
     * Tests setStemWidth()
     *
     * @return void.
     */
    public function testSetStemWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setStemWidth(28.0);
        $this->assertEquals(28.0, $obj->getStemWidth());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setStickyTracking(true);
        $this->assertEquals(true, $obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setTurboThreshold(77.0);
        $this->assertEquals(77.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setType("waterfall");
        $this->assertEquals("waterfall", $obj->getType());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setWhiskerColor()
     *
     * @return void.
     */
    public function testSetWhiskerColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");
        $this->assertEquals("3176f361ab524a038497eb1a6c93df38", $obj->getWhiskerColor());
    }

    /**
     * Tests setWhiskerLength()
     *
     * @return void.
     */
    public function testSetWhiskerLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setWhiskerLength("37518c6619bd2f0f7e6872160a81d6bb");
        $this->assertEquals("37518c6619bd2f0f7e6872160a81d6bb", $obj->getWhiskerLength());
    }

    /**
     * Tests setWhiskerWidth()
     *
     * @return void.
     */
    public function testSetWhiskerWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setWhiskerWidth(30.0);
        $this->assertEquals(30.0, $obj->getWhiskerWidth());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setZIndex(85.0);
        $this->assertEquals(85.0, $obj->getZIndex());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsErrorbar();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertEquals("#000000", $obj->getColor());
        $this->assertEquals(false, $obj->getColorByPoint());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertEquals(true, $obj->getCrisp());
        $this->assertNull($obj->getCursor());
        $this->assertNull($obj->getData());
        $this->assertEquals(25, $obj->getDepth());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getEdgeColor());
        $this->assertEquals(1, $obj->getEdgeWidth());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertEquals(1, $obj->getGroupZPadding());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getKeys());
        $this->assertNull($obj->getLegendIndex());
        $this->assertEquals(1, $obj->getLineWidth());
        $this->assertEquals(":previous", $obj->getLinkedTo());
        $this->assertNull($obj->getMaxPointWidth());
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
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertNull($obj->getStates());
        $this->assertNull($obj->getStemColor());
        $this->assertEquals("Solid", $obj->getStemDashStyle());
        $this->assertNull($obj->getStemWidth());
        $this->assertEquals(true, $obj->getStickyTracking());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(1000, $obj->getTurboThreshold());
        $this->assertNull($obj->getType());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertNull($obj->getWhiskerColor());
        $this->assertEquals("50%", $obj->getWhiskerLength());
        $this->assertNull($obj->getWhiskerWidth());
        $this->assertEquals("0", $obj->getXAxis());
        $this->assertEquals("0", $obj->getYAxis());
        $this->assertNull($obj->getZIndex());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
