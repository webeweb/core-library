<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\CURL\Factory;

use Exception;
use WBW\Library\Core\Exception\Network\InvalidHTTPMethodException;
use WBW\Library\Core\Network\CURL\Factory\CURLFactory;
use WBW\Library\Core\Network\CURL\Request\CURLDeleteRequest;
use WBW\Library\Core\Network\CURL\Request\CURLGetRequest;
use WBW\Library\Core\Network\CURL\Request\CURLHeadRequest;
use WBW\Library\Core\Network\CURL\Request\CURLOptionsRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPatchRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPostRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPutRequest;
use WBW\Library\Core\Network\HTTP\HTTPInterface;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * cURL factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Factory
 * @final
 */
final class CURLFactoryTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstanceWithDelete() {

        $obj = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_DELETE);
        $this->assertInstanceOf(CURLDeleteRequest::class, $obj);
    }

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstanceWithGet() {

        $obj = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_GET);
        $this->assertInstanceOf(CURLGetRequest::class, $obj);
    }

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstanceWithHead() {

        $obj = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_HEAD);
        $this->assertInstanceOf(CURLHeadRequest::class, $obj);
    }

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstanceWithOptions() {

        $obj = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_OPTIONS);
        $this->assertInstanceOf(CURLOptionsRequest::class, $obj);
    }

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstanceWithPatch() {

        $obj = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_PATCH);
        $this->assertInstanceOf(CURLPatchRequest::class, $obj);
    }

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstanceWithPost() {

        $obj = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_POST);
        $this->assertInstanceOf(CURLPostRequest::class, $obj);
    }

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstanceWithPut() {

        $obj = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_PUT);
        $this->assertInstanceOf(CURLPutRequest::class, $obj);
    }

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstanceWithInvalidHTTPMethodException() {

        try {

            CURLFactory::getInstance("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidHTTPMethodException::class, $ex);
            $this->assertEquals("The HTTP method \"exception\" is invalid", $ex->getMessage());
        }
    }

}
