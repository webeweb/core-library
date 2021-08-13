<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\API;

use WBW\Library\Curl\API\CurlRequestInterface;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * cURL request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\Tests\API
 */
class CurlRequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("DELETE", CurlRequestInterface::CURL_REQUEST_DELETE);
        $this->assertEquals("GET", CurlRequestInterface::CURL_REQUEST_GET);
        $this->assertEquals("HEAD", CurlRequestInterface::CURL_REQUEST_HEAD);
        $this->assertEquals("OPTIONS", CurlRequestInterface::CURL_REQUEST_OPTIONS);
        $this->assertEquals("PATCH", CurlRequestInterface::CURL_REQUEST_PATCH);
        $this->assertEquals("POST", CurlRequestInterface::CURL_REQUEST_POST);
        $this->assertEquals("PUT", CurlRequestInterface::CURL_REQUEST_PUT);
    }
}