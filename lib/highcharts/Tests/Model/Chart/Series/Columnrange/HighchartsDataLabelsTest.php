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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Columnrange;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data labels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Columnrange
 * @version 5.0.14
 */
class HighchartsDataLabelsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "allowOverlap" => false, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 25.0, "borderWidth" => 8.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => false, "defer" => false, "enabled" => true, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => false, "overflow" => "none", "padding" => 19.0, "rotation" => 36.0, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => false, "verticalAlign" => "bottom", "xHigh" => 13.0, "xLow" => 2.0, "yHigh" => 32.0, "yLow" => 31.0, "zIndex" => 61.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();
        $obj->setAlign("right");
        $obj->setAllowOverlap(false);
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderRadius(25.0);
        $obj->setBorderWidth(8.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setCrop(false);
        $obj->setDefer(false);
        $obj->setEnabled(true);
        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $obj->setInside(false);
        $obj->setOverflow("none");
        $obj->setPadding(19.0);
        $obj->setRotation(36.0);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShape("8c73a98a300905900337f535531dfca6");
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setUseHTML(false);
        $obj->setVerticalAlign("bottom");
        $obj->setXHigh(13.0);
        $obj->setXLow(2.0);
        $obj->setYHigh(32.0);
        $obj->setYLow(31.0);
        $obj->setZIndex(61.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setAlign("center");
        $this->assertEquals("center", $obj->getAlign());

        $obj->setAlign("left");
        $this->assertEquals("left", $obj->getAlign());

        $obj->setAlign("right");
        $this->assertEquals("right", $obj->getAlign());
    }

    /**
     * Tests setAllowOverlap()
     *
     * @return void.
     */
    public function testSetAllowOverlap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setAllowOverlap(false);
        $this->assertFalse($obj->getAllowOverlap());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderRadius()
     *
     * @return void.
     */
    public function testSetBorderRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setBorderRadius(59.0);
        $this->assertEquals(59.0, $obj->getBorderRadius());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setBorderWidth(26.0);
        $this->assertEquals(26.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setCrop()
     *
     * @return void.
     */
    public function testSetCrop(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setCrop(true);
        $this->assertTrue($obj->getCrop());
    }

    /**
     * Tests setDefer()
     *
     * @return void.
     */
    public function testSetDefer(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setDefer(true);
        $this->assertTrue($obj->getDefer());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setEnabled(false);
        $this->assertFalse($obj->getEnabled());
    }

    /**
     * Tests setFormat()
     *
     * @return void.
     */
    public function testSetFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $this->assertEquals("1ddcb92ade31c8fbd370001f9b29a7d9", $obj->getFormat());
    }

    /**
     * Tests setFormatter()
     *
     * @return void.
     */
    public function testSetFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $this->assertEquals("f2ffc59487832cbad265a8fef2133592", $obj->getFormatter());
    }

    /**
     * Tests setInside()
     *
     * @return void.
     */
    public function testSetInside(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setInside(true);
        $this->assertTrue($obj->getInside());
    }

    /**
     * Tests setOverflow()
     *
     * @return void.
     */
    public function testSetOverflow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setOverflow("justify");
        $this->assertEquals("justify", $obj->getOverflow());

        $obj->setOverflow("none");
        $this->assertEquals("none", $obj->getOverflow());
    }

    /**
     * Tests setPadding()
     *
     * @return void.
     */
    public function testSetPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setPadding(97.0);
        $this->assertEquals(97.0, $obj->getPadding());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setRotation(36.0);
        $this->assertEquals(36.0, $obj->getRotation());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShape()
     *
     * @return void.
     */
    public function testSetShape(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setShape("8c73a98a300905900337f535531dfca6");
        $this->assertEquals("8c73a98a300905900337f535531dfca6", $obj->getShape());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setUseHTML(true);
        $this->assertTrue($obj->getUseHTML());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());

        $obj->setVerticalAlign("middle");
        $this->assertEquals("middle", $obj->getVerticalAlign());

        $obj->setVerticalAlign("top");
        $this->assertEquals("top", $obj->getVerticalAlign());
    }

    /**
     * Tests setXHigh()
     *
     * @return void.
     */
    public function testSetXHigh(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setXHigh(32.0);
        $this->assertEquals(32.0, $obj->getXHigh());
    }

    /**
     * Tests setXLow()
     *
     * @return void.
     */
    public function testSetXLow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setXLow(23.0);
        $this->assertEquals(23.0, $obj->getXLow());
    }

    /**
     * Tests setYHigh()
     *
     * @return void.
     */
    public function testSetYHigh(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setYHigh(45.0);
        $this->assertEquals(45.0, $obj->getYHigh());
    }

    /**
     * Tests setYLow()
     *
     * @return void.
     */
    public function testSetYLow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setYLow(59.0);
        $this->assertEquals(59.0, $obj->getYLow());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $obj->setZIndex(93.0);
        $this->assertEquals(93.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Columnrange\HighchartsDataLabels();

        $this->assertEquals("center", $obj->getAlign());
        $this->assertFalse($obj->getAllowOverlap());
        $this->assertNull($obj->getBackgroundColor());
        $this->assertNull($obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderRadius());
        $this->assertEquals(0, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertTrue($obj->getCrop());
        $this->assertTrue($obj->getDefer());
        $this->assertFalse($obj->getEnabled());
        $this->assertEquals("{y}", $obj->getFormat());
        $this->assertNull($obj->getFormatter());
        $this->assertNull($obj->getInside());
        $this->assertEquals("justify", $obj->getOverflow());
        $this->assertEquals(5, $obj->getPadding());
        $this->assertEquals(0, $obj->getRotation());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals("square", $obj->getShape());
        $this->assertEquals(["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], $obj->getStyle());
        $this->assertFalse($obj->getUseHTML());
        $this->assertNull($obj->getVerticalAlign());
        $this->assertEquals(0, $obj->getXHigh());
        $this->assertEquals(0, $obj->getXLow());
        $this->assertEquals(-6, $obj->getYHigh());
        $this->assertEquals(16, $obj->getYLow());
        $this->assertEquals(6, $obj->getZIndex());
    }
}
