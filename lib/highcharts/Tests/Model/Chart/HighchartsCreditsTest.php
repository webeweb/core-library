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
 * Highcharts credits test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsCreditsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["enabled" => true, "href" => "e8fab833730f3a939d0b3812fe043b5d", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();
        $obj->setEnabled(true);
        $obj->setHref("e8fab833730f3a939d0b3812fe043b5d");
        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();

        $obj->setEnabled(true);
        $this->assertEquals(true, $obj->getEnabled());
    }

    /**
     * Tests setHref()
     *
     * @return void.
     */
    public function testSetHref(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();

        $obj->setHref("e8fab833730f3a939d0b3812fe043b5d");
        $this->assertEquals("e8fab833730f3a939d0b3812fe043b5d", $obj->getHref());
    }

    /**
     * Tests setPosition()
     *
     * @return void.
     */
    public function testSetPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();

        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);
        $this->assertEquals(["position" => "4757fe07fd492a8be0ea6a760d683d6e"], $obj->getPosition());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setText()
     *
     * @return void.
     */
    public function testSetText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");
        $this->assertEquals("1cb251ec0d568de6a929b520c4aed8d1", $obj->getText());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();

        $this->assertEquals(true, $obj->getEnabled());
        $this->assertEquals("http://www.highcharts.com", $obj->getHref());
        $this->assertNull($obj->getPosition());
        $this->assertEquals(["cursor" => "pointer", "color" => "#999999", "fontSize" => "10px"], $obj->getStyle());
        $this->assertEquals("Highcharts.com", $obj->getText());
    }
}
