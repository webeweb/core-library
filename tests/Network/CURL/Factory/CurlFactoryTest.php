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
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithDelete() {

        $obj = CurlFactory::newCURLRequest(HttpInterface::HTTP_METHOD_DELETE);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlDeleteRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithGet() {

        $obj = CurlFactory::newCURLRequest(HttpInterface::HTTP_METHOD_GET);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlGetRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithHead() {

        $obj = CurlFactory::newCURLRequest(HttpInterface::HTTP_METHOD_HEAD);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlHeadRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithInvalidArgumentException() {

        try {

            CurlFactory::newCURLRequest("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The HTTP method \"exception\" is invalid", $ex->getMessage());
        }
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithOptions() {

        $obj = CurlFactory::newCURLRequest(HttpInterface::HTTP_METHOD_OPTIONS);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlOptionsRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithPatch() {

        $obj = CurlFactory::newCURLRequest(HttpInterface::HTTP_METHOD_PATCH);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlPatchRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithPost() {

        $obj = CurlFactory::newCURLRequest(HttpInterface::HTTP_METHOD_POST);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlPostRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithPut() {

        $obj = CurlFactory::newCURLRequest(HttpInterface::HTTP_METHOD_PUT);
        $this->assertInstanceOf(CurlRequestInterface::class, $obj);
        $this->assertInstanceOf(CurlPutRequest::class, $obj);
    }

    /**
     * Tests the newCURLResponse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLResponse() {

        $obj = CurlFactory::newCURLResponse();
        $this->assertInstanceOf(CurlResponseInterface::class, $obj);
    }
}
