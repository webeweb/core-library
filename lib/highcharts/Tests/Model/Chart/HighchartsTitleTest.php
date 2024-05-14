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
 * Highcharts title test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsTitleTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "floating" => true, "margin" => 20.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => false, "verticalAlign" => "bottom", "widthAdjust" => 13.0, "x" => 2.0, "y" => 100.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();
        $obj->setAlign("right");
        $obj->setFloating(true);
        $obj->setMargin(20.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $obj->setUseHTML(false);
        $obj->setVerticalAlign("bottom");
        $obj->setWidthAdjust(13.0);
        $obj->setX(2.0);
        $obj->setY(100.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setAlign("center");
        $this->assertEquals("center", $obj->getAlign());

        $obj->setAlign("left");
        $this->assertEquals("left", $obj->getAlign());

        $obj->setAlign("right");
        $this->assertEquals("right", $obj->getAlign());
    }

    /**
     * Tests setFloating()
     *
     * @return void.
     */
    public function testSetFloating(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setFloating(false);
        $this->assertEquals(false, $obj->getFloating());
    }

    /**
     * Tests setMargin()
     *
     * @return void.
     */
    public function testSetMargin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setMargin(18.0);
        $this->assertEquals(18.0, $obj->getMargin());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setText()
     *
     * @return void.
     */
    public function testSetText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $this->assertEquals("1cb251ec0d568de6a929b520c4aed8d1", $obj->getText());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setUseHTML(true);
        $this->assertEquals(true, $obj->getUseHTML());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());

        $obj->setVerticalAlign("middle");
        $this->assertEquals("middle", $obj->getVerticalAlign());

        $obj->setVerticalAlign("top");
        $this->assertEquals("top", $obj->getVerticalAlign());
    }

    /**
     * Tests setWidthAdjust()
     *
     * @return void.
     */
    public function testSetWidthAdjust(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setWidthAdjust(13.0);
        $this->assertEquals(13.0, $obj->getWidthAdjust());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setX(70.0);
        $this->assertEquals(70.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $obj->setY(5.0);
        $this->assertEquals(5.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();

        $this->assertEquals("center", $obj->getAlign());
        $this->assertEquals(false, $obj->getFloating());
        $this->assertEquals(15, $obj->getMargin());
        $this->assertEquals(["color" => "#333333", "fontSize" => "18px"], $obj->getStyle());
        $this->assertEquals("Chart title", $obj->getText());
        $this->assertEquals(false, $obj->getUseHTML());
        $this->assertNull($obj->getVerticalAlign());
        $this->assertEquals(-44, $obj->getWidthAdjust());
        $this->assertEquals(0, $obj->getX());
        $this->assertNull($obj->getY());
    }
}
