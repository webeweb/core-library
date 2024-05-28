<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Exception;

use InvalidArgumentException;
use WBW\Library\Common\Exception\IntegerArgumentException;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Integer argument exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Exception
 */
class IntegerArgumentExceptionTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new IntegerArgumentException("exception");

        $this->assertInstanceOf(InvalidArgumentException::class, $obj);

        $this->assertEquals('The argument "exception" is not an integer', $obj->getMessage());
    }
}
