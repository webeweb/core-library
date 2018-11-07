<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Network;

use WBW\Library\Core\Exception\Network\CURLRequestCallException;
use WBW\Library\Core\Network\CURL\Response\CURLResponse;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * cURL request call exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Network
 */
class CURLRequestCallExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CURLRequestCallException("exception", 404, new CURLResponse());

        $this->assertEquals(404, $obj->getCode());
        $this->assertEquals("exception", $obj->getMessage());
        $this->assertNull($obj->getResponse()->getRequestBody());
        $this->assertEquals([], $obj->getResponse()->getRequestHeader());
        $this->assertNull($obj->getResponse()->getRequestURL());
        $this->assertNull($obj->getResponse()->getResponseBody());
        $this->assertEquals([], $obj->getResponse()->getResponseHeader());
        $this->assertEquals([], $obj->getResponse()->getResponseInfo());
    }

}
