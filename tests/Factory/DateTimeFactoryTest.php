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

namespace WBW\Library\Common\Tests\Factory;

use DateTime;
use Throwable;
use WBW\Library\Common\Factory\DateTimeFactory;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory
 */
class DateTimeFactoryTest extends AbstractTestCase {

    /**
     * Test firstLastDateMonth()
     *
     * @return void
     */
    public function testFirstLastDateMonth(): void {

        // Set a date mock.
        $date = new DateTime("2022-10-27");

        $res = DateTimeFactory::firstLastDateMonth($date);

        $this->assertEquals("2022-10-01", $res[0]->format("Y-m-d"));
        $this->assertEquals("2022-10-31", $res[1]->format("Y-m-d"));
    }

    /**
     * Test range()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRange(): void {

        // Set the date/time mock.
        $a = new DateTime("2021-11-25");
        $b = new DateTime("2021-12-25");

        $res = DateTimeFactory::range($a, $b);
        $this->assertCount(31, $res);

        $this->assertEquals($a->format("Y-m-d"), $res[0]->format("Y-m-d"));
        $this->assertEquals($b->format("Y-m-d"), $res[30]->format("Y-m-d"));

        $this->assertNull(DateTimeFactory::range($b, $a));
    }
}
