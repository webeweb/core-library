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
 * Highcharts funnel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsFunnelTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents();
        $point      = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates();

        $exp = ["allowPointSelect" => true, "animationLimit" => 50.0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 21.0, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => $dataLabels->jsonSerialize(), "depth" => 73.0, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "height" => "b435e227d5dd201e1768b2bcb2e0aa81", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 13.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 32.0, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 45.0, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => "142c0436e1f9b00518a0ae71ecf6e173", "neckWidth" => "61de757e2a097f6432a2ff93d2ec6823", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => false, "selected" => true, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showInLegend" => false, "skipKeyboardNavigation" => true, "slicedOffset" => 49.0, "states" => $states->jsonSerialize(), "stickyTracking" => true, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => false, "width" => "eaae26a6fb20ed3ef54fb23bfa0b1fcc", "zIndex" => 61.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();
        $obj->setAllowPointSelect(true);
        $obj->setAnimationLimit(50.0);
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(21.0);
        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColorIndex(7.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCursor("crosshair");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDataLabels($dataLabels);
        $obj->setDepth(73.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setHeight("b435e227d5dd201e1768b2bcb2e0aa81");
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(13.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLegendIndex(32.0);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMinSize(45.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setNeckHeight("142c0436e1f9b00518a0ae71ecf6e173");
        $obj->setNeckWidth("61de757e2a097f6432a2ff93d2ec6823");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setReversed(false);
        $obj->setSelected(true);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setSlicedOffset(49.0);
        $obj->setStates($states);
        $obj->setStickyTracking(true);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setType("waterfall");
        $obj->setVisible(false);
        $obj->setWidth("eaae26a6fb20ed3ef54fb23bfa0b1fcc");
        $obj->setZIndex(61.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setAnimationLimit(0.0);
        $this->assertEquals(0.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setBorderWidth(73.0);
        $this->assertEquals(73.0, $obj->getBorderWidth());
    }

    /**
     * Tests setCenter()
     *
     * @return void.
     */
    public function testSetCenter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);
        $this->assertEquals(["center" => "adb115059e28d960fa8badfac5516667"], $obj->getCenter());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setColorIndex(52.0);
        $this->assertEquals(52.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

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
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setDepth(19.0);
        $this->assertEquals(19.0, $obj->getDepth());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setExposeElementToA11y(true);
        $this->assertEquals(true, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setGetExtremesFromAll(true);
        $this->assertEquals(true, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setHeight("b435e227d5dd201e1768b2bcb2e0aa81");
        $this->assertEquals("b435e227d5dd201e1768b2bcb2e0aa81", $obj->getHeight());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setIndex(95.0);
        $this->assertEquals(95.0, $obj->getIndex());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setLegendIndex(22.0);
        $this->assertEquals(22.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMinSize()
     *
     * @return void.
     */
    public function testSetMinSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setMinSize(2.0);
        $this->assertEquals(2.0, $obj->getMinSize());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setNeckHeight()
     *
     * @return void.
     */
    public function testSetNeckHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setNeckHeight("142c0436e1f9b00518a0ae71ecf6e173");
        $this->assertEquals("142c0436e1f9b00518a0ae71ecf6e173", $obj->getNeckHeight());
    }

    /**
     * Tests setNeckWidth()
     *
     * @return void.
     */
    public function testSetNeckWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setNeckWidth("61de757e2a097f6432a2ff93d2ec6823");
        $this->assertEquals("61de757e2a097f6432a2ff93d2ec6823", $obj->getNeckWidth());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setReversed()
     *
     * @return void.
     */
    public function testSetReversed(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setReversed(false);
        $this->assertEquals(false, $obj->getReversed());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setShowInLegend(true);
        $this->assertEquals(true, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setSlicedOffset()
     *
     * @return void.
     */
    public function testSetSlicedOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setSlicedOffset(82.0);
        $this->assertEquals(82.0, $obj->getSlicedOffset());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setStickyTracking(false);
        $this->assertEquals(false, $obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setVisible(false);
        $this->assertEquals(false, $obj->getVisible());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setWidth("eaae26a6fb20ed3ef54fb23bfa0b1fcc");
        $this->assertEquals("eaae26a6fb20ed3ef54fb23bfa0b1fcc", $obj->getWidth());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setZIndex(56.0);
        $this->assertEquals(56.0, $obj->getZIndex());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj->getBorderColor());
        $this->assertEquals(1, $obj->getBorderWidth());
        $this->assertEquals(["50%", "50%"], $obj->getCenter());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertNull($obj->getCursor());
        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDataLabels());
        $this->assertEquals(0, $obj->getDepth());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getKeys());
        $this->assertNull($obj->getLegendIndex());
        $this->assertNull($obj->getLinkedTo());
        $this->assertEquals(80, $obj->getMinSize());
        $this->assertNull($obj->getName());
        $this->assertEquals("25%", $obj->getNeckHeight());
        $this->assertEquals("30%", $obj->getNeckWidth());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(false, $obj->getReversed());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertEquals(10, $obj->getSlicedOffset());
        $this->assertNull($obj->getStates());
        $this->assertEquals(false, $obj->getStickyTracking());
        $this->assertNull($obj->getTooltip());
        $this->assertNull($obj->getType());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals("90%", $obj->getWidth());
        $this->assertNull($obj->getZIndex());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
