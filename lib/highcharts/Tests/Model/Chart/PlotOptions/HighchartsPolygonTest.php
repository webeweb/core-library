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
 * Highcharts polygon test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsPolygonTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();
        $marker     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsMarker();
        $point      = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animation" => true, "animationLimit" => 66.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15.0, "cropThreshold" => 65.0, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => $dataLabels->jsonSerialize(), "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => false, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 38.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => $marker->jsonSerialize(), "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18.0, "pointIntervalUnit" => "year", "pointStart" => 79.0, "selected" => true, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showCheckbox" => false, "showInLegend" => false, "skipKeyboardNavigation" => false, "states" => $states->jsonSerialize(), "stickyTracking" => true, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 0.0, "visible" => false, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();
        $obj->setAllowPointSelect(true);
        $obj->setAnimation(true);
        $obj->setAnimationLimit(66.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(15.0);
        $obj->setCropThreshold(65.0);
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
        $obj->setLineWidth(38.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMarker($marker);
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(18.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointStart(79.0);
        $obj->setSelected(true);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(false);
        $obj->setStates($states);
        $obj->setStickyTracking(true);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTurboThreshold(0.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents::class, $res);
    }

    /**
     * Tests newMarker()
     *
     * @return void.
     */
    public function testNewMarker(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsMarker::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setAnimation(false);
        $this->assertEquals(false, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setAnimationLimit(12.0);
        $this->assertEquals(12.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setColorIndex(44.0);
        $this->assertEquals(44.0, $obj->getColorIndex());
    }

    /**
     * Tests setCropThreshold()
     *
     * @return void.
     */
    public function testSetCropThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setCropThreshold(87.0);
        $this->assertEquals(87.0, $obj->getCropThreshold());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getDashStyle());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setExposeElementToA11y(true);
        $this->assertEquals(true, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setLineWidth(80.0);
        $this->assertEquals(80.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMarker()
     *
     * @return void.
     */
    public function testSetMarker(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsMarker mock.
        $marker = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsMarker();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setMarker($marker);
        $this->assertSame($marker, $obj->getMarker());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setPointInterval(27.0);
        $this->assertEquals(27.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setPointStart(58.0);
        $this->assertEquals(58.0, $obj->getPointStart());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setShowCheckbox(true);
        $this->assertEquals(true, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setShowInLegend(true);
        $this->assertEquals(true, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setSkipKeyboardNavigation(true);
        $this->assertEquals(true, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setStickyTracking(true);
        $this->assertEquals(true, $obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setTurboThreshold(68.0);
        $this->assertEquals(68.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setVisible(false);
        $this->assertEquals(false, $obj->getVisible());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPolygon();

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
        $this->assertNull($obj->getStates());
        $this->assertEquals(false, $obj->getStickyTracking());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(1000, $obj->getTurboThreshold());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
