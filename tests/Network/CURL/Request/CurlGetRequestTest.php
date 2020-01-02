<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\CURL\Request;

use Exception;
use WBW\Library\Core\Argument\Exception\StringArgumentException;
use WBW\Library\Core\Network\CURL\Exception\CurlRequestCallException;
use WBW\Library\Core\Network\CURL\Request\CurlGetRequest;
use WBW\Library\Core\Network\HTTP\HttpHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL "GET" request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Request
 */
class CurlGetRequestTest extends AbstractTestCase {

    /**
     * Tests addHeader() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddHeaderWithStringArgumentException() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);

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
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddQueryDataWithStringArgumentException() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);

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
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithAllowEncoding() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->getConfiguration()->setAllowEncoding(true);

        $res = $obj->call();
        $this->assertEquals(CurlGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithConnectTimeout() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->getConfiguration()->setConnectTimeout(30);

        $res = $obj->call();
        $this->assertEquals(CurlGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithDebug() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->getConfiguration()->setDebug(true);

        $res = $obj->call();
        $this->assertEquals(CurlGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithHTTPCodes() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);

        foreach (HttpHelper::getHttpStatus() as $code) {

            try {

                $obj->addQueryData("code", $code);

                $res = $obj->call();
                $this->assertEquals($code, $res->getResponseInfo()["http_code"]);
                $this->assertGreaterThanOrEqual(200, $res->getResponseInfo()["http_code"]);
                $this->assertLessThanOrEqual(299, $res->getResponseInfo()["http_code"]);
            } catch (Exception $ex) {

                $this->assertInstanceOf(CurlRequestCallException::class, $ex);
                $this->assertEquals($code, $ex->getCode());
                $this->assertEquals($code, $ex->getResponse()->getResponseInfo()["http_code"]);
            }
        }
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithHeader() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->addHeader("h", "v");

        $resH = $obj->call();
        $this->assertContains("h: v", $resH->getRequestHeader());
        $this->assertEquals(CurlGetRequest::HTTP_METHOD_GET, json_decode($resH->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $resH->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithHeaderApplicationJSON() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->addHeader("Content-Type", "application/json");
        $obj->addPostData("name", "value");

        $res = $obj->call();
        $this->assertContains("Content-Type: application/json", $res->getRequestHeader());
        $this->assertContains('{"name":"value"}', $res->getRequestBody());
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithRequestTimeout() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->getConfiguration()->setRequestTimeout(30);

        $res = $obj->call();
        $this->assertEquals(CurlGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithRequestTimeoutException() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->getConfiguration()->setRequestTimeout(10);
        $obj->addQueryData("sleep", 60);

        try {

            $obj->call();
        } catch (Exception $ex) {

            $this->assertInstanceOf(CurlRequestCallException::class, $ex);
            $this->assertContains("Call to ", $ex->getMessage());
            $this->assertEquals(0, $ex->getResponse()->getResponseInfo()["http_code"]);
        }
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithSSLVerification() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->getConfiguration()->setSslVerification(false);

        $res = $obj->call();
        $this->assertEquals(CurlGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCallWithVerbose() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->getConfiguration()->setVerbose(true);

        $res = $obj->call();
        $this->assertEquals(CurlGetRequest::HTTP_METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests the clearHeader() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testClearHeaders() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);

        $obj->addHeader("name", "value");
        $this->assertCount(1, $obj->getHeaders());

        $obj->clearHeaders();
        $this->assertCount(0, $obj->getHeaders());
    }

    /**
     * Tests the clearQueryData() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testClearQueryData() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);

        $obj->addQueryData("name", "value");
        $this->assertCount(1, $obj->getQueryData());

        $obj->clearQueryData();
        $this->assertCount(0, $obj->getQueryData());
    }

    /**
     * Tests __construct() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testConstruct() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);

        $this->assertSame($this->curlConfiguration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(CurlGetRequest::HTTP_METHOD_GET, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals($this->curlResourcePath, $obj->getResourcePath());
    }

    /**
     * Tests removeHeader() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRemoveHeader() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);

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
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRemoveQueryData() {

        $obj = new CurlGetRequest($this->curlConfiguration, $this->curlResourcePath);

        $obj->addQueryData("name", "value");
        $this->assertCount(1, $obj->getQueryData());

        $obj->removeQueryData("Name");
        $this->assertCount(1, $obj->getQueryData());

        $obj->removeQueryData("name");
        $this->assertCount(0, $obj->getQueryData());
    }
}
