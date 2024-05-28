<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts treemap test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsTreemapTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsEvents();
        $point      = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsStates();
        $tooltip    = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsTooltip();

        $exp = ["allowDrillToNode" => true, "allowPointSelect" => true, "alternateStartingDirection" => true, "animation" => false, "animationLimit" => 36.0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 88.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => true, "colorIndex" => 15.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => false, "cropThreshold" => 92.0, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => $dataLabels->jsonSerialize(), "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => false, "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => true, "index" => 88.0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 23.0, "levelIsConstant" => false, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 40.0, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 51.0, "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => true, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showCheckbox" => false, "showInLegend" => false, "skipKeyboardNavigation" => false, "sortIndex" => 95.0, "states" => $states->jsonSerialize(), "stickyTracking" => true, "tooltip" => $tooltip->jsonSerialize(), "turboThreshold" => 47.0, "type" => "waterfall", "visible" => false, "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 54.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();
        $obj->setAllowDrillToNode(true);
        $obj->setAllowPointSelect(true);
        $obj->setAlternateStartingDirection(true);
        $obj->setAnimation(false);
        $obj->setAnimationLimit(36.0);
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(88.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorByPoint(true);
        $obj->setColorIndex(15.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCrisp(false);
        $obj->setCropThreshold(92.0);
        $obj->setCursor("crosshair");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDataLabels($dataLabels);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(false);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIgnoreHiddenPoint(true);
        $obj->setIndex(88.0);
        $obj->setInteractByLeaf(true);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLayoutAlgorithm("strip");
        $obj->setLayoutStartingDirection("horizontal");
        $obj->setLegendIndex(23.0);
        $obj->setLevelIsConstant(false);
        $obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMaxPointWidth(40.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setOpacity(51.0);
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setSelected(true);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(false);
        $obj->setSortIndex(95.0);
        $obj->setStates($states);
        $obj->setStickyTracking(true);
        $obj->setTooltip($tooltip);
        $obj->setTurboThreshold(47.0);
        $obj->setType("waterfall");
        $obj->setVisible(false);
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(54.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsStates::class, $res);
    }

    /**
     * Tests newTooltip()
     *
     * @return void.
     */
    public function testNewTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $res = $obj->newTooltip();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsTooltip::class, $res);
    }

    /**
     * Tests setAllowDrillToNode()
     *
     * @return void.
     */
    public function testSetAllowDrillToNode(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setAllowDrillToNode(false);
        $this->assertFalse($obj->getAllowDrillToNode());

        $obj->setAllowDrillToNode(true);
        $this->assertTrue($obj->getAllowDrillToNode());
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setAllowPointSelect(true);
        $this->assertTrue($obj->getAllowPointSelect());
    }

    /**
     * Tests setAlternateStartingDirection()
     *
     * @return void.
     */
    public function testSetAlternateStartingDirection(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setAlternateStartingDirection(false);
        $this->assertFalse($obj->getAlternateStartingDirection());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setAnimation(true);
        $this->assertTrue($obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setAnimationLimit(4.0);
        $this->assertEquals(4.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setBorderWidth(10.0);
        $this->assertEquals(10.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorByPoint()
     *
     * @return void.
     */
    public function testSetColorByPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setColorByPoint(false);
        $this->assertFalse($obj->getColorByPoint());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setColorIndex(76.0);
        $this->assertEquals(76.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCrisp()
     *
     * @return void.
     */
    public function testSetCrisp(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setCrisp(false);
        $this->assertFalse($obj->getCrisp());
    }

    /**
     * Tests setCropThreshold()
     *
     * @return void.
     */
    public function testSetCropThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setCropThreshold(73.0);
        $this->assertEquals(73.0, $obj->getCropThreshold());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setCursor(null);
        $this->assertNull($obj->getCursor());

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setEnableMouseTracking(true);
        $this->assertTrue($obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setExposeElementToA11y(true);
        $this->assertTrue($obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setGetExtremesFromAll(true);
        $this->assertTrue($obj->getGetExtremesFromAll());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIgnoreHiddenPoint()
     *
     * @return void.
     */
    public function testSetIgnoreHiddenPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setIgnoreHiddenPoint(false);
        $this->assertFalse($obj->getIgnoreHiddenPoint());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setIndex(85.0);
        $this->assertEquals(85.0, $obj->getIndex());
    }

    /**
     * Tests setInteractByLeaf()
     *
     * @return void.
     */
    public function testSetInteractByLeaf(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setInteractByLeaf(false);
        $this->assertFalse($obj->getInteractByLeaf());

        $obj->setInteractByLeaf(true);
        $this->assertTrue($obj->getInteractByLeaf());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLayoutAlgorithm()
     *
     * @return void.
     */
    public function testSetLayoutAlgorithm(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setLayoutAlgorithm("sliceAndDice");
        $this->assertEquals("sliceAndDice", $obj->getLayoutAlgorithm());

        $obj->setLayoutAlgorithm("squarified");
        $this->assertEquals("squarified", $obj->getLayoutAlgorithm());

        $obj->setLayoutAlgorithm("strip");
        $this->assertEquals("strip", $obj->getLayoutAlgorithm());

        $obj->setLayoutAlgorithm("stripes");
        $this->assertEquals("stripes", $obj->getLayoutAlgorithm());
    }

    /**
     * Tests setLayoutStartingDirection()
     *
     * @return void.
     */
    public function testSetLayoutStartingDirection(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setLayoutStartingDirection("horizontal");
        $this->assertEquals("horizontal", $obj->getLayoutStartingDirection());

        $obj->setLayoutStartingDirection("vertical");
        $this->assertEquals("vertical", $obj->getLayoutStartingDirection());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setLegendIndex(44.0);
        $this->assertEquals(44.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLevelIsConstant()
     *
     * @return void.
     */
    public function testSetLevelIsConstant(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setLevelIsConstant(false);
        $this->assertFalse($obj->getLevelIsConstant());

        $obj->setLevelIsConstant(true);
        $this->assertTrue($obj->getLevelIsConstant());
    }

    /**
     * Tests setLevels()
     *
     * @return void.
     */
    public function testSetLevels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);
        $this->assertEquals(["levels" => "836eb5e382b5d9f430df48883fca918e"], $obj->getLevels());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMaxPointWidth()
     *
     * @return void.
     */
    public function testSetMaxPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setMaxPointWidth(14.0);
        $this->assertEquals(14.0, $obj->getMaxPointWidth());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setOpacity()
     *
     * @return void.
     */
    public function testSetOpacity(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setOpacity(31.0);
        $this->assertEquals(31.0, $obj->getOpacity());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setSelected(false);
        $this->assertFalse($obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setShowCheckbox(false);
        $this->assertFalse($obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setShowInLegend(true);
        $this->assertTrue($obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setSkipKeyboardNavigation(true);
        $this->assertTrue($obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setSortIndex()
     *
     * @return void.
     */
    public function testSetSortIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setSortIndex(53.0);
        $this->assertEquals(53.0, $obj->getSortIndex());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setStickyTracking(false);
        $this->assertFalse($obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsTooltip mock.
        $tooltip = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsTooltip();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setTooltip($tooltip);
        $this->assertSame($tooltip, $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setTurboThreshold(87.0);
        $this->assertEquals(87.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setType(null);
        $this->assertNull($obj->getType());

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setVisible(true);
        $this->assertTrue($obj->getVisible());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setZIndex(40.0);
        $this->assertEquals(40.0, $obj->getZIndex());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsTreemap();

        $this->assertFalse($obj->getAllowDrillToNode());
        $this->assertFalse($obj->getAllowPointSelect());
        $this->assertFalse($obj->getAlternateStartingDirection());
        $this->assertTrue($obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertEquals("#e6e6e6", $obj->getBorderColor());
        $this->assertEquals(1, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertFalse($obj->getColorByPoint());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertTrue($obj->getCrisp());
        $this->assertEquals(300, $obj->getCropThreshold());
        $this->assertNull($obj->getCursor());
        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertTrue($obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertFalse($obj->getGetExtremesFromAll());
        $this->assertNull($obj->getId());
        $this->assertTrue($obj->getIgnoreHiddenPoint());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getInteractByLeaf());
        $this->assertNull($obj->getKeys());
        $this->assertEquals("sliceAndDice", $obj->getLayoutAlgorithm());
        $this->assertEquals("vertical", $obj->getLayoutStartingDirection());
        $this->assertNull($obj->getLegendIndex());
        $this->assertTrue($obj->getLevelIsConstant());
        $this->assertNull($obj->getLevels());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMaxPointWidth());
        $this->assertNull($obj->getName());
        $this->assertEquals(0.15, $obj->getOpacity());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertFalse($obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertFalse($obj->getShowCheckbox());
        $this->assertFalse($obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertNull($obj->getSortIndex());
        $this->assertNull($obj->getStates());
        $this->assertTrue($obj->getStickyTracking());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(1000, $obj->getTurboThreshold());
        $this->assertNull($obj->getType());
        $this->assertTrue($obj->getVisible());
        $this->assertEquals("0", $obj->getXAxis());
        $this->assertEquals("0", $obj->getYAxis());
        $this->assertNull($obj->getZIndex());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
