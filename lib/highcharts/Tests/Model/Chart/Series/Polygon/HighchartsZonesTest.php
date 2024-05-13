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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Polygon;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts zones test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Polygon
 * @version 5.0.14
 */
class HighchartsZonesTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "value" => 73.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsZones();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setDashStyle("5ad5e24042182b1974cdf57345defe8e");
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setValue(73.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsZones();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsZones();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsZones();

        $obj->setDashStyle("5ad5e24042182b1974cdf57345defe8e");
        $this->assertEquals("5ad5e24042182b1974cdf57345defe8e", $obj->getDashStyle());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsZones();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setValue()
     *
     * @return void.
     */
    public function testSetValue(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsZones();

        $obj->setValue(86.0);
        $this->assertEquals(86.0, $obj->getValue());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsZones();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getDashStyle());
        $this->assertNull($obj->getFillColor());
        $this->assertNull($obj->getValue());
    }
}
