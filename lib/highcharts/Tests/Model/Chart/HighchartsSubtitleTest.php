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
 * Highcharts subtitle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsSubtitleTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "floating" => true, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => true, "verticalAlign" => "bottom", "widthAdjust" => 0.0, "x" => 90.0, "y" => 34.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();
        $obj->setAlign("right");
        $obj->setFloating(true);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $obj->setUseHTML(true);
        $obj->setVerticalAlign("bottom");
        $obj->setWidthAdjust(0.0);
        $obj->setX(90.0);
        $obj->setY(34.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setAlign("right");
        $this->assertEquals("right", $obj->getAlign());
    }

    /**
     * Tests setFloating()
     *
     * @return void.
     */
    public function testSetFloating(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setFloating(true);
        $this->assertEquals(true, $obj->getFloating());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setText()
     *
     * @return void.
     */
    public function testSetText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $this->assertEquals("1cb251ec0d568de6a929b520c4aed8d1", $obj->getText());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setUseHTML(false);
        $this->assertEquals(false, $obj->getUseHTML());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());
    }

    /**
     * Tests setWidthAdjust()
     *
     * @return void.
     */
    public function testSetWidthAdjust(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setWidthAdjust(13.0);
        $this->assertEquals(13.0, $obj->getWidthAdjust());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setX(97.0);
        $this->assertEquals(97.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $obj->setY(56.0);
        $this->assertEquals(56.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();

        $this->assertEquals("center", $obj->getAlign());
        $this->assertEquals(false, $obj->getFloating());
        $this->assertEquals(["color" => "#666666"], $obj->getStyle());
        $this->assertNull($obj->getText());
        $this->assertEquals(false, $obj->getUseHTML());
        $this->assertNull($obj->getVerticalAlign());
        $this->assertEquals(-44, $obj->getWidthAdjust());
        $this->assertEquals(0, $obj->getX());
        $this->assertNull($obj->getY());
    }
}
