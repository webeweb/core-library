<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Helper;

use DateTime;
use DateTimeZone;
use Exception;
use InvalidArgumentException;
use WBW\Library\Types\Helper\DateTimeHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Date/time helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Helper
 */
class DateTimeHelperTest extends AbstractTestCase {

    /**
     * Tests addDay()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddDay(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2021-12-23", DateTimeHelper::addDay(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2021-12-24", DateTimeHelper::addDay(clone $dateTime, 1)->format("Y-m-d"));
        $this->assertEquals("2021-12-25", DateTimeHelper::addDay(clone $dateTime, 2)->format("Y-m-d"));

        try {

            DateTimeHelper::addDay($dateTime, -1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Number must be positive or equal to zero", $ex->getMessage());
        }
    }

    /**
     * Tests addMonth()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddMonth(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2021-12-23", DateTimeHelper::addMonth(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2022-01-23", DateTimeHelper::addMonth(clone $dateTime, 1)->format("Y-m-d"));
        $this->assertEquals("2022-02-23", DateTimeHelper::addMonth(clone $dateTime, 2)->format("Y-m-d"));

        try {

            DateTimeHelper::addMonth($dateTime, -1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Number must be positive or equal to zero", $ex->getMessage());
        }
    }

    /**
     * Tests addYear()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddYear(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2021-12-23", DateTimeHelper::addYear(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2022-12-23", DateTimeHelper::addYear(clone $dateTime, 1)->format("Y-m-d"));
        $this->assertEquals("2023-12-23", DateTimeHelper::addYear(clone $dateTime, 2)->format("Y-m-d"));

        try {

            DateTimeHelper::addYear($dateTime, -1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Number must be positive or equal to zero", $ex->getMessage());
        }
    }

    /**
     * Tests compare()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCompare(): void {

        $this->assertEquals(-1, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:01")));
        $this->assertEquals(0, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:00")));
        $this->assertEquals(1, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:01"), new DateTime("2018-08-06 15:20:00")));
    }

    /**
     * Tests compare()
     *
     * @return void
     */
    public function testCompareWithInvalidArgumentException(): void {

        try {

            DateTimeHelper::compare(new DateTime("2018-08-22 14:05:00", new DateTimeZone("UTC")), new DateTime("2018-08-22 14:05:00", new DateTimeZone("Europe/Paris")));
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The two date/times does not have the same time zone", $ex->getMessage());
        }
    }

    /**
     * Tests equals()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testEquals(): void {

        $this->assertTrue(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:00")));
        $this->assertFalse(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:01")));
        $this->assertFalse(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:01"), new DateTime("2018-08-06 15:20:00")));
    }

    /**
     * Tests getAge()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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
     * Tests getDayNumber()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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
     * Tests getDayNumber()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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
     * Tests getDuration()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetDuration(): void {

        $this->assertEquals(-3600, DateTimeHelper::getDuration(new DateTime("2018-08-20 16:00:00"), new DateTime("2018-08-20 15:00:00")));
        $this->assertEquals(3600, DateTimeHelper::getDuration(new DateTime("2018-08-20 15:00:00"), new DateTime("2018-08-20 16:00:00")));
    }

    /**
     * Tests getFirstLastDateMonth()
     *
     * @return void
     */
    public function testGetFirstLastDateMonth(): void {

        // Set a date/time mock.
        $date = new DateTime("2022-10-27");

        $res = DateTimeHelper::getFirstLastDateMonth($date);

        $this->assertEquals("2022-10-01", $res[0]->format("Y-m-d"));
        $this->assertEquals("2022-10-31", $res[1]->format("Y-m-d"));
    }

