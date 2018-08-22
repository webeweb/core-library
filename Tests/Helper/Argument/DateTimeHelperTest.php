<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Helper\Argument;

use DateTime;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Helper\Argument\DateTimeHelper;

/**
 * Date/time helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Helper\Argument
 * @final
 */
final class DateTimeHelperTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the compare() method.
     *
     * @return void
     */
    public function testCompare() {

        $this->assertEquals(-1, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:01")));
        $this->assertEquals(0, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:00")));
        $this->assertEquals(1, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:01"), new DateTime("2018-08-06 15:20:00")));
    }

    /**
     * Tests the equals() method.
     *
     * @return void
     */
    public function testEquals() {

        $this->assertTrue(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:00")));
        $this->assertFalse(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:01")));
        $this->assertFalse(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:01"), new DateTime("2018-08-06 15:20:00")));
    }

    /**
     * Tests the getDayNumber() method.
     *
     * @return void
     */
    public function testGetDayNumber() {

        $this->assertEquals(1, DateTimeHelper::getDayNumber(new DateTime("2018-05-21")));
        $this->assertEquals(2, DateTimeHelper::getDayNumber(new DateTime("2018-05-22")));
        $this->assertEquals(3, DateTimeHelper::getDayNumber(new DateTime("2018-05-23")));
        $this->assertEquals(4, DateTimeHelper::getDayNumber(new DateTime("2018-05-24")));
        $this->assertEquals(5, DateTimeHelper::getDayNumber(new DateTime("2018-05-25")));
        $this->assertEquals(6, DateTimeHelper::getDayNumber(new DateTime("2018-05-26")));
        $this->assertEquals(7, DateTimeHelper::getDayNumber(new DateTime("2018-05-27")));
    }

    /**
     * Tests the getGreater() method.
     *
     * @return void.
     */
    public function testGetGreater() {

        $dt = new DateTime("2018-08-22");

        $this->assertSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-21")));
        $this->assertSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-22")));
        $this->assertNotSame($dt, DateTimeHelper::getGreater($dt, new DateTime("2018-08-23")));
    }

    /**
     * Tests the getMonthNumber() method.
     *
     * @return void
     */
    public function testGetMonthNumber() {

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
     */
    public function testGetSmaller() {

        $dt = new DateTime("2018-08-22");

        $this->assertNotSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-21")));
        $this->assertNotSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-22")));
        $this->assertSame($dt, DateTimeHelper::getSmaller($dt, new DateTime("2018-08-23")));
    }

    /**
     * Tests the getWeekNumber() method.
     *
     * @return void
     */
    public function testGetWeekNumber() {

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
     */
    public function testGetWeekNumberToApply() {

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
     */
    public function testGetYearNumber() {

        $this->assertEquals(1900, DateTimeHelper::getYearNumber(new DateTime("1900-05-21")));
        $this->assertEquals(1970, DateTimeHelper::getYearNumber(new DateTime("1970-05-22")));
        $this->assertEquals(2000, DateTimeHelper::getYearNumber(new DateTime("2000-05-23")));
        $this->assertEquals(2018, DateTimeHelper::getYearNumber(new DateTime("2018-05-24")));
    }

    /**
     * Tests the isBetween() method.
     *
     * @return void
     */
    public function testIsBetween() {

        $this->assertTrue(DateTimeHelper::isBetween(new DateTime("2018-08-22 10:00"), new DateTime("2018-08-22 08:00"), new DateTime("2018-08-22 12:00")));
        $this->assertFalse(DateTimeHelper::isBetween(new DateTime("2018-08-22 08:00"), new DateTime("2018-08-22 10:00"), new DateTime("2018-08-22 12:00")));
    }

    /**
     * Tests the isGreaterThan() method.
     *
     * @return void
     */
    public function testIsGreaterThan() {

        $this->assertTrue(DateTimeHelper::isGreaterThan(new DateTime("2018-08-22"), new DateTime("2018-08-21")));
        $this->assertFalse(DateTimeHelper::isGreaterThan(new DateTime("2018-08-22"), new DateTime("2018-08-23")));
    }

    /**
     * Tests the isLessThan() method.
     *
     * @return void
     */
    public function testIsLessThan() {

        $this->assertTrue(DateTimeHelper::isLessThan(new DateTime("2018-08-22"), new DateTime("2018-08-23")));
        $this->assertFalse(DateTimeHelper::isLessThan(new DateTime("2018-08-22"), new DateTime("2018-08-21")));
    }

    /**
     * Tests the translateWeekday() method.
     *
     * @return void
     */
    public function testTranslateWeekday() {

        $arg = [];
        for ($i = 0; $i < 7; ++$i) {
            $arg[] = new DateTime("2018-04-" . ($i + 8));
        }

        $res   = [];
        $res[] = "Dimanche, 2018-04-08";
        $res[] = "Lundi, 2018-04-09";
        $res[] = "Mardi, 2018-04-10";
        $res[] = "Mercredi, 2018-04-11";
        $res[] = "Jeudi, 2018-04-12";
        $res[] = "Vendredi, 2018-04-13";
        $res[] = "Samedi, 2018-04-14";

        for ($i = 0; $i < 7; ++$i) {
            $this->assertEquals($res[$i], DateTimeHelper::translateWeekDay($arg[$i]->format("l, Y-m-d"), "fr"));
        }
    }

}
