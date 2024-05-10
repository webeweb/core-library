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
 * Highcharts treemap test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsTreemapTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsEvents();
        $point      = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsStates();
        $tooltip    = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsTooltip();

        $exp = ["allowDrillToNode" => true, "allowPointSelect" => false, "alternateStartingDirection" => true, "animation" => true, "animationLimit" => 8.0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 93.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => false, "colorIndex" => 74.0, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => true, "cropThreshold" => 48.0, "cursor" => "crosshair", "dataLabels" => $dataLabels->jsonSerialize(), "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => false, "findNearestPointBy" => "xy", "getExtremesFromAll" => true, "ignoreHiddenPoint" => false, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => false, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 60.0, "opacity" => 32.0, "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => true, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showCheckbox" => false, "showInLegend" => false, "skipKeyboardNavigation" => false, "sortIndex" => 59.0, "states" => $states->jsonSerialize(), "stickyTracking" => true, "tooltip" => $tooltip->jsonSerialize(), "turboThreshold" => 82.0, "visible" => false, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();
        $obj->setAllowDrillToNode(true);
        $obj->setAllowPointSelect(false);
        $obj->setAlternateStartingDirection(true);
        $obj->setAnimation(true);
        $obj->setAnimationLimit(8.0);
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(93.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorByPoint(false);
        $obj->setColorIndex(74.0);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCrisp(true);
        $obj->setCropThreshold(48.0);
        $obj->setCursor("crosshair");
        $obj->setDataLabels($dataLabels);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(false);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(true);
        $obj->setIgnoreHiddenPoint(false);
        $obj->setInteractByLeaf(true);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLayoutAlgorithm("strip");
        $obj->setLayoutStartingDirection("horizontal");
        $obj->setLevelIsConstant(false);
        $obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMaxPointWidth(60.0);
        $obj->setOpacity(32.0);
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setSelected(true);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(false);
        $obj->setSortIndex(59.0);
        $obj->setStates($states);
        $obj->setStickyTracking(true);
        $obj->setTooltip($tooltip);
        $obj->setTurboThreshold(82.0);
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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsStates::class, $res);
    }

    /**
     * Tests newTooltip()
     *
     * @return void.
     */
    public function testNewTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $res = $obj->newTooltip();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsTooltip::class, $res);
    }

    /**
     * Tests setAllowDrillToNode()
     *
     * @return void.
     */
    public function testSetAllowDrillToNode(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setAllowDrillToNode(true);
        $this->assertEquals(true, $obj->getAllowDrillToNode());
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAlternateStartingDirection()
     *
     * @return void.
     */
    public function testSetAlternateStartingDirection(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setAlternateStartingDirection(false);
        $this->assertEquals(false, $obj->getAlternateStartingDirection());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setAnimation(true);
        $this->assertEquals(true, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setAnimationLimit(90.0);
        $this->assertEquals(90.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setBorderWidth(1.0);
        $this->assertEquals(1.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorByPoint()
     *
     * @return void.
     */
    public function testSetColorByPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setColorByPoint(true);
        $this->assertEquals(true, $obj->getColorByPoint());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setColorIndex(48.0);
        $this->assertEquals(48.0, $obj->getColorIndex());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCrisp()
     *
     * @return void.
     */
    public function testSetCrisp(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setCrisp(true);
        $this->assertEquals(true, $obj->getCrisp());
    }

    /**
     * Tests setCropThreshold()
     *
     * @return void.
     */
    public function testSetCropThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setCropThreshold(11.0);
        $this->assertEquals(11.0, $obj->getCropThreshold());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setExposeElementToA11y(true);
        $this->assertEquals(true, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setIgnoreHiddenPoint()
     *
     * @return void.
     */
    public function testSetIgnoreHiddenPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setIgnoreHiddenPoint(false);
        $this->assertEquals(false, $obj->getIgnoreHiddenPoint());
    }

    /**
     * Tests setInteractByLeaf()
     *
     * @return void.
     */
    public function testSetInteractByLeaf(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setInteractByLeaf(true);
        $this->assertEquals(true, $obj->getInteractByLeaf());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLayoutAlgorithm()
     *
     * @return void.
     */
    public function testSetLayoutAlgorithm(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setLayoutAlgorithm("strip");
        $this->assertEquals("strip", $obj->getLayoutAlgorithm());
    }

    /**
     * Tests setLayoutStartingDirection()
     *
     * @return void.
     */
    public function testSetLayoutStartingDirection(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setLayoutStartingDirection("horizontal");
        $this->assertEquals("horizontal", $obj->getLayoutStartingDirection());
    }

    /**
     * Tests setLevelIsConstant()
     *
     * @return void.
     */
    public function testSetLevelIsConstant(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setLevelIsConstant(false);
        $this->assertEquals(false, $obj->getLevelIsConstant());
    }

    /**
     * Tests setLevels()
     *
     * @return void.
     */
    public function testSetLevels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);
        $this->assertEquals(["levels" => "836eb5e382b5d9f430df48883fca918e"], $obj->getLevels());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMaxPointWidth()
     *
     * @return void.
     */
    public function testSetMaxPointWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setMaxPointWidth(8.0);
        $this->assertEquals(8.0, $obj->getMaxPointWidth());
    }

    /**
     * Tests setOpacity()
     *
     * @return void.
     */
    public function testSetOpacity(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setOpacity(93.0);
        $this->assertEquals(93.0, $obj->getOpacity());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setShowCheckbox(true);
        $this->assertEquals(true, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setShowInLegend(true);
        $this->assertEquals(true, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setSortIndex()
     *
     * @return void.
     */
    public function testSetSortIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setSortIndex(55.0);
        $this->assertEquals(55.0, $obj->getSortIndex());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setStickyTracking(true);
        $this->assertEquals(true, $obj->getStickyTracking());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsTooltip mock.
        $tooltip = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsTooltip();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setTooltip($tooltip);
        $this->assertSame($tooltip, $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setTurboThreshold(6.0);
        $this->assertEquals(6.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsTreemap();

        $this->assertEquals(false, $obj->getAllowDrillToNode());
        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertEquals(false, $obj->getAlternateStartingDirection());
        $this->assertEquals(true, $obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertEquals("#e6e6e6", $obj->getBorderColor());
        $this->assertEquals(1, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertEquals(false, $obj->getColorByPoint());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getColors());
        $this->assertEquals(true, $obj->getCrisp());
        $this->assertEquals(300, $obj->getCropThreshold());
        $this->assertNull($obj->getCursor());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertEquals(true, $obj->getIgnoreHiddenPoint());
        $this->assertNull($obj->getInteractByLeaf());
        $this->assertNull($obj->getKeys());
        $this->assertEquals("sliceAndDice", $obj->getLayoutAlgorithm());
        $this->assertEquals("vertical", $obj->getLayoutStartingDirection());
        $this->assertEquals(true, $obj->getLevelIsConstant());
        $this->assertNull($obj->getLevels());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMaxPointWidth());
        $this->assertEquals(0.15, $obj->getOpacity());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowCheckbox());
        $this->assertEquals(false, $obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertNull($obj->getSortIndex());
        $this->assertNull($obj->getStates());
        $this->assertEquals(true, $obj->getStickyTracking());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(1000, $obj->getTurboThreshold());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
