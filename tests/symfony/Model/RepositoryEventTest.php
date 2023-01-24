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

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/RepositoryEventTest.testJsonSerialize.json");

        $obj = new RepositoryEvent();
        $obj->setData(BaseSerializerKeys::DATA);
        $obj->setDate($date);
        $obj->setEntity(SerializerKeys::ENTITY);
        $obj->setIpAddress(BaseSerializerKeys::IP_ADDRESS);
        $obj->setIdentifier(BaseSerializerKeys::IDENTIFIER);
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
        $this->assertNull($obj->getEntity());
        $this->assertNull($obj->getIpAddress());
        $this->assertNull($obj->getIdentifier());
        $this->assertNull($obj->getQuery());
        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getRoute());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUrl());
    }
}
