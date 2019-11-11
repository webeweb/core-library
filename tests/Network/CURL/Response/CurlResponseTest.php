<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\CURL\Response;

use WBW\Library\Core\Network\CURL\Response\CurlResponse;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Response
 */
class CurlResponseTest extends AbstractTestCase {

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CurlResponse();

        $this->assertNull($obj->getRequestBody());
        $this->assertEquals([], $obj->getRequestHeader());
        $this->assertNull($obj->getRequestURL());
        $this->assertNull($obj->getResponseBody());
        $this->assertEquals([], $obj->getResponseHeader());
        $this->assertEquals([], $obj->getResponseInfo());
    }

    /**
     * Tests the setRequestBody() method.
     *
     * @return void
     */
    public function testSetRequestBody() {

        $obj = new CurlResponse();

        $obj->setRequestBody("requestBody");
        $this->assertEquals("requestBody", $obj->getRequestBody());
    }

    /**
     * Tests the setRequestHeader() method.
     *
     * @return void
     */
    public function testSetRequestHeader() {

        $obj = new CurlResponse();

        $obj->setRequestHeader(["requestHeader" => "requestHeader"]);
        $this->assertEquals(["requestHeader" => "requestHeader"], $obj->getRequestHeader());
    }

    /**
     * Tests the setRequestURL() method.
     *
     * @return void
     */
    public function testSetRequestURL() {

        $obj = new CurlResponse();

        $obj->setRequestURL("requestURL");
        $this->assertEquals("requestURL", $obj->getRequestURL());
    }

    /**
     * Tests the setResponseBody() method.
     *
     * @return void
     */
    public function testSetResponseBody() {

        $obj = new CurlResponse();

        $obj->setResponseBody("responseBody");
        $this->assertEquals("responseBody", $obj->getResponseBody());
    }

    /**
     * Tests the setResponseHeader() method.
     *
     * @return void
     */
    public function testSetResponseHeader() {

        $obj = new CurlResponse();

        $obj->setResponseHeader(["responseHeader" => "responseHeader"]);
        $this->assertEquals(["responseHeader" => "responseHeader"], $obj->getResponseHeader());
    }

    /**
     * Tests the setResponseInfo() method.
     *
     * @return void
     */
    public function testSetResponseInfo() {

        $obj = new CurlResponse();

        $obj->setResponseInfo(["responseInfo" => "responseInfo"]);
        $this->assertEquals(["responseInfo" => "responseInfo"], $obj->getResponseInfo());
    }
}
