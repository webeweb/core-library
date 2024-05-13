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
 * Highcharts series test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsSeriesTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26.0, "legendIndex" => 53.0, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall", "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 45.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDataParser("26911c12e7a30f2bebc2a377f4f64a22");
        $obj->setDataURL("2ebe18c8193e5056fb035560a9469c0a");
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(26.0);
        $obj->setLegendIndex(53.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setStack("fac2a47adace059aff113283a03f6760");
        $obj->setType("waterfall");
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(45.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDataParser()
     *
     * @return void.
     */
    public function testSetDataParser(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setDataParser("26911c12e7a30f2bebc2a377f4f64a22");
        $this->assertEquals("26911c12e7a30f2bebc2a377f4f64a22", $obj->getDataParser());
    }

    /**
     * Tests setDataURL()
     *
     * @return void.
     */
    public function testSetDataURL(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setDataURL("2ebe18c8193e5056fb035560a9469c0a");
        $this->assertEquals("2ebe18c8193e5056fb035560a9469c0a", $obj->getDataURL());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setIndex(73.0);
        $this->assertEquals(73.0, $obj->getIndex());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setLegendIndex(74.0);
        $this->assertEquals(74.0, $obj->getLegendIndex());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setStack()
     *
     * @return void.
     */
    public function testSetStack(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setStack("fac2a47adace059aff113283a03f6760");
        $this->assertEquals("fac2a47adace059aff113283a03f6760", $obj->getStack());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setType("waterfall");
        $this->assertEquals("waterfall", $obj->getType());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $obj->setZIndex(12.0);
        $this->assertEquals(12.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSeries();

        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDataParser());
        $this->assertNull($obj->getDataURL());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getLegendIndex());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getStack());
        $this->assertNull($obj->getType());
        $this->assertEquals("0", $obj->getXAxis());
        $this->assertEquals("0", $obj->getYAxis());
        $this->assertNull($obj->getZIndex());
    }
}
