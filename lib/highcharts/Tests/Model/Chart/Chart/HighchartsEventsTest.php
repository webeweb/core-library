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
 * Highcharts events test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Chart
 * @version 5.0.14
 */
class HighchartsEventsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "drillup" => "e4d1aecbb5d06c101b0038fd3c0a2f16", "drillupall" => "af30f9f8132eb100a93f2cf9fd5a80ee", "load" => "ec4d1eb36b22d19728e9d1d23ca84d1c", "redraw" => "daa55f45b87ef593dd961238ee16d83f", "render" => "9e5f0bb330344d580b9e30d338d6ab6d", "selection" => "ef5714e0519bfaa645cdff7d28843b70"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();
        $obj->setAddSeries("2a12e68b66ba3a0ab168c1ab1d3a0588");
        $obj->setAfterPrint("6e9249730f6d40e35aed0e957a7d82ea");
        $obj->setBeforePrint("74c828520c5583314685b27d6963c154");
        $obj->setClick("a8affc088cbca89fa20dbd98c91362e4");
        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $obj->setDrillup("e4d1aecbb5d06c101b0038fd3c0a2f16");
        $obj->setDrillupall("af30f9f8132eb100a93f2cf9fd5a80ee");
        $obj->setLoad("ec4d1eb36b22d19728e9d1d23ca84d1c");
        $obj->setRedraw("daa55f45b87ef593dd961238ee16d83f");
        $obj->setRender("9e5f0bb330344d580b9e30d338d6ab6d");
        $obj->setSelection("ef5714e0519bfaa645cdff7d28843b70");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAddSeries()
     *
     * @return void.
     */
    public function testSetAddSeries(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setAddSeries("2a12e68b66ba3a0ab168c1ab1d3a0588");
        $this->assertEquals("2a12e68b66ba3a0ab168c1ab1d3a0588", $obj->getAddSeries());
    }

    /**
     * Tests setAfterPrint()
     *
     * @return void.
     */
    public function testSetAfterPrint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setAfterPrint("6e9249730f6d40e35aed0e957a7d82ea");
        $this->assertEquals("6e9249730f6d40e35aed0e957a7d82ea", $obj->getAfterPrint());
    }

    /**
     * Tests setBeforePrint()
     *
     * @return void.
     */
    public function testSetBeforePrint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setBeforePrint("74c828520c5583314685b27d6963c154");
        $this->assertEquals("74c828520c5583314685b27d6963c154", $obj->getBeforePrint());
    }

    /**
     * Tests setClick()
     *
     * @return void.
     */
    public function testSetClick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setClick("a8affc088cbca89fa20dbd98c91362e4");
        $this->assertEquals("a8affc088cbca89fa20dbd98c91362e4", $obj->getClick());
    }

    /**
     * Tests setDrilldown()
     *
     * @return void.
     */
    public function testSetDrilldown(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $this->assertEquals("e3fd48c72943315f737d8a814fda4fd1", $obj->getDrilldown());
    }

    /**
     * Tests setDrillup()
     *
     * @return void.
     */
    public function testSetDrillup(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setDrillup("e4d1aecbb5d06c101b0038fd3c0a2f16");
        $this->assertEquals("e4d1aecbb5d06c101b0038fd3c0a2f16", $obj->getDrillup());
    }

    /**
     * Tests setDrillupall()
     *
     * @return void.
     */
    public function testSetDrillupall(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setDrillupall("af30f9f8132eb100a93f2cf9fd5a80ee");
        $this->assertEquals("af30f9f8132eb100a93f2cf9fd5a80ee", $obj->getDrillupall());
    }

    /**
     * Tests setLoad()
     *
     * @return void.
     */
    public function testSetLoad(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setLoad("ec4d1eb36b22d19728e9d1d23ca84d1c");
        $this->assertEquals("ec4d1eb36b22d19728e9d1d23ca84d1c", $obj->getLoad());
    }

    /**
     * Tests setRedraw()
     *
     * @return void.
     */
    public function testSetRedraw(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setRedraw("daa55f45b87ef593dd961238ee16d83f");
        $this->assertEquals("daa55f45b87ef593dd961238ee16d83f", $obj->getRedraw());
    }

    /**
     * Tests setRender()
     *
     * @return void.
     */
    public function testSetRender(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setRender("9e5f0bb330344d580b9e30d338d6ab6d");
        $this->assertEquals("9e5f0bb330344d580b9e30d338d6ab6d", $obj->getRender());
    }

    /**
     * Tests setSelection()
     *
     * @return void.
     */
    public function testSetSelection(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $obj->setSelection("ef5714e0519bfaa645cdff7d28843b70");
        $this->assertEquals("ef5714e0519bfaa645cdff7d28843b70", $obj->getSelection());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();

        $this->assertNull($obj->getAddSeries());
        $this->assertNull($obj->getAfterPrint());
        $this->assertNull($obj->getBeforePrint());
        $this->assertNull($obj->getClick());
        $this->assertNull($obj->getDrilldown());
        $this->assertNull($obj->getDrillup());
        $this->assertNull($obj->getDrillupall());
        $this->assertNull($obj->getLoad());
        $this->assertNull($obj->getRedraw());
        $this->assertNull($obj->getRender());
        $this->assertNull($obj->getSelection());
    }
}
