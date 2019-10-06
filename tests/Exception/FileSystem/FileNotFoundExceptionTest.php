<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\FileSystem;

use WBW\Library\Core\Exception\FileSystem\FileNotFoundException;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * File not found exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\IO
 */
class FileNotFoundExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     */
    public function testConstruct() {

        $ex = new FileNotFoundException("exception");

        $res = "The file \"exception\" is not found";
        $this->assertEquals($res, $ex->getMessage());
    }

}
