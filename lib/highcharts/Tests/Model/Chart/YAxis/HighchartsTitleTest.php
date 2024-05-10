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

namespace WBW\Library\Highcharts\Tests\Model\Chart\YAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts title test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\YAxis
 * @version 5.0.14
 */
class HighchartsTitleTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 64.0, "offset" => 9.0, "reserveSpace" => false, "rotation" => 69.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "x" => 98.0, "y" => 3.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();
        $obj->setAlign("high");
        $obj->setEnabled("a10311459433adf322f2590a4987c423");
        $obj->setMargin(64.0);
        $obj->setOffset(9.0);
        $obj->setReserveSpace(false);
        $obj->setRotation(69.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $obj->setX(98.0);
        $obj->setY(3.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setAlign("high");
        $this->assertEquals("high", $obj->getAlign());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setEnabled("a10311459433adf322f2590a4987c423");
        $this->assertEquals("a10311459433adf322f2590a4987c423", $obj->getEnabled());
    }

    /**
     * Tests setMargin()
     *
     * @return void.
     */
    public function testSetMargin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setMargin(68.0);
        $this->assertEquals(68.0, $obj->getMargin());
    }

    /**
     * Tests setOffset()
     *
     * @return void.
     */
    public function testSetOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setOffset(12.0);
        $this->assertEquals(12.0, $obj->getOffset());
    }

    /**
     * Tests setReserveSpace()
     *
     * @return void.
     */
    public function testSetReserveSpace(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setReserveSpace(true);
        $this->assertEquals(true, $obj->getReserveSpace());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setRotation(33.0);
        $this->assertEquals(33.0, $obj->getRotation());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setText()
     *
     * @return void.
     */
    public function testSetText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $this->assertEquals("1cb251ec0d568de6a929b520c4aed8d1", $obj->getText());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setX(14.0);
        $this->assertEquals(14.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setY(0.0);
        $this->assertEquals(0.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $this->assertEquals("middle", $obj->getAlign());
        $this->assertEquals("middle", $obj->getEnabled());
        $this->assertEquals(40, $obj->getMargin());
        $this->assertNull($obj->getOffset());
        $this->assertEquals(true, $obj->getReserveSpace());
        $this->assertEquals(270, $obj->getRotation());
        $this->assertEquals(["color" => "#666666"], $obj->getStyle());
        $this->assertEquals("Values", $obj->getText());
        $this->assertEquals(0, $obj->getX());
        $this->assertNull($obj->getY());
    }
}
