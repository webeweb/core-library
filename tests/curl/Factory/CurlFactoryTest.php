<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Factory;

use Exception;
use InvalidArgumentException;
use WBW\Library\Curl\API\CurlRequestInterface;
use WBW\Library\Curl\API\CurlResponseInterface;
use WBW\Library\Curl\Factory\CurlFactory;
use WBW\Library\Curl\Request\CurlDeleteRequest;
use WBW\Library\Curl\Request\CurlGetRequest;
use WBW\Library\Curl\Request\CurlHeadRequest;
use WBW\Library\Curl\Request\CurlOptionsRequest;
use WBW\Library\Curl\Request\CurlPatchRequest;
use WBW\Library\Curl\Request\CurlPostRequest;
use WBW\Library\Curl\Request\CurlPutRequest;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * cURL factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\Tests\Factory
 */
class CurlFactoryTest extends AbstractTestCase {

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithDelete(): void {

        $obj = CurlFactory::newCurlRequest(CurlRequestInterface::CURL_REQUEST_DELETE);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlDeleteRequest::class, $obj);
    }

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithGet(): void {

        $obj = CurlFactory::newCurlRequest(CurlRequestInterface::CURL_REQUEST_GET);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlGetRequest::class, $obj);
    }

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithHead(): void {

        $obj = CurlFactory::newCurlRequest(CurlRequestInterface::CURL_REQUEST_HEAD);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlHeadRequest::class, $obj);
    }

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithInvalidArgumentException(): void {

        try {

            CurlFactory::newCurlRequest("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The HTTP method "exception" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithOptions(): void {

        $obj = CurlFactory::newCurlRequest(CurlRequestInterface::CURL_REQUEST_OPTIONS);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlOptionsRequest::class, $obj);
    }

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithPatch(): void {

        $obj = CurlFactory::newCurlRequest(CurlRequestInterface::CURL_REQUEST_PATCH);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlPatchRequest::class, $obj);
    }

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithPost(): void {

        $obj = CurlFactory::newCurlRequest(CurlRequestInterface::CURL_REQUEST_POST);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlPostRequest::class, $obj);
    }

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithPut(): void {

        $obj = CurlFactory::newCurlRequest(CurlRequestInterface::CURL_REQUEST_PUT);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlPutRequest::class, $obj);
    }

    /**
     * Tests the newCurlResponse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlResponse(): void {

        $obj = CurlFactory::newCurlResponse();
        $this->assertInstanceOf(CurlResponseInterface::class, $obj);
    }
}
