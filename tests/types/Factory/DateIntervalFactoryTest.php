<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Factory;

use Throwable;
use WBW\Library\Types\Factory\DateIntervalFactory;
use WBW\Library\Types\Tests\AbstractTestCase;
use WBW\Library\Types\Tests\Fixtures\Factory\TestDateIntervalFactory;

/**
 * Date interval factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Factory
 */
class DateIntervalFactoryTest extends AbstractTestCase {

    /**
     * Test newDateInterval()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewDateInterval(): void {

        $this->assertNull(DateIntervalFactory::newDateInterval());

        $this->assertNotNull(DateIntervalFactory::newDateInterval(1));
        $this->assertNotNull(DateIntervalFactory::newDateInterval(null, 1));
        $this->assertNotNull(DateIntervalFactory::newDateInterval(null, null, 1));
        $this->assertNotNull(DateIntervalFactory::newDateInterval(null, null, null, 1));
        $this->assertNotNull(DateIntervalFactory::newDateInterval(null, null, null, null, 1));
        $this->assertNotNull(DateIntervalFactory::newDateInterval(null, null, null, null, null, 1));
        $this->assertNotNull(DateIntervalFactory::newDateInterval(1, 2, 3, 4, 5, 6));
    }

    /**
     * Test newDuration()
     *
     * @return void
     */
    public function testNewDuration(): void {

        $this->assertNull(TestDateIntervalFactory::newDuration());

        $this->assertEquals("P1Y", TestDateIntervalFactory::newDuration(1));
        $this->assertEquals("P1M", TestDateIntervalFactory::newDuration(null, 1));
        $this->assertEquals("P1D", TestDateIntervalFactory::newDuration(null, null, 1));
        $this->assertEquals("PT1H", TestDateIntervalFactory::newDuration(null, null, null, 1));
        $this->assertEquals("PT1M", TestDateIntervalFactory::newDuration(null, null, null, null, 1));
        $this->assertEquals("PT1S", TestDateIntervalFactory::newDuration(null, null, null, null, null, 1));
        $this->assertEquals("P1Y2M3DT4H5M6S", TestDateIntervalFactory::newDuration(1, 2, 3, 4, 5, 6));
    }
}
