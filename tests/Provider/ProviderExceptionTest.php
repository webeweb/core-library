<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Provider;

use WBW\Library\Common\Tests\AbstractTestCase;
use Throwable;
use WBW\Library\Common\Provider\ProviderException;

/**
 * Provider exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Provider
 */
class ProviderExceptionTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Throwable mock.
        $throwable = $this->getMockBuilder(Throwable::class)->getMock();

        $obj = new ProviderException("message", 500, $throwable);

        $this->assertEquals("message", $obj->getMessage());
        $this->assertEquals(500, $obj->getCode());
        $this->assertSame($throwable, $obj->getPrevious());
    }
}
