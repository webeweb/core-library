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

namespace WBW\Library\Highcharts\Tests\Model\Chart\XAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts crosshair test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsCrosshairTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "snap" => true, "width" => 90.0, "zIndex" => 16.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setDashStyle("LongDashDotDot");
        $obj->setSnap(true);
        $obj->setWidth(90.0);
        $obj->setZIndex(16.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();

        $obj->setDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getDashStyle());
    }

    /**
     * Tests setSnap()
     *
     * @return void.
     */
    public function testSetSnap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();

        $obj->setSnap(false);
        $this->assertEquals(false, $obj->getSnap());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();

        $obj->setWidth(40.0);
        $this->assertEquals(40.0, $obj->getWidth());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();

        $obj->setZIndex(66.0);
        $this->assertEquals(66.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertEquals("Solid", $obj->getDashStyle());
        $this->assertEquals(true, $obj->getSnap());
        $this->assertNull($obj->getWidth());
        $this->assertEquals(2, $obj->getZIndex());
    }
}
