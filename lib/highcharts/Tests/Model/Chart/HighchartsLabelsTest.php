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
 * Highcharts labels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsLabelsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["items" => ["items" => "691d502cfd0e0626cd3b058e5682ad1c"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLabels();
        $obj->setItems(["items" => "691d502cfd0e0626cd3b058e5682ad1c"]);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setItems()
     *
     * @return void.
     */
    public function testSetItems(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLabels();

        $obj->setItems(["items" => "691d502cfd0e0626cd3b058e5682ad1c"]);
        $this->assertEquals(["items" => "691d502cfd0e0626cd3b058e5682ad1c"], $obj->getItems());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLabels();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsLabels();

        $this->assertNull($obj->getItems());
        $this->assertEquals(["color" => "#333333"], $obj->getStyle());
    }
}
