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

namespace WBW\Library\Highcharts\Tests\Model\Chart\XAxis\PlotLines;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts label test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\XAxis\PlotLines
 * @version 5.0.14
 */
class HighchartsLabelTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 31.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => true, "verticalAlign" => "bottom", "x" => 84.0, "y" => 21.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();
        $obj->setAlign("f792d1afb0399dce47533bead9d71a8a");
        $obj->setRotation(31.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $obj->setTextAlign("6e1fcbf7c065b2e7fef4cdc9bae3fe53");
        $obj->setUseHTML(true);
        $obj->setVerticalAlign("bottom");
        $obj->setX(84.0);
        $obj->setY(21.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setAlign("f792d1afb0399dce47533bead9d71a8a");
        $this->assertEquals("f792d1afb0399dce47533bead9d71a8a", $obj->getAlign());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setRotation(65.0);
        $this->assertEquals(65.0, $obj->getRotation());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setText()
     *
     * @return void.
     */
    public function testSetText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $this->assertEquals("1cb251ec0d568de6a929b520c4aed8d1", $obj->getText());
    }

    /**
     * Tests setTextAlign()
     *
     * @return void.
     */
    public function testSetTextAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setTextAlign("6e1fcbf7c065b2e7fef4cdc9bae3fe53");
        $this->assertEquals("6e1fcbf7c065b2e7fef4cdc9bae3fe53", $obj->getTextAlign());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setUseHTML(false);
        $this->assertEquals(false, $obj->getUseHTML());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setX(24.0);
        $this->assertEquals(24.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $obj->setY(41.0);
        $this->assertEquals(41.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotLines\HighchartsLabel();

        $this->assertEquals("left", $obj->getAlign());
        $this->assertNull($obj->getRotation());
        $this->assertNull($obj->getStyle());
        $this->assertNull($obj->getText());
        $this->assertNull($obj->getTextAlign());
        $this->assertEquals(false, $obj->getUseHTML());
        $this->assertEquals("top", $obj->getVerticalAlign());
        $this->assertNull($obj->getX());
        $this->assertNull($obj->getY());
    }
}
