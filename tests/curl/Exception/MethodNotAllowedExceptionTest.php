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

use WBW\Library\Curl\Exception\MethodNotAllowedException;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * Method not allowed exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Exception
 */
class MethodNotAllowedExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $ex = new MethodNotAllowedException("exception");

        $this->assertEquals('The method "exception" is not allowed', $ex->getMessage());
    }
}
