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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Funnel;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data labels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Funnel
 * @version 5.0.14
 */
class HighchartsDataLabelsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 44.0, "borderWidth" => 52.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 61.0, "connectorWidth" => 60.0, "crop" => false, "defer" => true, "distance" => 70.0, "enabled" => true, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => false, "overflow" => "none", "padding" => 40.0, "rotation" => 57.0, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => true, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => true, "verticalAlign" => "bottom", "x" => 41.0, "y" => 43.0, "zIndex" => 69.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderRadius(44.0);
        $obj->setBorderWidth(52.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setConnectorColor("8bf77ed7251dc34fbae6786923398a9d");
        $obj->setConnectorPadding(61.0);
        $obj->setConnectorWidth(60.0);
        $obj->setCrop(false);
        $obj->setDefer(true);
        $obj->setDistance(70.0);
        $obj->setEnabled(true);
        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $obj->setInside(false);
        $obj->setOverflow("none");
        $obj->setPadding(40.0);
        $obj->setRotation(57.0);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShape("8c73a98a300905900337f535531dfca6");
        $obj->setSoftConnector(true);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setUseHTML(true);
        $obj->setVerticalAlign("bottom");
        $obj->setX(41.0);
        $obj->setY(43.0);
        $obj->setZIndex(69.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderRadius()
     *
     * @return void.
     */
    public function testSetBorderRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setBorderRadius(77.0);
        $this->assertEquals(77.0, $obj->getBorderRadius());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setBorderWidth(49.0);
        $this->assertEquals(49.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setConnectorColor()
     *
     * @return void.
     */
    public function testSetConnectorColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setConnectorColor("8bf77ed7251dc34fbae6786923398a9d");
        $this->assertEquals("8bf77ed7251dc34fbae6786923398a9d", $obj->getConnectorColor());
    }

    /**
     * Tests setConnectorPadding()
     *
     * @return void.
     */
    public function testSetConnectorPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setConnectorPadding(53.0);
        $this->assertEquals(53.0, $obj->getConnectorPadding());
    }

    /**
     * Tests setConnectorWidth()
     *
     * @return void.
     */
    public function testSetConnectorWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setConnectorWidth(70.0);
        $this->assertEquals(70.0, $obj->getConnectorWidth());
    }

    /**
     * Tests setCrop()
     *
     * @return void.
     */
    public function testSetCrop(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setCrop(true);
        $this->assertTrue($obj->getCrop());
    }

    /**
     * Tests setDefer()
     *
     * @return void.
     */
    public function testSetDefer(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setDefer(false);
        $this->assertFalse($obj->getDefer());
    }

    /**
     * Tests setDistance()
     *
     * @return void.
     */
    public function testSetDistance(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setDistance(52.0);
        $this->assertEquals(52.0, $obj->getDistance());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setEnabled(false);
        $this->assertFalse($obj->getEnabled());
    }

    /**
     * Tests setFormat()
     *
     * @return void.
     */
    public function testSetFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $this->assertEquals("1ddcb92ade31c8fbd370001f9b29a7d9", $obj->getFormat());
    }

    /**
     * Tests setFormatter()
     *
     * @return void.
     */
    public function testSetFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $this->assertEquals("f2ffc59487832cbad265a8fef2133592", $obj->getFormatter());
    }

    /**
     * Tests setInside()
     *
     * @return void.
     */
    public function testSetInside(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setInside(true);
        $this->assertTrue($obj->getInside());
    }

    /**
     * Tests setOverflow()
     *
     * @return void.
     */
    public function testSetOverflow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setPadding(63.0);
        $this->assertEquals(63.0, $obj->getPadding());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setRotation(62.0);
        $this->assertEquals(62.0, $obj->getRotation());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShape()
     *
     * @return void.
     */
    public function testSetShape(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setShape("8c73a98a300905900337f535531dfca6");
        $this->assertEquals("8c73a98a300905900337f535531dfca6", $obj->getShape());
    }

    /**
     * Tests setSoftConnector()
     *
     * @return void.
     */
    public function testSetSoftConnector(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setSoftConnector(false);
        $this->assertFalse($obj->getSoftConnector());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setUseHTML(true);
        $this->assertTrue($obj->getUseHTML());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setX(4.0);
        $this->assertEquals(4.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setY(77.0);
        $this->assertEquals(77.0, $obj->getY());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $obj->setZIndex(0.0);
        $this->assertEquals(0.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels();

        $this->assertNull($obj->getBackgroundColor());
        $this->assertNull($obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderRadius());
        $this->assertEquals(0, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertEquals("{point.color}", $obj->getConnectorColor());
        $this->assertEquals(5, $obj->getConnectorPadding());
        $this->assertEquals(1, $obj->getConnectorWidth());
        $this->assertTrue($obj->getCrop());
        $this->assertTrue($obj->getDefer());
        $this->assertEquals(30, $obj->getDistance());
        $this->assertTrue($obj->getEnabled());
        $this->assertEquals("{y}", $obj->getFormat());
        $this->assertNull($obj->getFormatter());
        $this->assertNull($obj->getInside());
        $this->assertEquals("justify", $obj->getOverflow());
        $this->assertEquals(5, $obj->getPadding());
        $this->assertEquals(0, $obj->getRotation());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals("square", $obj->getShape());
        $this->assertTrue($obj->getSoftConnector());
        $this->assertEquals(["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], $obj->getStyle());
        $this->assertFalse($obj->getUseHTML());
        $this->assertNull($obj->getVerticalAlign());
        $this->assertEquals(0, $obj->getX());
        $this->assertEquals(-6, $obj->getY());
        $this->assertEquals(6, $obj->getZIndex());
    }
}
