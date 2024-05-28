<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Serializer\Suppliers;

use WBW\Library\Easilys\Model\Storehouse;
use WBW\Library\Easilys\Response\Suppliers\GetStorehousesSiteResponse;
use WBW\Library\Easilys\Serializer\Suppliers\ResponseDeserializer;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Serializer\Suppliers
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeGetStorehousesSiteResponse()
     *
     * @return void
     */
    public function testDeserializeGetStorehousesSiteResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/../../Fixtures/Serializer/Suppliers/ResponseDeserializerTest.testDeserializeGetStorehousesSiteResponse.json");

        $res = ResponseDeserializer::deserializeGetStorehousesSiteResponse($rawResponse);
        $this->assertInstanceOf(GetStorehousesSiteResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertTrue($res->getSuccess());
        $this->assertNotEquals([], $res->getData());
        $this->assertEquals("", $res->getMessage());
        $this->assertEquals([], $res->getErrors());

        $this->assertInstanceOf(Storehouse::class, $res->getData()[0]);
    }
}
