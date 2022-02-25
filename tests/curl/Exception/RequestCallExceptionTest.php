<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Exception;

use WBW\Library\Curl\Exception\RequestCallException;
use WBW\Library\Curl\Response\Response;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * Request call exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Exception
 */
class RequestCallExceptionTest extends AbstractTestCase {

    /**
     * Tests __constructor()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RequestCallException("exception", 404, new Response());

        $this->assertEquals(404, $obj->getCode());
        $this->assertEquals("exception", $obj->getMessage());
        $this->assertNull($obj->getResponse()->getRequestBody());
        $this->assertEquals([], $obj->getResponse()->getRequestHeader());
        $this->assertNull($obj->getResponse()->getRequestUrl());
        $this->assertNull($obj->getResponse()->getResponseBody());
        $this->assertEquals([], $obj->getResponse()->getResponseHeader());
        $this->assertEquals([], $obj->getResponse()->getResponseInfo());
    }
}
