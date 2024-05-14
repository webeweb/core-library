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
 * Highcharts stack labels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\YAxis
 * @version 5.0.14
 */
class HighchartsStackLabelsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "enabled" => true, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 61.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => false, "verticalAlign" => "bottom", "x" => 15.0, "y" => 89.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();
        $obj->setAlign("right");
        $obj->setEnabled(true);
        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $obj->setRotation(61.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setTextAlign("right");
        $obj->setUseHTML(false);
        $obj->setVerticalAlign("bottom");
        $obj->setX(15.0);
        $obj->setY(89.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setAlign("center");
        $this->assertEquals("center", $obj->getAlign());

        $obj->setAlign("left");
        $this->assertEquals("left", $obj->getAlign());

        $obj->setAlign("right");
        $this->assertEquals("right", $obj->getAlign());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setEnabled(true);
        $this->assertEquals(true, $obj->getEnabled());
    }

    /**
     * Tests setFormat()
     *
     * @return void.
     */
    public function testSetFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $this->assertEquals("1ddcb92ade31c8fbd370001f9b29a7d9", $obj->getFormat());
    }

    /**
     * Tests setFormatter()
     *
     * @return void.
     */
    public function testSetFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $this->assertEquals("f2ffc59487832cbad265a8fef2133592", $obj->getFormatter());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setRotation(17.0);
        $this->assertEquals(17.0, $obj->getRotation());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setTextAlign()
     *
     * @return void.
     */
    public function testSetTextAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setTextAlign("center");
        $this->assertEquals("center", $obj->getTextAlign());

        $obj->setTextAlign("left");
        $this->assertEquals("left", $obj->getTextAlign());

        $obj->setTextAlign("right");
        $this->assertEquals("right", $obj->getTextAlign());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setUseHTML(true);
        $this->assertEquals(true, $obj->getUseHTML());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());

        $obj->setVerticalAlign("middle");
        $this->assertEquals("middle", $obj->getVerticalAlign());

        $obj->setVerticalAlign("top");
        $this->assertEquals("top", $obj->getVerticalAlign());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setX(24.0);
        $this->assertEquals(24.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $obj->setY(51.0);
        $this->assertEquals(51.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels();

        $this->assertNull($obj->getAlign());
        $this->assertEquals(false, $obj->getEnabled());
        $this->assertEquals("{total}", $obj->getFormat());
        $this->assertNull($obj->getFormatter());
        $this->assertEquals(0, $obj->getRotation());
        $this->assertEquals(["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], $obj->getStyle());
        $this->assertNull($obj->getTextAlign());
        $this->assertEquals(false, $obj->getUseHTML());
        $this->assertNull($obj->getVerticalAlign());
        $this->assertNull($obj->getX());
        $this->assertNull($obj->getY());
    }
}
