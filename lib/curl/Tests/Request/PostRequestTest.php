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
use WBW\Library\Curl\Request\PostRequest;
use WBW\Library\Curl\Request\RequestInterface;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * POST request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Request
 */
class PostRequestTest extends AbstractTestCase {

    /**
     * Test addPostData() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddPostData(): void {

        $exp = ["name" => "value"];

        $obj = new PostRequest($this->configuration, $this->resourcePath);
        $obj->addPostData("name", "value");

        $this->assertEquals($exp, $obj->getPostData());
    }

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCall(): void {

        $obj = new PostRequest($this->configuration, $this->resourcePath);
        $obj->addHeader("header", "header");
        $obj->addQueryData("queryData", "queryData");

        try {

            $res = $obj->call();
            $this->assertEquals("header: header", $res->getRequestHeader()[0]);
            $this->assertStringContainsString("queryData=queryData", $res->getRequestUrl());
            $this->assertEquals(RequestInterface::METHOD_POST, json_decode($res->getResponseBody(), true)["method"]);
            $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
        } catch (Throwable $ex) {
            $this->markTestSkipped("https://webeweb.me is offline");
        }
    }

    /**
     * Test clearPostData()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testClearPostData(): void {

        $obj = new PostRequest($this->configuration, $this->resourcePath);

        $obj->addPostData("name", "value");
        $this->assertCount(1, $obj->getPostData());

        $obj->clearPostData();
        $this->assertCount(0, $obj->getPostData());
    }

    /**
     * Test removePostData() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRemovePostData(): void {

        $obj = new PostRequest($this->configuration, $this->resourcePath);

        $obj->addPostData("name", "value");
        $this->assertCount(1, $obj->getPostData());

        $obj->removePostData("Name");
        $this->assertCount(1, $obj->getPostData());

        $obj->removePostData("name");
        $this->assertCount(0, $obj->getPostData());
    }

    /**
     * Test __construct() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function test__construct(): void {

        $obj = new PostRequest($this->configuration, $this->resourcePath);

        $this->assertSame($this->configuration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(RequestInterface::METHOD_POST, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals($this->resourcePath, $obj->getResourcePath());
    }
}
