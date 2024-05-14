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

namespace WBW\Library\Highcharts\Tests\Model\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts chart test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsChartTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events          = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();
        $options3d       = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();
        $resetZoomButton = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton();

        $exp = ["alignTicks" => true, "animation" => "6f1c25ed1523962f1bbf9dee9be5092b", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 28.0, "borderWidth" => 94.0, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 83.0, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => $events->jsonSerialize(), "height" => "b435e227d5dd201e1768b2bcb2e0aa81", "ignoreHiddenSeries" => true, "inverted" => false, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 39.0, "marginLeft" => 88.0, "marginRight" => 38.0, "marginTop" => 65.0, "options3d" => $options3d->jsonSerialize(), "panKey" => "shift", "panning" => true, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 90.0, "plotShadow" => "b83a7c7989da0ab528036db7adab1468", "polar" => true, "reflow" => false, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => $resetZoomButton->jsonSerialize(), "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showAxes" => false, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 24.0, "spacingLeft" => 17.0, "spacingRight" => 95.0, "spacingTop" => 21.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall", "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 73.0, "zoomType" => "xy"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();
        $obj->setAlignTicks(true);
        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderRadius(28.0);
        $obj->setBorderWidth(94.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColorCount(83.0);
        $obj->setDefaultSeriesType("pie");
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEvents($events);
        $obj->setHeight("b435e227d5dd201e1768b2bcb2e0aa81");
        $obj->setIgnoreHiddenSeries(true);
        $obj->setInverted(false);
        $obj->setMargin(["margin" => "d42f4851e770aa0f758b01388874f67b"]);
        $obj->setMarginBottom(39.0);
        $obj->setMarginLeft(88.0);
        $obj->setMarginRight(38.0);
        $obj->setMarginTop(65.0);
        $obj->setOptions3d($options3d);
        $obj->setPanKey("shift");
        $obj->setPanning(true);
        $obj->setPinchType("xy");
        $obj->setPlotBackgroundColor("c2f8b5b51823d8d11973591af04340d5");
        $obj->setPlotBackgroundImage("dace675e2a249a414ee3940daf49807f");
        $obj->setPlotBorderColor("76ac5d1e39e38330d708ac4e5f27162d");
        $obj->setPlotBorderWidth(90.0);
        $obj->setPlotShadow("b83a7c7989da0ab528036db7adab1468");
        $obj->setPolar(true);
        $obj->setReflow(false);
        $obj->setRenderTo("6cdf914b87eb7733ae56819ec32f386e");
        $obj->setResetZoomButton($resetZoomButton);
        $obj->setSelectionMarkerFill("b837c10405112fa4a26778688bd27245");
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowAxes(false);
        $obj->setSpacing(["spacing" => "348b374e34b64661f5976e46c7a5c08a"]);
        $obj->setSpacingBottom(24.0);
        $obj->setSpacingLeft(17.0);
        $obj->setSpacingRight(95.0);
        $obj->setSpacingTop(21.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setType("waterfall");
        $obj->setTypeDescription("03c3ff624590aba1e18136e967cc7455");
        $obj->setWidth(73.0);
        $obj->setZoomType("xy");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents::class, $res);
    }

    /**
     * Tests newOptions3d()
     *
     * @return void.
     */
    public function testNewOptions3d(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $res = $obj->newOptions3d();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d::class, $res);
    }

    /**
     * Tests newResetZoomButton()
     *
     * @return void.
     */
    public function testNewResetZoomButton(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $res = $obj->newResetZoomButton();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton::class, $res);
    }

    /**
     * Tests setAlignTicks()
     *
     * @return void.
     */
    public function testSetAlignTicks(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setAlignTicks(true);
        $this->assertEquals(true, $obj->getAlignTicks());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $this->assertEquals("6f1c25ed1523962f1bbf9dee9be5092b", $obj->getAnimation());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderRadius()
     *
     * @return void.
     */
    public function testSetBorderRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setBorderRadius(6.0);
        $this->assertEquals(6.0, $obj->getBorderRadius());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setBorderWidth(98.0);
        $this->assertEquals(98.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColorCount()
     *
     * @return void.
     */
    public function testSetColorCount(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setColorCount(38.0);
        $this->assertEquals(38.0, $obj->getColorCount());
    }

    /**
     * Tests setDefaultSeriesType()
     *
     * @return void.
     */
    public function testSetDefaultSeriesType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setDefaultSeriesType("area");
        $this->assertEquals("area", $obj->getDefaultSeriesType());

        $obj->setDefaultSeriesType("areaspline");
        $this->assertEquals("areaspline", $obj->getDefaultSeriesType());

        $obj->setDefaultSeriesType("column");
        $this->assertEquals("column", $obj->getDefaultSeriesType());

        $obj->setDefaultSeriesType("line");
        $this->assertEquals("line", $obj->getDefaultSeriesType());

        $obj->setDefaultSeriesType("pie");
        $this->assertEquals("pie", $obj->getDefaultSeriesType());

        $obj->setDefaultSeriesType("spline");
        $this->assertEquals("spline", $obj->getDefaultSeriesType());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setHeight("b435e227d5dd201e1768b2bcb2e0aa81");
        $this->assertEquals("b435e227d5dd201e1768b2bcb2e0aa81", $obj->getHeight());
    }

    /**
     * Tests setIgnoreHiddenSeries()
     *
     * @return void.
     */
    public function testSetIgnoreHiddenSeries(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setIgnoreHiddenSeries(false);
        $this->assertEquals(false, $obj->getIgnoreHiddenSeries());
    }

    /**
     * Tests setInverted()
     *
     * @return void.
     */
    public function testSetInverted(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setInverted(true);
        $this->assertEquals(true, $obj->getInverted());
    }

    /**
     * Tests setMargin()
     *
     * @return void.
     */
    public function testSetMargin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setMargin(["margin" => "d42f4851e770aa0f758b01388874f67b"]);
        $this->assertEquals(["margin" => "d42f4851e770aa0f758b01388874f67b"], $obj->getMargin());
    }

    /**
     * Tests setMarginBottom()
     *
     * @return void.
     */
    public function testSetMarginBottom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setMarginBottom(81.0);
        $this->assertEquals(81.0, $obj->getMarginBottom());
    }

    /**
     * Tests setMarginLeft()
     *
     * @return void.
     */
    public function testSetMarginLeft(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setMarginLeft(37.0);
        $this->assertEquals(37.0, $obj->getMarginLeft());
    }

    /**
     * Tests setMarginRight()
     *
     * @return void.
     */
    public function testSetMarginRight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setMarginRight(94.0);
        $this->assertEquals(94.0, $obj->getMarginRight());
    }

    /**
     * Tests setMarginTop()
     *
     * @return void.
     */
    public function testSetMarginTop(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setMarginTop(97.0);
        $this->assertEquals(97.0, $obj->getMarginTop());
    }

    /**
     * Tests setOptions3d()
     *
     * @return void.
     */
    public function testSetOptions3d(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d mock.
        $options3d = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setOptions3d($options3d);
        $this->assertSame($options3d, $obj->getOptions3d());
    }

    /**
     * Tests setPanKey()
     *
     * @return void.
     */
    public function testSetPanKey(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPanKey(null);
        $this->assertEquals(null, $obj->getPanKey());

        $obj->setPanKey("alt");
        $this->assertEquals("alt", $obj->getPanKey());

        $obj->setPanKey("ctrl");
        $this->assertEquals("ctrl", $obj->getPanKey());

        $obj->setPanKey("meta");
        $this->assertEquals("meta", $obj->getPanKey());

        $obj->setPanKey("shift");
        $this->assertEquals("shift", $obj->getPanKey());
    }

    /**
     * Tests setPanning()
     *
     * @return void.
     */
    public function testSetPanning(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPanning(false);
        $this->assertEquals(false, $obj->getPanning());
    }

    /**
     * Tests setPinchType()
     *
     * @return void.
     */
    public function testSetPinchType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPinchType("x");
        $this->assertEquals("x", $obj->getPinchType());

        $obj->setPinchType("xy");
        $this->assertEquals("xy", $obj->getPinchType());

        $obj->setPinchType("y");
        $this->assertEquals("y", $obj->getPinchType());
    }

    /**
     * Tests setPlotBackgroundColor()
     *
     * @return void.
     */
    public function testSetPlotBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPlotBackgroundColor("c2f8b5b51823d8d11973591af04340d5");
        $this->assertEquals("c2f8b5b51823d8d11973591af04340d5", $obj->getPlotBackgroundColor());
    }

    /**
     * Tests setPlotBackgroundImage()
     *
     * @return void.
     */
    public function testSetPlotBackgroundImage(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPlotBackgroundImage("dace675e2a249a414ee3940daf49807f");
        $this->assertEquals("dace675e2a249a414ee3940daf49807f", $obj->getPlotBackgroundImage());
    }

    /**
     * Tests setPlotBorderColor()
     *
     * @return void.
     */
    public function testSetPlotBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPlotBorderColor("76ac5d1e39e38330d708ac4e5f27162d");
        $this->assertEquals("76ac5d1e39e38330d708ac4e5f27162d", $obj->getPlotBorderColor());
    }

    /**
     * Tests setPlotBorderWidth()
     *
     * @return void.
     */
    public function testSetPlotBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPlotBorderWidth(85.0);
        $this->assertEquals(85.0, $obj->getPlotBorderWidth());
    }

    /**
     * Tests setPlotShadow()
     *
     * @return void.
     */
    public function testSetPlotShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPlotShadow("b83a7c7989da0ab528036db7adab1468");
        $this->assertEquals("b83a7c7989da0ab528036db7adab1468", $obj->getPlotShadow());
    }

    /**
     * Tests setPolar()
     *
     * @return void.
     */
    public function testSetPolar(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setPolar(false);
        $this->assertEquals(false, $obj->getPolar());
    }

    /**
     * Tests setReflow()
     *
     * @return void.
     */
    public function testSetReflow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setReflow(false);
        $this->assertEquals(false, $obj->getReflow());
    }

    /**
     * Tests setRenderTo()
     *
     * @return void.
     */
    public function testSetRenderTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setRenderTo("6cdf914b87eb7733ae56819ec32f386e");
        $this->assertEquals("6cdf914b87eb7733ae56819ec32f386e", $obj->getRenderTo());
    }

    /**
     * Tests setResetZoomButton()
     *
     * @return void.
     */
    public function testSetResetZoomButton(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton mock.
        $resetZoomButton = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setResetZoomButton($resetZoomButton);
        $this->assertSame($resetZoomButton, $obj->getResetZoomButton());
    }

    /**
     * Tests setSelectionMarkerFill()
     *
     * @return void.
     */
    public function testSetSelectionMarkerFill(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setSelectionMarkerFill("b837c10405112fa4a26778688bd27245");
        $this->assertEquals("b837c10405112fa4a26778688bd27245", $obj->getSelectionMarkerFill());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowAxes()
     *
     * @return void.
     */
    public function testSetShowAxes(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setShowAxes(true);
        $this->assertEquals(true, $obj->getShowAxes());
    }

    /**
     * Tests setSpacing()
     *
     * @return void.
     */
    public function testSetSpacing(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setSpacing(["spacing" => "348b374e34b64661f5976e46c7a5c08a"]);
        $this->assertEquals(["spacing" => "348b374e34b64661f5976e46c7a5c08a"], $obj->getSpacing());
    }

    /**
     * Tests setSpacingBottom()
     *
     * @return void.
     */
    public function testSetSpacingBottom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setSpacingBottom(89.0);
        $this->assertEquals(89.0, $obj->getSpacingBottom());
    }

    /**
     * Tests setSpacingLeft()
     *
     * @return void.
     */
    public function testSetSpacingLeft(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setSpacingLeft(59.0);
        $this->assertEquals(59.0, $obj->getSpacingLeft());
    }

    /**
     * Tests setSpacingRight()
     *
     * @return void.
     */
    public function testSetSpacingRight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setSpacingRight(6.0);
        $this->assertEquals(6.0, $obj->getSpacingRight());
    }

    /**
     * Tests setSpacingTop()
     *
     * @return void.
     */
    public function testSetSpacingTop(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setSpacingTop(76.0);
        $this->assertEquals(76.0, $obj->getSpacingTop());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setType("area");
        $this->assertEquals("area", $obj->getType());

        $obj->setType("arearange");
        $this->assertEquals("arearange", $obj->getType());

        $obj->setType("areaspline");
        $this->assertEquals("areaspline", $obj->getType());

        $obj->setType("areasplinerange");
        $this->assertEquals("areasplinerange", $obj->getType());

        $obj->setType("bar");
        $this->assertEquals("bar", $obj->getType());

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

        $obj->setType("heatmap");
        $this->assertEquals("heatmap", $obj->getType());

        $obj->setType("line");
        $this->assertEquals("line", $obj->getType());

        $obj->setType("pie");
        $this->assertEquals("pie", $obj->getType());

        $obj->setType("polygon");
        $this->assertEquals("polygon", $obj->getType());

        $obj->setType("pyramid");
        $this->assertEquals("pyramid", $obj->getType());

        $obj->setType("scatter");
        $this->assertEquals("scatter", $obj->getType());

        $obj->setType("solidgauge");
        $this->assertEquals("solidgauge", $obj->getType());

        $obj->setType("spline");
        $this->assertEquals("spline", $obj->getType());

        $obj->setType("treemap");
        $this->assertEquals("treemap", $obj->getType());

        $obj->setType("waterfall");
        $this->assertEquals("waterfall", $obj->getType());
    }

    /**
     * Tests setTypeDescription()
     *
     * @return void.
     */
    public function testSetTypeDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setTypeDescription("03c3ff624590aba1e18136e967cc7455");
        $this->assertEquals("03c3ff624590aba1e18136e967cc7455", $obj->getTypeDescription());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setWidth(97.0);
        $this->assertEquals(97.0, $obj->getWidth());
    }

    /**
     * Tests setZoomType()
     *
     * @return void.
     */
    public function testSetZoomType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj->setZoomType(null);
        $this->assertEquals(null, $obj->getZoomType());

        $obj->setZoomType("x");
        $this->assertEquals("x", $obj->getZoomType());

        $obj->setZoomType("xy");
        $this->assertEquals("xy", $obj->getZoomType());

        $obj->setZoomType("y");
        $this->assertEquals("y", $obj->getZoomType());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $this->assertEquals(true, $obj->getAlignTicks());
        $this->assertEquals("true", $obj->getAnimation());
        $this->assertEquals("#FFFFFF", $obj->getBackgroundColor());
        $this->assertEquals("#335cad", $obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderRadius());
        $this->assertEquals(0, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertEquals(10, $obj->getColorCount());
        $this->assertEquals("line", $obj->getDefaultSeriesType());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getHeight());
        $this->assertEquals(true, $obj->getIgnoreHiddenSeries());
        $this->assertEquals(false, $obj->getInverted());
        $this->assertNull($obj->getMargin());
        $this->assertNull($obj->getMarginBottom());
        $this->assertNull($obj->getMarginLeft());
        $this->assertNull($obj->getMarginRight());
        $this->assertNull($obj->getMarginTop());
        $this->assertNull($obj->getOptions3d());
        $this->assertNull($obj->getPanKey());
        $this->assertEquals(false, $obj->getPanning());
        $this->assertNull($obj->getPinchType());
        $this->assertNull($obj->getPlotBackgroundColor());
        $this->assertNull($obj->getPlotBackgroundImage());
        $this->assertEquals("#cccccc", $obj->getPlotBorderColor());
        $this->assertEquals(0, $obj->getPlotBorderWidth());
        $this->assertEquals("false", $obj->getPlotShadow());
        $this->assertEquals(false, $obj->getPolar());
        $this->assertEquals(true, $obj->getReflow());
        $this->assertNull($obj->getRenderTo());
        $this->assertNull($obj->getResetZoomButton());
        $this->assertEquals("rgba(51,92,173,0.25)", $obj->getSelectionMarkerFill());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowAxes());
        $this->assertEquals([10, 10, 15, 10], $obj->getSpacing());
        $this->assertEquals(15, $obj->getSpacingBottom());
        $this->assertEquals(10, $obj->getSpacingLeft());
        $this->assertEquals(10, $obj->getSpacingRight());
        $this->assertEquals(10, $obj->getSpacingTop());
        $this->assertEquals(["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], $obj->getStyle());
        $this->assertEquals("line", $obj->getType());
        $this->assertNull($obj->getTypeDescription());
        $this->assertNull($obj->getWidth());
        $this->assertNull($obj->getZoomType());
    }
}
