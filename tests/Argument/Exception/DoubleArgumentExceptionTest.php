<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument\Exception;

use WBW\Library\Core\Argument\Exception\DoubleArgumentException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Double argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument\Exception
 */
class DoubleArgumentExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new DoubleArgumentException("exception");

        $res = "The argument \"exception\" is not a double";
        $this->assertEquals($res, $ex->getMessage());
    }
}