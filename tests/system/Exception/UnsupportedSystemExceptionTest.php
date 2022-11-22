<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Exception;

use WBW\Library\System\Exception\UnsupportedSystemException;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Unsupported system exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Exception
 */
class UnsupportedSystemExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $ex = new UnsupportedSystemException();

        $this->assertEquals("This operating system is unsupported", $ex->getMessage());
    }
}
