<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use DateTime;
use JsonSerializable;
use WBW\Library\Symfony\Assets\FullCalendarEvent;
use WBW\Library\Symfony\Assets\FullCalendarEventInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Full Calendar event test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class FullCalendarEventTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/FullCalendarEventTest.testJsonSerialize.json");

        // Set the date/time mocks.
        $start = new DateTime("2021-11-29 10:50:00.000000");
        $end   = new DateTime("2021-11-29 11:00:00.000000");

        $obj = new FullCalendarEvent();
        $obj->setId("id");
        $obj->setGroupId("groupId");
        $obj->setAllDay(true);
        $obj->setStart($start);
        $obj->setEnd($end);
        $obj->setStartStr($start->format("Y-m-d H:i"));
        $obj->setEndStr($end->format("Y-m-d H:i"));
        $obj->setTitle("title");
        $obj->setUrl("url");
        $obj->setClassNames(["className"]);
        $obj->setEditable(false);
        $obj->setStartEditable(true);
        $obj->setDurationEditable(false);
        $obj->setResourceEditable(true);
        $obj->setDisplay("none");
        $obj->setBackgroundColor("backgroundColor");
        $obj->setBorderColor("borderColor");
        $obj->setTextColor("textColor");

        $res = $obj->jsonSerialize();
        $this->assertCount(19, $res);

        $this->assertEquals($data, json_encode($res, JSON_PRETTY_PRINT) . "\n");
    }

    /**
     * Tests setAllDay()
     *
     * @return void
     */
    public function testSetAllDay(): void {

        $obj = new FullCalendarEvent();

        $obj->setAllDay(true);
        $this->assertTrue($obj->getAllDay());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void
     */
    public function testSetBackgroundColor(): void {

        $obj = new FullCalendarEvent();

        $obj->setBackgroundColor("backgroundColor");
        $this->assertEquals("backgroundColor", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void
     */
    public function testSetBorderColor(): void {

        $obj = new FullCalendarEvent();

        $obj->setBorderColor("borderColor");
        $this->assertEquals("borderColor", $obj->getBorderColor());
    }

    /**
     * Tests setClassNames()
     *
     * @return void
     */
    public function testSetClassNames(): void {

        // Set a class names mock.
        $classNames = ["className"];

        $obj = new FullCalendarEvent();

        $obj->setClassNames($classNames);
        $this->assertEquals($classNames, $obj->getClassNames());
    }

    /**
     * Tests setDisplay()
     *
     * @return void
     */
    public function testSetDisplay(): void {

        $obj = new FullCalendarEvent();

        $obj->setDisplay("display");
        $this->assertEquals("display", $obj->getDisplay());
    }

    /**
     * Tests setDurationEditable()
     *
     * @return void
     */
    public function testSetDurationEditable(): void {

        $obj = new FullCalendarEvent();

        $obj->setDurationEditable(true);
        $this->assertTrue($obj->getDurationEditable());
    }

    /**
     * Tests setEditable()
     *
     * @return void
     */
    public function testSetEditable(): void {

        $obj = new FullCalendarEvent();

        $obj->setEditable(true);
        $this->assertTrue($obj->getEditable());
    }

    /**
     * Tests setEnd()
     *
     * @return void
     */
    public function testSetEnd(): void {

        // Set a end mock.
        $end = new DateTime();

        $obj = new FullCalendarEvent();

        $obj->setEnd($end);
        $this->assertSame($end, $obj->getEnd());
    }

    /**
     * Tests setEndStr()
     *
     * @return void
     */
    public function testSetEndStr(): void {

        $obj = new FullCalendarEvent();

        $obj->setEndStr("endStr");
        $this->assertEquals("endStr", $obj->getEndStr());
    }

    /**
     * Tests setExtraParams()
     *
     * @return void
     */
    public function testSetExtraParams(): void {

        // Set an extra params mock.
        $extraParams = ["extra" => "param"];

        $obj = new FullCalendarEvent();

        $obj->setExtraParams($extraParams);
        $this->assertEquals($extraParams, $obj->getExtraParams());
    }

    /**
     * Tests setGroupId()
     *
     * @return void
     */
    public function testSetGroupId(): void {

        $obj = new FullCalendarEvent();

        $obj->setGroupId("groupId");
        $this->assertEquals("groupId", $obj->getGroupId());
    }

    /**
     * Tests setResourceEditable()
     *
     * @return void
     */
    public function testSetResourceEditable(): void {

        $obj = new FullCalendarEvent();

        $obj->setResourceEditable(true);
        $this->assertTrue($obj->getResourceEditable());
    }

    /**
     * Tests setStart()
     *
     * @return void
     */
    public function testSetStart(): void {

        // Set a start mock.
        $start = new DateTime();

        $obj = new FullCalendarEvent();

        $obj->setStart($start);
        $this->assertSame($start, $obj->getStart());
    }

    /**
     * Tests setStartEditable()
     *
     * @return void
     */
    public function testSetStartEditable(): void {

        $obj = new FullCalendarEvent();

        $obj->setStartEditable(true);
        $this->assertTrue($obj->getStartEditable());
    }

    /**
     * Tests setStartStr()
     *
     * @return void
     */
    public function testSetStartStr(): void {

        $obj = new FullCalendarEvent();

        $obj->setStartStr("startStr");
        $this->assertEquals("startStr", $obj->getStartStr());
    }

    /**
     * Tests setTextColor()
     *
     * @return void
     */
    public function testSetTextColor(): void {

        $obj = new FullCalendarEvent();

        $obj->setTextColor("textColor");
        $this->assertEquals("textColor", $obj->getTextColor());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FullCalendarEvent();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(FullCalendarEventInterface::class, $obj);

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getTitle());
        $this->assertNull($obj->getUrl());

        $this->assertNull($obj->getAllDay());
        $this->assertNull($obj->getBackgroundColor());
        $this->assertNull($obj->getBorderColor());
        $this->assertEquals([], $obj->getClassNames());
        $this->assertNull($obj->getDisplay());
        $this->assertNull($obj->getDurationEditable());
        $this->assertNull($obj->getEditable());
        $this->assertNull($obj->getEnd());
        $this->assertNull($obj->getEndStr());
        $this->assertEquals([], $obj->getExtraParams());
        $this->assertNull($obj->getGroupId());
        $this->assertNull($obj->getResourceEditable());
        $this->assertNull($obj->getStart());
        $this->assertNull($obj->getStartEditable());
        $this->assertNull($obj->getStartStr());
        $this->assertNull($obj->getTextColor());
    }
}
