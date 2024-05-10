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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Pie;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts tooltip test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Pie
 * @version 5.0.14
 */
class HighchartsTooltipTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => false, "followTouchMove" => false, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 60.0, "padding" => 91.0, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => false, "valueDecimals" => 85.0, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db", "xDateFormat" => "e24debfa0bc8408e1dda05cbd537a072"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();
        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $obj->setFollowPointer(false);
        $obj->setFollowTouchMove(false);
        $obj->setFooterFormat("1ac32e030fc5ef01e703d5419170690e");
        $obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");
        $obj->setHideDelay(60.0);
        $obj->setPadding(91.0);
        $obj->setPointFormat("332dd3de68dc71de0745837cbc13e217");
        $obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");
        $obj->setSplit(false);
        $obj->setValueDecimals(85.0);
        $obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");
        $obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");
        $obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setDateTimeLabelFormats()
     *
     * @return void.
     */
    public function testSetDateTimeLabelFormats(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);
        $this->assertEquals(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], $obj->getDateTimeLabelFormats());
    }

    /**
     * Tests setFollowPointer()
     *
     * @return void.
     */
    public function testSetFollowPointer(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setFollowPointer(true);
        $this->assertEquals(true, $obj->getFollowPointer());
    }

    /**
     * Tests setFollowTouchMove()
     *
     * @return void.
     */
    public function testSetFollowTouchMove(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setFollowTouchMove(false);
        $this->assertEquals(false, $obj->getFollowTouchMove());
    }

    /**
     * Tests setFooterFormat()
     *
     * @return void.
     */
    public function testSetFooterFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setFooterFormat("1ac32e030fc5ef01e703d5419170690e");
        $this->assertEquals("1ac32e030fc5ef01e703d5419170690e", $obj->getFooterFormat());
    }

    /**
     * Tests setHeaderFormat()
     *
     * @return void.
     */
    public function testSetHeaderFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");
        $this->assertEquals("937148825f6c7c8ed3376d1834b17ac6", $obj->getHeaderFormat());
    }

    /**
     * Tests setHideDelay()
     *
     * @return void.
     */
    public function testSetHideDelay(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setHideDelay(76.0);
        $this->assertEquals(76.0, $obj->getHideDelay());
    }

    /**
     * Tests setPadding()
     *
     * @return void.
     */
    public function testSetPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setPadding(76.0);
        $this->assertEquals(76.0, $obj->getPadding());
    }

    /**
     * Tests setPointFormat()
     *
     * @return void.
     */
    public function testSetPointFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setPointFormat("332dd3de68dc71de0745837cbc13e217");
        $this->assertEquals("332dd3de68dc71de0745837cbc13e217", $obj->getPointFormat());
    }

    /**
     * Tests setPointFormatter()
     *
     * @return void.
     */
    public function testSetPointFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");
        $this->assertEquals("d0b51d7b9a5189f718d161b366d33044", $obj->getPointFormatter());
    }

    /**
     * Tests setSplit()
     *
     * @return void.
     */
    public function testSetSplit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setSplit(true);
        $this->assertEquals(true, $obj->getSplit());
    }

    /**
     * Tests setValueDecimals()
     *
     * @return void.
     */
    public function testSetValueDecimals(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setValueDecimals(51.0);
        $this->assertEquals(51.0, $obj->getValueDecimals());
    }

    /**
     * Tests setValuePrefix()
     *
     * @return void.
     */
    public function testSetValuePrefix(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");
        $this->assertEquals("5fde1c8b25eb2ea19ff8377e62564818", $obj->getValuePrefix());
    }

    /**
     * Tests setValueSuffix()
     *
     * @return void.
     */
    public function testSetValueSuffix(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");
        $this->assertEquals("bf995908ddff004471c953d8062bd1db", $obj->getValueSuffix());
    }

    /**
     * Tests setXDateFormat()
     *
     * @return void.
     */
    public function testSetXDateFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");
        $this->assertEquals("e24debfa0bc8408e1dda05cbd537a072", $obj->getXDateFormat());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pie\HighchartsTooltip();

        $this->assertNull($obj->getDateTimeLabelFormats());
        $this->assertEquals(false, $obj->getFollowPointer());
        $this->assertEquals(true, $obj->getFollowTouchMove());
        $this->assertEquals("false", $obj->getFooterFormat());
        $this->assertNull($obj->getHeaderFormat());
        $this->assertEquals(500, $obj->getHideDelay());
        $this->assertEquals(8, $obj->getPadding());
        $this->assertEquals("<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", $obj->getPointFormat());
        $this->assertNull($obj->getPointFormatter());
        $this->assertEquals(false, $obj->getSplit());
        $this->assertNull($obj->getValueDecimals());
        $this->assertNull($obj->getValuePrefix());
        $this->assertNull($obj->getValueSuffix());
        $this->assertNull($obj->getXDateFormat());
    }
}
