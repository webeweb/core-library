<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Network;

use WBW\Library\Core\Tests\AbstractCoreFrameworkTestCase;
use WBW\Library\Core\Exception\Network\FTPException;

/**
 * FTP exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Network
 */
final class FTPExceptionTest extends AbstractCoreFrameworkTestCase {

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
