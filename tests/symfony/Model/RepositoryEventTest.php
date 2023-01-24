<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use DateTime;
use JsonSerializable;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Symfony\Model\RepositoryEvent;
use WBW\Library\Symfony\Model\RepositoryEventInterface;
use WBW\Library\Symfony\Serializer\SerializerKeys;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Repository event test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RepositoryEventTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the date/time mock.
        $date = new DateTime("2023-01-24 09:50:00");

        $data = file_get_contents(__DIR__ . "/RepositoryEventTest.testJsonSerialize.json");

        $obj = new RepositoryEvent();
        $obj->setData(BaseSerializerKeys::DATA);
        $obj->setDate($date);
        $obj->setEvent(SerializerKeys::EVENT);
        $obj->setEntity(SerializerKeys::ENTITY);
        $obj->setIpAddress(BaseSerializerKeys::IP_ADDRESS);
        $obj->setQuery(BaseSerializerKeys::QUERY);
        $obj->setRequest(SerializerKeys::REQUEST);
        $obj->setRoute(SerializerKeys::ROUTE);
        $obj->setType(BaseSerializerKeys::TYPE);
        $obj->setUrl(BaseSerializerKeys::URL);

        $res = $obj->jsonSerialize();
        $this->assertCount(11, $res);

        $this->assertEquals($data, json_encode($res, JSON_PRETTY_PRINT) . "\n");
    }

    /**
     * Tests setEntity()
     *
     * @return void
     */
    public function testSetEntity(): void {

        $obj = new RepositoryEvent();

        $obj->setEntity("entity");
        $this->assertEquals("entity", $obj->getEntity());
    }

    /**
     * Tests setEvent()
     *
     * @return void
     */
    public function testSetEvent(): void {

        $obj = new RepositoryEvent();

        $obj->setEvent("event");
        $this->assertEquals("event", $obj->getEvent());
    }

    /**
     * Tests setRequest()
     *
     * @return void
     */
    public function testSetRequest(): void {

        $obj = new RepositoryEvent();

        $obj->setRequest("request");
        $this->assertEquals("request", $obj->getRequest());
    }

    /**
     * Tests setRoute()
     *
     * @return void
     */
    public function testSetRoute(): void {

        $obj = new RepositoryEvent();

        $obj->setRoute("route");
        $this->assertEquals("route", $obj->getRoute());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepositoryEvent();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(RepositoryEventInterface::class, $obj);

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getIpAddress());
        $this->assertNull($obj->getQuery());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUrl());

        $this->assertNull($obj->getEntity());
        $this->assertNull($obj->getEvent());
        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getRoute());
    }
}
