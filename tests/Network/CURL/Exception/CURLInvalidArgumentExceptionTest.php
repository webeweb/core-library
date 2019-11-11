<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\CURL\Exception;

use WBW\Library\Core\Network\CURL\Exception\CURLInvalidArgumentException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL invalid argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Exception
 */
class CURLInvalidArgumentExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new CURLInvalidArgumentException("exception");

        $this->assertEquals("exception", $ex->getMessage());
    }
}
