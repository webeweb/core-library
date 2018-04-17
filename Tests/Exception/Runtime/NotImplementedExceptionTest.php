<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Runtime;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Runtime\NotImplementedException;

/**
 * Not implemented exception test .
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Runtime
 * @final
 */
final class NotImplementedExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     */
    public function testConstruct() {

        $ex = new NotImplementedException("exception");

        $res = "exception";
        $this->assertEquals($res, $ex->getMessage());
    }

}
