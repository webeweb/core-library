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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts reset zoom button test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Chart
 * @version 5.0.14
 */
class HighchartsResetZoomButtonTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "relativeTo" => "chart", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton();
        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);
        $obj->setRelativeTo("chart");
        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setPosition()
     *
     * @return void.
     */
    public function testSetPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton();

        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);
        $this->assertEquals(["position" => "4757fe07fd492a8be0ea6a760d683d6e"], $obj->getPosition());
    }

    /**
     * Tests setRelativeTo()
     *
     * @return void.
     */
    public function testSetRelativeTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton();

        $obj->setRelativeTo("chart");
        $this->assertEquals("chart", $obj->getRelativeTo());

        $obj->setRelativeTo("plot");
        $this->assertEquals("plot", $obj->getRelativeTo());
    }

    /**
     * Tests setTheme()
     *
     * @return void.
     */
    public function testSetTheme(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton();

        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);
        $this->assertEquals(["theme" => "f484570d7cf557020e11ace406901b10"], $obj->getTheme());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton();

        $this->assertNull($obj->getPosition());
        $this->assertEquals("plot", $obj->getRelativeTo());
        $this->assertNull($obj->getTheme());
    }
}
