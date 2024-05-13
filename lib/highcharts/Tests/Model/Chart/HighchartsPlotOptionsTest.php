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
 * Highcharts plot options test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsPlotOptionsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $area            = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea();
        $arearange       = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange();
        $areaspline      = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline();
        $areasplinerange = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange();
        $bar             = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar();
        $column          = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn();
        $line            = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine();
        $pie             = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie();
        $scatter         = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();
        $series          = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries();
        $spline          = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline();

        $exp = ["area" => $area->jsonSerialize(), "arearange" => $arearange->jsonSerialize(), "areaspline" => $areaspline->jsonSerialize(), "areasplinerange" => $areasplinerange->jsonSerialize(), "bar" => $bar->jsonSerialize(), "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => $column->jsonSerialize(), "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => $line->jsonSerialize(), "pie" => $pie->jsonSerialize(), "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => $scatter->jsonSerialize(), "series" => $series->jsonSerialize(), "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => $spline->jsonSerialize(), "treemap" => ["treemap" => "de4c250c4ad732f21f9be50a607ab230"], "waterfall" => ["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();
        $obj->setArea($area);
        $obj->setArearange($arearange);
        $obj->setAreaspline($areaspline);
        $obj->setAreasplinerange($areasplinerange);
        $obj->setBar($bar);
        $obj->setBoxplot(["boxplot" => "75c65735f185835c9a02e33d5695a84e"]);
        $obj->setBubble(["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"]);
        $obj->setColumn($column);
        $obj->setColumnrange(["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"]);
        $obj->setErrorbar(["errorbar" => "116ed3b58f547a9f12d94e7750c71017"]);
        $obj->setFunnel(["funnel" => "688d02b8ffc0740fc790871148d11e8c"]);
        $obj->setGauge(["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"]);
        $obj->setHeatmap(["heatmap" => "d922f01521180610c5e000ed93d40af2"]);
        $obj->setLine($line);
        $obj->setPie($pie);
        $obj->setPolygon(["polygon" => "e4fdf3290654756def4e6816fddce608"]);
        $obj->setPyramid(["pyramid" => "437233c74e25fe505293cd2e8ecc2696"]);
        $obj->setScatter($scatter);
        $obj->setSeries($series);
        $obj->setSolidgauge(["solidgauge" => "2b4610ac598c4c804779328d03893529"]);
        $obj->setSpline($spline);
        $obj->setTreemap(["treemap" => "de4c250c4ad732f21f9be50a607ab230"]);
        $obj->setWaterfall(["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newArea()
     *
     * @return void.
     */
    public function testNewArea(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newArea();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea::class, $res);
    }

    /**
     * Tests newArearange()
     *
     * @return void.
     */
    public function testNewArearange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newArearange();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange::class, $res);
    }

    /**
     * Tests newAreaspline()
     *
     * @return void.
     */
    public function testNewAreaspline(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newAreaspline();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline::class, $res);
    }

    /**
     * Tests newAreasplinerange()
     *
     * @return void.
     */
    public function testNewAreasplinerange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newAreasplinerange();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange::class, $res);
    }

    /**
     * Tests newBar()
     *
     * @return void.
     */
    public function testNewBar(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newBar();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar::class, $res);
    }

    /**
     * Tests newColumn()
     *
     * @return void.
     */
    public function testNewColumn(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newColumn();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn::class, $res);
    }

    /**
     * Tests newLine()
     *
     * @return void.
     */
    public function testNewLine(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newLine();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine::class, $res);
    }

    /**
     * Tests newPie()
     *
     * @return void.
     */
    public function testNewPie(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newPie();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie::class, $res);
    }

    /**
     * Tests newScatter()
     *
     * @return void.
     */
    public function testNewScatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newScatter();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter::class, $res);
    }

    /**
     * Tests newSeries()
     *
     * @return void.
     */
    public function testNewSeries(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newSeries();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries::class, $res);
    }

    /**
     * Tests newSpline()
     *
     * @return void.
     */
    public function testNewSpline(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $res = $obj->newSpline();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline::class, $res);
    }

    /**
     * Tests setArea()
     *
     * @return void.
     */
    public function testSetArea(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea mock.
        $area = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setArea($area);
        $this->assertSame($area, $obj->getArea());
    }

    /**
     * Tests setArearange()
     *
     * @return void.
     */
    public function testSetArearange(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange mock.
        $arearange = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setArearange($arearange);
        $this->assertSame($arearange, $obj->getArearange());
    }

    /**
     * Tests setAreaspline()
     *
     * @return void.
     */
    public function testSetAreaspline(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline mock.
        $areaspline = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setAreaspline($areaspline);
        $this->assertSame($areaspline, $obj->getAreaspline());
    }

    /**
     * Tests setAreasplinerange()
     *
     * @return void.
     */
    public function testSetAreasplinerange(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange mock.
        $areasplinerange = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setAreasplinerange($areasplinerange);
        $this->assertSame($areasplinerange, $obj->getAreasplinerange());
    }

    /**
     * Tests setBar()
     *
     * @return void.
     */
    public function testSetBar(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar mock.
        $bar = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setBar($bar);
        $this->assertSame($bar, $obj->getBar());
    }

    /**
     * Tests setBoxplot()
     *
     * @return void.
     */
    public function testSetBoxplot(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setBoxplot(["boxplot" => "75c65735f185835c9a02e33d5695a84e"]);
        $this->assertEquals(["boxplot" => "75c65735f185835c9a02e33d5695a84e"], $obj->getBoxplot());
    }

    /**
     * Tests setBubble()
     *
     * @return void.
     */
    public function testSetBubble(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setBubble(["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"]);
        $this->assertEquals(["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], $obj->getBubble());
    }

    /**
     * Tests setColumn()
     *
     * @return void.
     */
    public function testSetColumn(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn mock.
        $column = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setColumn($column);
        $this->assertSame($column, $obj->getColumn());
    }

    /**
     * Tests setColumnrange()
     *
     * @return void.
     */
    public function testSetColumnrange(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setColumnrange(["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"]);
        $this->assertEquals(["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], $obj->getColumnrange());
    }

    /**
     * Tests setErrorbar()
     *
     * @return void.
     */
    public function testSetErrorbar(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setErrorbar(["errorbar" => "116ed3b58f547a9f12d94e7750c71017"]);
        $this->assertEquals(["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], $obj->getErrorbar());
    }

    /**
     * Tests setFunnel()
     *
     * @return void.
     */
    public function testSetFunnel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setFunnel(["funnel" => "688d02b8ffc0740fc790871148d11e8c"]);
        $this->assertEquals(["funnel" => "688d02b8ffc0740fc790871148d11e8c"], $obj->getFunnel());
    }

    /**
     * Tests setGauge()
     *
     * @return void.
     */
    public function testSetGauge(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setGauge(["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"]);
        $this->assertEquals(["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], $obj->getGauge());
    }

    /**
     * Tests setHeatmap()
     *
     * @return void.
     */
    public function testSetHeatmap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setHeatmap(["heatmap" => "d922f01521180610c5e000ed93d40af2"]);
        $this->assertEquals(["heatmap" => "d922f01521180610c5e000ed93d40af2"], $obj->getHeatmap());
    }

    /**
     * Tests setLine()
     *
     * @return void.
     */
    public function testSetLine(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine mock.
        $line = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setLine($line);
        $this->assertSame($line, $obj->getLine());
    }

    /**
     * Tests setPie()
     *
     * @return void.
     */
    public function testSetPie(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie mock.
        $pie = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setPie($pie);
        $this->assertSame($pie, $obj->getPie());
    }

    /**
     * Tests setPolygon()
     *
     * @return void.
     */
    public function testSetPolygon(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setPolygon(["polygon" => "e4fdf3290654756def4e6816fddce608"]);
        $this->assertEquals(["polygon" => "e4fdf3290654756def4e6816fddce608"], $obj->getPolygon());
    }

    /**
     * Tests setPyramid()
     *
     * @return void.
     */
    public function testSetPyramid(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setPyramid(["pyramid" => "437233c74e25fe505293cd2e8ecc2696"]);
        $this->assertEquals(["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], $obj->getPyramid());
    }

    /**
     * Tests setScatter()
     *
     * @return void.
     */
    public function testSetScatter(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter mock.
        $scatter = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setScatter($scatter);
        $this->assertSame($scatter, $obj->getScatter());
    }

    /**
     * Tests setSeries()
     *
     * @return void.
     */
    public function testSetSeries(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries mock.
        $series = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setSeries($series);
        $this->assertSame($series, $obj->getSeries());
    }

    /**
     * Tests setSolidgauge()
     *
     * @return void.
     */
    public function testSetSolidgauge(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setSolidgauge(["solidgauge" => "2b4610ac598c4c804779328d03893529"]);
        $this->assertEquals(["solidgauge" => "2b4610ac598c4c804779328d03893529"], $obj->getSolidgauge());
    }

    /**
     * Tests setSpline()
     *
     * @return void.
     */
    public function testSetSpline(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline mock.
        $spline = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setSpline($spline);
        $this->assertSame($spline, $obj->getSpline());
    }

    /**
     * Tests setTreemap()
     *
     * @return void.
     */
    public function testSetTreemap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setTreemap(["treemap" => "de4c250c4ad732f21f9be50a607ab230"]);
        $this->assertEquals(["treemap" => "de4c250c4ad732f21f9be50a607ab230"], $obj->getTreemap());
    }

    /**
     * Tests setWaterfall()
     *
     * @return void.
     */
    public function testSetWaterfall(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $obj->setWaterfall(["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]);
        $this->assertEquals(["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"], $obj->getWaterfall());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();

        $this->assertNull($obj->getArea());
        $this->assertNull($obj->getArearange());
        $this->assertNull($obj->getAreaspline());
        $this->assertNull($obj->getAreasplinerange());
        $this->assertNull($obj->getBar());
        $this->assertNull($obj->getBoxplot());
        $this->assertNull($obj->getBubble());
        $this->assertNull($obj->getColumn());
        $this->assertNull($obj->getColumnrange());
        $this->assertNull($obj->getErrorbar());
        $this->assertNull($obj->getFunnel());
        $this->assertNull($obj->getGauge());
        $this->assertNull($obj->getHeatmap());
        $this->assertNull($obj->getLine());
        $this->assertNull($obj->getPie());
        $this->assertNull($obj->getPolygon());
        $this->assertNull($obj->getPyramid());
        $this->assertNull($obj->getScatter());
        $this->assertNull($obj->getSeries());
        $this->assertNull($obj->getSolidgauge());
        $this->assertNull($obj->getSpline());
        $this->assertNull($obj->getTreemap());
        $this->assertNull($obj->getWaterfall());
    }
}
