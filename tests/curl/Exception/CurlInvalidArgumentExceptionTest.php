<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Exception;

use WBW\Library\Curl\Exception\CurlInvalidArgumentException;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * cURL invalid argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\Tests\Exception
 */
class CurlInvalidArgumentExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $ex = new CurlInvalidArgumentException("exception");

        $this->assertEquals("exception", $ex->getMessage());
    }
}
