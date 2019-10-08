<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Reflection;

use WBW\Library\Core\Exception\Reflection\MethodNotFoundException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Method not found exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Reflection
 */
class MethodNotFoundExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new MethodNotFoundException("exception");

        $res = "The method \"exception\" is not found";
        $this->assertEquals($res, $ex->getMessage());
    }
}
