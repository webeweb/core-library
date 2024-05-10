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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Gauge;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts pivot test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Gauge
 * @version 5.0.14
 */
class HighchartsPivotTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 83.0, "radius" => 86.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot();
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(83.0);
        $obj->setRadius(86.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot();

        $obj->setBorderWidth(58.0);
        $this->assertEquals(58.0, $obj->getBorderWidth());
    }

    /**
     * Tests setRadius()
     *
     * @return void.
     */
    public function testSetRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot();

        $obj->setRadius(57.0);
        $this->assertEquals(57.0, $obj->getRadius());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot();

        $this->assertEquals("#000000", $obj->getBackgroundColor());
        $this->assertEquals("#cccccc", $obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderWidth());
        $this->assertEquals(5, $obj->getRadius());
    }
}
