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
 * Highcharts pyramid test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsPyramidTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsEvents();
        $point      = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animationLimit" => 20.0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 89.0, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => $dataLabels->jsonSerialize(), "depth" => 38.0, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => true, "height" => "b435e227d5dd201e1768b2bcb2e0aa81", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 9.0, "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => false, "selected" => false, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showInLegend" => false, "skipKeyboardNavigation" => true, "slicedOffset" => 73.0, "states" => $states->jsonSerialize(), "stickyTracking" => false, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => true, "width" => "eaae26a6fb20ed3ef54fb23bfa0b1fcc", "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();
        $obj->setAllowPointSelect(true);
        $obj->setAnimationLimit(20.0);
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(89.0);
        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColorIndex(4.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCursor("crosshair");
        $obj->setDataLabels($dataLabels);
        $obj->setDepth(38.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(true);
        $obj->setHeight("b435e227d5dd201e1768b2bcb2e0aa81");
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMinSize(9.0);
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setReversed(false);
        $obj->setSelected(false);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setSlicedOffset(73.0);
        $obj->setStates($states);
        $obj->setStickyTracking(false);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setVisible(true);
        $obj->setWidth("eaae26a6fb20ed3ef54fb23bfa0b1fcc");
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setAnimationLimit(34.0);
        $this->assertEquals(34.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setBorderWidth(84.0);
        $this->assertEquals(84.0, $obj->getBorderWidth());
    }

    /**
     * Tests setCenter()
     *
     * @return void.
     */
    public function testSetCenter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);
        $this->assertEquals(["center" => "adb115059e28d960fa8badfac5516667"], $obj->getCenter());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setColorIndex(92.0);
        $this->assertEquals(92.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setDepth(80.0);
        $this->assertEquals(80.0, $obj->getDepth());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setEnableMouseTracking(true);
        $this->assertEquals(true, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setExposeElementToA11y(false);
        $this->assertEquals(false, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setHeight("b435e227d5dd201e1768b2bcb2e0aa81");
        $this->assertEquals("b435e227d5dd201e1768b2bcb2e0aa81", $obj->getHeight());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMinSize()
     *
     * @return void.
     */
    public function testSetMinSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setMinSize(51.0);
        $this->assertEquals(51.0, $obj->getMinSize());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setReversed()
     *
     * @return void.
     */
    public function testSetReversed(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setReversed(false);
        $this->assertEquals(false, $obj->getReversed());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setShowInLegend(false);
        $this->assertEquals(false, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setSkipKeyboardNavigation(true);
        $this->assertEquals(true, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setSlicedOffset()
     *
     * @return void.
     */
    public function testSetSlicedOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setSlicedOffset(59.0);
        $this->assertEquals(59.0, $obj->getSlicedOffset());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setStickyTracking(true);
        $this->assertEquals(true, $obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setVisible(false);
        $this->assertEquals(false, $obj->getVisible());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setWidth("eaae26a6fb20ed3ef54fb23bfa0b1fcc");
        $this->assertEquals("eaae26a6fb20ed3ef54fb23bfa0b1fcc", $obj->getWidth());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPyramid();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj->getBorderColor());
        $this->assertEquals(1, $obj->getBorderWidth());
        $this->assertEquals(["50%", "50%"], $obj->getCenter());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertNull($obj->getCursor());
        $this->assertNull($obj->getDataLabels());
        $this->assertEquals(0, $obj->getDepth());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getKeys());
        $this->assertNull($obj->getLinkedTo());
        $this->assertEquals(80, $obj->getMinSize());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(true, $obj->getReversed());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertEquals(10, $obj->getSlicedOffset());
        $this->assertNull($obj->getStates());
        $this->assertEquals(false, $obj->getStickyTracking());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals("90%", $obj->getWidth());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
