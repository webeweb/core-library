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

namespace WBW\Library\Highcharts\Tests\Model\Chart\YAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts crosshair test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\YAxis
 * @version 5.0.14
 */
class HighchartsCrosshairTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "snap" => true, "width" => 66.0, "zIndex" => 87.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setDashStyle("LongDashDotDot");
        $obj->setSnap(true);
        $obj->setWidth(66.0);
        $obj->setZIndex(87.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();

        $obj->setDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getDashStyle());
    }

    /**
     * Tests setSnap()
     *
     * @return void.
     */
    public function testSetSnap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();

        $obj->setSnap(false);
        $this->assertEquals(false, $obj->getSnap());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();

        $obj->setWidth(16.0);
        $this->assertEquals(16.0, $obj->getWidth());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();

        $obj->setZIndex(48.0);
        $this->assertEquals(48.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertEquals("Solid", $obj->getDashStyle());
        $this->assertEquals(true, $obj->getSnap());
        $this->assertNull($obj->getWidth());
        $this->assertEquals(2, $obj->getZIndex());
    }
}
