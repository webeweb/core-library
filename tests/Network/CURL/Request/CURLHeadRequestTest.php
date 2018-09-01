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

use WBW\Library\Core\Network\CURL\Request\CURLHeadRequest;

/**
 * cURL HEAD request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Request
 * @final
 */
final class CURLHeadRequestTest extends AbstractCURLRequestTest {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CURLHeadRequest($this->configuration, self::RESOURCE_PATH);

        $this->assertSame($this->configuration, $obj->getConfiguration());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertEquals(CURLHeadRequest::HTTP_METHOD_HEAD, $obj->getMethod());
        $this->assertEquals([], $obj->getPostData());
        $this->assertEquals([], $obj->getQueryData());
        $this->assertEquals("testCall.php", $obj->getResourcePath());
    }

    /**
     * Tests call() method.
     *
     * @return void
     */
    public function testCall() {

        $obj = new CURLHeadRequest($this->configuration, self::RESOURCE_PATH);

        $obj->addHeader("header", "header");
        $obj->addQueryData("queryData", "queryData");

        $res = $obj->call();

        $this->assertContains("header: header", $res->getRequestHeader());
        $this->assertContains("queryData=queryData", $res->getRequestURL());
        $this->assertNull(json_decode($res->getResponseBody(), true)["method"]);
        $this->assertEquals(200, $res->getResponseInfo()["http_code"]);
    }

}
