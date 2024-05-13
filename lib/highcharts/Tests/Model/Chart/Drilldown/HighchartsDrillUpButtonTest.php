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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Drilldown;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts drill up button test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Drilldown
 * @version 5.0.14
 */
class HighchartsDrillUpButtonTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "relativeTo" => "d098f82c4a6c152bd581295856dc869a", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Drilldown\HighchartsDrillUpButton();
        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);
        $obj->setRelativeTo("d098f82c4a6c152bd581295856dc869a");
        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setPosition()
     *
     * @return void.
     */
    public function testSetPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Drilldown\HighchartsDrillUpButton();

        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);
        $this->assertEquals(["position" => "4757fe07fd492a8be0ea6a760d683d6e"], $obj->getPosition());
    }

    /**
     * Tests setRelativeTo()
     *
     * @return void.
     */
    public function testSetRelativeTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Drilldown\HighchartsDrillUpButton();

        $obj->setRelativeTo("d098f82c4a6c152bd581295856dc869a");
        $this->assertEquals("d098f82c4a6c152bd581295856dc869a", $obj->getRelativeTo());
    }

    /**
     * Tests setTheme()
     *
     * @return void.
     */
    public function testSetTheme(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Drilldown\HighchartsDrillUpButton();

        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);
        $this->assertEquals(["theme" => "f484570d7cf557020e11ace406901b10"], $obj->getTheme());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Drilldown\HighchartsDrillUpButton();

        $this->assertNull($obj->getPosition());
        $this->assertEquals("plotBox", $obj->getRelativeTo());
        $this->assertNull($obj->getTheme());
    }
}
