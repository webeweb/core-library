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
 * Highcharts solidgauge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsSolidgaugeTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Solidgauge\HighchartsEvents();
        $point  = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Solidgauge\HighchartsPoint();

        $exp = ["animation" => false, "animationLimit" => 43.0, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 43.0, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => true, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 32.0, "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => false, "selected" => true, "showCheckbox" => false, "showInLegend" => true, "skipKeyboardNavigation" => true, "stickyTracking" => true, "threshold" => 7.0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => false, "wrap" => true];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();
        $obj->setAnimation(false);
        $obj->setAnimationLimit(43.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColorIndex(43.0);
        $obj->setCursor("crosshair");
        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(true);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(true);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLinecap("round");
        $obj->setOvershoot(32.0);
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setRounded(false);
        $obj->setSelected(true);
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(true);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setStickyTracking(true);
        $obj->setThreshold(7.0);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setVisible(false);
        $obj->setWrap(true);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Solidgauge\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Solidgauge\HighchartsPoint::class, $res);
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setAnimation(false);
        $this->assertEquals(false, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setAnimationLimit(72.0);
        $this->assertEquals(72.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setColorIndex(5.0);
        $this->assertEquals(5.0, $obj->getColorIndex());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

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
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $this->assertEquals(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setEnableMouseTracking(true);
        $this->assertEquals(true, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Solidgauge\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Solidgauge\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setExposeElementToA11y(false);
        $this->assertEquals(false, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLinecap()
     *
     * @return void.
     */
    public function testSetLinecap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setLinecap("round");
        $this->assertEquals("round", $obj->getLinecap());

        $obj->setLinecap("square");
        $this->assertEquals("square", $obj->getLinecap());
    }

    /**
     * Tests setOvershoot()
     *
     * @return void.
     */
    public function testSetOvershoot(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setOvershoot(38.0);
        $this->assertEquals(38.0, $obj->getOvershoot());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Solidgauge\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Solidgauge\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setRounded()
     *
     * @return void.
     */
    public function testSetRounded(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setRounded(false);
        $this->assertEquals(false, $obj->getRounded());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setSelected(false);
        $this->assertEquals(false, $obj->getSelected());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setShowCheckbox(false);
        $this->assertEquals(false, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setShowInLegend(true);
        $this->assertEquals(true, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setStickyTracking(true);
        $this->assertEquals(true, $obj->getStickyTracking());
    }

    /**
     * Tests setThreshold()
     *
     * @return void.
     */
    public function testSetThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setThreshold(33.0);
        $this->assertEquals(33.0, $obj->getThreshold());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setWrap()
     *
     * @return void.
     */
    public function testSetWrap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $obj->setWrap(false);
        $this->assertEquals(false, $obj->getWrap());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSolidgauge();

        $this->assertEquals(true, $obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getCursor());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertNull($obj->getKeys());
        $this->assertEquals("round", $obj->getLinecap());
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
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals(true, $obj->getWrap());
    }
}
