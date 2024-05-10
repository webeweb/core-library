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
 * Highcharts solidgauge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsSolidgaugeTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents();
        $point  = new \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint();

        $exp = ["animation" => true, "animationLimit" => 4.0, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79.0, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => false, "events" => $events->jsonSerialize(), "exposeElementToA11y" => false, "findNearestPointBy" => "xy", "getExtremesFromAll" => true, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 10.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 45.0, "linecap" => "round", "name" => "b068931cc450442b63f5b3d276ea4297", "overshoot" => 30.0, "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => false, "selected" => false, "showCheckbox" => true, "showInLegend" => false, "skipKeyboardNavigation" => false, "stickyTracking" => false, "threshold" => 42.0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => false, "wrap" => true, "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 13.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();
        $obj->setAnimation(true);
        $obj->setAnimationLimit(4.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColorIndex(79.0);
        $obj->setCursor("crosshair");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(false);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(false);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(true);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(10.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLegendIndex(45.0);
        $obj->setLinecap("round");
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setOvershoot(30.0);
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setRounded(false);
        $obj->setSelected(false);
        $obj->setShowCheckbox(true);
        $obj->setShowInLegend(false);
        $obj->setSkipKeyboardNavigation(false);
        $obj->setStickyTracking(false);
        $obj->setThreshold(42.0);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setType("waterfall");
        $obj->setVisible(false);
        $obj->setWrap(true);
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(13.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint::class, $res);
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setAnimation(true);
        $this->assertEquals(true, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setAnimationLimit(57.0);
        $this->assertEquals(57.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setColorIndex(56.0);
        $this->assertEquals(56.0, $obj->getColorIndex());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());
    }

    /**
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $this->assertEquals(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setExposeElementToA11y(true);
        $this->assertEquals(true, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setGetExtremesFromAll(true);
        $this->assertEquals(true, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setIndex(47.0);
        $this->assertEquals(47.0, $obj->getIndex());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setLegendIndex(26.0);
        $this->assertEquals(26.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLinecap()
     *
     * @return void.
     */
    public function testSetLinecap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setLinecap("round");
        $this->assertEquals("round", $obj->getLinecap());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setOvershoot()
     *
     * @return void.
     */
    public function testSetOvershoot(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setOvershoot(21.0);
        $this->assertEquals(21.0, $obj->getOvershoot());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setRounded()
     *
     * @return void.
     */
    public function testSetRounded(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setRounded(false);
        $this->assertEquals(false, $obj->getRounded());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setShowCheckbox(true);
        $this->assertEquals(true, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setShowInLegend(false);
        $this->assertEquals(false, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setSkipKeyboardNavigation(true);
        $this->assertEquals(true, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setStickyTracking(true);
        $this->assertEquals(true, $obj->getStickyTracking());
    }

    /**
     * Tests setThreshold()
     *
     * @return void.
     */
    public function testSetThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setThreshold(13.0);
        $this->assertEquals(13.0, $obj->getThreshold());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setType("waterfall");
        $this->assertEquals("waterfall", $obj->getType());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setWrap()
     *
     * @return void.
     */
    public function testSetWrap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setWrap(false);
        $this->assertEquals(false, $obj->getWrap());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $obj->setZIndex(28.0);
        $this->assertEquals(28.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge();

        $this->assertEquals(true, $obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getCursor());
        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getKeys());
        $this->assertNull($obj->getLegendIndex());
        $this->assertEquals("round", $obj->getLinecap());
        $this->assertNull($obj->getName());
        $this->assertEquals(0, $obj->getOvershoot());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(false, $obj->getRounded());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals(false, $obj->getShowCheckbox());
        $this->assertNull($obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj->getStickyTracking());
        $this->assertNull($obj->getThreshold());
        $this->assertNull($obj->getTooltip());
        $this->assertNull($obj->getType());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals(true, $obj->getWrap());
        $this->assertEquals("0", $obj->getXAxis());
        $this->assertEquals("0", $obj->getYAxis());
        $this->assertNull($obj->getZIndex());
    }
}
