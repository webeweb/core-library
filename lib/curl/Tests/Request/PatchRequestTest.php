<?php

/*
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
use WBW\Library\Curl\Request\PatchRequest;
use WBW\Library\Curl\Request\RequestInterface;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * PATCH request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Request
 */
class PatchRequestTest extends AbstractTestCase {

    /**
     * Test call() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCall(): void {

        $obj = new PatchRequest($this->configuration, $this->resourcePath);
        $obj->addHeader("header", "header");
        $obj->addQueryData("queryData", "queryData");

        $res = $obj->call();
        $this->assertEquals("header: header", $res->getRequestHeader()[0]);
        $this->assertStringContainsString("queryData=queryData", $res->getRequestUrl());
        $this->assertEquals(RequestInterface::METHOD_PATCH, json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

    /**
     * Test __construct() method.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function test__construct(): void {

        $obj = new PatchRequest($this->configuration, $this->resourcePath);

        $this->assertSame($this->configuration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(RequestInterface::METHOD_PATCH, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals($this->resourcePath, $obj->getResourcePath());
    }
}
