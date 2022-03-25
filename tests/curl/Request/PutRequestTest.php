<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Request;

use Exception;
use WBW\Library\Curl\Api\RequestInterface;
use WBW\Library\Curl\Request\PutRequest;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * PUT request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Request
 */
class PutRequestTest extends AbstractTestCase {

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCall(): void {

        $obj = new PutRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->addHeader("header", "header");
        $obj->addQueryData("queryData", "queryData");

        $res = $obj->call();
        $this->assertEquals("header: header", $res->getRequestHeader()[0]);
        $this->assertStringContainsString("queryData=queryData", $res->getRequestUrl());
        $this->assertEquals(RequestInterface::METHOD_PUT, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests __construct() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function test__construct(): void {

        $obj = new PutRequest($this->curlConfiguration, $this->curlResourcePath);

        $this->assertSame($this->curlConfiguration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(RequestInterface::METHOD_PUT, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals($this->curlResourcePath, $obj->getResourcePath());
    }
}
