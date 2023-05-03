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
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the date/time mock.
        $date = new DateTime("2023-01-24 09:50:00");

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/RepositoryEventTest.testJsonSerialize.json");

        $obj = new RepositoryEvent();
        $obj->setDate($date);
        $obj->setEntity(SerializerKeys::ENTITY);
        $obj->setEntityData(SerializerKeys::ENTITY_DATA);
        $obj->setEntityId(SerializerKeys::ENTITY_ID);
        $obj->setIpAddress(BaseSerializerKeys::IP_ADDRESS);
        $obj->setRequestDataGet(SerializerKeys::REQUEST_DATA_GET);
        $obj->setRequestDataPost(SerializerKeys::REQUEST_DATA_POST);
        $obj->setRequestMethod(SerializerKeys::REQUEST_METHOD);
        $obj->setRequestRoute(SerializerKeys::REQUEST_ROUTE);
        $obj->setRequestUrl(SerializerKeys::REQUEST_URL);
        $obj->setType(BaseSerializerKeys::TYPE);

        $res = $obj->jsonSerialize();
        $this->assertCount(12, $res);

        $this->assertEquals($data, json_encode($res, JSON_PRETTY_PRINT) . "\n");
    }

    /**
     * Test setEntityData()
     *
     * @return void
     */
    public function testSetEntityData(): void {

        $obj = new RepositoryEvent();

        $obj->setEntityData("entityData");
        $this->assertEquals("entityData", $obj->getEntityData());
    }

    /**
     * Test setEntityId()
     *
     * @return void
     */
    public function testSetEntityId(): void {

        $obj = new RepositoryEvent();

        $obj->setEntityId("entityId");
        $this->assertEquals("entityId", $obj->getEntityId());
    }

    /**
     * Test setRequestDataGet()
     *
     * @return void
     */
    public function testSetRequestDataGet(): void {

        $obj = new RepositoryEvent();

        $obj->setRequestDataGet("requestDataGet");
        $this->assertEquals("requestDataGet", $obj->getRequestDataGet());
    }

    /**
     * Test setRequestDataPost()
     *
     * @return void
     */
    public function testSetRequestDataPost(): void {

        $obj = new RepositoryEvent();

        $obj->setRequestDataPost("requestDataPost");
        $this->assertEquals("requestDataPost", $obj->getRequestDataPost());
    }

    /**
     * Test setRequestMethod()
     *
     * @return void
     */
    public function testSetRequestMethod(): void {

        $obj = new RepositoryEvent();

        $obj->setRequestMethod("requestMethod");
        $this->assertEquals("requestMethod", $obj->getRequestMethod());
    }

    /**
     * Test setRequestRoute()
     *
     * @return void
     */
    public function testSetRequestRoute(): void {

        $obj = new RepositoryEvent();

        $obj->setRequestRoute("requestRoute");
        $this->assertEquals("requestRoute", $obj->getRequestRoute());
    }

    /**
     * Test setRequestUrl()
     *
     * @return void
     */
    public function testSetRequestUrl(): void {

        $obj = new RepositoryEvent();

        $obj->setRequestUrl("requestUrl");
        $this->assertEquals("requestUrl", $obj->getRequestUrl());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepositoryEvent();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(RepositoryEventInterface::class, $obj);

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEntity());
        $this->assertNull($obj->getIpAddress());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getEntityData());
        $this->assertNull($obj->getEntityId());
        $this->assertNull($obj->getRequestDataGet());
        $this->assertNull($obj->getRequestDataPost());
        $this->assertNull($obj->getRequestMethod());
        $this->assertNull($obj->getRequestRoute());
        $this->assertNull($obj->getRequestUrl());
    }
}
