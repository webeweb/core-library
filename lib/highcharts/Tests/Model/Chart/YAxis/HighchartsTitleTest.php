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

        $exp = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 70.0, "offset" => 4.0, "reserveSpace" => false, "rotation" => 44.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "x" => 40.0, "y" => 78.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();
        $obj->setAlign("high");
        $obj->setEnabled("a10311459433adf322f2590a4987c423");
        $obj->setMargin(70.0);
        $obj->setOffset(4.0);
        $obj->setReserveSpace(false);
        $obj->setRotation(44.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $obj->setX(40.0);
        $obj->setY(78.0);

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

        $obj->setAlign("low");
        $this->assertEquals("low", $obj->getAlign());

        $obj->setAlign("middle");
        $this->assertEquals("middle", $obj->getAlign());
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

        $obj->setMargin(66.0);
        $this->assertEquals(66.0, $obj->getMargin());
    }

    /**
     * Tests setOffset()
     *
     * @return void.
     */
    public function testSetOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setOffset(75.0);
        $this->assertEquals(75.0, $obj->getOffset());
    }

    /**
     * Tests setReserveSpace()
     *
     * @return void.
     */
    public function testSetReserveSpace(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setReserveSpace(false);
        $this->assertFalse($obj->getReserveSpace());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setRotation(48.0);
        $this->assertEquals(48.0, $obj->getRotation());
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

        $obj->setX(31.0);
        $this->assertEquals(31.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsTitle();

        $obj->setY(5.0);
        $this->assertEquals(5.0, $obj->getY());
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
        $this->assertTrue($obj->getReserveSpace());
        $this->assertEquals(270, $obj->getRotation());
        $this->assertEquals(["color" => "#666666"], $obj->getStyle());
        $this->assertEquals("Values", $obj->getText());
        $this->assertEquals(0, $obj->getX());
        $this->assertNull($obj->getY());
    }
}
