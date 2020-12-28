<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument\Helper;

use DateTime;
use DateTimeZone;
use Exception;
use InvalidArgumentException;
use WBW\Library\Core\Argument\Helper\DateTimeHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Date/time helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument\Helper
 */
class DateTimeHelperTest extends AbstractTestCase {

    /**
     * Tests the compare() method.
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
     * Tests the compare() method.
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
     * Tests the equals() method.
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
     * Tests the getDayNumber() method.
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
     * Tests the getDuration() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetDuration(): void {

        $this->assertEquals(-3600, DateTimeHelper::getDuration(new DateTime("2018-08-20 16:00:00"), new DateTime("2018-08-20 15:00:00")));
        $this->assertEquals(3600, DateTimeHelper::getDuration(new DateTime("2018-08-20 15:00:00"), new DateTime("2018-08-20 16:00:00")));
    }

    /**
     * Tests the getGreater() method.
     *
     * @return void.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetGreater(): void {

        $dt = new DateTime("2018-08-22");

        $this->assertSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-21")));
        $this->assertSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-22")));
        $this->assertNotSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-23")));
    }

    /**
     * Tests the getMonthNumber() method.
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
     * Tests the getSmaller() method.
     *
     * @return void.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetSmaller(): void {

        $dt = new DateTime("2018-08-22");

        $this->assertNotSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-21")));
        $this->assertNotSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-22")));
        $this->assertSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-23")));
    }

    /**
     * Tests the getWeekNumber() method.
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
     * Tests the getWeekNumberToApply() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetWeekNumberToApply(): void {

        // Test with bad week arguments.
        $this->assertEquals(-1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 0, 1));
        $this->assertEquals(-1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 1, 0));
        $this->assertEquals(-1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 1, 2));

        // Test with one week.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 1, 1));

        // Test with two weeks.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 2, 1));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 2, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 2, 1));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 2, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 2, 1));

        // Test with three weeks.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 3, 1));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 3, 1));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 3, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 3, 1));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 3, 1));

        // Test with four weeks.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 4, 1));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 4, 1));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 4, 1));
        $this->assertEquals(4, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 4, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 4, 1));

        // Test with five weeks.
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(4, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(5, DateTimeHelper::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 5, 1));

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
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-01"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-08"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-15"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-22"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-29"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-01"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(2, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-08"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(3, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-15"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(4, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-22"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(5, DateTimeHelper::getWeekNumberToApply(new DateTime("2022-05-29"), new DateTime("2018-05-01"), 5, 1));
    }

    /**
     * Tests the getYearNumber() method.
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
     * Tests the isBetween() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testIsBetween(): void {

        $this->assertTrue(DateTimeHelper::isBetween(new DateTime("2018-08-22 10:00"), new DateTime("2018-08-22 08:00"), new DateTime("2018-08-22 12:00")));
        $this->assertFalse(DateTimeHelper::isBetween(new DateTime("2018-08-22 08:00"), new DateTime("2018-08-22 10:00"), new DateTime("2018-08-22 12:00")));
    }

    /**
     * Tests the isGreaterThan() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testIsGreaterThan(): void {

        $this->assertTrue(DateTimeHelper::isGreaterThan(new DateTime("2018-08-22"), new DateTime("2018-08-21")));
        $this->assertFalse(DateTimeHelper::isGreaterThan(new DateTime("2018-08-22"), new DateTime("2018-08-23")));
    }

    /**
     * Tests the isLessThan() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testIsLessThan(): void {

        $this->assertTrue(DateTimeHelper::isLessThan(new DateTime("2018-08-22"), new DateTime("2018-08-23")));
        $this->assertFalse(DateTimeHelper::isLessThan(new DateTime("2018-08-22"), new DateTime("2018-08-21")));
    }

    /**
     * Tests the translateWeekday() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testTranslateWeekday(): void {

        $arg = [];
        for ($i = 0; $i < 7; ++$i) {
            $arg[] = new DateTime("2018-04-" . ($i + 8));
        }

        $res = [
            "Dimanche, 2018-04-08",
            "Lundi, 2018-04-09",
            "Mardi, 2018-04-10",
            "Mercredi, 2018-04-11",
            "Jeudi, 2018-04-12",
            "Vendredi, 2018-04-13",
            "Samedi, 2018-04-14",
        ];

        // Handle each date/time.
        for ($i = 0; $i < 7; ++$i) {

            // With FR language : translation.
            $this->assertEquals($res[$i], DateTimeHelper::translateWeekDay($arg[$i]->format("l, Y-m-d"), "fr"));

            // With DE language : no translation.
            $this->assertEquals($arg[$i]->format("l, Y-m-d"), DateTimeHelper::translateWeekDay($arg[$i]->format("l, Y-m-d"), "de"));
        }
    }
}
