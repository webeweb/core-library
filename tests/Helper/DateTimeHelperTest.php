<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Helper;

use DateTime;
use DateTimeZone;
use InvalidArgumentException;
use Throwable;
use WBW\Library\Common\Helper\DateTimeHelper;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Helper
 */
class DateTimeHelperTest extends AbstractTestCase {

    /**
     * Test compare()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCompare(): void {

        $this->assertEquals(-1, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:01")));
        $this->assertEquals(0, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:00")));
        $this->assertEquals(1, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:01"), new DateTime("2018-08-06 15:20:00")));
    }

    /**
     * Test compare()
     *
     * @return void
     */
    public function testCompareWithInvalidArgumentException(): void {

        try {

            DateTimeHelper::compare(new DateTime("2018-08-22 14:05:00", new DateTimeZone("UTC")), new DateTime("2018-08-22 14:05:00", new DateTimeZone("Europe/Paris")));
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The two date/times does not have the same time zone", $ex->getMessage());
        }
    }

    /**
     * Test equals()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testEquals(): void {

        $this->assertTrue(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:00")));
        $this->assertFalse(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:01")));
        $this->assertFalse(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:01"), new DateTime("2018-08-06 15:20:00")));
    }

    /**
     * Test getAge()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetAge(): void {

        // Set a reference date/time mock.
        $ref = new DateTime("2019-02-14");

        $this->assertEquals(19, DateTimeHelper::getAge(new DateTime("2000-02-13"), $ref));
        $this->assertEquals(19, DateTimeHelper::getAge(new DateTime("2000-02-14"), $ref));
        $this->assertEquals(18, DateTimeHelper::getAge(new DateTime("2000-02-15"), $ref));

        $this->assertGreaterThanOrEqual(20, DateTimeHelper::getAge(new DateTime("2000-01-01")));
    }

    /**
     * Test getDayNumber()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetDayNumber(): void {

        $this->assertEquals(1, DateTimeHelper::getDayNumber(new DateTime("2018-05-21")));
        $this->assertEquals(2, DateTimeHelper::getDayNumber(new DateTime("2018-05-22")));
        $this->assertEquals(3, DateTimeHelper::getDayNumber(new DateTime("2018-05-23")));
        $this->assertEquals(4, DateTimeHelper::getDayNumber(new DateTime("2018-05-24")));
        $this->assertEquals(5, DateTimeHelper::getDayNumber(new DateTime("2018-05-25")));
        $this->assertEquals(6, DateTimeHelper::getDayNumber(new DateTime("2018-05-26")));
        $this->assertEquals(7, DateTimeHelper::getDayNumber(new DateTime("2018-05-27")));
    }

    /**
     * Test getDayNumber()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetDayNumberWithoutIso8601(): void {

        $this->assertEquals(1, DateTimeHelper::getDayNumber(new DateTime("2018-05-21"), false));
        $this->assertEquals(2, DateTimeHelper::getDayNumber(new DateTime("2018-05-22"), false));
        $this->assertEquals(3, DateTimeHelper::getDayNumber(new DateTime("2018-05-23"), false));
        $this->assertEquals(4, DateTimeHelper::getDayNumber(new DateTime("2018-05-24"), false));
        $this->assertEquals(5, DateTimeHelper::getDayNumber(new DateTime("2018-05-25"), false));
        $this->assertEquals(6, DateTimeHelper::getDayNumber(new DateTime("2018-05-26"), false));
        $this->assertEquals(0, DateTimeHelper::getDayNumber(new DateTime("2018-05-27"), false));
    }

    /**
     * Test getDuration()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetDuration(): void {

        $this->assertEquals(-3600, DateTimeHelper::getDuration(new DateTime("2018-08-20 16:00:00"), new DateTime("2018-08-20 15:00:00")));
        $this->assertEquals(3600, DateTimeHelper::getDuration(new DateTime("2018-08-20 15:00:00"), new DateTime("2018-08-20 16:00:00")));
    }

    /**
     * Test getGreater()
     *
     * @return void.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetGreater(): void {

        // Set a date/time mock.
        $dt = new DateTime("2018-08-22");

        $this->assertSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-21")));
        $this->assertSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-22")));
        $this->assertNotSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-23")));
    }

    /**
     * Test getMonthNumber()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetMonthNumber(): void {

        $this->assertEquals(1, DateTimeHelper::getMonthNumber(new DateTime("2018-01-01")));
        $this->assertEquals(2, DateTimeHelper::getMonthNumber(new DateTime("2018-02-01")));
        $this->assertEquals(3, DateTimeHelper::getMonthNumber(new DateTime("2018-03-01")));
        $this->assertEquals(4, DateTimeHelper::getMonthNumber(new DateTime("2018-04-01")));
        $this->assertEquals(5, DateTimeHelper::getMonthNumber(new DateTime("2018-05-01")));
        $this->assertEquals(6, DateTimeHelper::getMonthNumber(new DateTime("2018-06-01")));
        $this->assertEquals(7, DateTimeHelper::getMonthNumber(new DateTime("2018-07-01")));
        $this->assertEquals(8, DateTimeHelper::getMonthNumber(new DateTime("2018-08-01")));
        $this->assertEquals(9, DateTimeHelper::getMonthNumber(new DateTime("2018-09-01")));
        $this->assertEquals(10, DateTimeHelper::getMonthNumber(new DateTime("2018-10-01")));
        $this->assertEquals(11, DateTimeHelper::getMonthNumber(new DateTime("2018-11-01")));
        $this->assertEquals(12, DateTimeHelper::getMonthNumber(new DateTime("2018-12-01")));
    }

    /**
     * Test getSmaller()
     *
     * @return void.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSmaller(): void {

        // Set a date/time mock.
        $dt = new DateTime("2018-08-22");

        $this->assertNotSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-21")));
        $this->assertNotSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-22")));
        $this->assertSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-23")));
    }

    /**
     * Test getWeekNumber()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetWeekNumber(): void {

        $this->assertEquals(1, DateTimeHelper::getWeekNumber(new DateTime("2018-01-01")));
        $this->assertEquals(52, DateTimeHelper::getWeekNumber(new DateTime("2018-12-30")));
        $this->assertEquals(1, DateTimeHelper::getWeekNumber(new DateTime("2018-12-31")));

        $this->assertEquals(18, DateTimeHelper::getWeekNumber(new DateTime("2018-05-01")));
        $this->assertEquals(19, DateTimeHelper::getWeekNumber(new DateTime("2018-05-08")));
        $this->assertEquals(20, DateTimeHelper::getWeekNumber(new DateTime("2018-05-15")));
        $this->assertEquals(21, DateTimeHelper::getWeekNumber(new DateTime("2018-05-22")));
        $this->assertEquals(22, DateTimeHelper::getWeekNumber(new DateTime("2018-05-29")));
    }

    /**
     * Test getWeekNumberToApply()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetWeekNumberToApply(): void {

        // Tests with bad week arguments.
        $this->assertEquals(-1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 0));
        $this->assertEquals(-1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 1, 0));
        $this->assertEquals(-1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 1, 2));

        // Tests with one week.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 1));

        // Tests with two weeks.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 2));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 2));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 2));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 2));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 2));

        // Tests with three weeks.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 3));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 3));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 3));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 3));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 3));

        // Tests with four weeks.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 4));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 4));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 4));
        $this->assertEquals(4, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 4));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 4));

        // Tests with five weeks.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 5));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 5));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 5));
        $this->assertEquals(4, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 5));
        $this->assertEquals(5, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 5));

        // Change the week number.
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 5, 3));
        $this->assertEquals(4, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-08"), new DateTime("2018-05-01"), 5, 3));
        $this->assertEquals(5, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-15"), new DateTime("2018-05-01"), 5, 3));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-22"), new DateTime("2018-05-01"), 5, 3));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-29"), new DateTime("2018-05-01"), 5, 3));

        // Change the week number.
        $this->assertEquals(5, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 5, 5));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-08"), new DateTime("2018-05-01"), 5, 5));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-15"), new DateTime("2018-05-01"), 5, 5));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-22"), new DateTime("2018-05-01"), 5, 5));
        $this->assertEquals(4, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-29"), new DateTime("2018-05-01"), 5, 5));

        // Change the year.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-01"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-08"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-15"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-22"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-29"), new DateTime("2018-05-01"), 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-01"), new DateTime("2018-05-01"), 5));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-08"), new DateTime("2018-05-01"), 5));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-15"), new DateTime("2018-05-01"), 5));
        $this->assertEquals(4, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-22"), new DateTime("2018-05-01"), 5));
        $this->assertEquals(5, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-29"), new DateTime("2018-05-01"), 5));
    }

    /**
     * Test getWeekPeriod()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetWeekPeriod(): void {

        // Set a date/time mock.
        $dt = new DateTime("2021-10-22");

        $res = DateTimeHelper::getWeekPeriod($dt);
        $this->assertEquals("2021-10-18", $res[0]->format("Y-m-d"));
        $this->assertEquals("2021-10-24", $res[1]->format("Y-m-d"));

        // Tests with the start date.
        $dt = new DateTime("2021-10-18");

        $res = DateTimeHelper::getWeekPeriod($dt);
        $this->assertEquals("2021-10-18", $res[0]->format("Y-m-d"));
        $this->assertEquals("2021-10-24", $res[1]->format("Y-m-d"));

        // Tests with the end date.
        $dt = new DateTime("2021-10-24");

        $res = DateTimeHelper::getWeekPeriod($dt);
        $this->assertEquals("2021-10-18", $res[0]->format("Y-m-d"));
        $this->assertEquals("2021-10-24", $res[1]->format("Y-m-d"));

        // Tests with the last year.
        $dt = new DateTime("2020-10-22");

        $res = DateTimeHelper::getWeekPeriod($dt);
        $this->assertEquals("2020-10-19", $res[0]->format("Y-m-d"));
        $this->assertEquals("2020-10-25", $res[1]->format("Y-m-d"));

        // Tests with the next year.
        $dt = new DateTime("2022-10-22");

        $res = DateTimeHelper::getWeekPeriod($dt);
        $this->assertEquals("2022-10-17", $res[0]->format("Y-m-d"));
        $this->assertEquals("2022-10-23", $res[1]->format("Y-m-d"));

        // Tests with the end of year.
        $dt = new DateTime("2021-12-31");

        $res = DateTimeHelper::getWeekPeriod($dt);
        $this->assertEquals("2021-12-27", $res[0]->format("Y-m-d"));
        $this->assertEquals("2022-01-02", $res[1]->format("Y-m-d"));

        // Tests with the start of year.
        $dt = new DateTime("2022-01-01");

        $res = DateTimeHelper::getWeekPeriod($dt);
        $this->assertEquals("2021-12-27", $res[0]->format("Y-m-d"));
        $this->assertEquals("2022-01-02", $res[1]->format("Y-m-d"));
    }

    /**
     * Test getWeekPeriod()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetWeekPeriodWithNull(): void {

        $res = DateTimeHelper::getWeekPeriod(null);
        $this->assertCount(2, $res);
    }

    /**
     * Test getWeekPeriod()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetWeekPeriodWithoutIso8601(): void {

        // Set a date/time mock.
        $dt = new DateTime("2021-10-22");

        $res = DateTimeHelper::getWeekPeriod($dt, false);
        $this->assertEquals("2021-10-17", $res[0]->format("Y-m-d"));
        $this->assertEquals("2021-10-23", $res[1]->format("Y-m-d"));

        // Tests with the start date.
        $dt = new DateTime("2021-10-17");

        $res = DateTimeHelper::getWeekPeriod($dt, false);
        $this->assertEquals("2021-10-17", $res[0]->format("Y-m-d"));
        $this->assertEquals("2021-10-23", $res[1]->format("Y-m-d"));

        // Tests with the end date.
        $dt = new DateTime("2021-10-23");

        $res = DateTimeHelper::getWeekPeriod($dt, false);
        $this->assertEquals("2021-10-17", $res[0]->format("Y-m-d"));
        $this->assertEquals("2021-10-23", $res[1]->format("Y-m-d"));

        // Tests with the last year.
        $dt = new DateTime("2020-10-22");

        $res = DateTimeHelper::getWeekPeriod($dt, false);
        $this->assertEquals("2020-10-18", $res[0]->format("Y-m-d"));
        $this->assertEquals("2020-10-24", $res[1]->format("Y-m-d"));

        // Tests with the next year.
        $dt = new DateTime("2022-10-22");

        $res = DateTimeHelper::getWeekPeriod($dt, false);
        $this->assertEquals("2022-10-16", $res[0]->format("Y-m-d"));
        $this->assertEquals("2022-10-22", $res[1]->format("Y-m-d"));

        // Tests with the end of year.
        $dt = new DateTime("2021-12-31");

        $res = DateTimeHelper::getWeekPeriod($dt, false);
        $this->assertEquals("2021-12-26", $res[0]->format("Y-m-d"));
        $this->assertEquals("2022-01-01", $res[1]->format("Y-m-d"));

        // Tests with the start of year.
        $dt = new DateTime("2022-01-01");

        $res = DateTimeHelper::getWeekPeriod($dt, false);
        $this->assertEquals("2021-12-26", $res[0]->format("Y-m-d"));
        $this->assertEquals("2022-01-01", $res[1]->format("Y-m-d"));
    }

    /**
     * Test getYearNumber()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetYearNumber(): void {

        $this->assertEquals(1900, DateTimeHelper::getYearNumber(new DateTime("1900-05-21")));
        $this->assertEquals(1970, DateTimeHelper::getYearNumber(new DateTime("1970-05-22")));
        $this->assertEquals(2000, DateTimeHelper::getYearNumber(new DateTime("2000-05-23")));
        $this->assertEquals(2018, DateTimeHelper::getYearNumber(new DateTime("2018-05-24")));
    }

    /**
     * Test isBetween()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testIsBetween(): void {

        $this->assertTrue(DateTimeHelper::isBetween(new DateTime("2018-08-22 10:00"), new DateTime("2018-08-22 08:00"), new DateTime("2018-08-22 12:00")));
        $this->assertFalse(DateTimeHelper::isBetween(new DateTime("2018-08-22 08:00"), new DateTime("2018-08-22 10:00"), new DateTime("2018-08-22 12:00")));
    }

    /**
     * Test isGreaterThan()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testIsGreaterThan(): void {

        $this->assertTrue(DateTimeHelper::isGreaterThan(new DateTime("2018-08-22"), new DateTime("2018-08-21")));
        $this->assertFalse(DateTimeHelper::isGreaterThan(new DateTime("2018-08-22"), new DateTime("2018-08-23")));
    }

    /**
     * Test isLessThan()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testIsLessThan(): void {

        $this->assertTrue(DateTimeHelper::isLessThan(new DateTime("2018-08-22"), new DateTime("2018-08-23")));
        $this->assertFalse(DateTimeHelper::isLessThan(new DateTime("2018-08-22"), new DateTime("2018-08-21")));
    }

    /**
     * Test numberBusinessDays()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNumberBusinessDays(): void {

        //            JUNE  2023
        // ---+----+----+----+----+----+----+
        // Mon| Tue| Wed| Thu| Fri| Sat| Sun|
        // ---+----+----+----+----+----+----+
        //    |    |    |  1 |  2 |  3 |  4 |
        //  5 |  6 |  7 |  8 |  9 | 10 | 11 |
        // 12 | 13 | 14 | 15 | 16 | 17 | 18 |
        // 19 | 20 | 21 | 22 | 23 | 24 | 15 |
        // 26 | 27 | 28 | 29 | 30 |    |    |
        // ---+----+----+----+----+----+----+

        // Set the date/time mocks.
        $a = new DateTime("2023-06-01"); // Thursday
        $b = new DateTime("2023-06-30"); // Friday

        $this->assertNull(DateTimeHelper::numberBusinessDays($b, $a));

        $this->assertNull(DateTimeHelper::numberBusinessDays($a, $b, 0)); // Invalid working days
        $this->assertNull(DateTimeHelper::numberBusinessDays($a, $b, 8)); // Invalid working days

        $this->assertNull(DateTimeHelper::numberBusinessDays($a, $b, 5, 0)); // Invalid first working day
        $this->assertNull(DateTimeHelper::numberBusinessDays($a, $b, 5, 8)); // Invalid first working day

        $this->assertNull(DateTimeHelper::numberBusinessDays($a, $b, 5, 5)); // Invalid first working day + working days

        $this->assertEquals(30, DateTimeHelper::numberBusinessDays($a, $b, 7));

        $this->assertEquals(26, DateTimeHelper::numberBusinessDays($a, $b, 6));

        $this->assertEquals(22, DateTimeHelper::numberBusinessDays($a, $b));
        $this->assertEquals(22, DateTimeHelper::numberBusinessDays($a, $b, 5, 2));

        $this->assertEquals(17, DateTimeHelper::numberBusinessDays($a, $b, 4));
        $this->assertEquals(18, DateTimeHelper::numberBusinessDays($a, $b, 4, 2));

        $this->assertEquals(12, DateTimeHelper::numberBusinessDays($a, $b, 3));
        $this->assertEquals(13, DateTimeHelper::numberBusinessDays($a, $b, 3, 5));

        $this->assertEquals(0, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-03"), new DateTime("2023-06-03")));
        $this->assertEquals(1, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-01")));
        $this->assertEquals(2, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-04")));
        $this->assertEquals(3, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-05")));
        $this->assertEquals(4, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-06")));
        $this->assertEquals(5, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-07")));

        $this->assertEquals(0, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-02"), new DateTime("2023-06-02"), 4));
        $this->assertEquals(1, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-04"), 4));
        $this->assertEquals(2, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-05"), 4));
        $this->assertEquals(3, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-06"), 4));
        $this->assertEquals(4, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-07"), 4));

        $this->assertEquals(0, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-03"), new DateTime("2023-06-03"), 4, 2));
        $this->assertEquals(1, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-02"), new DateTime("2023-06-04"), 4, 2));
        $this->assertEquals(2, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-04"), 4, 2));
        $this->assertEquals(2, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-05"), 4, 2));
        $this->assertEquals(3, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-06"), 4, 2));
        $this->assertEquals(4, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-07"), 4, 2));

        $this->assertEquals(3, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-04"), 3, 5));
        $this->assertEquals(3, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-05"), 3, 5));
        $this->assertEquals(3, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-06"), 3, 5));
        $this->assertEquals(3, DateTimeHelper::numberBusinessDays(new DateTime("2023-06-01"), new DateTime("2023-06-07"), 3, 5));
    }

    /**
     * Test toString()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testToString(): void {

        $this->assertNull(DateTimeHelper::toString(null));
        $this->assertEquals("2018-01-14 17:00", DateTimeHelper::toString(new DateTime("2018-01-14 17:00")));
        $this->assertEquals("14/01/2018 17:00", DateTimeHelper::toString(new DateTime("2018-01-14 17:00"), "d/m/Y H:i"));
    }

    /**
     * Test translateWeekday()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testTranslateWeekday(): void {

        // Set the date/time mocks.
        $arg = [];
        for ($i = 0; $i < 7; ++$i) {
            $arg[] = new DateTime("2018-04-" . ($i + 8));
        }

        $exp = [
            "en" => [
                "Sunday, 2018-04-08",
                "Monday, 2018-04-09",
                "Tuesday, 2018-04-10",
                "Wednesday, 2018-04-11",
                "Thursday, 2018-04-12",
                "Friday, 2018-04-13",
                "Saturday, 2018-04-14",
            ],
            "fr" => [
                "Dimanche, 2018-04-08",
                "Lundi, 2018-04-09",
                "Mardi, 2018-04-10",
                "Mercredi, 2018-04-11",
                "Jeudi, 2018-04-12",
                "Vendredi, 2018-04-13",
                "Samedi, 2018-04-14",
            ],
        ];

        $this->assertNull(DateTimeHelper::translateWeekDay(null));

        // Handle each date/time.
        for ($i = 0; $i < 7; ++$i) {

            // With EN locale => translation.
            $this->assertEquals($exp["en"][$i], DateTimeHelper::translateWeekDay($arg[$i]->format("l, Y-m-d")));

            // With FR locale => translation.
            $this->assertEquals($exp["fr"][$i], DateTimeHelper::translateWeekDay($arg[$i]->format("l, Y-m-d"), "fr"));

            // With DE locale => no translation.
            $this->assertEquals($arg[$i]->format("l, Y-m-d"), DateTimeHelper::translateWeekDay($arg[$i]->format("l, Y-m-d"), "de"));
        }
    }

    /**
     * Test usortCallback()
     *
     * @return void
     */
    public function testUsortCallable(): void {

        // Set the date/time mocks.
        $a = new DateTime("2022-07-06 11:00");
        $b = new DateTime("2022-07-06 12:00");

        $obj = DateTimeHelper::usortCallback();
        $this->assertIsCallable($obj);

        $this->assertEquals(-1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(1, $obj($b, $a));

        $this->assertEquals(-1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(1, $obj($b, null));
    }

    /**
     * Test usortCallback()
     *
     * @return void
     */
    public function testUsortCallableWithAsc(): void {

        // Set the date/time mocks.
        $a = new DateTime("2022-07-06 11:00");
        $b = new DateTime("2022-07-06 12:00");

        $obj = DateTimeHelper::usortCallback(false);
        $this->assertIsCallable($obj);

        $this->assertEquals(1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(-1, $obj($b, $a));

        $this->assertEquals(1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(-1, $obj($b, null));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("Y-m-d H:i", DateTimeHelper::DATETIME_FORMAT);
    }
}
