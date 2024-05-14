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
 * Highcharts tooltip test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsTooltipTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["animation" => true, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 82.0, "borderWidth" => 44.0, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 66.0, "padding" => 7.0, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => false, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => false, "snap" => 67.0, "split" => false, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => false, "valueDecimals" => 0.0, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db", "xDateFormat" => "e24debfa0bc8408e1dda05cbd537a072"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();
        $obj->setAnimation(true);
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderRadius(82.0);
        $obj->setBorderWidth(44.0);
        $obj->setCrosshairs("db6c0bf6a6631359834bb9a0a5378bf1");
        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $obj->setEnabled(true);
        $obj->setFollowPointer(false);
        $obj->setFollowTouchMove(true);
        $obj->setFooterFormat("1ac32e030fc5ef01e703d5419170690e");
        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");
        $obj->setHideDelay(66.0);
        $obj->setPadding(7.0);
        $obj->setPointFormat("332dd3de68dc71de0745837cbc13e217");
        $obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");
        $obj->setPositioner("97c873b8ea05a822237283662ba3c751");
        $obj->setShadow(false);
        $obj->setShape("8c73a98a300905900337f535531dfca6");
        $obj->setShared(false);
        $obj->setSnap(67.0);
        $obj->setSplit(false);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setUseHTML(false);
        $obj->setValueDecimals(0.0);
        $obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");
        $obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");
        $obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setAnimation(true);
        $this->assertTrue($obj->getAnimation());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderRadius()
     *
     * @return void.
     */
    public function testSetBorderRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setBorderRadius(53.0);
        $this->assertEquals(53.0, $obj->getBorderRadius());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setBorderWidth(14.0);
        $this->assertEquals(14.0, $obj->getBorderWidth());
    }

    /**
     * Tests setCrosshairs()
     *
     * @return void.
     */
    public function testSetCrosshairs(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setCrosshairs("db6c0bf6a6631359834bb9a0a5378bf1");
        $this->assertEquals("db6c0bf6a6631359834bb9a0a5378bf1", $obj->getCrosshairs());
    }

    /**
     * Tests setDateTimeLabelFormats()
     *
     * @return void.
     */
    public function testSetDateTimeLabelFormats(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $this->assertEquals(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], $obj->getDateTimeLabelFormats());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setFollowPointer()
     *
     * @return void.
     */
    public function testSetFollowPointer(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setFollowPointer(false);
        $this->assertFalse($obj->getFollowPointer());
    }

    /**
     * Tests setFollowTouchMove()
     *
     * @return void.
     */
    public function testSetFollowTouchMove(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setFollowTouchMove(true);
        $this->assertTrue($obj->getFollowTouchMove());
    }

    /**
     * Tests setFooterFormat()
     *
     * @return void.
     */
    public function testSetFooterFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setFooterFormat("1ac32e030fc5ef01e703d5419170690e");
        $this->assertEquals("1ac32e030fc5ef01e703d5419170690e", $obj->getFooterFormat());
    }

    /**
     * Tests setFormatter()
     *
     * @return void.
     */
    public function testSetFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $this->assertEquals("f2ffc59487832cbad265a8fef2133592", $obj->getFormatter());
    }

    /**
     * Tests setHeaderFormat()
     *
     * @return void.
     */
    public function testSetHeaderFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");
        $this->assertEquals("937148825f6c7c8ed3376d1834b17ac6", $obj->getHeaderFormat());
    }

    /**
     * Tests setHideDelay()
     *
     * @return void.
     */
    public function testSetHideDelay(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setHideDelay(12.0);
        $this->assertEquals(12.0, $obj->getHideDelay());
    }

    /**
     * Tests setPadding()
     *
     * @return void.
     */
    public function testSetPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setPadding(43.0);
        $this->assertEquals(43.0, $obj->getPadding());
    }

    /**
     * Tests setPointFormat()
     *
     * @return void.
     */
    public function testSetPointFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setPointFormat("332dd3de68dc71de0745837cbc13e217");
        $this->assertEquals("332dd3de68dc71de0745837cbc13e217", $obj->getPointFormat());
    }

    /**
     * Tests setPointFormatter()
     *
     * @return void.
     */
    public function testSetPointFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");
        $this->assertEquals("d0b51d7b9a5189f718d161b366d33044", $obj->getPointFormatter());
    }

    /**
     * Tests setPositioner()
     *
     * @return void.
     */
    public function testSetPositioner(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setPositioner("97c873b8ea05a822237283662ba3c751");
        $this->assertEquals("97c873b8ea05a822237283662ba3c751", $obj->getPositioner());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setShadow(true);
        $this->assertTrue($obj->getShadow());
    }

    /**
     * Tests setShape()
     *
     * @return void.
     */
    public function testSetShape(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setShape("8c73a98a300905900337f535531dfca6");
        $this->assertEquals("8c73a98a300905900337f535531dfca6", $obj->getShape());
    }

    /**
     * Tests setShared()
     *
     * @return void.
     */
    public function testSetShared(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setShared(false);
        $this->assertFalse($obj->getShared());
    }

    /**
     * Tests setSnap()
     *
     * @return void.
     */
    public function testSetSnap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setSnap(43.0);
        $this->assertEquals(43.0, $obj->getSnap());
    }

    /**
     * Tests setSplit()
     *
     * @return void.
     */
    public function testSetSplit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setSplit(false);
        $this->assertFalse($obj->getSplit());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setUseHTML(false);
        $this->assertFalse($obj->getUseHTML());
    }

    /**
     * Tests setValueDecimals()
     *
     * @return void.
     */
    public function testSetValueDecimals(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setValueDecimals(28.0);
        $this->assertEquals(28.0, $obj->getValueDecimals());
    }

    /**
     * Tests setValuePrefix()
     *
     * @return void.
     */
    public function testSetValuePrefix(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");
        $this->assertEquals("5fde1c8b25eb2ea19ff8377e62564818", $obj->getValuePrefix());
    }

    /**
     * Tests setValueSuffix()
     *
     * @return void.
     */
    public function testSetValueSuffix(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");
        $this->assertEquals("bf995908ddff004471c953d8062bd1db", $obj->getValueSuffix());
    }

    /**
     * Tests setXDateFormat()
     *
     * @return void.
     */
    public function testSetXDateFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");
        $this->assertEquals("e24debfa0bc8408e1dda05cbd537a072", $obj->getXDateFormat());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();

        $this->assertTrue($obj->getAnimation());
        $this->assertEquals("rgba(247,247,247,0.85)", $obj->getBackgroundColor());
        $this->assertNull($obj->getBorderColor());
        $this->assertEquals(3, $obj->getBorderRadius());
        $this->assertEquals(1, $obj->getBorderWidth());
        $this->assertNull($obj->getCrosshairs());
        $this->assertNull($obj->getDateTimeLabelFormats());
        $this->assertTrue($obj->getEnabled());
        $this->assertFalse($obj->getFollowPointer());
        $this->assertTrue($obj->getFollowTouchMove());
        $this->assertEquals("false", $obj->getFooterFormat());
        $this->assertNull($obj->getFormatter());
        $this->assertNull($obj->getHeaderFormat());
        $this->assertEquals(500, $obj->getHideDelay());
        $this->assertEquals(8, $obj->getPadding());
        $this->assertEquals("<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", $obj->getPointFormat());
        $this->assertNull($obj->getPointFormatter());
        $this->assertNull($obj->getPositioner());
        $this->assertTrue($obj->getShadow());
        $this->assertEquals("callout", $obj->getShape());
        $this->assertFalse($obj->getShared());
        $this->assertNull($obj->getSnap());
        $this->assertFalse($obj->getSplit());
        $this->assertEquals(["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], $obj->getStyle());
        $this->assertFalse($obj->getUseHTML());
        $this->assertNull($obj->getValueDecimals());
        $this->assertNull($obj->getValuePrefix());
        $this->assertNull($obj->getValueSuffix());
        $this->assertNull($obj->getXDateFormat());
    }
}
