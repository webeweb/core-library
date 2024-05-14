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
 * Highcharts no data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsNoDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["attr" => ["attr" => "815be97df65d6c4b510cd07189c5347a"], "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => true];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();
        $obj->setAttr(["attr" => "815be97df65d6c4b510cd07189c5347a"]);
        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setUseHTML(true);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAttr()
     *
     * @return void.
     */
    public function testSetAttr(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();

        $obj->setAttr(["attr" => "815be97df65d6c4b510cd07189c5347a"]);
        $this->assertEquals(["attr" => "815be97df65d6c4b510cd07189c5347a"], $obj->getAttr());
    }

    /**
     * Tests setPosition()
     *
     * @return void.
     */
    public function testSetPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();

        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);
        $this->assertEquals(["position" => "4757fe07fd492a8be0ea6a760d683d6e"], $obj->getPosition());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();

        $obj->setUseHTML(true);
        $this->assertTrue($obj->getUseHTML());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();

        $this->assertNull($obj->getAttr());
        $this->assertEquals(["x" => 0, "y" => 0, "align" => "center", "verticalAlign" => "middle"], $obj->getPosition());
        $this->assertEquals(["fontSize" => "12px", "fontWeight" => "bold", "color" => "#666666"], $obj->getStyle());
        $this->assertFalse($obj->getUseHTML());
    }
}
