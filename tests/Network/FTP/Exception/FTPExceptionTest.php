<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\FTP\Exception;

use WBW\Library\Core\Network\FTP\Exception\FTPException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * FTP exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\FTP\Exception
 */
class FTPExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FTPException("exception");

        $res = "exception";
        $this->assertEquals($res, $obj->getMessage());
    }
}
