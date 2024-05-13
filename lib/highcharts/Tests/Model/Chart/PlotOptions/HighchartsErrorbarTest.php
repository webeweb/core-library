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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts errorbar test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsErrorbarTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents();
        $point  = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint();
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animationLimit" => 70.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => false, "colorIndex" => 65.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => true, "cursor" => "crosshair", "depth" => 48.0, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81.0, "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "groupZPadding" => 66.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 36.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 100.0, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 87.0, "pointIntervalUnit" => "year", "pointPadding" => 20.0, "pointPlacement" => "between", "pointRange" => 77.0, "pointStart" => 61.0, "pointWidth" => 93.0, "selected" => true, "skipKeyboardNavigation" => true, "states" => $states->jsonSerialize(), "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 96.0, "stickyTracking" => true, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 24.0, "visible" => false, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => "37518c6619bd2f0f7e6872160a81d6bb", "whiskerWidth" => 58.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();
        $obj->setAllowPointSelect(true);
        $obj->setAnimationLimit(70.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorByPoint(false);
        $obj->setColorIndex(65.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCrisp(true);
        $obj->setCursor("crosshair");
        $obj->setDepth(48.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $obj->setEdgeWidth(81.0);
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setGroupZPadding(66.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLineWidth(36.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMaxPointWidth(100.0);
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(87.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointPadding(20.0);
        $obj->setPointPlacement("between");
        $obj->setPointRange(77.0);
        $obj->setPointStart(61.0);
        $obj->setPointWidth(93.0);
        $obj->setSelected(true);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setStates($states);
        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");
        $obj->setStemDashStyle("LongDashDotDot");
        $obj->setStemWidth(96.0);
        $obj->setStickyTracking(true);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTurboThreshold(24.0);
        $obj->setVisible(false);
        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");
        $obj->setWhiskerLength("37518c6619bd2f0f7e6872160a81d6bb");
        $obj->setWhiskerWidth(58.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setAnimationLimit(10.0);
        $this->assertEquals(10.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorByPoint()
     *
     * @return void.
     */
    public function testSetColorByPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setColorByPoint(false);
        $this->assertEquals(false, $obj->getColorByPoint());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setColorIndex(94.0);
        $this->assertEquals(94.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCrisp()
     *
     * @return void.
     */
    public function testSetCrisp(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setCrisp(false);
        $this->assertEquals(false, $obj->getCrisp());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setDepth(63.0);
        $this->assertEquals(63.0, $obj->getDepth());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEdgeColor()
     *
     * @return void.
     */
    public function testSetEdgeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $this->assertEquals("acbab0d2e7e54e5a7a32fc80409601fc", $obj->getEdgeColor());
    }

    /**
     * Tests setEdgeWidth()
     *
     * @return void.
     */
    public function testSetEdgeWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setEdgeWidth(83.0);
        $this->assertEquals(83.0, $obj->getEdgeWidth());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setExposeElementToA11y(true);
        $this->assertEquals(true, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setGroupZPadding()
     *
     * @return void.
     */
    public function testSetGroupZPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setGroupZPadding(0.0);
        $this->assertEquals(0.0, $obj->getGroupZPadding());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setLineWidth(26.0);
        $this->assertEquals(26.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMaxPointWidth()
     *
     * @return void.
     */
    public function testSetMaxPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setMaxPointWidth(28.0);
        $this->assertEquals(28.0, $obj->getMaxPointWidth());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPointInterval(97.0);
        $this->assertEquals(97.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointPadding()
     *
     * @return void.
     */
    public function testSetPointPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPointPadding(15.0);
        $this->assertEquals(15.0, $obj->getPointPadding());
    }

    /**
     * Tests setPointPlacement()
     *
     * @return void.
     */
    public function testSetPointPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPointPlacement("between");
        $this->assertEquals("between", $obj->getPointPlacement());
    }

    /**
     * Tests setPointRange()
     *
     * @return void.
     */
    public function testSetPointRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPointRange(50.0);
        $this->assertEquals(50.0, $obj->getPointRange());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPointStart(62.0);
        $this->assertEquals(62.0, $obj->getPointStart());
    }

    /**
     * Tests setPointWidth()
     *
     * @return void.
     */
    public function testSetPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setPointWidth(52.0);
        $this->assertEquals(52.0, $obj->getPointWidth());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setSelected(false);
        $this->assertEquals(false, $obj->getSelected());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStemColor()
     *
     * @return void.
     */
    public function testSetStemColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");
        $this->assertEquals("98696f23b6ed2a881042dfa365a28d23", $obj->getStemColor());
    }

    /**
     * Tests setStemDashStyle()
     *
     * @return void.
     */
    public function testSetStemDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setStemDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getStemDashStyle());
    }

    /**
     * Tests setStemWidth()
     *
     * @return void.
     */
    public function testSetStemWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setStemWidth(73.0);
        $this->assertEquals(73.0, $obj->getStemWidth());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setStickyTracking(false);
        $this->assertEquals(false, $obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setTurboThreshold(10.0);
        $this->assertEquals(10.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setWhiskerColor()
     *
     * @return void.
     */
    public function testSetWhiskerColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");
        $this->assertEquals("3176f361ab524a038497eb1a6c93df38", $obj->getWhiskerColor());
    }

    /**
     * Tests setWhiskerLength()
     *
     * @return void.
     */
    public function testSetWhiskerLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setWhiskerLength("37518c6619bd2f0f7e6872160a81d6bb");
        $this->assertEquals("37518c6619bd2f0f7e6872160a81d6bb", $obj->getWhiskerLength());
    }

    /**
     * Tests setWhiskerWidth()
     *
     * @return void.
     */
    public function testSetWhiskerWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setWhiskerWidth(10.0);
        $this->assertEquals(10.0, $obj->getWhiskerWidth());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertEquals("#000000", $obj->getColor());
        $this->assertEquals(false, $obj->getColorByPoint());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertEquals(true, $obj->getCrisp());
        $this->assertNull($obj->getCursor());
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
        $this->assertNull($obj->getKeys());
        $this->assertEquals(1, $obj->getLineWidth());
        $this->assertEquals(":previous", $obj->getLinkedTo());
        $this->assertNull($obj->getMaxPointWidth());
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
        $this->assertEquals(true, $obj->getVisible());
        $this->assertNull($obj->getWhiskerColor());
        $this->assertEquals("50%", $obj->getWhiskerLength());
        $this->assertNull($obj->getWhiskerWidth());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
