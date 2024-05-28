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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Area\Data\Marker\States;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts select test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Area\Data\Marker\States
 * @version 5.0.14
 */
class HighchartsSelectTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["enabled" => true, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 66.0, "radius" => 55.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Area\Data\Marker\States\HighchartsSelect();
        $obj->setEnabled(true);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(66.0);
        $obj->setRadius(55.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Area\Data\Marker\States\HighchartsSelect();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Area\Data\Marker\States\HighchartsSelect();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Area\Data\Marker\States\HighchartsSelect();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Area\Data\Marker\States\HighchartsSelect();

        $obj->setLineWidth(5.0);
        $this->assertEquals(5.0, $obj->getLineWidth());
    }

    /**
     * Tests setRadius()
     *
     * @return void.
     */
    public function testSetRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Area\Data\Marker\States\HighchartsSelect();

        $obj->setRadius(4.0);
        $this->assertEquals(4.0, $obj->getRadius());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Area\Data\Marker\States\HighchartsSelect();

        $this->assertTrue($obj->getEnabled());
        $this->assertNull($obj->getFillColor());
        $this->assertEquals("#000000", $obj->getLineColor());
        $this->assertEquals(0, $obj->getLineWidth());
        $this->assertNull($obj->getRadius());
    }
}
