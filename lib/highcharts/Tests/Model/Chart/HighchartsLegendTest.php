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

namespace WBW\Library\Highcharts\Tests\Model\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts legend test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsLegendTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $navigation = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();
        $title      = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle();

        $exp = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49.0, "borderWidth" => 66.0, "enabled" => false, "floating" => false, "itemDistance" => 89.0, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 4.0, "itemMarginTop" => 19.0, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 5.0, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9.0, "margin" => 87.0, "maxHeight" => 77.0, "navigation" => $navigation->jsonSerialize(), "padding" => 21.0, "reversed" => true, "rtl" => true, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "squareSymbol" => true, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 89.0, "symbolPadding" => 76.0, "symbolRadius" => 34.0, "symbolWidth" => 19.0, "title" => $title->jsonSerialize(), "useHTML" => true, "verticalAlign" => "bottom", "width" => 36.0, "x" => 35.0, "y" => 73.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();
        $obj->setAlign("right");
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderRadius(49.0);
        $obj->setBorderWidth(66.0);
        $obj->setEnabled(false);
        $obj->setFloating(false);
        $obj->setItemDistance(89.0);
        $obj->setItemHiddenStyle(["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"]);
        $obj->setItemHoverStyle(["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"]);
        $obj->setItemMarginBottom(4.0);
        $obj->setItemMarginTop(19.0);
        $obj->setItemStyle(["itemStyle" => "5428035d6f7481541cf715e0f3e29604"]);
        $obj->setItemWidth(5.0);
        $obj->setLabelFormat("201bbcba25ee83a321df388c0f4a889d");
        $obj->setLabelFormatter("9078f7787367cf94543b3bc9e92d9692");
        $obj->setLayout("vertical");
        $obj->setLineHeight(9.0);
        $obj->setMargin(87.0);
        $obj->setMaxHeight(77.0);
        $obj->setNavigation($navigation);
        $obj->setPadding(21.0);
        $obj->setReversed(true);
        $obj->setRtl(true);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setSquareSymbol(true);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setSymbolHeight(89.0);
        $obj->setSymbolPadding(76.0);
        $obj->setSymbolRadius(34.0);
        $obj->setSymbolWidth(19.0);
        $obj->setTitle($title);
        $obj->setUseHTML(true);
        $obj->setVerticalAlign("bottom");
        $obj->setWidth(36.0);
        $obj->setX(35.0);
        $obj->setY(73.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newNavigation()
     *
     * @return void.
     */
    public function testNewNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $res = $obj->newNavigation();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation::class, $res);
    }

    /**
     * Tests newTitle()
     *
     * @return void.
     */
    public function testNewTitle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle::class, $res);
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setAlign("center");
        $this->assertEquals("center", $obj->getAlign());

        $obj->setAlign("left");
        $this->assertEquals("left", $obj->getAlign());

        $obj->setAlign("right");
        $this->assertEquals("right", $obj->getAlign());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderRadius()
     *
     * @return void.
     */
    public function testSetBorderRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setBorderRadius(59.0);
        $this->assertEquals(59.0, $obj->getBorderRadius());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setBorderWidth(17.0);
        $this->assertEquals(17.0, $obj->getBorderWidth());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setFloating()
     *
     * @return void.
     */
    public function testSetFloating(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setFloating(false);
        $this->assertFalse($obj->getFloating());
    }

    /**
     * Tests setItemDistance()
     *
     * @return void.
     */
    public function testSetItemDistance(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setItemDistance(6.0);
        $this->assertEquals(6.0, $obj->getItemDistance());
    }

    /**
     * Tests setItemHiddenStyle()
     *
     * @return void.
     */
    public function testSetItemHiddenStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setItemHiddenStyle(["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"]);
        $this->assertEquals(["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], $obj->getItemHiddenStyle());
    }

    /**
     * Tests setItemHoverStyle()
     *
     * @return void.
     */
    public function testSetItemHoverStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setItemHoverStyle(["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"]);
        $this->assertEquals(["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], $obj->getItemHoverStyle());
    }

    /**
     * Tests setItemMarginBottom()
     *
     * @return void.
     */
    public function testSetItemMarginBottom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setItemMarginBottom(47.0);
        $this->assertEquals(47.0, $obj->getItemMarginBottom());
    }

    /**
     * Tests setItemMarginTop()
     *
     * @return void.
     */
    public function testSetItemMarginTop(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setItemMarginTop(20.0);
        $this->assertEquals(20.0, $obj->getItemMarginTop());
    }

    /**
     * Tests setItemStyle()
     *
     * @return void.
     */
    public function testSetItemStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setItemStyle(["itemStyle" => "5428035d6f7481541cf715e0f3e29604"]);
        $this->assertEquals(["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], $obj->getItemStyle());
    }

    /**
     * Tests setItemWidth()
     *
     * @return void.
     */
    public function testSetItemWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setItemWidth(68.0);
        $this->assertEquals(68.0, $obj->getItemWidth());
    }

    /**
     * Tests setLabelFormat()
     *
     * @return void.
     */
    public function testSetLabelFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setLabelFormat("201bbcba25ee83a321df388c0f4a889d");
        $this->assertEquals("201bbcba25ee83a321df388c0f4a889d", $obj->getLabelFormat());
    }

    /**
     * Tests setLabelFormatter()
     *
     * @return void.
     */
    public function testSetLabelFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setLabelFormatter("9078f7787367cf94543b3bc9e92d9692");
        $this->assertEquals("9078f7787367cf94543b3bc9e92d9692", $obj->getLabelFormatter());
    }

    /**
     * Tests setLayout()
     *
     * @return void.
     */
    public function testSetLayout(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setLayout("horizontal");
        $this->assertEquals("horizontal", $obj->getLayout());

        $obj->setLayout("vertical");
        $this->assertEquals("vertical", $obj->getLayout());
    }

    /**
     * Tests setLineHeight()
     *
     * @return void.
     */
    public function testSetLineHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setLineHeight(96.0);
        $this->assertEquals(96.0, $obj->getLineHeight());
    }

    /**
     * Tests setMargin()
     *
     * @return void.
     */
    public function testSetMargin(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setMargin(87.0);
        $this->assertEquals(87.0, $obj->getMargin());
    }

    /**
     * Tests setMaxHeight()
     *
     * @return void.
     */
    public function testSetMaxHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setMaxHeight(89.0);
        $this->assertEquals(89.0, $obj->getMaxHeight());
    }

    /**
     * Tests setNavigation()
     *
     * @return void.
     */
    public function testSetNavigation(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation mock.
        $navigation = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setNavigation($navigation);
        $this->assertSame($navigation, $obj->getNavigation());
    }

    /**
     * Tests setPadding()
     *
     * @return void.
     */
    public function testSetPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setPadding(21.0);
        $this->assertEquals(21.0, $obj->getPadding());
    }

    /**
     * Tests setReversed()
     *
     * @return void.
     */
    public function testSetReversed(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setReversed(true);
        $this->assertTrue($obj->getReversed());
    }

    /**
     * Tests setRtl()
     *
     * @return void.
     */
    public function testSetRtl(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setRtl(true);
        $this->assertTrue($obj->getRtl());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setSquareSymbol()
     *
     * @return void.
     */
    public function testSetSquareSymbol(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setSquareSymbol(false);
        $this->assertFalse($obj->getSquareSymbol());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setSymbolHeight()
     *
     * @return void.
     */
    public function testSetSymbolHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setSymbolHeight(80.0);
        $this->assertEquals(80.0, $obj->getSymbolHeight());
    }

    /**
     * Tests setSymbolPadding()
     *
     * @return void.
     */
    public function testSetSymbolPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setSymbolPadding(2.0);
        $this->assertEquals(2.0, $obj->getSymbolPadding());
    }

    /**
     * Tests setSymbolRadius()
     *
     * @return void.
     */
    public function testSetSymbolRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setSymbolRadius(26.0);
        $this->assertEquals(26.0, $obj->getSymbolRadius());
    }

    /**
     * Tests setSymbolWidth()
     *
     * @return void.
     */
    public function testSetSymbolWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setSymbolWidth(57.0);
        $this->assertEquals(57.0, $obj->getSymbolWidth());
    }

    /**
     * Tests setTitle()
     *
     * @return void.
     */
    public function testSetTitle(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle mock.
        $title = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setTitle($title);
        $this->assertSame($title, $obj->getTitle());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setUseHTML(false);
        $this->assertFalse($obj->getUseHTML());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());

        $obj->setVerticalAlign("middle");
        $this->assertEquals("middle", $obj->getVerticalAlign());

        $obj->setVerticalAlign("top");
        $this->assertEquals("top", $obj->getVerticalAlign());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setWidth(78.0);
        $this->assertEquals(78.0, $obj->getWidth());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setX(43.0);
        $this->assertEquals(43.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $obj->setY(83.0);
        $this->assertEquals(83.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();

        $this->assertEquals("center", $obj->getAlign());
        $this->assertNull($obj->getBackgroundColor());
        $this->assertEquals("#999999", $obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderRadius());
        $this->assertEquals(0, $obj->getBorderWidth());
        $this->assertTrue($obj->getEnabled());
        $this->assertFalse($obj->getFloating());
        $this->assertEquals(20, $obj->getItemDistance());
        $this->assertEquals(["color" => "#cccccc"], $obj->getItemHiddenStyle());
        $this->assertEquals(["color" => "#000000"], $obj->getItemHoverStyle());
        $this->assertEquals(0, $obj->getItemMarginBottom());
        $this->assertEquals(0, $obj->getItemMarginTop());
        $this->assertEquals(["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], $obj->getItemStyle());
        $this->assertNull($obj->getItemWidth());
        $this->assertEquals("{name}", $obj->getLabelFormat());
        $this->assertNull($obj->getLabelFormatter());
        $this->assertEquals("horizontal", $obj->getLayout());
        $this->assertEquals(16, $obj->getLineHeight());
        $this->assertEquals(12, $obj->getMargin());
        $this->assertNull($obj->getMaxHeight());
        $this->assertNull($obj->getNavigation());
        $this->assertEquals(8, $obj->getPadding());
        $this->assertFalse($obj->getReversed());
        $this->assertFalse($obj->getRtl());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertTrue($obj->getSquareSymbol());
        $this->assertNull($obj->getStyle());
        $this->assertNull($obj->getSymbolHeight());
        $this->assertEquals(5, $obj->getSymbolPadding());
        $this->assertNull($obj->getSymbolRadius());
        $this->assertNull($obj->getSymbolWidth());
        $this->assertNull($obj->getTitle());
        $this->assertFalse($obj->getUseHTML());
        $this->assertEquals("bottom", $obj->getVerticalAlign());
        $this->assertNull($obj->getWidth());
        $this->assertEquals(0, $obj->getX());
        $this->assertEquals(0, $obj->getY());
    }
}
