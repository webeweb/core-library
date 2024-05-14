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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Pyramid;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data labels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Pyramid
 * @version 5.0.14
 */
class HighchartsDataLabelsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 57.0, "borderWidth" => 82.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 24.0, "connectorWidth" => 60.0, "crop" => true, "defer" => false, "distance" => 54.0, "enabled" => true, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => false, "overflow" => "none", "padding" => 96.0, "rotation" => 59.0, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => false, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => true, "verticalAlign" => "bottom", "x" => 17.0, "y" => 6.0, "zIndex" => 23.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderRadius(57.0);
        $obj->setBorderWidth(82.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setConnectorColor("8bf77ed7251dc34fbae6786923398a9d");
        $obj->setConnectorPadding(24.0);
        $obj->setConnectorWidth(60.0);
        $obj->setCrop(true);
        $obj->setDefer(false);
        $obj->setDistance(54.0);
        $obj->setEnabled(true);
        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $obj->setInside(false);
        $obj->setOverflow("none");
        $obj->setPadding(96.0);
        $obj->setRotation(59.0);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShape("8c73a98a300905900337f535531dfca6");
        $obj->setSoftConnector(false);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setUseHTML(true);
        $obj->setVerticalAlign("bottom");
        $obj->setX(17.0);
        $obj->setY(6.0);
        $obj->setZIndex(23.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderRadius()
     *
     * @return void.
     */
    public function testSetBorderRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setBorderRadius(15.0);
        $this->assertEquals(15.0, $obj->getBorderRadius());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setBorderWidth(90.0);
        $this->assertEquals(90.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setConnectorColor()
     *
     * @return void.
     */
    public function testSetConnectorColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setConnectorColor("8bf77ed7251dc34fbae6786923398a9d");
        $this->assertEquals("8bf77ed7251dc34fbae6786923398a9d", $obj->getConnectorColor());
    }

    /**
     * Tests setConnectorPadding()
     *
     * @return void.
     */
    public function testSetConnectorPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setConnectorPadding(95.0);
        $this->assertEquals(95.0, $obj->getConnectorPadding());
    }

    /**
     * Tests setConnectorWidth()
     *
     * @return void.
     */
    public function testSetConnectorWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setConnectorWidth(48.0);
        $this->assertEquals(48.0, $obj->getConnectorWidth());
    }

    /**
     * Tests setCrop()
     *
     * @return void.
     */
    public function testSetCrop(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setCrop(false);
        $this->assertEquals(false, $obj->getCrop());
    }

    /**
     * Tests setDefer()
     *
     * @return void.
     */
    public function testSetDefer(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setDefer(false);
        $this->assertEquals(false, $obj->getDefer());
    }

    /**
     * Tests setDistance()
     *
     * @return void.
     */
    public function testSetDistance(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setDistance(33.0);
        $this->assertEquals(33.0, $obj->getDistance());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setEnabled(true);
        $this->assertEquals(true, $obj->getEnabled());
    }

    /**
     * Tests setFormat()
     *
     * @return void.
     */
    public function testSetFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $this->assertEquals("1ddcb92ade31c8fbd370001f9b29a7d9", $obj->getFormat());
    }

    /**
     * Tests setFormatter()
     *
     * @return void.
     */
    public function testSetFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $this->assertEquals("f2ffc59487832cbad265a8fef2133592", $obj->getFormatter());
    }

    /**
     * Tests setInside()
     *
     * @return void.
     */
    public function testSetInside(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setInside(true);
        $this->assertEquals(true, $obj->getInside());
    }

    /**
     * Tests setOverflow()
     *
     * @return void.
     */
    public function testSetOverflow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setPadding(86.0);
        $this->assertEquals(86.0, $obj->getPadding());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setRotation(15.0);
        $this->assertEquals(15.0, $obj->getRotation());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShape()
     *
     * @return void.
     */
    public function testSetShape(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setShape("8c73a98a300905900337f535531dfca6");
        $this->assertEquals("8c73a98a300905900337f535531dfca6", $obj->getShape());
    }

    /**
     * Tests setSoftConnector()
     *
     * @return void.
     */
    public function testSetSoftConnector(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setSoftConnector(false);
        $this->assertEquals(false, $obj->getSoftConnector());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setUseHTML(false);
        $this->assertEquals(false, $obj->getUseHTML());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setX(24.0);
        $this->assertEquals(24.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setY(14.0);
        $this->assertEquals(14.0, $obj->getY());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $obj->setZIndex(5.0);
        $this->assertEquals(5.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Pyramid\HighchartsDataLabels();

        $this->assertNull($obj->getBackgroundColor());
        $this->assertNull($obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderRadius());
        $this->assertEquals(0, $obj->getBorderWidth());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertEquals("{point.color}", $obj->getConnectorColor());
        $this->assertEquals(5, $obj->getConnectorPadding());
        $this->assertEquals(1, $obj->getConnectorWidth());
        $this->assertEquals(true, $obj->getCrop());
        $this->assertEquals(true, $obj->getDefer());
        $this->assertEquals(30, $obj->getDistance());
        $this->assertEquals(true, $obj->getEnabled());
        $this->assertEquals("{y}", $obj->getFormat());
        $this->assertNull($obj->getFormatter());
        $this->assertNull($obj->getInside());
        $this->assertEquals("justify", $obj->getOverflow());
        $this->assertEquals(5, $obj->getPadding());
        $this->assertEquals(0, $obj->getRotation());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals("square", $obj->getShape());
        $this->assertEquals(true, $obj->getSoftConnector());
        $this->assertEquals(["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], $obj->getStyle());
        $this->assertEquals(false, $obj->getUseHTML());
        $this->assertNull($obj->getVerticalAlign());
        $this->assertEquals(0, $obj->getX());
        $this->assertEquals(-6, $obj->getY());
        $this->assertEquals(6, $obj->getZIndex());
    }
}
