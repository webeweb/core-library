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

namespace WBW\Library\Highcharts\Tests\Model\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts z axis test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsZAxisTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $crosshair = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsCrosshair();
        $events    = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsEvents();
        $labels    = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();
        $title     = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle();

        $exp = ["allowDecimals" => false, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 53.0, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => $crosshair->jsonSerialize(), "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => false, "events" => $events->jsonSerialize(), "floor" => 51.0, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 43.0, "gridZIndex" => 10.0, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => $labels->jsonSerialize(), "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20.0, "linkedTo" => 61.0, "max" => 95.0, "maxPadding" => 75.0, "maxZoom" => 47.0, "min" => 87.0, "minPadding" => 89.0, "minRange" => 90.0, "minTickInterval" => 10.0, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 25.0, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 78.0, "minorTickPosition" => "outside", "minorTickWidth" => 12.0, "offset" => 0.0, "opposite" => true, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "softMax" => 0.0, "softMin" => 30.0, "startOfWeek" => 17.0, "startOnTick" => true, "tickAmount" => 45.0, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 67.0, "tickLength" => 12.0, "tickPixelInterval" => 87.0, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 20.0, "tickmarkPlacement" => "between", "title" => $title->jsonSerialize(), "type" => "category", "uniqueNames" => false, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"], "visible" => false];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();
        $obj->setAllowDecimals(false);
        $obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");
        $obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);
        $obj->setCeiling(53.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setCrosshair($crosshair);
        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEndOnTick(false);
        $obj->setEvents($events);
        $obj->setFloor(51.0);
        $obj->setGridLineColor("fa817119e014d62cd3eeb4aef3821870");
        $obj->setGridLineDashStyle("LongDashDotDot");
        $obj->setGridLineWidth(43.0);
        $obj->setGridZIndex(10.0);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabels($labels);
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(20.0);
        $obj->setLinkedTo(61.0);
        $obj->setMax(95.0);
        $obj->setMaxPadding(75.0);
        $obj->setMaxZoom(47.0);
        $obj->setMin(87.0);
        $obj->setMinPadding(89.0);
        $obj->setMinRange(90.0);
        $obj->setMinTickInterval(10.0);
        $obj->setMinorGridLineColor("02d67903f43b194a260f6e05958c6f60");
        $obj->setMinorGridLineDashStyle("LongDashDotDot");
        $obj->setMinorGridLineWidth(25.0);
        $obj->setMinorTickColor("58f14daeca50e29794caa541286c45b5");
        $obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");
        $obj->setMinorTickLength(78.0);
        $obj->setMinorTickPosition("outside");
        $obj->setMinorTickWidth(12.0);
        $obj->setOffset(0.0);
        $obj->setOpposite(true);
        $obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);
        $obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);
        $obj->setReversed(false);
        $obj->setShowEmpty(true);
        $obj->setShowFirstLabel(true);
        $obj->setShowLastLabel(true);
        $obj->setSoftMax(0.0);
        $obj->setSoftMin(30.0);
        $obj->setStartOfWeek(17.0);
        $obj->setStartOnTick(true);
        $obj->setTickAmount(45.0);
        $obj->setTickColor("3569a8266538a625569574b2c96e237c");
        $obj->setTickInterval(67.0);
        $obj->setTickLength(12.0);
        $obj->setTickPixelInterval(87.0);
        $obj->setTickPosition("outside");
        $obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");
        $obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);
        $obj->setTickWidth(20.0);
        $obj->setTickmarkPlacement("between");
        $obj->setTitle($title);
        $obj->setType("category");
        $obj->setUniqueNames(false);
        $obj->setUnits(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]);
        $obj->setVisible(false);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newCrosshair()
     *
     * @return void.
     */
    public function testNewCrosshair(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $res = $obj->newCrosshair();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsCrosshair::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsEvents::class, $res);
    }

    /**
     * Tests newLabels()
     *
     * @return void.
     */
    public function testNewLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $res = $obj->newLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels::class, $res);
    }

    /**
     * Tests newTitle()
     *
     * @return void.
     */
    public function testNewTitle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle::class, $res);
    }

    /**
     * Tests setAllowDecimals()
     *
     * @return void.
     */
    public function testSetAllowDecimals(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setAllowDecimals(true);
        $this->assertTrue($obj->getAllowDecimals());
    }

    /**
     * Tests setAlternateGridColor()
     *
     * @return void.
     */
    public function testSetAlternateGridColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");
        $this->assertEquals("e4c3a98e933a4f898d10c74d6b0cc3e9", $obj->getAlternateGridColor());
    }

    /**
     * Tests setCategories()
     *
     * @return void.
     */
    public function testSetCategories(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);
        $this->assertEquals(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], $obj->getCategories());
    }

    /**
     * Tests setCeiling()
     *
     * @return void.
     */
    public function testSetCeiling(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setCeiling(33.0);
        $this->assertEquals(33.0, $obj->getCeiling());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setCrosshair()
     *
     * @return void.
     */
    public function testSetCrosshair(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsCrosshair mock.
        $crosshair = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsCrosshair();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setCrosshair($crosshair);
        $this->assertSame($crosshair, $obj->getCrosshair());
    }

    /**
     * Tests setDateTimeLabelFormats()
     *
     * @return void.
     */
    public function testSetDateTimeLabelFormats(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $this->assertEquals(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], $obj->getDateTimeLabelFormats());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEndOnTick()
     *
     * @return void.
     */
    public function testSetEndOnTick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setEndOnTick(true);
        $this->assertTrue($obj->getEndOnTick());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setFloor()
     *
     * @return void.
     */
    public function testSetFloor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setFloor(24.0);
        $this->assertEquals(24.0, $obj->getFloor());
    }

    /**
     * Tests setGridLineColor()
     *
     * @return void.
     */
    public function testSetGridLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setGridLineColor("fa817119e014d62cd3eeb4aef3821870");
        $this->assertEquals("fa817119e014d62cd3eeb4aef3821870", $obj->getGridLineColor());
    }

    /**
     * Tests setGridLineDashStyle()
     *
     * @return void.
     */
    public function testSetGridLineDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

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
     * Tests setGridLineWidth()
     *
     * @return void.
     */
    public function testSetGridLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setGridLineWidth(27.0);
        $this->assertEquals(27.0, $obj->getGridLineWidth());
    }

    /**
     * Tests setGridZIndex()
     *
     * @return void.
     */
    public function testSetGridZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setGridZIndex(32.0);
        $this->assertEquals(32.0, $obj->getGridZIndex());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabels()
     *
     * @return void.
     */
    public function testSetLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels mock.
        $labels = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setLabels($labels);
        $this->assertSame($labels, $obj->getLabels());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setLineWidth(71.0);
        $this->assertEquals(71.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setLinkedTo(14.0);
        $this->assertEquals(14.0, $obj->getLinkedTo());
    }

    /**
     * Tests setMax()
     *
     * @return void.
     */
    public function testSetMax(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMax(20.0);
        $this->assertEquals(20.0, $obj->getMax());
    }

    /**
     * Tests setMaxPadding()
     *
     * @return void.
     */
    public function testSetMaxPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMaxPadding(61.0);
        $this->assertEquals(61.0, $obj->getMaxPadding());
    }

    /**
     * Tests setMaxZoom()
     *
     * @return void.
     */
    public function testSetMaxZoom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMaxZoom(25.0);
        $this->assertEquals(25.0, $obj->getMaxZoom());
    }

    /**
     * Tests setMin()
     *
     * @return void.
     */
    public function testSetMin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMin(46.0);
        $this->assertEquals(46.0, $obj->getMin());
    }

    /**
     * Tests setMinPadding()
     *
     * @return void.
     */
    public function testSetMinPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinPadding(38.0);
        $this->assertEquals(38.0, $obj->getMinPadding());
    }

    /**
     * Tests setMinRange()
     *
     * @return void.
     */
    public function testSetMinRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinRange(37.0);
        $this->assertEquals(37.0, $obj->getMinRange());
    }

    /**
     * Tests setMinTickInterval()
     *
     * @return void.
     */
    public function testSetMinTickInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinTickInterval(47.0);
        $this->assertEquals(47.0, $obj->getMinTickInterval());
    }

    /**
     * Tests setMinorGridLineColor()
     *
     * @return void.
     */
    public function testSetMinorGridLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinorGridLineColor("02d67903f43b194a260f6e05958c6f60");
        $this->assertEquals("02d67903f43b194a260f6e05958c6f60", $obj->getMinorGridLineColor());
    }

    /**
     * Tests setMinorGridLineDashStyle()
     *
     * @return void.
     */
    public function testSetMinorGridLineDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinorGridLineWidth(96.0);
        $this->assertEquals(96.0, $obj->getMinorGridLineWidth());
    }

    /**
     * Tests setMinorTickColor()
     *
     * @return void.
     */
    public function testSetMinorTickColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinorTickColor("58f14daeca50e29794caa541286c45b5");
        $this->assertEquals("58f14daeca50e29794caa541286c45b5", $obj->getMinorTickColor());
    }

    /**
     * Tests setMinorTickInterval()
     *
     * @return void.
     */
    public function testSetMinorTickInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");
        $this->assertEquals("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", $obj->getMinorTickInterval());
    }

    /**
     * Tests setMinorTickLength()
     *
     * @return void.
     */
    public function testSetMinorTickLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinorTickLength(69.0);
        $this->assertEquals(69.0, $obj->getMinorTickLength());
    }

    /**
     * Tests setMinorTickPosition()
     *
     * @return void.
     */
    public function testSetMinorTickPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinorTickWidth(10.0);
        $this->assertEquals(10.0, $obj->getMinorTickWidth());
    }

    /**
     * Tests setOffset()
     *
     * @return void.
     */
    public function testSetOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setOffset(76.0);
        $this->assertEquals(76.0, $obj->getOffset());
    }

    /**
     * Tests setOpposite()
     *
     * @return void.
     */
    public function testSetOpposite(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setOpposite(false);
        $this->assertFalse($obj->getOpposite());
    }

    /**
     * Tests setPlotBands()
     *
     * @return void.
     */
    public function testSetPlotBands(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);
        $this->assertEquals(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], $obj->getPlotBands());
    }

    /**
     * Tests setPlotLines()
     *
     * @return void.
     */
    public function testSetPlotLines(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);
        $this->assertEquals(["plotLines" => "ca27823684c96816234d7d97344db89c"], $obj->getPlotLines());
    }

    /**
     * Tests setReversed()
     *
     * @return void.
     */
    public function testSetReversed(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setReversed(false);
        $this->assertFalse($obj->getReversed());
    }

    /**
     * Tests setShowEmpty()
     *
     * @return void.
     */
    public function testSetShowEmpty(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setShowEmpty(false);
        $this->assertFalse($obj->getShowEmpty());
    }

    /**
     * Tests setShowFirstLabel()
     *
     * @return void.
     */
    public function testSetShowFirstLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setShowFirstLabel(true);
        $this->assertTrue($obj->getShowFirstLabel());
    }

    /**
     * Tests setShowLastLabel()
     *
     * @return void.
     */
    public function testSetShowLastLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setShowLastLabel(true);
        $this->assertTrue($obj->getShowLastLabel());
    }

    /**
     * Tests setSoftMax()
     *
     * @return void.
     */
    public function testSetSoftMax(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setSoftMax(51.0);
        $this->assertEquals(51.0, $obj->getSoftMax());
    }

    /**
     * Tests setSoftMin()
     *
     * @return void.
     */
    public function testSetSoftMin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setSoftMin(31.0);
        $this->assertEquals(31.0, $obj->getSoftMin());
    }

    /**
     * Tests setStartOfWeek()
     *
     * @return void.
     */
    public function testSetStartOfWeek(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setStartOfWeek(10.0);
        $this->assertEquals(10.0, $obj->getStartOfWeek());
    }

    /**
     * Tests setStartOnTick()
     *
     * @return void.
     */
    public function testSetStartOnTick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setStartOnTick(false);
        $this->assertFalse($obj->getStartOnTick());
    }

    /**
     * Tests setTickAmount()
     *
     * @return void.
     */
    public function testSetTickAmount(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickAmount(51.0);
        $this->assertEquals(51.0, $obj->getTickAmount());
    }

    /**
     * Tests setTickColor()
     *
     * @return void.
     */
    public function testSetTickColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickColor("3569a8266538a625569574b2c96e237c");
        $this->assertEquals("3569a8266538a625569574b2c96e237c", $obj->getTickColor());
    }

    /**
     * Tests setTickInterval()
     *
     * @return void.
     */
    public function testSetTickInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickInterval(34.0);
        $this->assertEquals(34.0, $obj->getTickInterval());
    }

    /**
     * Tests setTickLength()
     *
     * @return void.
     */
    public function testSetTickLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickLength(75.0);
        $this->assertEquals(75.0, $obj->getTickLength());
    }

    /**
     * Tests setTickPixelInterval()
     *
     * @return void.
     */
    public function testSetTickPixelInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickPixelInterval(14.0);
        $this->assertEquals(14.0, $obj->getTickPixelInterval());
    }

    /**
     * Tests setTickPosition()
     *
     * @return void.
     */
    public function testSetTickPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickPosition("inside");
        $this->assertEquals("inside", $obj->getTickPosition());

        $obj->setTickPosition("outside");
        $this->assertEquals("outside", $obj->getTickPosition());
    }

    /**
     * Tests setTickPositioner()
     *
     * @return void.
     */
    public function testSetTickPositioner(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");
        $this->assertEquals("c6a22a267ac93652e3443f821bb369bd", $obj->getTickPositioner());
    }

    /**
     * Tests setTickPositions()
     *
     * @return void.
     */
    public function testSetTickPositions(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);
        $this->assertEquals(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], $obj->getTickPositions());
    }

    /**
     * Tests setTickWidth()
     *
     * @return void.
     */
    public function testSetTickWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickWidth(68.0);
        $this->assertEquals(68.0, $obj->getTickWidth());
    }

    /**
     * Tests setTickmarkPlacement()
     *
     * @return void.
     */
    public function testSetTickmarkPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

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

        // Set a \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle mock.
        $title = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTitle($title);
        $this->assertSame($title, $obj->getTitle());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setUniqueNames(false);
        $this->assertFalse($obj->getUniqueNames());
    }

    /**
     * Tests setUnits()
     *
     * @return void.
     */
    public function testSetUnits(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setUnits(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]);
        $this->assertEquals(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"], $obj->getUnits());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setVisible(false);
        $this->assertFalse($obj->getVisible());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $this->assertTrue($obj->getAllowDecimals());
        $this->assertNull($obj->getAlternateGridColor());
        $this->assertNull($obj->getCategories());
        $this->assertNull($obj->getCeiling());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getCrosshair());
        $this->assertNull($obj->getDateTimeLabelFormats());
        $this->assertNull($obj->getDescription());
        $this->assertFalse($obj->getEndOnTick());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getFloor());
        $this->assertEquals("#e6e6e6", $obj->getGridLineColor());
        $this->assertEquals("Solid", $obj->getGridLineDashStyle());
        $this->assertEquals(0, $obj->getGridLineWidth());
        $this->assertEquals(1, $obj->getGridZIndex());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabels());
        $this->assertEquals("#ccd6eb", $obj->getLineColor());
        $this->assertEquals(1, $obj->getLineWidth());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMax());
        $this->assertEquals(0.01, $obj->getMaxPadding());
        $this->assertNull($obj->getMaxZoom());
        $this->assertNull($obj->getMin());
        $this->assertEquals(0.01, $obj->getMinPadding());
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
        $this->assertTrue($obj->getShowEmpty());
        $this->assertTrue($obj->getShowFirstLabel());
        $this->assertTrue($obj->getShowLastLabel());
        $this->assertNull($obj->getSoftMax());
        $this->assertNull($obj->getSoftMin());
        $this->assertEquals(1, $obj->getStartOfWeek());
        $this->assertFalse($obj->getStartOnTick());
        $this->assertNull($obj->getTickAmount());
        $this->assertEquals("#ccd6eb", $obj->getTickColor());
        $this->assertNull($obj->getTickInterval());
        $this->assertEquals(10, $obj->getTickLength());
        $this->assertNull($obj->getTickPixelInterval());
        $this->assertEquals("outside", $obj->getTickPosition());
        $this->assertNull($obj->getTickPositioner());
        $this->assertNull($obj->getTickPositions());
        $this->assertEquals(1, $obj->getTickWidth());
        $this->assertNull($obj->getTickmarkPlacement());
        $this->assertNull($obj->getTitle());
        $this->assertEquals("linear", $obj->getType());
        $this->assertTrue($obj->getUniqueNames());
        $this->assertNull($obj->getUnits());
        $this->assertTrue($obj->getVisible());
    }
}
