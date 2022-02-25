<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Response;

use WBW\Library\Curl\Response\Response;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * Response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Response
 */
class ResponseTest extends AbstractTestCase {

    /**
     * Tests setRequestBody()
     *
     * @return void
     */
    public function testSetRequestBody(): void {

        $obj = new Response();

        $obj->setRequestBody("requestBody");
        $this->assertEquals("requestBody", $obj->getRequestBody());
    }

    /**
     * Tests setRequestHeader()
     *
     * @return void
     */
    public function testSetRequestHeader(): void {

        $obj = new Response();

        $obj->setRequestHeader(["requestHeader" => "requestHeader"]);
        $this->assertEquals(["requestHeader" => "requestHeader"], $obj->getRequestHeader());
    }

    /**
     * Tests setRequestUrl()
     *
     * @return void
     */
    public function testSetRequestUrl(): void {

        $obj = new Response();

        $obj->setRequestUrl("requestURL");
        $this->assertEquals("requestURL", $obj->getRequestUrl());
    }

    /**
     * Tests setResponseBody()
     *
     * @return void
     */
    public function testSetResponseBody(): void {

        $obj = new Response();

        $obj->setResponseBody("responseBody");
        $this->assertEquals("responseBody", $obj->getResponseBody());
    }

    /**
     * Tests setResponseHeader()
     *
     * @return void
     */
    public function testSetResponseHeader(): void {

        $obj = new Response();

        $obj->setResponseHeader(["responseHeader" => "responseHeader"]);
        $this->assertEquals(["responseHeader" => "responseHeader"], $obj->getResponseHeader());
    }

    /**
     * Tests setResponseInfo()
     *
     * @return void
     */
    public function testSetResponseInfo(): void {

        $obj = new Response();

        $obj->setResponseInfo(["responseInfo" => "responseInfo"]);
        $this->assertEquals(["responseInfo" => "responseInfo"], $obj->getResponseInfo());
    }

    /**
     * Tests __constructor()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Response();

        $this->assertNull($obj->getRequestBody());
        $this->assertEquals([], $obj->getRequestHeader());
        $this->assertNull($obj->getRequestUrl());
        $this->assertNull($obj->getResponseBody());
        $this->assertEquals([], $obj->getResponseHeader());
        $this->assertEquals([], $obj->getResponseInfo());
    }
}
