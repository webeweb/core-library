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
 * Highcharts pane test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsPaneTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "endAngle" => 20.0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "startAngle" => 54.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPane();
        $obj->setBackground(["background" => "d229bbf31eaeebc7c88897732d8b932d"]);
        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);
        $obj->setEndAngle(20.0);
        $obj->setSize("f7bd60b75b29d79b660a2859395c1a24");
        $obj->setStartAngle(54.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBackground()
     *
     * @return void.
     */
    public function testSetBackground(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPane();

        $obj->setBackground(["background" => "d229bbf31eaeebc7c88897732d8b932d"]);
        $this->assertEquals(["background" => "d229bbf31eaeebc7c88897732d8b932d"], $obj->getBackground());
    }

    /**
     * Tests setCenter()
     *
     * @return void.
     */
    public function testSetCenter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPane();

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);
        $this->assertEquals(["center" => "adb115059e28d960fa8badfac5516667"], $obj->getCenter());
    }

    /**
     * Tests setEndAngle()
     *
     * @return void.
     */
    public function testSetEndAngle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPane();

        $obj->setEndAngle(11.0);
        $this->assertEquals(11.0, $obj->getEndAngle());
    }

    /**
     * Tests setSize()
     *
     * @return void.
     */
    public function testSetSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPane();

        $obj->setSize("f7bd60b75b29d79b660a2859395c1a24");
        $this->assertEquals("f7bd60b75b29d79b660a2859395c1a24", $obj->getSize());
    }

    /**
     * Tests setStartAngle()
     *
     * @return void.
     */
    public function testSetStartAngle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPane();

        $obj->setStartAngle(38.0);
        $this->assertEquals(38.0, $obj->getStartAngle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsPane();

        $this->assertNull($obj->getBackground());
        $this->assertEquals(["50%", "50%"], $obj->getCenter());
        $this->assertNull($obj->getEndAngle());
        $this->assertEquals("85%", $obj->getSize());
        $this->assertNull($obj->getStartAngle());
    }
}
