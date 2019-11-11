<?php

/*
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
use WBW\Library\Core\Network\CURL\Request\CurlPatchRequest;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL "PATCH" request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Request
 */
class CurlPatchRequestTest extends AbstractTestCase {

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCall() {

        $obj = new CurlPatchRequest($this->curlConfiguration, $this->curlResourcePath);

        $obj->addHeader("header", "header");
        $obj->addQueryData("queryData", "queryData");

        $res = $obj->call();
        $this->assertContains("header: header", $res->getRequestHeader());
        $this->assertContains("queryData=queryData", $res->getRequestURL());
        $this->assertEquals(CurlPatchRequest::HTTP_METHOD_PATCH, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests __construct() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testConstruct() {

        $obj = new CurlPatchRequest($this->curlConfiguration, $this->curlResourcePath);

        $this->assertSame($this->curlConfiguration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(CurlPatchRequest::HTTP_METHOD_PATCH, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals($this->curlResourcePath, $obj->getResourcePath());
    }
}
