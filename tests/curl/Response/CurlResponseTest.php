<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Response;

use WBW\Library\Curl\Response\CurlResponse;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * cURL response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\Tests\Response
 */
class CurlResponseTest extends AbstractTestCase {

    /**
     * Tests the setRequestBody() method.
     *
     * @return void
     */
    public function testSetRequestBody(): void {

        $obj = new CurlResponse();

        $obj->setRequestBody("requestBody");
        $this->assertEquals("requestBody", $obj->getRequestBody());
    }

    /**
     * Tests the setRequestHeader() method.
     *
     * @return void
     */
    public function testSetRequestHeader(): void {

        $obj = new CurlResponse();

        $obj->setRequestHeader(["requestHeader" => "requestHeader"]);
        $this->assertEquals(["requestHeader" => "requestHeader"], $obj->getRequestHeader());
    }

    /**
     * Tests the setRequestUrl() method.
     *
     * @return void
     */
    public function testSetRequestUrl(): void {

        $obj = new CurlResponse();

        $obj->setRequestUrl("requestURL");
        $this->assertEquals("requestURL", $obj->getRequestUrl());
    }

    /**
     * Tests the setResponseBody() method.
     *
     * @return void
     */
    public function testSetResponseBody(): void {

        $obj = new CurlResponse();

        $obj->setResponseBody("responseBody");
        $this->assertEquals("responseBody", $obj->getResponseBody());
    }

    /**
     * Tests the setResponseHeader() method.
     *
     * @return void
     */
    public function testSetResponseHeader(): void {

        $obj = new CurlResponse();

        $obj->setResponseHeader(["responseHeader" => "responseHeader"]);
        $this->assertEquals(["responseHeader" => "responseHeader"], $obj->getResponseHeader());
    }

    /**
     * Tests the setResponseInfo() method.
     *
     * @return void
     */
    public function testSetResponseInfo(): void {

        $obj = new CurlResponse();

        $obj->setResponseInfo(["responseInfo" => "responseInfo"]);
        $this->assertEquals(["responseInfo" => "responseInfo"], $obj->getResponseInfo());
    }

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CurlResponse();

        $this->assertNull($obj->getRequestBody());
        $this->assertEquals([], $obj->getRequestHeader());
        $this->assertNull($obj->getRequestUrl());
        $this->assertNull($obj->getResponseBody());
        $this->assertEquals([], $obj->getResponseHeader());
        $this->assertEquals([], $obj->getResponseInfo());
    }
}
