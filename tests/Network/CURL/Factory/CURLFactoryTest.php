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
use WBW\Library\Core\Exception\IO\InvalidHTTPMethodException;
use WBW\Library\Core\Network\CURL\Factory\CURLFactory;
use WBW\Library\Core\Network\CURL\Request\CURLDeleteRequest;
use WBW\Library\Core\Network\CURL\Request\CURLGetRequest;
use WBW\Library\Core\Network\CURL\Request\CURLHeadRequest;
use WBW\Library\Core\Network\CURL\Request\CURLOptionsRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPatchRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPostRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPutRequest;
use WBW\Library\Core\Network\HTTP\HTTPInterface;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * cURL factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Factory
 * @final
 */
final class CURLFactoryTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the getInstance() method.
     *
     * @return void
     */
    public function testGetInstance() {

        // ===
        $res1 = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_DELETE);
        $this->assertInstanceOf(CURLDeleteRequest::class, $res1);

        // ===
        $res2 = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_GET);
        $this->assertInstanceOf(CURLGetRequest::class, $res2);

        // ===
        $res3 = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_HEAD);
        $this->assertInstanceOf(CURLHeadRequest::class, $res3);

        // ===
        $res4 = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_OPTIONS);
        $this->assertInstanceOf(CURLOptionsRequest::class, $res4);

        // ===
        $res5 = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_PATCH);
        $this->assertInstanceOf(CURLPatchRequest::class, $res5);

        // ===
        $res6 = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_POST);
        $this->assertInstanceOf(CURLPostRequest::class, $res6);

        // ===
        $res7 = CURLFactory::getInstance(HTTPInterface::HTTP_METHOD_PUT);
        $this->assertInstanceOf(CURLPutRequest::class, $res7);

        // ===
        try {

            CURLFactory::getInstance("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidHTTPMethodException::class, $ex);
            $this->assertEquals("The HTTP method \"exception\" is invalid", $ex->getMessage());
        }
    }

}
