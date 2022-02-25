<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Api;

use WBW\Library\Curl\Api\RequestInterface;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * Request interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Api
 */
class RequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("DELETE", RequestInterface::METHOD_DELETE);
        $this->assertEquals("GET", RequestInterface::METHOD_GET);
        $this->assertEquals("HEAD", RequestInterface::METHOD_HEAD);
        $this->assertEquals("OPTIONS", RequestInterface::METHOD_OPTIONS);
        $this->assertEquals("PATCH", RequestInterface::METHOD_PATCH);
        $this->assertEquals("POST", RequestInterface::METHOD_POST);
        $this->assertEquals("PUT", RequestInterface::METHOD_PUT);
    }
}
