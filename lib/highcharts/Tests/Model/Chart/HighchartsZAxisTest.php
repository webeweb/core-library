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

        $exp = ["allowDecimals" => false, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 55.0, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => $crosshair->jsonSerialize(), "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => true, "events" => $events->jsonSerialize(), "floor" => 15.0, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 53.0, "gridZIndex" => 62.0, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => $labels->jsonSerialize(), "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 75.0, "linkedTo" => 96.0, "max" => 44.0, "maxPadding" => 1.0, "maxZoom" => 15.0, "min" => 25.0, "minPadding" => 30.0, "minRange" => 77.0, "minTickInterval" => 74.0, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 1.0, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 59.0, "minorTickPosition" => "outside", "minorTickWidth" => 30.0, "offset" => 79.0, "opposite" => false, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => true, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => false, "softMax" => 29.0, "softMin" => 9.0, "startOfWeek" => 73.0, "startOnTick" => false, "tickAmount" => 65.0, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 45.0, "tickLength" => 1.0, "tickPixelInterval" => 73.0, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 100.0, "tickmarkPlacement" => "between", "title" => $title->jsonSerialize(), "type" => "category", "uniqueNames" => true, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"], "visible" => true];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();
        $obj->setAllowDecimals(false);
        $obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");
        $obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);
        $obj->setCeiling(55.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setCrosshair($crosshair);
        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEndOnTick(true);
        $obj->setEvents($events);
        $obj->setFloor(15.0);
        $obj->setGridLineColor("fa817119e014d62cd3eeb4aef3821870");
        $obj->setGridLineDashStyle("LongDashDotDot");
        $obj->setGridLineWidth(53.0);
        $obj->setGridZIndex(62.0);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabels($labels);
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(75.0);
        $obj->setLinkedTo(96.0);
        $obj->setMax(44.0);
        $obj->setMaxPadding(1.0);
        $obj->setMaxZoom(15.0);
        $obj->setMin(25.0);
        $obj->setMinPadding(30.0);
        $obj->setMinRange(77.0);
        $obj->setMinTickInterval(74.0);
        $obj->setMinorGridLineColor("02d67903f43b194a260f6e05958c6f60");
        $obj->setMinorGridLineDashStyle("LongDashDotDot");
        $obj->setMinorGridLineWidth(1.0);
        $obj->setMinorTickColor("58f14daeca50e29794caa541286c45b5");
        $obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");
        $obj->setMinorTickLength(59.0);
        $obj->setMinorTickPosition("outside");
        $obj->setMinorTickWidth(30.0);
        $obj->setOffset(79.0);
        $obj->setOpposite(false);
        $obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);
        $obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);
        $obj->setReversed(true);
        $obj->setShowEmpty(true);
        $obj->setShowFirstLabel(true);
        $obj->setShowLastLabel(false);
        $obj->setSoftMax(29.0);
        $obj->setSoftMin(9.0);
        $obj->setStartOfWeek(73.0);
        $obj->setStartOnTick(false);
        $obj->setTickAmount(65.0);
        $obj->setTickColor("3569a8266538a625569574b2c96e237c");
        $obj->setTickInterval(45.0);
        $obj->setTickLength(1.0);
        $obj->setTickPixelInterval(73.0);
        $obj->setTickPosition("outside");
        $obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");
        $obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);
        $obj->setTickWidth(100.0);
        $obj->setTickmarkPlacement("between");
        $obj->setTitle($title);
        $obj->setType("category");
        $obj->setUniqueNames(true);
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
        $this->assertEquals(true, $obj->getAllowDecimals());
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

        $obj->setCeiling(46.0);
        $this->assertEquals(46.0, $obj->getCeiling());
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
        $this->assertEquals(true, $obj->getEndOnTick());
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

        $obj->setFloor(48.0);
        $this->assertEquals(48.0, $obj->getFloor());
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

        $obj->setGridLineDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getGridLineDashStyle());
    }

    /**
     * Tests setGridLineWidth()
     *
     * @return void.
     */
    public function testSetGridLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setGridLineWidth(90.0);
        $this->assertEquals(90.0, $obj->getGridLineWidth());
    }

    /**
     * Tests setGridZIndex()
     *
     * @return void.
     */
    public function testSetGridZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setGridZIndex(64.0);
        $this->assertEquals(64.0, $obj->getGridZIndex());
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

        $obj->setLineWidth(63.0);
        $this->assertEquals(63.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setLinkedTo(15.0);
        $this->assertEquals(15.0, $obj->getLinkedTo());
    }

    /**
     * Tests setMax()
     *
     * @return void.
     */
    public function testSetMax(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMax(94.0);
        $this->assertEquals(94.0, $obj->getMax());
    }

    /**
     * Tests setMaxPadding()
     *
     * @return void.
     */
    public function testSetMaxPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMaxPadding(40.0);
        $this->assertEquals(40.0, $obj->getMaxPadding());
    }

    /**
     * Tests setMaxZoom()
     *
     * @return void.
     */
    public function testSetMaxZoom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMaxZoom(90.0);
        $this->assertEquals(90.0, $obj->getMaxZoom());
    }

    /**
     * Tests setMin()
     *
     * @return void.
     */
    public function testSetMin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMin(96.0);
        $this->assertEquals(96.0, $obj->getMin());
    }

    /**
     * Tests setMinPadding()
     *
     * @return void.
     */
    public function testSetMinPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinPadding(99.0);
        $this->assertEquals(99.0, $obj->getMinPadding());
    }

    /**
     * Tests setMinRange()
     *
     * @return void.
     */
    public function testSetMinRange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinRange(19.0);
        $this->assertEquals(19.0, $obj->getMinRange());
    }

    /**
     * Tests setMinTickInterval()
     *
     * @return void.
     */
    public function testSetMinTickInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinTickInterval(74.0);
        $this->assertEquals(74.0, $obj->getMinTickInterval());
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

        $obj->setMinorGridLineDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getMinorGridLineDashStyle());
    }

    /**
     * Tests setMinorGridLineWidth()
     *
     * @return void.
     */
    public function testSetMinorGridLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setMinorGridLineWidth(17.0);
        $this->assertEquals(17.0, $obj->getMinorGridLineWidth());
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

        $obj->setMinorTickLength(93.0);
        $this->assertEquals(93.0, $obj->getMinorTickLength());
    }

    /**
     * Tests setMinorTickPosition()
     *
     * @return void.
     */
    public function testSetMinorTickPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

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

        $obj->setMinorTickWidth(44.0);
        $this->assertEquals(44.0, $obj->getMinorTickWidth());
    }

    /**
     * Tests setOffset()
     *
     * @return void.
     */
    public function testSetOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setOffset(79.0);
        $this->assertEquals(79.0, $obj->getOffset());
    }

    /**
     * Tests setOpposite()
     *
     * @return void.
     */
    public function testSetOpposite(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setOpposite(false);
        $this->assertEquals(false, $obj->getOpposite());
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

        $obj->setReversed(true);
        $this->assertEquals(true, $obj->getReversed());
    }

    /**
     * Tests setShowEmpty()
     *
     * @return void.
     */
    public function testSetShowEmpty(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setShowEmpty(true);
        $this->assertEquals(true, $obj->getShowEmpty());
    }

    /**
     * Tests setShowFirstLabel()
     *
     * @return void.
     */
    public function testSetShowFirstLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setShowFirstLabel(true);
        $this->assertEquals(true, $obj->getShowFirstLabel());
    }

    /**
     * Tests setShowLastLabel()
     *
     * @return void.
     */
    public function testSetShowLastLabel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setShowLastLabel(false);
        $this->assertEquals(false, $obj->getShowLastLabel());
    }

    /**
     * Tests setSoftMax()
     *
     * @return void.
     */
    public function testSetSoftMax(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setSoftMax(53.0);
        $this->assertEquals(53.0, $obj->getSoftMax());
    }

    /**
     * Tests setSoftMin()
     *
     * @return void.
     */
    public function testSetSoftMin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setSoftMin(35.0);
        $this->assertEquals(35.0, $obj->getSoftMin());
    }

    /**
     * Tests setStartOfWeek()
     *
     * @return void.
     */
    public function testSetStartOfWeek(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setStartOfWeek(8.0);
        $this->assertEquals(8.0, $obj->getStartOfWeek());
    }

    /**
     * Tests setStartOnTick()
     *
     * @return void.
     */
    public function testSetStartOnTick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setStartOnTick(false);
        $this->assertEquals(false, $obj->getStartOnTick());
    }

    /**
     * Tests setTickAmount()
     *
     * @return void.
     */
    public function testSetTickAmount(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickAmount(34.0);
        $this->assertEquals(34.0, $obj->getTickAmount());
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

        $obj->setTickInterval(93.0);
        $this->assertEquals(93.0, $obj->getTickInterval());
    }

    /**
     * Tests setTickLength()
     *
     * @return void.
     */
    public function testSetTickLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickLength(13.0);
        $this->assertEquals(13.0, $obj->getTickLength());
    }

    /**
     * Tests setTickPixelInterval()
     *
     * @return void.
     */
    public function testSetTickPixelInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickPixelInterval(86.0);
        $this->assertEquals(86.0, $obj->getTickPixelInterval());
    }

    /**
     * Tests setTickPosition()
     *
     * @return void.
     */
    public function testSetTickPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

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

        $obj->setTickWidth(38.0);
        $this->assertEquals(38.0, $obj->getTickWidth());
    }

    /**
     * Tests setTickmarkPlacement()
     *
     * @return void.
     */
    public function testSetTickmarkPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setTickmarkPlacement("between");
        $this->assertEquals("between", $obj->getTickmarkPlacement());
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
    }

    /**
     * Tests setUniqueNames()
     *
     * @return void.
     */
    public function testSetUniqueNames(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj->setUniqueNames(true);
        $this->assertEquals(true, $obj->getUniqueNames());
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
        $this->assertEquals(false, $obj->getVisible());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $this->assertEquals(true, $obj->getAllowDecimals());
        $this->assertNull($obj->getAlternateGridColor());
        $this->assertNull($obj->getCategories());
        $this->assertNull($obj->getCeiling());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getCrosshair());
        $this->assertNull($obj->getDateTimeLabelFormats());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(false, $obj->getEndOnTick());
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
        $this->assertEquals(false, $obj->getOpposite());
        $this->assertNull($obj->getPlotBands());
        $this->assertNull($obj->getPlotLines());
        $this->assertEquals(false, $obj->getReversed());
        $this->assertEquals(true, $obj->getShowEmpty());
        $this->assertEquals(true, $obj->getShowFirstLabel());
        $this->assertEquals(true, $obj->getShowLastLabel());
        $this->assertNull($obj->getSoftMax());
        $this->assertNull($obj->getSoftMin());
        $this->assertEquals(1, $obj->getStartOfWeek());
        $this->assertEquals(false, $obj->getStartOnTick());
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
        $this->assertEquals(true, $obj->getUniqueNames());
        $this->assertNull($obj->getUnits());
        $this->assertEquals(true, $obj->getVisible());
    }
}
