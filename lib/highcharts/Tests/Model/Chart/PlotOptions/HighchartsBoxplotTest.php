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
 * Highcharts boxplot test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsBoxplotTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents();
        $point  = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsPoint();
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animationLimit" => 5.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => true, "colorIndex" => 19.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => false, "cursor" => "crosshair", "depth" => 87.0, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 11.0, "enableMouseTracking" => false, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "groupPadding" => 19.0, "groupZPadding" => 17.0, "grouping" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 92.0, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 41.0, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 70.0, "pointIntervalUnit" => "year", "pointPadding" => 1.0, "pointPlacement" => "between", "pointRange" => 42.0, "pointStart" => 23.0, "pointWidth" => 58.0, "selected" => true, "showCheckbox" => false, "showInLegend" => false, "skipKeyboardNavigation" => false, "states" => $states->jsonSerialize(), "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 87.0, "stickyTracking" => true, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 91.0, "visible" => false, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => "37518c6619bd2f0f7e6872160a81d6bb", "whiskerWidth" => 74.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();
        $obj->setAllowPointSelect(true);
        $obj->setAnimationLimit(5.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorByPoint(true);
        $obj->setColorIndex(19.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCrisp(false);
        $obj->setCursor("crosshair");
        $obj->setDepth(87.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $obj->setEdgeWidth(11.0);
        $obj->setEnableMouseTracking(false);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setGroupPadding(19.0);
        $obj->setGroupZPadding(17.0);
        $obj->setGrouping(true);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLineWidth(49.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMaxPointWidth(92.0);
        $obj->setMedianColor("c7dbc658d3d58056469f6d2d5a8a3626");
        $obj->setMedianWidth(41.0);
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(70.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointPadding(1.0);
        $obj->setPointPlacement("between");
        $obj->setPointRange(42.0);
        $obj->setPointStart(23.0);
        $obj->setPointWidth(58.0);
        $obj->setSelected(true);
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(false);
        $obj->setStates($states);
        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");
        $obj->setStemDashStyle("LongDashDotDot");
        $obj->setStemWidth(87.0);
        $obj->setStickyTracking(true);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTurboThreshold(91.0);
        $obj->setVisible(false);
        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");
        $obj->setWhiskerLength("37518c6619bd2f0f7e6872160a81d6bb");
        $obj->setWhiskerWidth(74.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setAllowPointSelect(true);
        $this->assertEquals(true, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setAnimationLimit(99.0);
        $this->assertEquals(99.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorByPoint()
     *
     * @return void.
     */
    public function testSetColorByPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setColorByPoint(true);
        $this->assertEquals(true, $obj->getColorByPoint());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setColorIndex(38.0);
        $this->assertEquals(38.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCrisp()
     *
     * @return void.
     */
    public function testSetCrisp(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setCrisp(false);
        $this->assertEquals(false, $obj->getCrisp());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setDepth(90.0);
        $this->assertEquals(90.0, $obj->getDepth());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEdgeColor()
     *
     * @return void.
     */
    public function testSetEdgeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");
        $this->assertEquals("acbab0d2e7e54e5a7a32fc80409601fc", $obj->getEdgeColor());
    }

    /**
     * Tests setEdgeWidth()
     *
     * @return void.
     */
    public function testSetEdgeWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setEdgeWidth(24.0);
        $this->assertEquals(24.0, $obj->getEdgeWidth());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setExposeElementToA11y(false);
        $this->assertEquals(false, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setGetExtremesFromAll(true);
        $this->assertEquals(true, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setGroupPadding()
     *
     * @return void.
     */
    public function testSetGroupPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setGroupPadding(63.0);
        $this->assertEquals(63.0, $obj->getGroupPadding());
    }

    /**
     * Tests setGroupZPadding()
     *
     * @return void.
     */
    public function testSetGroupZPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setGroupZPadding(38.0);
        $this->assertEquals(38.0, $obj->getGroupZPadding());
    }

    /**
     * Tests setGrouping()
     *
     * @return void.
     */
    public function testSetGrouping(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setGrouping(false);
        $this->assertEquals(false, $obj->getGrouping());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setLineWidth(18.0);
        $this->assertEquals(18.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMaxPointWidth()
     *
     * @return void.
     */
    public function testSetMaxPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setMaxPointWidth(88.0);
        $this->assertEquals(88.0, $obj->getMaxPointWidth());
    }

    /**
     * Tests setMedianColor()
     *
     * @return void.
     */
    public function testSetMedianColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setMedianColor("c7dbc658d3d58056469f6d2d5a8a3626");
        $this->assertEquals("c7dbc658d3d58056469f6d2d5a8a3626", $obj->getMedianColor());
    }

    /**
     * Tests setMedianWidth()
     *
     * @return void.
     */
    public function testSetMedianWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setMedianWidth(1.0);
        $this->assertEquals(1.0, $obj->getMedianWidth());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPointInterval(59.0);
        $this->assertEquals(59.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointPadding()
     *
     * @return void.
     */
    public function testSetPointPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPointPadding(57.0);
        $this->assertEquals(57.0, $obj->getPointPadding());
    }

    /**
     * Tests setPointPlacement()
     *
     * @return void.
     */
    public function testSetPointPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPointPlacement("between");
        $this->assertEquals("between", $obj->getPointPlacement());
    }

    /**
     * Tests setPointRange()
     *
     * @return void.
     */
    public function testSetPointRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPointRange(2.0);
        $this->assertEquals(2.0, $obj->getPointRange());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPointStart(0.0);
        $this->assertEquals(0.0, $obj->getPointStart());
    }

    /**
     * Tests setPointWidth()
     *
     * @return void.
     */
    public function testSetPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setPointWidth(81.0);
        $this->assertEquals(81.0, $obj->getPointWidth());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setShowCheckbox(true);
        $this->assertEquals(true, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setShowInLegend(false);
        $this->assertEquals(false, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStemColor()
     *
     * @return void.
     */
    public function testSetStemColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");
        $this->assertEquals("98696f23b6ed2a881042dfa365a28d23", $obj->getStemColor());
    }

    /**
     * Tests setStemDashStyle()
     *
     * @return void.
     */
    public function testSetStemDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setStemDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getStemDashStyle());
    }

    /**
     * Tests setStemWidth()
     *
     * @return void.
     */
    public function testSetStemWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setStemWidth(70.0);
        $this->assertEquals(70.0, $obj->getStemWidth());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setStickyTracking(false);
        $this->assertEquals(false, $obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setTurboThreshold(72.0);
        $this->assertEquals(72.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setWhiskerColor()
     *
     * @return void.
     */
    public function testSetWhiskerColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");
        $this->assertEquals("3176f361ab524a038497eb1a6c93df38", $obj->getWhiskerColor());
    }

    /**
     * Tests setWhiskerLength()
     *
     * @return void.
     */
    public function testSetWhiskerLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setWhiskerLength("37518c6619bd2f0f7e6872160a81d6bb");
        $this->assertEquals("37518c6619bd2f0f7e6872160a81d6bb", $obj->getWhiskerLength());
    }

    /**
     * Tests setWhiskerWidth()
     *
     * @return void.
     */
    public function testSetWhiskerWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setWhiskerWidth(28.0);
        $this->assertEquals(28.0, $obj->getWhiskerWidth());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBoxplot();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
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
        $this->assertEquals("#ffffff", $obj->getFillColor());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertEquals(0.2, $obj->getGroupPadding());
        $this->assertEquals(1, $obj->getGroupZPadding());
        $this->assertEquals(true, $obj->getGrouping());
        $this->assertNull($obj->getKeys());
        $this->assertEquals(1, $obj->getLineWidth());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMaxPointWidth());
        $this->assertNull($obj->getMedianColor());
        $this->assertEquals(2, $obj->getMedianWidth());
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
        $this->assertEquals(false, $obj->getShowCheckbox());
        $this->assertEquals(true, $obj->getShowInLegend());
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
        $this->assertEquals(2, $obj->getWhiskerWidth());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
