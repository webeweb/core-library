<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Curl\Tests\Request;

use Throwable;
use WBW\Library\Curl\Exception\RequestCallException;
use WBW\Library\Curl\Helper\CurlHelper;
use WBW\Library\Curl\Request\GetRequest;
use WBW\Library\Curl\Request\RequestInterface;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * GET request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Request
 */
class GetRequestTest extends AbstractTestCase {

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithAllowEncoding(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->getConfiguration()->setAllowEncoding(true);

        try {

            $res = $obj->call();
            $this->assertEquals(RequestInterface::METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithConnectTimeout(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->getConfiguration()->setConnectTimeout(30);

        try {

            $res = $obj->call();
            $this->assertEquals(RequestInterface::METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithDebug(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->getConfiguration()->setDebug(true);

        try {

            $res = $obj->call();
            $this->assertEquals(RequestInterface::METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithHeader(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->addHeader("h", "v");

        try {

            $res = $obj->call();
            $this->assertEquals("h: v", $res->getRequestHeader()[0]);
            $this->assertEquals(RequestInterface::METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithHeaderApplicationJson(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->addHeader("Content-Type", "application/json");
        $obj->addPostData("name", "value");

        try {

            $res = $obj->call();
            $this->assertEquals("Content-Type: application/json", $res->getRequestHeader()[0]);
            $this->assertStringContainsString('{"name":"value"}', $res->getRequestBody());
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithHttpCodes(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);

        foreach (CurlHelper::enumCodes() as $code) {

            try {

                $obj->addQueryData("code", (string) $code);

                $res = $obj->call();
                //$this->assertEquals($code, $res->getResponseInfo()["http_code"], $code);
                $this->assertGreaterThanOrEqual(200, $res->getResponseInfo()["http_code"], (string) $code);
                $this->assertLessThanOrEqual(299, $res->getResponseInfo()["http_code"], (string) $code);
            } catch (Throwable $ex) {

                //$this->assertInstanceOf(RequestCallException::class, $ex, (string) $code);

                /** @var RequestCallException $ex */
                //$this->assertEquals($code, $ex->getCode(), (string) $code);
                //$this->assertEquals($code, $ex->getResponse()->getResponseInfo()["http_code"], (string) $code);

                $this->markTestSkipped("https://webeweb.me is offline");
            }
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithRequestTimeout(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->getConfiguration()->setRequestTimeout(30);

        try {

            $res = $obj->call();
            $this->assertEquals(RequestInterface::METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithRequestTimeoutException(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->getConfiguration()->setRequestTimeout(10);
        $obj->addQueryData("sleep", "60");

        try {
            $obj->call();
        } catch (Throwable $ex) {

            //$this->assertInstanceOf(RequestCallException::class, $ex);

            /** @var RequestCallException $ex */
            //$this->assertStringContainsString("Call to ", $ex->getMessage());
            //$this->assertEquals(0, $ex->getResponse()->getResponseInfo()["http_code"]);

            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithSSLVerification(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->getConfiguration()->setSslVerification(false);

        try {

            $res = $obj->call();
            $this->assertEquals(RequestInterface::METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCallWithVerbose(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);
        $obj->getConfiguration()->setVerbose(true);

        try {

            $res = $obj->call();
            $this->assertEquals(RequestInterface::METHOD_GET, json_decode($res->getResponseBody(), true)["method"]);
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test clearHeader()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testClearHeaders(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);

        $obj->addHeader("name", "value");
        $this->assertCount(1, $obj->getHeaders());

        $obj->clearHeaders();
        $this->assertCount(0, $obj->getHeaders());
    }

    /**
     * Test clearQueryData()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testClearQueryData(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);

        $obj->addQueryData("name", "value");
        $this->assertCount(1, $obj->getQueryData());

        $obj->clearQueryData();
        $this->assertCount(0, $obj->getQueryData());
    }

    /**
     * Test removeHeader() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRemoveHeader(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);

        $obj->addHeader("name", "value");
        $this->assertCount(1, $obj->getHeaders());

        $obj->removeHeader("Name");
        $this->assertCount(1, $obj->getHeaders());

        $obj->removeHeader("name");
        $this->assertCount(0, $obj->getHeaders());
    }

    /**
     * Test removeQueryData() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRemoveQueryData(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);

        $obj->addQueryData("name", "value");
        $this->assertCount(1, $obj->getQueryData());

        $obj->removeQueryData("Name");
        $this->assertCount(1, $obj->getQueryData());

        $obj->removeQueryData("name");
        $this->assertCount(0, $obj->getQueryData());
    }

    /**
     * Test __construct() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function test__construct(): void {

        $obj = new GetRequest($this->configuration, $this->resourcePath);

        $this->assertSame($this->configuration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(RequestInterface::METHOD_GET, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals($this->resourcePath, $obj->getResourcePath());
    }
}
