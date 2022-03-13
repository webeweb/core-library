<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Response;

use JsonSerializable;
use WBW\Library\Symfony\Response\SimpleJsonResponseData;
use WBW\Library\Symfony\Response\SimpleJsonResponseDataInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Simple JSON response data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Response
 */
class SimpleJsonResponseDataTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/SimpleJsonResponseDataTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new SimpleJsonResponseData();
        $obj->setNotify("notify");
        $obj->setStatus(200);

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setNotify()
     *
     * @return void
     */
    public function testSetNotify(): void {

        $obj = new SimpleJsonResponseData();

        $obj->setNotify("notify");
        $this->assertEquals("notify", $obj->getNotify());
    }

    /**
     * Tests setStatus()
     *
     * @return void
     */
    public function testSetStatus(): void {

        $obj = new SimpleJsonResponseData();

        $obj->setStatus(200);
        $this->assertEquals(200, $obj->getStatus());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new SimpleJsonResponseData();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(SimpleJsonResponseDataInterface::class, $obj);

        $this->assertNull($obj->getNotify());
        $this->assertNull($obj->getStatus());
    }
}
