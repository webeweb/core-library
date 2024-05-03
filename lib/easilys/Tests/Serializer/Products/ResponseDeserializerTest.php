<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Serializer\Products;

use WBW\Library\Easilys\Model\PriceList;
use WBW\Library\Easilys\Model\PriceListSupplierProduct;
use WBW\Library\Easilys\Model\Product;
use WBW\Library\Easilys\Model\Quality;
use WBW\Library\Easilys\Model\Range;
use WBW\Library\Easilys\Model\Unit;
use WBW\Library\Easilys\Response\Products\GetPriceListHeadersSiteResponse;
use WBW\Library\Easilys\Response\Products\GetPriceListSupplierProductsSiteResponse;
use WBW\Library\Easilys\Response\Products\GetProductsSiteResponse;
use WBW\Library\Easilys\Response\Products\GetQualitiesResponse;
use WBW\Library\Easilys\Response\Products\GetRangesResponse;
use WBW\Library\Easilys\Response\Products\GetUnitsResponse;
use WBW\Library\Easilys\Serializer\Products\ResponseDeserializer;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Serializer\Products
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeGetPriceListHeadersSiteResponse()
     *
     * @return void
     */
    public function testDeserializeGetPriceListHeadersSiteResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/../../Fixtures/Serializer/Products/ResponseDeserializerTest.testDeserializeGetPriceListHeadersSiteResponse.json");

        $res = ResponseDeserializer::deserializeGetPriceListHeadersSiteResponse($rawResponse);
        $this->assertInstanceOf(GetPriceListHeadersSiteResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertTrue($res->getSuccess());
        $this->assertNotEquals([], $res->getData());
        $this->assertEquals("", $res->getMessage());
        $this->assertEquals([], $res->getErrors());

        $this->assertInstanceOf(PriceList::class, $res->getData()[0]);
    }

    /**
     * Test deserializeGetPriceListSupplierProductsSiteResponse()
     *
     * @return void
     */
    public function testDeserializeGetPriceListSupplierProductsSiteResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/../../Fixtures/Serializer/Products/ResponseDeserializerTest.testDeserializeGetPriceListSupplierProductsSiteResponse.json");

        $res = ResponseDeserializer::deserializeGetPriceListSupplierProductsSiteResponse($rawResponse);
        $this->assertInstanceOf(GetPriceListSupplierProductsSiteResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertTrue($res->getSuccess());
        $this->assertNotEquals([], $res->getData());
        $this->assertEquals("", $res->getMessage());
        $this->assertEquals([], $res->getErrors());

        $this->assertInstanceOf(PriceListSupplierProduct::class, $res->getData()[0]);
    }

    /**
     * Test deserializeGetProductsSiteResponse()
     *
     * @return void
     */
    public function testDeserializeGetProductsSiteResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/../../Fixtures/Serializer/Products/ResponseDeserializerTest.testDeserializeGetProductsSiteResponse.json");

        $res = ResponseDeserializer::deserializeGetProductsSiteResponse($rawResponse);
        $this->assertInstanceOf(GetProductsSiteResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertTrue($res->getSuccess());
        $this->assertNotEquals([], $res->getData());
        $this->assertEquals("", $res->getMessage());
        $this->assertEquals([], $res->getErrors());

        $this->assertInstanceOf(Product::class, $res->getData()[0]);
    }

    /**
     * Test deserializeGetQualitiesResponse()
     *
     * @return void
     */
    public function testDeserializeGetQualitiesResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/../../Fixtures/Serializer/Products/ResponseDeserializerTest.testDeserializeGetQualitiesResponse.json");

        $res = ResponseDeserializer::deserializeGetQualitiesResponse($rawResponse);
        $this->assertInstanceOf(GetQualitiesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertTrue($res->getSuccess());
        $this->assertNotEquals([], $res->getData());
        $this->assertEquals("", $res->getMessage());
        $this->assertEquals([], $res->getErrors());

        $this->assertInstanceOf(Quality::class, $res->getData()[0]);
    }

    /**
     * Test deserializeGetRangesResponse()
     *
     * @return void
     */
    public function testDeserializeGetRangesResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/../../Fixtures/Serializer/Products/ResponseDeserializerTest.testDeserializeGetRangesResponse.json");

        $res = ResponseDeserializer::deserializeGetRangesResponse($rawResponse);
        $this->assertInstanceOf(GetRangesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertTrue($res->getSuccess());
        $this->assertNotEquals([], $res->getData());
        $this->assertEquals("", $res->getMessage());
        $this->assertEquals([], $res->getErrors());

        $this->assertInstanceOf(Range::class, $res->getData()[0]);
    }

    /**
     * Test deserializeGetUnitsResponse()
     *
     * @return void
     */
    public function testDeserializeGetUnitsResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/../../Fixtures/Serializer/Products/ResponseDeserializerTest.testDeserializeGetUnitsResponse.json");

        $res = ResponseDeserializer::deserializeGetUnitsResponse($rawResponse);
        $this->assertInstanceOf(GetUnitsResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertTrue($res->getSuccess());
        $this->assertNotEquals([], $res->getData());
        $this->assertEquals("", $res->getMessage());
        $this->assertEquals([], $res->getErrors());

        $this->assertInstanceOf(Unit::class, $res->getData()[0]);
    }
}
