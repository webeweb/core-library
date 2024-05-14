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

namespace WBW\Library\Highcharts\Tests\Model\Chart\XAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts title test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsTitleTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 37.0, "offset" => 25.0, "reserveSpace" => true, "rotation" => 81.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "x" => 41.0, "y" => 56.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();
        $obj->setAlign("high");
        $obj->setEnabled("a10311459433adf322f2590a4987c423");
        $obj->setMargin(37.0);
        $obj->setOffset(25.0);
        $obj->setReserveSpace(true);
        $obj->setRotation(81.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $obj->setX(41.0);
        $obj->setY(56.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setEnabled("a10311459433adf322f2590a4987c423");
        $this->assertEquals("a10311459433adf322f2590a4987c423", $obj->getEnabled());
    }

    /**
     * Tests setMargin()
     *
     * @return void.
     */
    public function testSetMargin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setMargin(10.0);
        $this->assertEquals(10.0, $obj->getMargin());
    }

    /**
     * Tests setOffset()
     *
     * @return void.
     */
    public function testSetOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setOffset(24.0);
        $this->assertEquals(24.0, $obj->getOffset());
    }

    /**
     * Tests setReserveSpace()
     *
     * @return void.
     */
    public function testSetReserveSpace(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setReserveSpace(true);
        $this->assertTrue($obj->getReserveSpace());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setRotation(84.0);
        $this->assertEquals(84.0, $obj->getRotation());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setText()
     *
     * @return void.
     */
    public function testSetText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $this->assertEquals("1cb251ec0d568de6a929b520c4aed8d1", $obj->getText());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setX(70.0);
        $this->assertEquals(70.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $obj->setY(86.0);
        $this->assertEquals(86.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();

        $this->assertEquals("middle", $obj->getAlign());
        $this->assertEquals("middle", $obj->getEnabled());
        $this->assertNull($obj->getMargin());
        $this->assertNull($obj->getOffset());
        $this->assertTrue($obj->getReserveSpace());
        $this->assertEquals(0, $obj->getRotation());
        $this->assertEquals(["color" => "#666666"], $obj->getStyle());
        $this->assertNull($obj->getText());
        $this->assertEquals(0, $obj->getX());
        $this->assertNull($obj->getY());
    }
}
