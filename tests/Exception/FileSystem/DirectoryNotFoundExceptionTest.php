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

use WBW\Library\Core\Exception\FileSystem\DirectoryNotFoundException;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Directory not found exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\IO
 */
class DirectoryNotFoundExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     */
    public function testConstruct() {

        $ex = new DirectoryNotFoundException("exception");

        $res = "The directory \"exception\" is not found";
        $this->assertEquals($res, $ex->getMessage());
    }

}
