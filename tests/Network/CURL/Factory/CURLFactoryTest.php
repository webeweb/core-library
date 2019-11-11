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
use WBW\Library\Core\Network\CURL\API\CURLRequestInterface;
use WBW\Library\Core\Network\CURL\API\CURLResponseInterface;
use WBW\Library\Core\Network\CURL\Factory\CURLFactory;
use WBW\Library\Core\Network\CURL\Request\CURLDeleteRequest;
use WBW\Library\Core\Network\CURL\Request\CURLGetRequest;
use WBW\Library\Core\Network\CURL\Request\CURLHeadRequest;
use WBW\Library\Core\Network\CURL\Request\CURLOptionsRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPatchRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPostRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPutRequest;
use WBW\Library\Core\Network\HTTP\HTTPInterface;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Factory
 */
class CURLFactoryTest extends AbstractTestCase {

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithDelete() {

        $obj = CURLFactory::newCURLRequest(HTTPInterface::HTTP_METHOD_DELETE);
        $this->assertInstanceOf(CURLRequestInterface::class, $obj);
        $this->assertInstanceOf(CURLDeleteRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithGet() {

        $obj = CURLFactory::newCURLRequest(HTTPInterface::HTTP_METHOD_GET);
        $this->assertInstanceOf(CURLRequestInterface::class, $obj);
        $this->assertInstanceOf(CURLGetRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithHead() {

        $obj = CURLFactory::newCURLRequest(HTTPInterface::HTTP_METHOD_HEAD);
        $this->assertInstanceOf(CURLRequestInterface::class, $obj);
        $this->assertInstanceOf(CURLHeadRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithInvalidArgumentException() {

        try {

            CURLFactory::newCURLRequest("exception");
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

        $obj = CURLFactory::newCURLRequest(HTTPInterface::HTTP_METHOD_OPTIONS);
        $this->assertInstanceOf(CURLRequestInterface::class, $obj);
        $this->assertInstanceOf(CURLOptionsRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithPatch() {

        $obj = CURLFactory::newCURLRequest(HTTPInterface::HTTP_METHOD_PATCH);
        $this->assertInstanceOf(CURLRequestInterface::class, $obj);
        $this->assertInstanceOf(CURLPatchRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithPost() {

        $obj = CURLFactory::newCURLRequest(HTTPInterface::HTTP_METHOD_POST);
        $this->assertInstanceOf(CURLRequestInterface::class, $obj);
        $this->assertInstanceOf(CURLPostRequest::class, $obj);
    }

    /**
     * Tests the newCURLRequest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLRequestWithPut() {

        $obj = CURLFactory::newCURLRequest(HTTPInterface::HTTP_METHOD_PUT);
        $this->assertInstanceOf(CURLRequestInterface::class, $obj);
        $this->assertInstanceOf(CURLPutRequest::class, $obj);
    }

    /**
     * Tests the newCURLResponse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNewCURLResponse() {

        $obj = CURLFactory::newCURLResponse();
        $this->assertInstanceOf(CURLResponseInterface::class, $obj);
    }
}
