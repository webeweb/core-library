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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Waterfall\States\Hover;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts halo test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Waterfall\States\Hover
 * @version 5.0.14
 */
class HighchartsHaloTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"], "opacity" => 6.0, "size" => 82.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo();
        $obj->setAttributes(["attributes" => "736b91750e516139acc13c5eb6564f92"]);
        $obj->setOpacity(6.0);
        $obj->setSize(82.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAttributes()
     *
     * @return void.
     */
    public function testSetAttributes(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo();

        $obj->setAttributes(["attributes" => "736b91750e516139acc13c5eb6564f92"]);
        $this->assertEquals(["attributes" => "736b91750e516139acc13c5eb6564f92"], $obj->getAttributes());
    }

    /**
     * Tests setOpacity()
     *
     * @return void.
     */
    public function testSetOpacity(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo();

        $obj->setOpacity(93.0);
        $this->assertEquals(93.0, $obj->getOpacity());
    }

    /**
     * Tests setSize()
     *
     * @return void.
     */
    public function testSetSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo();

        $obj->setSize(75.0);
        $this->assertEquals(75.0, $obj->getSize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo();

        $this->assertNull($obj->getAttributes());
        $this->assertEquals(0.25, $obj->getOpacity());
        $this->assertEquals(10, $obj->getSize());
    }
}
