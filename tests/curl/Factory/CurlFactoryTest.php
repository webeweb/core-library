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
use WBW\Library\Curl\Api\RequestInterface;
use WBW\Library\Curl\Api\ResponseInterface;
use WBW\Library\Curl\Factory\CurlFactory;
use WBW\Library\Curl\Request\DeleteRequest;
use WBW\Library\Curl\Request\GetRequest;
use WBW\Library\Curl\Request\HeadRequest;
use WBW\Library\Curl\Request\OptionsRequest;
use WBW\Library\Curl\Request\PatchRequest;
use WBW\Library\Curl\Request\PostRequest;
use WBW\Library\Curl\Request\PutRequest;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * cURL factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Factory
 */
class CurlFactoryTest extends AbstractTestCase {

    /**
     * Tests newCurlRequest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithDelete(): void {

        $obj = CurlFactory::newCurlRequest(RequestInterface::METHOD_DELETE);
        $this->assertInstanceOf(RequestInterface::class, $obj);
        $this->assertInstanceOf(DeleteRequest::class, $obj);
    }

    /**
     * Tests newCurlRequest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithGet(): void {

        $obj = CurlFactory::newCurlRequest(RequestInterface::METHOD_GET);
        $this->assertInstanceOf(RequestInterface::class, $obj);
        $this->assertInstanceOf(GetRequest::class, $obj);
    }

    /**
     * Tests newCurlRequest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithHead(): void {

        $obj = CurlFactory::newCurlRequest(RequestInterface::METHOD_HEAD);
        $this->assertInstanceOf(RequestInterface::class, $obj);
        $this->assertInstanceOf(HeadRequest::class, $obj);
    }

    /**
     * Tests newCurlRequest()
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
     * Tests newCurlRequest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithOptions(): void {

        $obj = CurlFactory::newCurlRequest(RequestInterface::METHOD_OPTIONS);
        $this->assertInstanceOf(RequestInterface::class, $obj);
        $this->assertInstanceOf(OptionsRequest::class, $obj);
    }

    /**
     * Tests newCurlRequest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithPatch(): void {

        $obj = CurlFactory::newCurlRequest(RequestInterface::METHOD_PATCH);
        $this->assertInstanceOf(RequestInterface::class, $obj);
        $this->assertInstanceOf(PatchRequest::class, $obj);
    }

    /**
     * Tests newCurlRequest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithPost(): void {

        $obj = CurlFactory::newCurlRequest(RequestInterface::METHOD_POST);
        $this->assertInstanceOf(RequestInterface::class, $obj);
        $this->assertInstanceOf(PostRequest::class, $obj);
    }

    /**
     * Tests newCurlRequest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithPut(): void {

        $obj = CurlFactory::newCurlRequest(RequestInterface::METHOD_PUT);
        $this->assertInstanceOf(RequestInterface::class, $obj);
        $this->assertInstanceOf(PutRequest::class, $obj);
    }

    /**
     * Tests newCurlResponse()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlResponse(): void {

        $obj = CurlFactory::newCurlResponse();
        $this->assertInstanceOf(ResponseInterface::class, $obj);
    }
}
