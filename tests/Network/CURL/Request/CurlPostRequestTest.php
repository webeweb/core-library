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
use WBW\Library\Core\Network\CURL\Request\CurlPostRequest;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL "POST" request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Request
 */
class CurlPostRequestTest extends AbstractTestCase {

    /**
     * Tests addPostData() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddPostData() {

        $obj = new CurlPostRequest($this->curlConfiguration, $this->curlResourcePath);

        $obj->addPostData("name", "value");
        $res = ["name" => "value"];
        $this->assertEquals($res, $obj->getPostData());
    }

    /**
     * Tests addPostData() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddPostDataWithStringArgumentException() {

        $obj = new CurlPostRequest($this->curlConfiguration, $this->curlResourcePath);

        try {

            $obj->addPostData(1, "value");
        } catch (Exception $ex) {

            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals('The argument "1" is not a string', $ex->getMessage());
        }
    }

    /**
     * Tests call() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCall() {

        $obj = new CurlPostRequest($this->curlConfiguration, $this->curlResourcePath);
        $obj->addHeader("header", "header");
        $obj->addQueryData("queryData", "queryData");

        $res = $obj->call();
        $this->assertContains("header: header", $res->getRequestHeader());
        $this->assertContains("queryData=queryData", $res->getRequestUrl());
        $this->assertEquals(CurlPostRequest::HTTP_METHOD_POST, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests the clearPostData() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testClearPostData() {

        $obj = new CurlPostRequest($this->curlConfiguration, $this->curlResourcePath);

        $obj->addPostData("name", "value");
        $this->assertCount(1, $obj->getPostData());

        $obj->clearPostData();
        $this->assertCount(0, $obj->getPostData());
    }

    /**
     * Tests removePostData() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRemovePostData() {

        $obj = new CurlPostRequest($this->curlConfiguration, $this->curlResourcePath);

        $obj->addPostData("name", "value");
        $this->assertCount(1, $obj->getPostData());

        $obj->removePostData("Name");
        $this->assertCount(1, $obj->getPostData());

        $obj->removePostData("name");
        $this->assertCount(0, $obj->getPostData());
    }

    /**
     * Tests __construct() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function test__construct() {

        $obj = new CurlPostRequest($this->curlConfiguration, $this->curlResourcePath);

        $this->assertSame($this->curlConfiguration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(CurlPostRequest::HTTP_METHOD_POST, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals($this->curlResourcePath, $obj->getResourcePath());
    }
}
