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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Navigation;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts button options test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Navigation
 * @version 5.0.14
 */
class HighchartsButtonOptionsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "enabled" => false, "height" => 36.0, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 32.0, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 29.0, "symbolX" => 35.0, "symbolY" => 52.0, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 2.0, "y" => 52.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();
        $obj->setAlign("right");
        $obj->setEnabled(false);
        $obj->setHeight(36.0);
        $obj->setSymbolFill("91c9eea38e42d2f606dbfea1e027bfbf");
        $obj->setSymbolSize(32.0);
        $obj->setSymbolStroke("07f92b4194c5eb604aeb59004eeaab2a");
        $obj->setSymbolStrokeWidth(29.0);
        $obj->setSymbolX(35.0);
        $obj->setSymbolY(52.0);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);
        $obj->setVerticalAlign("bottom");
        $obj->setWidth(2.0);
        $obj->setY(52.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setAlign("right");
        $this->assertEquals("right", $obj->getAlign());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setEnabled(false);
        $this->assertEquals(false, $obj->getEnabled());
    }

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setHeight(47.0);
        $this->assertEquals(47.0, $obj->getHeight());
    }

    /**
     * Tests setSymbolFill()
     *
     * @return void.
     */
    public function testSetSymbolFill(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setSymbolFill("91c9eea38e42d2f606dbfea1e027bfbf");
        $this->assertEquals("91c9eea38e42d2f606dbfea1e027bfbf", $obj->getSymbolFill());
    }

    /**
     * Tests setSymbolSize()
     *
     * @return void.
     */
    public function testSetSymbolSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setSymbolSize(31.0);
        $this->assertEquals(31.0, $obj->getSymbolSize());
    }

    /**
     * Tests setSymbolStroke()
     *
     * @return void.
     */
    public function testSetSymbolStroke(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setSymbolStroke("07f92b4194c5eb604aeb59004eeaab2a");
        $this->assertEquals("07f92b4194c5eb604aeb59004eeaab2a", $obj->getSymbolStroke());
    }

    /**
     * Tests setSymbolStrokeWidth()
     *
     * @return void.
     */
    public function testSetSymbolStrokeWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setSymbolStrokeWidth(63.0);
        $this->assertEquals(63.0, $obj->getSymbolStrokeWidth());
    }

    /**
     * Tests setSymbolX()
     *
     * @return void.
     */
    public function testSetSymbolX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setSymbolX(20.0);
        $this->assertEquals(20.0, $obj->getSymbolX());
    }

    /**
     * Tests setSymbolY()
     *
     * @return void.
     */
    public function testSetSymbolY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setSymbolY(19.0);
        $this->assertEquals(19.0, $obj->getSymbolY());
    }

    /**
     * Tests setText()
     *
     * @return void.
     */
    public function testSetText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $this->assertEquals("1cb251ec0d568de6a929b520c4aed8d1", $obj->getText());
    }

    /**
     * Tests setTheme()
     *
     * @return void.
     */
    public function testSetTheme(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);
        $this->assertEquals(["theme" => "f484570d7cf557020e11ace406901b10"], $obj->getTheme());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setWidth(53.0);
        $this->assertEquals(53.0, $obj->getWidth());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj->setY(27.0);
        $this->assertEquals(27.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $this->assertEquals("right", $obj->getAlign());
        $this->assertEquals(true, $obj->getEnabled());
        $this->assertEquals(20, $obj->getHeight());
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
        $this->assertEquals(0, $obj->getY());
    }
}