    /**
     * Tests getGreater()
     *
     * @return void.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetGreater(): void {

        // Set a date/time mock.
        $dt = new DateTime("2018-08-22");

        $this->assertSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-21")));
        $this->assertSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-22")));
        $this->assertNotSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-23")));
    }

    /**
     * Tests getMonthNumber()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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
     * Tests getSmaller()
     *
     * @return void.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetSmaller(): void {

        // Set a date/time mock.
        $dt = new DateTime("2018-08-22");

        $this->assertNotSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-21")));
        $this->assertNotSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-22")));
        $this->assertSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-23")));
    }

    /**
     * Tests getWeekNumber()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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
     * Tests getWeekNumberToApply()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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
     * Tests getWeekPeriod()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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
     * Tests getWeekPeriod()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetWeekPeriodWithNull(): void {

        $res = DateTimeHelper::getWeekPeriod(null);
        $this->assertCount(2, $res);
    }

    /**
     * Tests getWeekPeriod()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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
     * Tests getYearNumber()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetYearNumber(): void {

        $this->assertEquals(1900, DateTimeHelper::getYearNumber(new DateTime("1900-05-21")));
        $this->assertEquals(1970, DateTimeHelper::getYearNumber(new DateTime("1970-05-22")));
        $this->assertEquals(2000, DateTimeHelper::getYearNumber(new DateTime("2000-05-23")));
        $this->assertEquals(2018, DateTimeHelper::getYearNumber(new DateTime("2018-05-24")));
    }

    /**
     * Tests isBetween()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testIsBetween(): void {

        $this->assertTrue(DateTimeHelper::isBetween(new DateTime("2018-08-22 10:00"), new DateTime("2018-08-22 08:00"), new DateTime("2018-08-22 12:00")));
        $this->assertFalse(DateTimeHelper::isBetween(new DateTime("2018-08-22 08:00"), new DateTime("2018-08-22 10:00"), new DateTime("2018-08-22 12:00")));
    }

    /**
     * Tests isGreaterThan()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testIsGreaterThan(): void {

        $this->assertTrue(DateTimeHelper::isGreaterThan(new DateTime("2018-08-22"), new DateTime("2018-08-21")));
        $this->assertFalse(DateTimeHelper::isGreaterThan(new DateTime("2018-08-22"), new DateTime("2018-08-23")));
    }

    /**
     * Tests isLessThan()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testIsLessThan(): void {

        $this->assertTrue(DateTimeHelper::isLessThan(new DateTime("2018-08-22"), new DateTime("2018-08-23")));
        $this->assertFalse(DateTimeHelper::isLessThan(new DateTime("2018-08-22"), new DateTime("2018-08-21")));
    }

    /**
     * Tests range()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRange(): void {

        // Set the date/time mock.
        $a = new DateTime("2021-11-25");
        $b = new DateTime("2021-12-25");

        $res = DateTimeHelper::range($a, $b);
        $this->assertCount(31, $res);

        $this->assertEquals($a->format("Y-m-d"), $res[0]->format("Y-m-d"));
        $this->assertEquals($b->format("Y-m-d"), $res[30]->format("Y-m-d"));

        $this->assertNull(DateTimeHelper::range($b, $a));
    }

    /**
     * Tests subDay()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSubDay(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");

        $this->assertEquals("2021-12-23", DateTimeHelper::subDay(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2021-12-22", DateTimeHelper::subDay(clone $dateTime, 1)->format("Y-m-d"));
        $this->assertEquals("2021-12-21", DateTimeHelper::subDay(clone $dateTime, 2)->format("Y-m-d"));

        try {

            DateTimeHelper::subDay($dateTime, -1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Number must be positive or equal to zero", $ex->getMessage());
        }
    }

    /**
     * Tests subMonth()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSubMonth(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");

        $this->assertEquals("2021-12-23", DateTimeHelper::subMonth(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2021-11-23", DateTimeHelper::subMonth(clone $dateTime, 1)->format("Y-m-d"));
        $this->assertEquals("2021-10-23", DateTimeHelper::subMonth(clone $dateTime, 2)->format("Y-m-d"));

        try {

            DateTimeHelper::subMonth($dateTime, -1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Number must be positive or equal to zero", $ex->getMessage());
        }
    }

    /**
     * Tests subYear()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSubYear(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");

        $this->assertEquals("2021-12-23", DateTimeHelper::subYear(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2020-12-23", DateTimeHelper::subYear(clone $dateTime, 1)->format("Y-m-d"));
        $this->assertEquals("2019-12-23", DateTimeHelper::subYear(clone $dateTime, 2)->format("Y-m-d"));

        try {

            DateTimeHelper::subYear($dateTime, -1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Number must be positive or equal to zero", $ex->getMessage());
        }
    }

    /**
     * Tests toString()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testToString(): void {

        $this->assertEquals(null, DateTimeHelper::toString(null));
        $this->assertEquals("2018-01-14 17:00", DateTimeHelper::toString(new DateTime("2018-01-14 17:00")));
        $this->assertEquals("14/01/2018 17:00", DateTimeHelper::toString(new DateTime("2018-01-14 17:00"), "d/m/Y H:i"));
    }

    /**
     * Tests translateWeekday()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
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

        $this->assertEquals(null, DateTimeHelper::translateWeekDay(null));

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
     * Tests usortCallback()
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
     * Tests usortCallback()
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
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("Y-m-d H:i", DateTimeHelper::DATETIME_FORMAT);
    }
}
