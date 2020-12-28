<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\CURL\Factory;

use Exception;
use InvalidArgumentException;
use WBW\Library\Core\Network\CURL\API\CurlRequestInterface;
use WBW\Library\Core\Network\CURL\API\CurlResponseInterface;
use WBW\Library\Core\Network\CURL\Factory\CurlFactory;
use WBW\Library\Core\Network\CURL\Request\CurlDeleteRequest;
use WBW\Library\Core\Network\CURL\Request\CurlGetRequest;
use WBW\Library\Core\Network\CURL\Request\CurlHeadRequest;
use WBW\Library\Core\Network\CURL\Request\CurlOptionsRequest;
use WBW\Library\Core\Network\CURL\Request\CurlPatchRequest;
use WBW\Library\Core\Network\CURL\Request\CurlPostRequest;
use WBW\Library\Core\Network\CURL\Request\CurlPutRequest;
use WBW\Library\Core\Network\HTTP\HttpInterface;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Factory
 */
class CurlFactoryTest extends AbstractTestCase {

    /**
     * Tests the newCurlRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCurlRequestWithDelete(): void {

        $obj = CurlFactory::newCurlRequest(HttpInterface::HTTP_METHOD_DELETE);
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

        $obj = CurlFactory::newCurlRequest(HttpInterface::HTTP_METHOD_GET);
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

        $obj = CurlFactory::newCurlRequest(HttpInterface::HTTP_METHOD_HEAD);
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

        $obj = CurlFactory::newCurlRequest(HttpInterface::HTTP_METHOD_OPTIONS);
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

        $obj = CurlFactory::newCurlRequest(HttpInterface::HTTP_METHOD_PATCH);
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

        $obj = CurlFactory::newCurlRequest(HttpInterface::HTTP_METHOD_POST);
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

        $obj = CurlFactory::newCurlRequest(HttpInterface::HTTP_METHOD_PUT);
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
