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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Chart\Options3d\Frame;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts back test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 */
class HighchartsBackTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd", "size" => 83.0, "visible" => false];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack();
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setSize(83.0);
        $obj->setVisible(false);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setSize()
     *
     * @return void.
     */
    public function testSetSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack();

        $obj->setSize(65.0);
        $this->assertEquals(65.0, $obj->getSize());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack();

        $obj->setVisible(false);
        $this->assertFalse($obj->getVisible());

        $obj->setVisible(true);
        $this->assertTrue($obj->getVisible());

        $obj->setVisible("auto");
        $this->assertEquals("auto", $obj->getVisible());

        $obj->setVisible("default");
        $this->assertEquals("default", $obj->getVisible());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack();

        $this->assertEquals("transparent", $obj->getColor());
        $this->assertEquals(1, $obj->getSize());
        $this->assertEquals("default", $obj->getVisible());
    }
}
