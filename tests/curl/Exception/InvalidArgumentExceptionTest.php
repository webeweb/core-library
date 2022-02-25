<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Exception;

use WBW\Library\Curl\Exception\InvalidArgumentException;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * Invalid argument exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Exception
 */
class InvalidArgumentExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $ex = new InvalidArgumentException("exception");

        $this->assertEquals("exception", $ex->getMessage());
    }
}
