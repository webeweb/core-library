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

namespace WBW\Library\Highcharts\Tests\Model;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts chart test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model
 * @version 5.0.14
 */
class HighchartsChartTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $accessibility = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();
        $chart         = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();
        $credits       = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();
        $data          = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();
        $drilldown     = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();
        $exporting     = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();
        $labels        = new \WBW\Library\Highcharts\Model\Chart\HighchartsLabels();
        $legend        = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();
        $loading       = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();
        $navigation    = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();
        $noData        = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();
        $plotOptions   = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();
        $responsive    = new \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive();
        $subtitle      = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();
        $title         = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();
        $tooltip       = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();
        $zAxis         = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $exp = ["accessibility" => $accessibility->jsonSerialize(), "chart" => $chart->jsonSerialize(), "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => $credits->jsonSerialize(), "data" => $data->jsonSerialize(), "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => $drilldown->jsonSerialize(), "exporting" => $exporting->jsonSerialize(), "labels" => $labels->jsonSerialize(), "legend" => $legend->jsonSerialize(), "loading" => $loading->jsonSerialize(), "navigation" => $navigation->jsonSerialize(), "noData" => $noData->jsonSerialize(), "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => $plotOptions->jsonSerialize(), "responsive" => $responsive->jsonSerialize(), "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => $subtitle->jsonSerialize(), "title" => $title->jsonSerialize(), "tooltip" => $tooltip->jsonSerialize(), "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"], "yAxis" => ["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"], "zAxis" => $zAxis->jsonSerialize()];

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();
        $obj->setAccessibility($accessibility);
        $obj->setChart($chart);
        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $obj->setCredits($credits);
        $obj->setData($data);
        $obj->setDefs(["defs" => "cd8fc2597193b4c938e7ff50062936e3"]);
        $obj->setDrilldown($drilldown);
        $obj->setExporting($exporting);
        $obj->setLabels($labels);
        $obj->setLegend($legend);
        $obj->setLoading($loading);
        $obj->setNavigation($navigation);
        $obj->setNoData($noData);
        $obj->setPane(["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"]);
        $obj->setPlotOptions($plotOptions);
        $obj->setResponsive($responsive);
        $obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);
        $obj->setSubtitle($subtitle);
        $obj->setTitle($title);
        $obj->setTooltip($tooltip);
        $obj->setXAxis(["xAxis" => "b919a806dedef37999b45653bdde66c6"]);
        $obj->setYAxis(["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]);
        $obj->setZAxis($zAxis);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newAccessibility()
     *
     * @return void.
     */
    public function testNewAccessibility(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newAccessibility();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility::class, $res);
    }

    /**
     * Tests newChart()
     *
     * @return void.
     */
    public function testNewChart(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newChart();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsChart::class, $res);
    }

    /**
     * Tests newCredits()
     *
     * @return void.
     */
    public function testNewCredits(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newCredits();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsCredits::class, $res);
    }

    /**
     * Tests newData()
     *
     * @return void.
     */
    public function testNewData(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newData();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsData::class, $res);
    }

    /**
     * Tests newDrilldown()
     *
     * @return void.
     */
    public function testNewDrilldown(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newDrilldown();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown::class, $res);
    }

    /**
     * Tests newExporting()
     *
     * @return void.
     */
    public function testNewExporting(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newExporting();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsExporting::class, $res);
    }

    /**
     * Tests newLabels()
     *
     * @return void.
     */
    public function testNewLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsLabels::class, $res);
    }

    /**
     * Tests newLegend()
     *
     * @return void.
     */
    public function testNewLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newLegend();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsLegend::class, $res);
    }

    /**
     * Tests newLoading()
     *
     * @return void.
     */
    public function testNewLoading(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newLoading();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsLoading::class, $res);
    }

    /**
     * Tests newNavigation()
     *
     * @return void.
     */
    public function testNewNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newNavigation();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsNavigation::class, $res);
    }

    /**
     * Tests newNoData()
     *
     * @return void.
     */
    public function testNewNoData(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newNoData();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsNoData::class, $res);
    }

    /**
     * Tests newPlotOptions()
     *
     * @return void.
     */
    public function testNewPlotOptions(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newPlotOptions();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions::class, $res);
    }

    /**
     * Tests newResponsive()
     *
     * @return void.
     */
    public function testNewResponsive(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newResponsive();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsResponsive::class, $res);
    }

    /**
     * Tests newSubtitle()
     *
     * @return void.
     */
    public function testNewSubtitle(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newSubtitle();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle::class, $res);
    }

    /**
     * Tests newTitle()
     *
     * @return void.
     */
    public function testNewTitle(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsTitle::class, $res);
    }

    /**
     * Tests newTooltip()
     *
     * @return void.
     */
    public function testNewTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newTooltip();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsTooltip::class, $res);
    }

    /**
     * Tests newZAxis()
     *
     * @return void.
     */
    public function testNewZAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $res = $obj->newZAxis();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\HighchartsZAxis::class, $res);
    }

    /**
     * Tests setAccessibility()
     *
     * @return void.
     */
    public function testSetAccessibility(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility mock.
        $accessibility = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setAccessibility($accessibility);
        $this->assertSame($accessibility, $obj->getAccessibility());
    }

    /**
     * Tests setChart()
     *
     * @return void.
     */
    public function testSetChart(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsChart mock.
        $chart = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setChart($chart);
        $this->assertSame($chart, $obj->getChart());
    }

    /**
     * Tests setColors()
     *
     * @return void.
     */
    public function testSetColors(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);
        $this->assertEquals(["colors" => "62848e3ce5804aa985513a7922ff87b2"], $obj->getColors());
    }

    /**
     * Tests setCredits()
     *
     * @return void.
     */
    public function testSetCredits(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsCredits mock.
        $credits = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setCredits($credits);
        $this->assertSame($credits, $obj->getCredits());
    }

    /**
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsData mock.
        $data = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setData($data);
        $this->assertSame($data, $obj->getData());
    }

    /**
     * Tests setDefs()
     *
     * @return void.
     */
    public function testSetDefs(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setDefs(["defs" => "cd8fc2597193b4c938e7ff50062936e3"]);
        $this->assertEquals(["defs" => "cd8fc2597193b4c938e7ff50062936e3"], $obj->getDefs());
    }

    /**
     * Tests setDrilldown()
     *
     * @return void.
     */
    public function testSetDrilldown(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown mock.
        $drilldown = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setDrilldown($drilldown);
        $this->assertSame($drilldown, $obj->getDrilldown());
    }

    /**
     * Tests setExporting()
     *
     * @return void.
     */
    public function testSetExporting(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsExporting mock.
        $exporting = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setExporting($exporting);
        $this->assertSame($exporting, $obj->getExporting());
    }

    /**
     * Tests setLabels()
     *
     * @return void.
     */
    public function testSetLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsLabels mock.
        $labels = new \WBW\Library\Highcharts\Model\Chart\HighchartsLabels();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setLabels($labels);
        $this->assertSame($labels, $obj->getLabels());
    }

    /**
     * Tests setLegend()
     *
     * @return void.
     */
    public function testSetLegend(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsLegend mock.
        $legend = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setLegend($legend);
        $this->assertSame($legend, $obj->getLegend());
    }

    /**
     * Tests setLoading()
     *
     * @return void.
     */
    public function testSetLoading(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsLoading mock.
        $loading = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setLoading($loading);
        $this->assertSame($loading, $obj->getLoading());
    }

    /**
     * Tests setNavigation()
     *
     * @return void.
     */
    public function testSetNavigation(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation mock.
        $navigation = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setNavigation($navigation);
        $this->assertSame($navigation, $obj->getNavigation());
    }

    /**
     * Tests setNoData()
     *
     * @return void.
     */
    public function testSetNoData(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsNoData mock.
        $noData = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setNoData($noData);
        $this->assertSame($noData, $obj->getNoData());
    }

    /**
     * Tests setPane()
     *
     * @return void.
     */
    public function testSetPane(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setPane(["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"]);
        $this->assertEquals(["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], $obj->getPane());
    }

    /**
     * Tests setPlotOptions()
     *
     * @return void.
     */
    public function testSetPlotOptions(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions mock.
        $plotOptions = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setPlotOptions($plotOptions);
        $this->assertSame($plotOptions, $obj->getPlotOptions());
    }

    /**
     * Tests setResponsive()
     *
     * @return void.
     */
    public function testSetResponsive(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive mock.
        $responsive = new \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setResponsive($responsive);
        $this->assertSame($responsive, $obj->getResponsive());
    }

    /**
     * Tests setSeries()
     *
     * @return void.
     */
    public function testSetSeries(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);
        $this->assertEquals(["series" => "bef99584217af744e404ed44a33af589"], $obj->getSeries());
    }

    /**
     * Tests setSubtitle()
     *
     * @return void.
     */
    public function testSetSubtitle(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle mock.
        $subtitle = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setSubtitle($subtitle);
        $this->assertSame($subtitle, $obj->getSubtitle());
    }

    /**
     * Tests setTitle()
     *
     * @return void.
     */
    public function testSetTitle(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsTitle mock.
        $title = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setTitle($title);
        $this->assertSame($title, $obj->getTitle());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip mock.
        $tooltip = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setTooltip($tooltip);
        $this->assertSame($tooltip, $obj->getTooltip());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setXAxis(["xAxis" => "b919a806dedef37999b45653bdde66c6"]);
        $this->assertEquals(["xAxis" => "b919a806dedef37999b45653bdde66c6"], $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setYAxis(["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]);
        $this->assertEquals(["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"], $obj->getYAxis());
    }

    /**
     * Tests setZAxis()
     *
     * @return void.
     */
    public function testSetZAxis(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis mock.
        $zAxis = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $obj->setZAxis($zAxis);
        $this->assertSame($zAxis, $obj->getZAxis());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsChart();

        $this->assertNull($obj->getAccessibility());
        $this->assertNull($obj->getChart());
        $this->assertEquals(["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], $obj->getColors());
        $this->assertNull($obj->getCredits());
        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDefs());
        $this->assertNull($obj->getDrilldown());
        $this->assertNull($obj->getExporting());
        $this->assertNull($obj->getLabels());
        $this->assertNull($obj->getLegend());
        $this->assertNull($obj->getLoading());
        $this->assertNull($obj->getNavigation());
        $this->assertNull($obj->getNoData());
        $this->assertNull($obj->getPane());
        $this->assertNull($obj->getPlotOptions());
        $this->assertNull($obj->getResponsive());
        $this->assertNull($obj->getSeries());
        $this->assertNull($obj->getSubtitle());
        $this->assertNull($obj->getTitle());
        $this->assertNull($obj->getTooltip());
        $this->assertNull($obj->getXAxis());
        $this->assertNull($obj->getYAxis());
        $this->assertNull($obj->getZAxis());
    }
}
