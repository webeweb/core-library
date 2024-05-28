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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Gauge;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts dial test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Gauge
 * @version 5.0.14
 */
class HighchartsDialTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 84.0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 97.0, "radius" => "fc021d54683383e5078ab9fefc4d53c8", "rearLength" => "cfeff8818f149d68732253aca8a5c4bf", "topWidth" => 72.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBaseLength("908389f95bb7d5ec0ee86df707120146");
        $obj->setBaseWidth(84.0);
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(97.0);
        $obj->setRadius("fc021d54683383e5078ab9fefc4d53c8");
        $obj->setRearLength("cfeff8818f149d68732253aca8a5c4bf");
        $obj->setTopWidth(72.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBaseLength()
     *
     * @return void.
     */
    public function testSetBaseLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $obj->setBaseLength("908389f95bb7d5ec0ee86df707120146");
        $this->assertEquals("908389f95bb7d5ec0ee86df707120146", $obj->getBaseLength());
    }

    /**
     * Tests setBaseWidth()
     *
     * @return void.
     */
    public function testSetBaseWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $obj->setBaseWidth(13.0);
        $this->assertEquals(13.0, $obj->getBaseWidth());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $obj->setBorderWidth(62.0);
        $this->assertEquals(62.0, $obj->getBorderWidth());
    }

    /**
     * Tests setRadius()
     *
     * @return void.
     */
    public function testSetRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $obj->setRadius("fc021d54683383e5078ab9fefc4d53c8");
        $this->assertEquals("fc021d54683383e5078ab9fefc4d53c8", $obj->getRadius());
    }

    /**
     * Tests setRearLength()
     *
     * @return void.
     */
    public function testSetRearLength(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $obj->setRearLength("cfeff8818f149d68732253aca8a5c4bf");
        $this->assertEquals("cfeff8818f149d68732253aca8a5c4bf", $obj->getRearLength());
    }

    /**
     * Tests setTopWidth()
     *
     * @return void.
     */
    public function testSetTopWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $obj->setTopWidth(53.0);
        $this->assertEquals(53.0, $obj->getTopWidth());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial();

        $this->assertEquals("#000000", $obj->getBackgroundColor());
        $this->assertEquals("70%", $obj->getBaseLength());
        $this->assertEquals(3, $obj->getBaseWidth());
        $this->assertEquals("#cccccc", $obj->getBorderColor());
        $this->assertEquals(0, $obj->getBorderWidth());
        $this->assertEquals("80%", $obj->getRadius());
        $this->assertEquals("10%", $obj->getRearLength());
        $this->assertEquals(1, $obj->getTopWidth());
    }
}
