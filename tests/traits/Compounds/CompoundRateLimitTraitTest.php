<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Compounds;

use DateTime;
use Exception;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Compounds\TestCompoundRateLimitTrait;

/**
 * Compound rate limit trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Compounds
 */
class CompoundRateLimitTraitTest extends AbstractTestCase {

    /**
     * Tests setLimit()
     *
     * @return void
     */
    public function testSetLimit(): void {

        $obj = new TestCompoundRateLimitTrait();

        $obj->setLimit(1);
        $this->assertEquals(1, $obj->getLimit());
    }

    /**
     * Tests setRemaining()
     *
     * @return void
     */
    public function testSetRemaining(): void {

        $obj = new TestCompoundRateLimitTrait();

        $obj->setRemaining(1);
        $this->assertEquals(1, $obj->getRemaining());
    }

    /**
     * Tests setReset()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetReset(): void {

        // Set a Date/time mock.
        $reset = new DateTime();

        $obj = new TestCompoundRateLimitTrait();

        $obj->setReset($reset);
        $this->assertSame($reset, $obj->getReset());
    }
}
