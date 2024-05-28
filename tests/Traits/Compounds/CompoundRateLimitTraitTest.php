<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Compounds;

use DateTime;
use Throwable;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Compounds\TestCompoundRateLimitTrait;

/**
 * Compound rate limit trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Compounds
 */
class CompoundRateLimitTraitTest extends AbstractTestCase {

    /**
     * Test setLimit()
     *
     * @return void
     */
    public function testSetLimit(): void {

        $obj = new TestCompoundRateLimitTrait();

        $obj->setLimit(1);
        $this->assertEquals(1, $obj->getLimit());
    }

    /**
     * Test setRemaining()
     *
     * @return void
     */
    public function testSetRemaining(): void {

        $obj = new TestCompoundRateLimitTrait();

        $obj->setRemaining(1);
        $this->assertEquals(1, $obj->getRemaining());
    }

    /**
     * Test setReset()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetReset(): void {

        // Set a reset mock.
        $reset = new DateTime();

        $obj = new TestCompoundRateLimitTrait();

        $obj->setReset($reset);
        $this->assertSame($reset, $obj->getReset());
    }
}
