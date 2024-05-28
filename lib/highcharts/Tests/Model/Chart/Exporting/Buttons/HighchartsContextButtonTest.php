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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Exporting\Buttons;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts context button test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Exporting\Buttons
 * @version 5.0.14
 */
class HighchartsContextButtonTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "enabled" => true, "height" => 42.0, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 14.0, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 98.0, "symbolX" => 46.0, "symbolY" => 96.0, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 32.0, "x" => 13.0, "y" => 25.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();
        $obj->setAlign("right");
        $obj->setEnabled(true);
        $obj->setHeight(42.0);
        $obj->setMenuItems(["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"]);
        $obj->setOnclick("c0bb2196426022e8adf9a5b6d34fd45e");
        $obj->setSymbol("menu");
        $obj->setSymbolFill("91c9eea38e42d2f606dbfea1e027bfbf");
        $obj->setSymbolSize(14.0);
        $obj->setSymbolStroke("07f92b4194c5eb604aeb59004eeaab2a");
        $obj->setSymbolStrokeWidth(98.0);
        $obj->setSymbolX(46.0);
        $obj->setSymbolY(96.0);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);
        $obj->setVerticalAlign("bottom");
        $obj->setWidth(32.0);
        $obj->setX(13.0);
        $obj->setY(25.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setHeight(39.0);
        $this->assertEquals(39.0, $obj->getHeight());
    }

    /**
     * Tests setMenuItems()
     *
     * @return void.
     */
    public function testSetMenuItems(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setMenuItems(["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"]);
        $this->assertEquals(["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], $obj->getMenuItems());
    }

    /**
     * Tests setOnclick()
     *
     * @return void.
     */
    public function testSetOnclick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setOnclick("c0bb2196426022e8adf9a5b6d34fd45e");
        $this->assertEquals("c0bb2196426022e8adf9a5b6d34fd45e", $obj->getOnclick());
    }

    /**
     * Tests setSymbol()
     *
     * @return void.
     */
    public function testSetSymbol(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setSymbol("circle");
        $this->assertEquals("circle", $obj->getSymbol());

        $obj->setSymbol("diamond");
        $this->assertEquals("diamond", $obj->getSymbol());

        $obj->setSymbol("menu");
        $this->assertEquals("menu", $obj->getSymbol());

        $obj->setSymbol("square");
        $this->assertEquals("square", $obj->getSymbol());

        $obj->setSymbol("triangle");
        $this->assertEquals("triangle", $obj->getSymbol());

        $obj->setSymbol("triangle-down");
        $this->assertEquals("triangle-down", $obj->getSymbol());
    }

    /**
     * Tests setSymbolFill()
     *
     * @return void.
     */
    public function testSetSymbolFill(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setSymbolFill("91c9eea38e42d2f606dbfea1e027bfbf");
        $this->assertEquals("91c9eea38e42d2f606dbfea1e027bfbf", $obj->getSymbolFill());
    }

    /**
     * Tests setSymbolSize()
     *
     * @return void.
     */
    public function testSetSymbolSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setSymbolSize(72.0);
        $this->assertEquals(72.0, $obj->getSymbolSize());
    }

    /**
     * Tests setSymbolStroke()
     *
     * @return void.
     */
    public function testSetSymbolStroke(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setSymbolStroke("07f92b4194c5eb604aeb59004eeaab2a");
        $this->assertEquals("07f92b4194c5eb604aeb59004eeaab2a", $obj->getSymbolStroke());
    }

    /**
     * Tests setSymbolStrokeWidth()
     *
     * @return void.
     */
    public function testSetSymbolStrokeWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setSymbolStrokeWidth(75.0);
        $this->assertEquals(75.0, $obj->getSymbolStrokeWidth());
    }

    /**
     * Tests setSymbolX()
     *
     * @return void.
     */
    public function testSetSymbolX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setSymbolX(23.0);
        $this->assertEquals(23.0, $obj->getSymbolX());
    }

    /**
     * Tests setSymbolY()
     *
     * @return void.
     */
    public function testSetSymbolY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setSymbolY(76.0);
        $this->assertEquals(76.0, $obj->getSymbolY());
    }

    /**
     * Tests setText()
     *
     * @return void.
     */
    public function testSetText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $this->assertEquals("1cb251ec0d568de6a929b520c4aed8d1", $obj->getText());
    }

    /**
     * Tests setTheme()
     *
     * @return void.
     */
    public function testSetTheme(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);
        $this->assertEquals(["theme" => "f484570d7cf557020e11ace406901b10"], $obj->getTheme());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setWidth(58.0);
        $this->assertEquals(58.0, $obj->getWidth());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setX(89.0);
        $this->assertEquals(89.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj->setY(52.0);
        $this->assertEquals(52.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $this->assertEquals("right", $obj->getAlign());
        $this->assertTrue($obj->getEnabled());
        $this->assertEquals(20, $obj->getHeight());
        $this->assertNull($obj->getMenuItems());
        $this->assertNull($obj->getOnclick());
        $this->assertEquals("menu", $obj->getSymbol());
        $this->assertEquals("#666666", $obj->getSymbolFill());
        $this->assertEquals(14, $obj->getSymbolSize());
        $this->assertEquals("#666666", $obj->getSymbolStroke());
        $this->assertEquals(1, $obj->getSymbolStrokeWidth());
        $this->assertEquals(12.5, $obj->getSymbolX());
        $this->assertEquals(10.5, $obj->getSymbolY());
        $this->assertNull($obj->getText());
        $this->assertNull($obj->getTheme());
        $this->assertEquals("top", $obj->getVerticalAlign());
        $this->assertEquals(24, $obj->getWidth());
        $this->assertEquals(-10, $obj->getX());
        $this->assertEquals(0, $obj->getY());
    }
}
