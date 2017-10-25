<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\HTTP;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\HTTP\HTTPMethodInterface;

/**
 * HTTP method interface test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\HTTP
 * @final
 */
final class HTTPMethodInterfaceTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function testConstructor() {

        $this->assertEquals("DELETE", HTTPMethodInterface::METHOD_DELETE, "The constant METHOD_DELETE does not return the expected value");
        $this->assertEquals("GET", HTTPMethodInterface::METHOD_GET, "The constant METHOD_GET does not return the expected value");
        $this->assertEquals("HEAD", HTTPMethodInterface::METHOD_HEAD, "The constant METHOD_HEAD does not return the expected value");
        $this->assertEquals("OPTIONS", HTTPMethodInterface::METHOD_OPTIONS, "The constant METHOD_OPTIONS does not return the expected value");
        $this->assertEquals("PATCH", HTTPMethodInterface::METHOD_PATCH, "The constant METHOD_PATCH does not return the expected value");
        $this->assertEquals("POST", HTTPMethodInterface::METHOD_POST, "The constant METHOD_POST does not return the expected value");
        $this->assertEquals("PUT", HTTPMethodInterface::METHOD_PUT, "The constant METHOD_PUT does not return the expected value");
    }

}
