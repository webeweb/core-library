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
use WBW\Library\Core\Network\CURL\Request\CURLPostRequest;

/**
 * cURL POST request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Request
 * @final
 */
final class CURLPostRequestTest extends AbstractCURLRequestTest {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CURLPostRequest($this->configuration, self::RESOURCE_PATH);

        $this->assertSame($this->configuration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(CURLPostRequest::HTTP_METHOD_POST, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals("testCall.php", $obj->getResourcePath());
    }

    /**
     * Tests addPostData() method.
     *
     * @return void
     */
    public function testAddPostData() {

        $obj = new CURLPostRequest($this->configuration, self::RESOURCE_PATH);

        // ===
        try {

            $obj->addPostData(1, "value");
        } catch (Exception $ex) {

            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals("The argument \"1\" is not a string", $ex->getMessage());
        }

        // ===
        $obj->addPostData("name", "value");

        $res = ["name" => "value"];
        $this->assertEquals($res, $obj->getPostData());
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCall() {

        $obj = new CURLPostRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addHeader("header", "header");
        $obj->addQueryData("queryData", "queryData");

        $res = $obj->call();

        $this->assertContains("header: header", $res->getRequestHeader());
        $this->assertContains("queryData=queryData", $res->getRequestURL());
        $this->assertEquals(CURLPostRequest::HTTP_METHOD_POST, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Tests the clearPostData() method.
     *
     * @return void
     */
    public function testClearPostData() {

        $obj = new CURLPostRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addPostData("name", "value");
        $this->assertCount(1, $obj->getPostData());

        $obj->clearPostData();
        $this->assertCount(0, $obj->getPostData());
    }

    /**
     * Tests removePostData() method.
     *
     * @return void
     */
    public function testRemovePostData() {

        $obj = new CURLPostRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addPostData("name", "value");
        $this->assertCount(1, $obj->getPostData());

        $obj->removePostData("Name");
        $this->assertCount(1, $obj->getPostData());

        $obj->removePostData("name");
        $this->assertCount(0, $obj->getPostData());
    }

}
