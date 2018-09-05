<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\CURL\Request;

use Exception;
use WBW\Library\Core\Exception\Argument\StringArgumentException;
use WBW\Library\Core\Exception\Network\CURLRequestCallException;
use WBW\Library\Core\Network\CURL\Request\CURLGetRequest;
use WBW\Library\Core\Network\HTTP\HTTPHelper;

/**
 * cURL GET request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Request
 * @final
 */
final class CURLGetRequestTest extends AbstractCURLRequestTest {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $this->assertSame($this->configuration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals("testCall.php", $obj->getResourcePath());
    }

    /**
     * Tests addHeader() method.
     *
     * @return void
     */
    public function testAddHeader() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        // ===
        $obj->addHeader("name", "value");

        $res = ["name" => "value"];
        $this->assertEquals($res, $obj->getHeaders());

        // ===
        try {

            $obj->addHeader(1, "value");
        } catch (Exception $ex) {

            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals("The argument \"1\" is not a string", $ex->getMessage());
        }
    }

    /**
     * Tests addQueryData() method.
     *
     * @return void
     */
    public function testAddQueryData() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        // ===
        $obj->addQueryData("name", "value");

        $res = ["name" => "value"];
        $this->assertEquals($res, $obj->getQueryData());

        // ===
        try {

            $obj->addQueryData(1, "value");
        } catch (Exception $ex) {

            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals("The argument \"1\" is not a string", $ex->getMessage());
        }
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithAllowEncoding() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->getConfiguration()->setAllowEncoding(true);

        $res = $obj->call();

        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithConnectTimeout() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->getConfiguration()->setConnectTimeout(30);

        $res = $obj->call();

        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithDebug() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->getConfiguration()->setDebug(true);

        $res = $obj->call();

        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithHeader() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addHeader("h", "v");

        // ===
        $resH = $obj->call();

        $this->assertContains("h: v", $resH->getRequestHeader());
        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, json_decode($resH->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $resH->getResponseInfo()["http_code"]);

        $obj->removeHeader("h");

        /* === JSON ======================================================== */
        $obj->addHeader("Content-Type", "application/json");
        $obj->addPostData("name", "value");

        $resJSON = $obj->call();

        $this->assertContains("Content-Type: application/json", $resJSON->getRequestHeader());
        $this->assertContains('{"name":"value"}', $resJSON->getRequestBody());
        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, json_decode($resH->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $resH->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithRequestTimeout() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->getConfiguration()->setRequestTimeout(30);

        $res = $obj->call();

        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithRequestTimeoutException() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->getConfiguration()->setRequestTimeout(10);
        $obj->addQueryData("sleep", 60);

        // ===
        try {

            $obj->call();
        } catch (Exception $ex) {

            $this->assertInstanceOf(CURLRequestCallException::class, $ex);
            $this->assertContains("Call to ", $ex->getMessage());
            $this->assertEquals(0, $ex->getResponse()->getResponseInfo()["http_code"]);
        }
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithSSLVerification() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->getConfiguration()->setSslVerification(false);

        $res = $obj->call();

        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithVerbose() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->getConfiguration()->setVerbose(true);

        $res = $obj->call();

        $this->assertEquals(CURLGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCallWithHTTPCodes() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        foreach (HTTPHelper::getHTTPStatus() as $code) {
            try {

                $obj->addQueryData("code", $code);

                $rslt = $obj->call();

                $this->assertEquals($code, $rslt->getResponseInfo()["http_code"]);
                $this->assertGreaterThanOrEqual(200, $rslt->getResponseInfo()["http_code"]);
                $this->assertLessThanOrEqual(299, $rslt->getResponseInfo()["http_code"]);
            } catch (Exception $ex) {

                $this->assertInstanceOf(CURLRequestCallException::class, $ex);
                $this->assertEquals($code, $ex->getCode());
                $this->assertEquals($code, $ex->getResponse()->getResponseInfo()["http_code"]);
            }
        }

        /* ================================================================= */
    }

    /**
     * Tests the clearHeader() method.
     *
     * @return void
     */
    public function testClearHeaders() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addHeader("name", "value");
        $this->assertCount(1, $obj->getHeaders());

        $obj->clearHeaders();
        $this->assertCount(0, $obj->getHeaders());
    }

    /**
     * Tests the clearQueryData() method.
     *
     * @return void
     */
    public function testClearQueryData() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addQueryData("name", "value");
        $this->assertCount(1, $obj->getQueryData());

        $obj->clearQueryData();
        $this->assertCount(0, $obj->getQueryData());
    }

    /**
     * Tests removeHeader() method.
     *
     * @return void
     */
    public function testRemoveHeader() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addHeader("name", "value");
        $this->assertCount(1, $obj->getHeaders());

        $obj->removeHeader("Name");
        $this->assertCount(1, $obj->getHeaders());

        $obj->removeHeader("name");
        $this->assertCount(0, $obj->getHeaders());
    }

    /**
     * Tests removeQueryData() method.
     *
     * @return void
     */
    public function testRemoveQueryData() {

        $obj = new CURLGetRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addQueryData("name", "value");
        $this->assertCount(1, $obj->getQueryData());

        $obj->removeQueryData("Name");
        $this->assertCount(1, $obj->getQueryData());

        $obj->removeQueryData("name");
        $this->assertCount(0, $obj->getQueryData());
    }

}
