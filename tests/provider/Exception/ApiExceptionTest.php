<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Exception;

use Exception;
use WBW\Library\Provider\Exception\ApiException;
use WBW\Library\Provider\Tests\AbstractTestCase;

/**
 * API exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Tests\Exception
 */
class ApiExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set an Exception mock.
        $throwable = new Exception();

        $obj = new ApiException("message", 500, $throwable);

        $this->assertEquals("message", $obj->getMessage());
        $this->assertEquals(500, $obj->getCode());
        $this->assertSame($throwable, $obj->getPrevious());
    }
}
