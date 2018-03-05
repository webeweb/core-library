<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
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
 * @author webeweb <https://github.com/webeweb/>
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

        $this->assertEquals("DELETE", HTTPMethodInterface::METHOD_DELETE);
        $this->assertEquals("GET", HTTPMethodInterface::METHOD_GET);
        $this->assertEquals("HEAD", HTTPMethodInterface::METHOD_HEAD);
        $this->assertEquals("OPTIONS", HTTPMethodInterface::METHOD_OPTIONS);
        $this->assertEquals("PATCH", HTTPMethodInterface::METHOD_PATCH);
        $this->assertEquals("POST", HTTPMethodInterface::METHOD_POST);
        $this->assertEquals("PUT", HTTPMethodInterface::METHOD_PUT);
    }

}
