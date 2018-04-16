<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\IO;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\IO\IOException;

/**
 * IO exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\IO
 * @final
 */
final class IOExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new IOException("exception");

        $res = "exception";
        $this->assertEquals($res, $ex->getMessage());
    }

}
