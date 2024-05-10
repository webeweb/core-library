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
 * Highcharts scatter test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsScatterTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsEvents();
        $marker     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsMarker();
        $point      = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animation" => true, "animationLimit" => 49.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 16.0, "cropThreshold" => 39.0, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => $dataLabels->jsonSerialize(), "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => false, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 65.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => $marker->jsonSerialize(), "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27.0, "pointIntervalUnit" => "year", "pointStart" => 58.0, "selected" => false, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showCheckbox" => false, "showInLegend" => false, "skipKeyboardNavigation" => true, "softThreshold" => false, "states" => $states->jsonSerialize(), "stickyTracking" => false, "threshold" => 68.0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 8.0, "visible" => false, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();
        $obj->setAllowPointSelect(true);
        $obj->setAnimation(true);
        $obj->setAnimationLimit(49.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(16.0);
        $obj->setCropThreshold(39.0);
        $obj->setCursor("crosshair");
        $obj->setDashStyle("LongDashDotDot");
        $obj->setDataLabels($dataLabels);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(false);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLineWidth(65.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMarker($marker);
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(27.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointStart(58.0);
        $obj->setSelected(false);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setSoftThreshold(false);
        $obj->setStates($states);
        $obj->setStickyTracking(false);
        $obj->setThreshold(68.0);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTurboThreshold(8.0);
        $obj->setVisible(false);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsEvents::class, $res);
    }

    /**
     * Tests newMarker()
     *
     * @return void.
     */
    public function testNewMarker(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsMarker::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setAnimation(false);
        $this->assertEquals(false, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setAnimationLimit(58.0);
        $this->assertEquals(58.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setColorIndex(82.0);
        $this->assertEquals(82.0, $obj->getColorIndex());
    }

    /**
     * Tests setCropThreshold()
     *
     * @return void.
     */
    public function testSetCropThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setCropThreshold(42.0);
        $this->assertEquals(42.0, $obj->getCropThreshold());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getDashStyle());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setExposeElementToA11y(false);
        $this->assertEquals(false, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setLineWidth(7.0);
        $this->assertEquals(7.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMarker()
     *
     * @return void.
     */
    public function testSetMarker(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsMarker mock.
        $marker = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsMarker();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setMarker($marker);
        $this->assertSame($marker, $obj->getMarker());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setPointInterval(100.0);
        $this->assertEquals(100.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setPointStart(66.0);
        $this->assertEquals(66.0, $obj->getPointStart());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setShowCheckbox(true);
        $this->assertEquals(true, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setShowInLegend(false);
        $this->assertEquals(false, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setSoftThreshold()
     *
     * @return void.
     */
    public function testSetSoftThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setSoftThreshold(false);
        $this->assertEquals(false, $obj->getSoftThreshold());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setStickyTracking(true);
        $this->assertEquals(true, $obj->getStickyTracking());
    }

    /**
     * Tests setThreshold()
     *
     * @return void.
     */
    public function testSetThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setThreshold(83.0);
        $this->assertEquals(83.0, $obj->getThreshold());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setTurboThreshold(58.0);
        $this->assertEquals(58.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setVisible(false);
        $this->assertEquals(false, $obj->getVisible());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertEquals(true, $obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getColorIndex());
        $this->assertEquals(300, $obj->getCropThreshold());
        $this->assertNull($obj->getCursor());
        $this->assertEquals("Solid", $obj->getDashStyle());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertNull($obj->getKeys());
        $this->assertEquals(0, $obj->getLineWidth());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMarker());
        $this->assertNull($obj->getNegativeColor());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj->getPointInterval());
        $this->assertNull($obj->getPointIntervalUnit());
        $this->assertEquals(0, $obj->getPointStart());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowCheckbox());
        $this->assertEquals(true, $obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj->getSoftThreshold());
        $this->assertNull($obj->getStates());
        $this->assertEquals(false, $obj->getStickyTracking());
        $this->assertEquals(0, $obj->getThreshold());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(1000, $obj->getTurboThreshold());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
