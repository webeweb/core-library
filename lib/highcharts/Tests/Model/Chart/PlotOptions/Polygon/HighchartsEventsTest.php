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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Polygon;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts events test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Polygon
 * @version 5.0.14
 */
class HighchartsEventsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235", "checkboxClick" => "27e3160a9be50f7b44b7bb9086d94964", "click" => "a8affc088cbca89fa20dbd98c91362e4", "hide" => "a88f05b6c963e145a45b58c47cd42a41", "legendItemClick" => "56c962f18312c892a25fdf27904bd24b", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "show" => "a7dd12b1dab17d25467b0b0a4c8d4a92"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();
        $obj->setAfterAnimate("ebdf113b6f659f6f3ea3c6b93e658235");
        $obj->setCheckboxClick("27e3160a9be50f7b44b7bb9086d94964");
        $obj->setClick("a8affc088cbca89fa20dbd98c91362e4");
        $obj->setHide("a88f05b6c963e145a45b58c47cd42a41");
        $obj->setLegendItemClick("56c962f18312c892a25fdf27904bd24b");
        $obj->setMouseOut("efc487f286f5bca976fafe58cb6e7895");
        $obj->setMouseOver("1f1a5f011c50a092eb06446d724dd573");
        $obj->setShow("a7dd12b1dab17d25467b0b0a4c8d4a92");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAfterAnimate()
     *
     * @return void.
     */
    public function testSetAfterAnimate(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj->setAfterAnimate("ebdf113b6f659f6f3ea3c6b93e658235");
        $this->assertEquals("ebdf113b6f659f6f3ea3c6b93e658235", $obj->getAfterAnimate());
    }

    /**
     * Tests setCheckboxClick()
     *
     * @return void.
     */
    public function testSetCheckboxClick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj->setCheckboxClick("27e3160a9be50f7b44b7bb9086d94964");
        $this->assertEquals("27e3160a9be50f7b44b7bb9086d94964", $obj->getCheckboxClick());
    }

    /**
     * Tests setClick()
     *
     * @return void.
     */
    public function testSetClick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj->setClick("a8affc088cbca89fa20dbd98c91362e4");
        $this->assertEquals("a8affc088cbca89fa20dbd98c91362e4", $obj->getClick());
    }

    /**
     * Tests setHide()
     *
     * @return void.
     */
    public function testSetHide(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj->setHide("a88f05b6c963e145a45b58c47cd42a41");
        $this->assertEquals("a88f05b6c963e145a45b58c47cd42a41", $obj->getHide());
    }

    /**
     * Tests setLegendItemClick()
     *
     * @return void.
     */
    public function testSetLegendItemClick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj->setLegendItemClick("56c962f18312c892a25fdf27904bd24b");
        $this->assertEquals("56c962f18312c892a25fdf27904bd24b", $obj->getLegendItemClick());
    }

    /**
     * Tests setMouseOut()
     *
     * @return void.
     */
    public function testSetMouseOut(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj->setMouseOut("efc487f286f5bca976fafe58cb6e7895");
        $this->assertEquals("efc487f286f5bca976fafe58cb6e7895", $obj->getMouseOut());
    }

    /**
     * Tests setMouseOver()
     *
     * @return void.
     */
    public function testSetMouseOver(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj->setMouseOver("1f1a5f011c50a092eb06446d724dd573");
        $this->assertEquals("1f1a5f011c50a092eb06446d724dd573", $obj->getMouseOver());
    }

    /**
     * Tests setShow()
     *
     * @return void.
     */
    public function testSetShow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $obj->setShow("a7dd12b1dab17d25467b0b0a4c8d4a92");
        $this->assertEquals("a7dd12b1dab17d25467b0b0a4c8d4a92", $obj->getShow());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Polygon\HighchartsEvents();

        $this->assertNull($obj->getAfterAnimate());
        $this->assertNull($obj->getCheckboxClick());
        $this->assertNull($obj->getClick());
        $this->assertNull($obj->getHide());
        $this->assertNull($obj->getLegendItemClick());
        $this->assertNull($obj->getMouseOut());
        $this->assertNull($obj->getMouseOver());
        $this->assertNull($obj->getShow());
    }
}
