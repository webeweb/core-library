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
use WBW\Library\Symfony\Model\RequestDetail;
use WBW\Library\Symfony\Model\RequestDetailInterface;
use WBW\Library\Symfony\Serializer\SerializerKeys;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Repository event test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RequestDetailTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the date/time mock.
        $date = new DateTime("2023-01-24 09:50:00");

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/RequestDetailTest.testJsonSerialize.json");

        $obj = new RequestDetail();
        $obj->setDate($date);
        $obj->setDataGet(SerializerKeys::DATA_GET);
        $obj->setDataPost(SerializerKeys::DATA_POST);
        $obj->setIpAddress(BaseSerializerKeys::IP_ADDRESS);
        $obj->setMethod(BaseSerializerKeys::METHOD);
        $obj->setRoute(BaseSerializerKeys::ROUTE);
        $obj->setUrl(BaseSerializerKeys::URL);
        $obj->setXmlHttp(true);

        $res = $obj->jsonSerialize();
        $this->assertCount(9, $res);

        $this->assertEquals($data, json_encode($res, JSON_PRETTY_PRINT) . "\n");
    }

    /**
     * Tests setDataGet()
     *
     * @return void
     */
    public function testSetDataGet(): void {

        $obj = new RequestDetail();

        $obj->setDataGet("dataGet");
        $this->assertEquals("dataGet", $obj->getDataGet());
    }

    /**
     * Tests setDataPost()
     *
     * @return void
     */
    public function testSetDataPost(): void {

        $obj = new RequestDetail();

        $obj->setDataPost("dataPost");
        $this->assertEquals("dataPost", $obj->getDataPost());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RequestDetail();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(RequestDetailInterface::class, $obj);

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getIpAddress());
        $this->assertNull($obj->getMethod());
        $this->assertNull($obj->getRoute());
        $this->assertNull($obj->getUrl());

        $this->assertNull($obj->getDataGet());
        $this->assertNull($obj->getDataPost());
    }
}
