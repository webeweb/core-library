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
 * Highcharts loading test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsLoadingTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["hideDuration" => 66.0, "labelStyle" => ["labelStyle" => "00faa433bf869443728e502b4f7c6850"], "showDuration" => 19.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();
        $obj->setHideDuration(66.0);
        $obj->setLabelStyle(["labelStyle" => "00faa433bf869443728e502b4f7c6850"]);
        $obj->setShowDuration(19.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setHideDuration()
     *
     * @return void.
     */
    public function testSetHideDuration(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();

        $obj->setHideDuration(16.0);
        $this->assertEquals(16.0, $obj->getHideDuration());
    }

    /**
     * Tests setLabelStyle()
     *
     * @return void.
     */
    public function testSetLabelStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();

        $obj->setLabelStyle(["labelStyle" => "00faa433bf869443728e502b4f7c6850"]);
        $this->assertEquals(["labelStyle" => "00faa433bf869443728e502b4f7c6850"], $obj->getLabelStyle());
    }

    /**
     * Tests setShowDuration()
     *
     * @return void.
     */
    public function testSetShowDuration(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();

        $obj->setShowDuration(86.0);
        $this->assertEquals(86.0, $obj->getShowDuration());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();

        $this->assertEquals(100, $obj->getHideDuration());
        $this->assertEquals(["fontWeight" => "bold", "position" => "relative", "top" => "45%"], $obj->getLabelStyle());
        $this->assertEquals(100, $obj->getShowDuration());
        $this->assertEquals(["position" => "absolute", "backgroundColor" => "#ffffff", "opacity" => 0.5, "textAlign" => "center"], $obj->getStyle());
    }
}
