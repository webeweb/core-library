<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Exception;

use InvalidArgumentException;
use WBW\Library\Common\Exception\ObjectArgumentException;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Object argument exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Exception
 */
class ObjectArgumentExceptionTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ObjectArgumentException("exception");

        $this->assertInstanceOf(InvalidArgumentException::class, $obj);

        $this->assertEquals('The argument "exception" is not an object', $obj->getMessage());
    }
}
