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
 * Highcharts y axis test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsYAxisTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $crosshair   = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();
        $events      = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents();
        $labels      = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsLabels();
        $stackLabels = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();
        $title       = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $exp = ["allowDecimals" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "angle" => 80.0, "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 10.0, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => $crosshair->jsonSerialize(), "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => false, "events" => $events->jsonSerialize(), "floor" => 21.0, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineInterpolation" => "polygon", "gridLineWidth" => 49.0, "gridZIndex" => 21.0, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => $labels->jsonSerialize(), "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 87.0, "linkedTo" => 81.0, "max" => 3.0, "maxColor" => "e8d29e8452c2bd3836cd2f3b634c8607", "maxPadding" => 29.0, "maxZoom" => 19.0, "min" => 44.0, "minColor" => "fa74a44d54abc88a717aa4c08f5921cb", "minPadding" => 58.0, "minRange" => 48.0, "minTickInterval" => 55.0, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 15.0, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 66.0, "minorTickPosition" => "outside", "minorTickWidth" => 52.0, "offset" => 45.0, "opposite" => false, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => true, "reversedStacks" => true, "showEmpty" => true, "showFirstLabel" => false, "showLastLabel" => false, "softMax" => 67.0, "softMin" => 43.0, "stackLabels" => $stackLabels->jsonSerialize(), "startOfWeek" => 20.0, "startOnTick" => false, "stops" => ["stops" => "61e3bbe3ca4c8bc38e142b139a346b46"], "tickAmount" => 5.0, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 79.0, "tickLength" => 88.0, "tickPixelInterval" => 15.0, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 83.0, "tickmarkPlacement" => "between", "title" => $title->jsonSerialize(), "type" => "category", "uniqueNames" => false, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"], "visible" => true];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();
        $obj->setAllowDecimals(true);
        $obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");
        $obj->setAngle(80.0);
        $obj->setBreaks(["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"]);
        $obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);
        $obj->setCeiling(10.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setCrosshair($crosshair);
        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEndOnTick(false);
        $obj->setEvents($events);
        $obj->setFloor(21.0);
        $obj->setGridLineColor("fa817119e014d62cd3eeb4aef3821870");
        $obj->setGridLineDashStyle("LongDashDotDot");
        $obj->setGridLineInterpolation("polygon");
        $obj->setGridLineWidth(49.0);
        $obj->setGridZIndex(21.0);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabels($labels);
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(87.0);
        $obj->setLinkedTo(81.0);
        $obj->setMax(3.0);
        $obj->setMaxColor("e8d29e8452c2bd3836cd2f3b634c8607");
        $obj->setMaxPadding(29.0);
        $obj->setMaxZoom(19.0);
        $obj->setMin(44.0);
        $obj->setMinColor("fa74a44d54abc88a717aa4c08f5921cb");
        $obj->setMinPadding(58.0);
        $obj->setMinRange(48.0);
        $obj->setMinTickInterval(55.0);
        $obj->setMinorGridLineColor("02d67903f43b194a260f6e05958c6f60");
        $obj->setMinorGridLineDashStyle("LongDashDotDot");
        $obj->setMinorGridLineWidth(15.0);
        $obj->setMinorTickColor("58f14daeca50e29794caa541286c45b5");
        $obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");
        $obj->setMinorTickLength(66.0);
        $obj->setMinorTickPosition("outside");
        $obj->setMinorTickWidth(52.0);
        $obj->setOffset(45.0);
        $obj->setOpposite(false);
        $obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);
        $obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);
        $obj->setReversed(true);
        $obj->setReversedStacks(true);
        $obj->setShowEmpty(true);
        $obj->setShowFirstLabel(false);
        $obj->setShowLastLabel(false);
        $obj->setSoftMax(67.0);
        $obj->setSoftMin(43.0);
        $obj->setStackLabels($stackLabels);
        $obj->setStartOfWeek(20.0);
        $obj->setStartOnTick(false);
        $obj->setStops(["stops" => "61e3bbe3ca4c8bc38e142b139a346b46"]);
        $obj->setTickAmount(5.0);
        $obj->setTickColor("3569a8266538a625569574b2c96e237c");
        $obj->setTickInterval(79.0);
        $obj->setTickLength(88.0);
        $obj->setTickPixelInterval(15.0);
        $obj->setTickPosition("outside");
        $obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");
        $obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);
        $obj->setTickWidth(83.0);
        $obj->setTickmarkPlacement("between");
        $obj->setTitle($title);
        $obj->setType("category");
        $obj->setUniqueNames(false);
        $obj->setUnits(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]);
        $obj->setVisible(true);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newCrosshair()
     *
     * @return void.
     */
    public function testNewCrosshair(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $res = $obj->newCrosshair();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents::class, $res);
    }

    /**
     * Tests newLabels()
     *
     * @return void.
     */
    public function testNewLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $res = $obj->newLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsLabels::class, $res);
    }

    /**
     * Tests newStackLabels()
     *
     * @return void.
     */
    public function testNewStackLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $res = $obj->newStackLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels::class, $res);
    }

    /**
     * Tests newTitle()
     *
     * @return void.
     */
    public function testNewTitle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle::class, $res);
    }

    /**
     * Tests setAllowDecimals()
     *
     * @return void.
     */
    public function testSetAllowDecimals(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setAllowDecimals(false);
        $this->assertFalse($obj->getAllowDecimals());
    }

    /**
     * Tests setAlternateGridColor()
     *
     * @return void.
     */
    public function testSetAlternateGridColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");
        $this->assertEquals("e4c3a98e933a4f898d10c74d6b0cc3e9", $obj->getAlternateGridColor());
    }

    /**
     * Tests setAngle()
     *
     * @return void.
     */
    public function testSetAngle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setAngle(96.0);
        $this->assertEquals(96.0, $obj->getAngle());
    }

    /**
     * Tests setBreaks()
     *
     * @return void.
     */
    public function testSetBreaks(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setBreaks(["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"]);
        $this->assertEquals(["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], $obj->getBreaks());
    }

    /**
     * Tests setCategories()
     *
     * @return void.
     */
    public function testSetCategories(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);
        $this->assertEquals(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], $obj->getCategories());
    }

    /**
     * Tests setCeiling()
     *
     * @return void.
     */
    public function testSetCeiling(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setCeiling(46.0);
        $this->assertEquals(46.0, $obj->getCeiling());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setCrosshair()
     *
     * @return void.
     */
    public function testSetCrosshair(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair mock.
        $crosshair = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setCrosshair($crosshair);
        $this->assertSame($crosshair, $obj->getCrosshair());
    }

    /**
     * Tests setDateTimeLabelFormats()
     *
     * @return void.
     */
    public function testSetDateTimeLabelFormats(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $this->assertEquals(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], $obj->getDateTimeLabelFormats());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEndOnTick()
     *
     * @return void.
     */
    public function testSetEndOnTick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setEndOnTick(false);
        $this->assertFalse($obj->getEndOnTick());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setFloor()
     *
     * @return void.
     */
    public function testSetFloor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setFloor(24.0);
        $this->assertEquals(24.0, $obj->getFloor());
    }

    /**
     * Tests setGridLineColor()
     *
     * @return void.
     */
    public function testSetGridLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setGridLineColor("fa817119e014d62cd3eeb4aef3821870");
        $this->assertEquals("fa817119e014d62cd3eeb4aef3821870", $obj->getGridLineColor());
    }

    /**
     * Tests setGridLineDashStyle()
     *
     * @return void.
     */
    public function testSetGridLineDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setGridLineDashStyle("Dash");
        $this->assertEquals("Dash", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("DashDot");
        $this->assertEquals("DashDot", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("Dot");
        $this->assertEquals("Dot", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("LongDash");
        $this->assertEquals("LongDash", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("LongDashDot");
        $this->assertEquals("LongDashDot", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("ShortDash");
        $this->assertEquals("ShortDash", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("ShortDashDot");
        $this->assertEquals("ShortDashDot", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("ShortDashDotDot");
        $this->assertEquals("ShortDashDotDot", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("ShortDot");
        $this->assertEquals("ShortDot", $obj->getGridLineDashStyle());

        $obj->setGridLineDashStyle("Solid");
        $this->assertEquals("Solid", $obj->getGridLineDashStyle());
    }

    /**
     * Tests setGridLineInterpolation()
     *
     * @return void.
     */
    public function testSetGridLineInterpolation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setGridLineInterpolation("circle");
        $this->assertEquals("circle", $obj->getGridLineInterpolation());

        $obj->setGridLineInterpolation("polygon");
        $this->assertEquals("polygon", $obj->getGridLineInterpolation());
    }

    /**
     * Tests setGridLineWidth()
     *
     * @return void.
     */
    public function testSetGridLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setGridLineWidth(65.0);
        $this->assertEquals(65.0, $obj->getGridLineWidth());
    }

    /**
     * Tests setGridZIndex()
     *
     * @return void.
     */
    public function testSetGridZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setGridZIndex(52.0);
        $this->assertEquals(52.0, $obj->getGridZIndex());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabels()
     *
     * @return void.
     */
    public function testSetLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsLabels mock.
        $labels = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setLabels($labels);
        $this->assertSame($labels, $obj->getLabels());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setLineWidth(83.0);
        $this->assertEquals(83.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setLinkedTo(13.0);
        $this->assertEquals(13.0, $obj->getLinkedTo());
    }

    /**
     * Tests setMax()
     *
     * @return void.
     */
    public function testSetMax(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMax(7.0);
        $this->assertEquals(7.0, $obj->getMax());
    }

    /**
     * Tests setMaxColor()
     *
     * @return void.
     */
    public function testSetMaxColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMaxColor("e8d29e8452c2bd3836cd2f3b634c8607");
        $this->assertEquals("e8d29e8452c2bd3836cd2f3b634c8607", $obj->getMaxColor());
    }

    /**
     * Tests setMaxPadding()
     *
     * @return void.
     */
    public function testSetMaxPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMaxPadding(98.0);
        $this->assertEquals(98.0, $obj->getMaxPadding());
    }

    /**
     * Tests setMaxZoom()
     *
     * @return void.
     */
    public function testSetMaxZoom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMaxZoom(80.0);
        $this->assertEquals(80.0, $obj->getMaxZoom());
    }

    /**
     * Tests setMin()
     *
     * @return void.
     */
    public function testSetMin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMin(60.0);
        $this->assertEquals(60.0, $obj->getMin());
    }

    /**
     * Tests setMinColor()
     *
     * @return void.
     */
    public function testSetMinColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinColor("fa74a44d54abc88a717aa4c08f5921cb");
        $this->assertEquals("fa74a44d54abc88a717aa4c08f5921cb", $obj->getMinColor());
    }

    /**
     * Tests setMinPadding()
     *
     * @return void.
     */
    public function testSetMinPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinPadding(43.0);
        $this->assertEquals(43.0, $obj->getMinPadding());
    }

    /**
     * Tests setMinRange()
     *
     * @return void.
     */
    public function testSetMinRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinRange(82.0);
        $this->assertEquals(82.0, $obj->getMinRange());
    }

    /**
     * Tests setMinTickInterval()
     *
     * @return void.
     */
    public function testSetMinTickInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinTickInterval(26.0);
        $this->assertEquals(26.0, $obj->getMinTickInterval());
    }

    /**
     * Tests setMinorGridLineColor()
     *
     * @return void.
     */
    public function testSetMinorGridLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorGridLineColor("02d67903f43b194a260f6e05958c6f60");
        $this->assertEquals("02d67903f43b194a260f6e05958c6f60", $obj->getMinorGridLineColor());
    }

    /**
     * Tests setMinorGridLineDashStyle()
     *
     * @return void.
     */
    public function testSetMinorGridLineDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorGridLineDashStyle("Dash");
        $this->assertEquals("Dash", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("DashDot");
        $this->assertEquals("DashDot", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("Dot");
        $this->assertEquals("Dot", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("LongDash");
        $this->assertEquals("LongDash", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("LongDashDot");
        $this->assertEquals("LongDashDot", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("ShortDash");
        $this->assertEquals("ShortDash", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("ShortDashDot");
        $this->assertEquals("ShortDashDot", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("ShortDashDotDot");
        $this->assertEquals("ShortDashDotDot", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("ShortDot");
        $this->assertEquals("ShortDot", $obj->getMinorGridLineDashStyle());

        $obj->setMinorGridLineDashStyle("Solid");
        $this->assertEquals("Solid", $obj->getMinorGridLineDashStyle());
    }

    /**
     * Tests setMinorGridLineWidth()
     *
     * @return void.
     */
    public function testSetMinorGridLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorGridLineWidth(19.0);
        $this->assertEquals(19.0, $obj->getMinorGridLineWidth());
    }

    /**
     * Tests setMinorTickColor()
     *
     * @return void.
     */
    public function testSetMinorTickColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorTickColor("58f14daeca50e29794caa541286c45b5");
        $this->assertEquals("58f14daeca50e29794caa541286c45b5", $obj->getMinorTickColor());
    }

    /**
     * Tests setMinorTickInterval()
     *
     * @return void.
     */
    public function testSetMinorTickInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");
        $this->assertEquals("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", $obj->getMinorTickInterval());
    }

    /**
     * Tests setMinorTickLength()
     *
     * @return void.
     */
    public function testSetMinorTickLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorTickLength(82.0);
        $this->assertEquals(82.0, $obj->getMinorTickLength());
    }

    /**
     * Tests setMinorTickPosition()
     *
     * @return void.
     */
    public function testSetMinorTickPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorTickPosition("inside");
        $this->assertEquals("inside", $obj->getMinorTickPosition());

        $obj->setMinorTickPosition("outside");
        $this->assertEquals("outside", $obj->getMinorTickPosition());
    }

    /**
     * Tests setMinorTickWidth()
     *
     * @return void.
     */
    public function testSetMinorTickWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorTickWidth(29.0);
        $this->assertEquals(29.0, $obj->getMinorTickWidth());
    }

    /**
     * Tests setOffset()
     *
     * @return void.
     */
    public function testSetOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setOffset(61.0);
        $this->assertEquals(61.0, $obj->getOffset());
    }

    /**
     * Tests setOpposite()
     *
     * @return void.
     */
    public function testSetOpposite(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setOpposite(false);
        $this->assertFalse($obj->getOpposite());
    }

    /**
     * Tests setPlotBands()
     *
     * @return void.
     */
    public function testSetPlotBands(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);
        $this->assertEquals(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], $obj->getPlotBands());
    }

    /**
     * Tests setPlotLines()
     *
     * @return void.
     */
    public function testSetPlotLines(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);
        $this->assertEquals(["plotLines" => "ca27823684c96816234d7d97344db89c"], $obj->getPlotLines());
    }

    /**
     * Tests setReversed()
     *
     * @return void.
     */
    public function testSetReversed(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setReversed(true);
        $this->assertTrue($obj->getReversed());
    }

    /**
     * Tests setReversedStacks()
     *
     * @return void.
     */
    public function testSetReversedStacks(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setReversedStacks(true);
        $this->assertTrue($obj->getReversedStacks());
    }

    /**
     * Tests setShowEmpty()
     *
     * @return void.
     */
    public function testSetShowEmpty(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setShowEmpty(true);
        $this->assertTrue($obj->getShowEmpty());
    }

    /**
     * Tests setShowFirstLabel()
     *
     * @return void.
     */
    public function testSetShowFirstLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setShowFirstLabel(true);
        $this->assertTrue($obj->getShowFirstLabel());
    }

    /**
     * Tests setShowLastLabel()
     *
     * @return void.
     */
    public function testSetShowLastLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setShowLastLabel(true);
        $this->assertTrue($obj->getShowLastLabel());
    }

    /**
     * Tests setSoftMax()
     *
     * @return void.
     */
    public function testSetSoftMax(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setSoftMax(43.0);
        $this->assertEquals(43.0, $obj->getSoftMax());
    }

    /**
     * Tests setSoftMin()
     *
     * @return void.
     */
    public function testSetSoftMin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setSoftMin(93.0);
        $this->assertEquals(93.0, $obj->getSoftMin());
    }

    /**
     * Tests setStackLabels()
     *
     * @return void.
     */
    public function testSetStackLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels mock.
        $stackLabels = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setStackLabels($stackLabels);
        $this->assertSame($stackLabels, $obj->getStackLabels());
    }

    /**
     * Tests setStartOfWeek()
     *
     * @return void.
     */
    public function testSetStartOfWeek(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setStartOfWeek(43.0);
        $this->assertEquals(43.0, $obj->getStartOfWeek());
    }

    /**
     * Tests setStartOnTick()
     *
     * @return void.
     */
    public function testSetStartOnTick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setStartOnTick(true);
        $this->assertTrue($obj->getStartOnTick());
    }

    /**
     * Tests setStops()
     *
     * @return void.
     */
    public function testSetStops(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setStops(["stops" => "61e3bbe3ca4c8bc38e142b139a346b46"]);
        $this->assertEquals(["stops" => "61e3bbe3ca4c8bc38e142b139a346b46"], $obj->getStops());
    }

    /**
     * Tests setTickAmount()
     *
     * @return void.
     */
    public function testSetTickAmount(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickAmount(58.0);
        $this->assertEquals(58.0, $obj->getTickAmount());
    }

    /**
     * Tests setTickColor()
     *
     * @return void.
     */
    public function testSetTickColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickColor("3569a8266538a625569574b2c96e237c");
        $this->assertEquals("3569a8266538a625569574b2c96e237c", $obj->getTickColor());
    }

    /**
     * Tests setTickInterval()
     *
     * @return void.
     */
    public function testSetTickInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickInterval(48.0);
        $this->assertEquals(48.0, $obj->getTickInterval());
    }

    /**
     * Tests setTickLength()
     *
     * @return void.
     */
    public function testSetTickLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickLength(47.0);
        $this->assertEquals(47.0, $obj->getTickLength());
    }

    /**
     * Tests setTickPixelInterval()
     *
     * @return void.
     */
    public function testSetTickPixelInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickPixelInterval(3.0);
        $this->assertEquals(3.0, $obj->getTickPixelInterval());
    }

    /**
     * Tests setTickPosition()
     *
     * @return void.
     */
    public function testSetTickPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setMinorTickPosition("inside");
        $this->assertEquals("inside", $obj->getMinorTickPosition());

        $obj->setMinorTickPosition("outside");
        $this->assertEquals("outside", $obj->getMinorTickPosition());
    }

    /**
     * Tests setTickPositioner()
     *
     * @return void.
     */
    public function testSetTickPositioner(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");
        $this->assertEquals("c6a22a267ac93652e3443f821bb369bd", $obj->getTickPositioner());
    }

    /**
     * Tests setTickPositions()
     *
     * @return void.
     */
    public function testSetTickPositions(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);
        $this->assertEquals(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], $obj->getTickPositions());
    }

    /**
     * Tests setTickWidth()
     *
     * @return void.
     */
    public function testSetTickWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickWidth(56.0);
        $this->assertEquals(56.0, $obj->getTickWidth());
    }

    /**
     * Tests setTickmarkPlacement()
     *
     * @return void.
     */
    public function testSetTickmarkPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTickmarkPlacement(null);
        $this->assertNull($obj->getTickmarkPlacement());

        $obj->setTickmarkPlacement("between");
        $this->assertEquals("between", $obj->getTickmarkPlacement());

        $obj->setTickmarkPlacement("on");
        $this->assertEquals("on", $obj->getTickmarkPlacement());
    }

    /**
     * Tests setTitle()
     *
     * @return void.
     */
    public function testSetTitle(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle mock.
        $title = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setTitle($title);
        $this->assertSame($title, $obj->getTitle());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setType("category");
        $this->assertEquals("category", $obj->getType());

        $obj->setType("datetime");
        $this->assertEquals("datetime", $obj->getType());

        $obj->setType("linear");
        $this->assertEquals("linear", $obj->getType());

        $obj->setType("logarithmic");
        $this->assertEquals("logarithmic", $obj->getType());
    }

    /**
     * Tests setUniqueNames()
     *
     * @return void.
     */
    public function testSetUniqueNames(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setUniqueNames(true);
        $this->assertTrue($obj->getUniqueNames());
    }

    /**
     * Tests setUnits()
     *
     * @return void.
     */
    public function testSetUnits(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setUnits(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]);
        $this->assertEquals(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"], $obj->getUnits());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $obj->setVisible(true);
        $this->assertTrue($obj->getVisible());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsYAxis();

        $this->assertTrue($obj->getAllowDecimals());
        $this->assertNull($obj->getAlternateGridColor());
        $this->assertEquals(0, $obj->getAngle());
        $this->assertNull($obj->getBreaks());
        $this->assertNull($obj->getCategories());
        $this->assertNull($obj->getCeiling());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getCrosshair());
        $this->assertNull($obj->getDateTimeLabelFormats());
        $this->assertNull($obj->getDescription());
        $this->assertTrue($obj->getEndOnTick());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getFloor());
        $this->assertEquals("#e6e6e6", $obj->getGridLineColor());
        $this->assertEquals("Solid", $obj->getGridLineDashStyle());
        $this->assertNull($obj->getGridLineInterpolation());
        $this->assertEquals(1, $obj->getGridLineWidth());
        $this->assertEquals(1, $obj->getGridZIndex());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabels());
        $this->assertEquals("#ccd6eb", $obj->getLineColor());
        $this->assertEquals(0, $obj->getLineWidth());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMax());
        $this->assertEquals("#003399", $obj->getMaxColor());
        $this->assertEquals(0.05, $obj->getMaxPadding());
        $this->assertNull($obj->getMaxZoom());
        $this->assertNull($obj->getMin());
        $this->assertEquals("#e6ebf5", $obj->getMinColor());
        $this->assertEquals(0.05, $obj->getMinPadding());
        $this->assertNull($obj->getMinRange());
        $this->assertNull($obj->getMinTickInterval());
        $this->assertEquals("#f2f2f2", $obj->getMinorGridLineColor());
        $this->assertEquals("Solid", $obj->getMinorGridLineDashStyle());
        $this->assertEquals(1, $obj->getMinorGridLineWidth());
        $this->assertEquals("#999999", $obj->getMinorTickColor());
        $this->assertNull($obj->getMinorTickInterval());
        $this->assertEquals(2, $obj->getMinorTickLength());
        $this->assertEquals("outside", $obj->getMinorTickPosition());
        $this->assertEquals(0, $obj->getMinorTickWidth());
        $this->assertEquals(0, $obj->getOffset());
        $this->assertFalse($obj->getOpposite());
        $this->assertNull($obj->getPlotBands());
        $this->assertNull($obj->getPlotLines());
        $this->assertFalse($obj->getReversed());
        $this->assertTrue($obj->getReversedStacks());
        $this->assertTrue($obj->getShowEmpty());
        $this->assertTrue($obj->getShowFirstLabel());
        $this->assertNull($obj->getShowLastLabel());
        $this->assertNull($obj->getSoftMax());
        $this->assertNull($obj->getSoftMin());
        $this->assertNull($obj->getStackLabels());
        $this->assertEquals(1, $obj->getStartOfWeek());
        $this->assertTrue($obj->getStartOnTick());
        $this->assertNull($obj->getStops());
        $this->assertNull($obj->getTickAmount());
        $this->assertEquals("#ccd6eb", $obj->getTickColor());
        $this->assertNull($obj->getTickInterval());
        $this->assertEquals(10, $obj->getTickLength());
        $this->assertNull($obj->getTickPixelInterval());
        $this->assertEquals("outside", $obj->getTickPosition());
        $this->assertNull($obj->getTickPositioner());
        $this->assertNull($obj->getTickPositions());
        $this->assertEquals(0, $obj->getTickWidth());
        $this->assertNull($obj->getTickmarkPlacement());
        $this->assertNull($obj->getTitle());
        $this->assertEquals("linear", $obj->getType());
        $this->assertTrue($obj->getUniqueNames());
        $this->assertNull($obj->getUnits());
        $this->assertTrue($obj->getVisible());
    }
}
