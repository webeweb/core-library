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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Errorbar;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Errorbar
 * @version 5.0.14
 */
class HighchartsDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Data\HighchartsEvents();

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 19.0, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => $events->jsonSerialize(), "high" => 87.0, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 93.0, "low" => 80.0, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => true, "x" => 76.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(19.0);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEvents($events);
        $obj->setHigh(87.0);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabelrank(93.0);
        $obj->setLow(80.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setSelected(true);
        $obj->setX(76.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setColorIndex(37.0);
        $this->assertEquals(37.0, $obj->getColorIndex());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Data\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Data\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setHigh()
     *
     * @return void.
     */
    public function testSetHigh(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setHigh(52.0);
        $this->assertEquals(52.0, $obj->getHigh());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabelrank()
     *
     * @return void.
     */
    public function testSetLabelrank(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setLabelrank(26.0);
        $this->assertEquals(26.0, $obj->getLabelrank());
    }

    /**
     * Tests setLow()
     *
     * @return void.
     */
    public function testSetLow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setLow(26.0);
        $this->assertEquals(26.0, $obj->getLow());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setSelected(false);
        $this->assertEquals(false, $obj->getSelected());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $obj->setX(98.0);
        $this->assertEquals(98.0, $obj->getX());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\HighchartsData();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getHigh());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabelrank());
        $this->assertNull($obj->getLow());
        $this->assertNull($obj->getName());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertNull($obj->getX());
    }
}
