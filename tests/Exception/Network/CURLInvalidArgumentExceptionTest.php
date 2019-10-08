<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Network;

use WBW\Library\Core\Exception\Network\CURLInvalidArgumentException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL invalid argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Network
 */
class CURLInvalidArgumentExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new CURLInvalidArgumentException("exception");

        $res = "exception";
        $this->assertEquals($res, $ex->getMessage());
    }

}
