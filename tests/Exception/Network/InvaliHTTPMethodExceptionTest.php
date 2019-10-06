<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Network;

use WBW\Library\Core\Exception\Network\InvalidHTTPMethodException;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Invalid HTTP method exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\HTTP
 */
class InvaliHTTPMethodExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     */
    public function testConstruct() {

        $ex = new InvalidHTTPMethodException("exception");

        $res = "The HTTP method \"exception\" is invalid";
        $this->assertEquals($res, $ex->getMessage());
    }

}
