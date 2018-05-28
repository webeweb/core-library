<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility\Argument;

use DateTime;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Utility\Argument\DateUtility;

/**
 * Date utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\Argument
 * @final
 */
final class DateUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getDayNumber() method.
     *
     * @return void
     */
    public function testGetDayNumber() {

        $this->assertEquals(1, DateUtility::getDayNumber(new DateTime("2018-05-21")));
        $this->assertEquals(2, DateUtility::getDayNumber(new DateTime("2018-05-22")));
        $this->assertEquals(3, DateUtility::getDayNumber(new DateTime("2018-05-23")));
        $this->assertEquals(4, DateUtility::getDayNumber(new DateTime("2018-05-24")));
        $this->assertEquals(5, DateUtility::getDayNumber(new DateTime("2018-05-25")));
        $this->assertEquals(6, DateUtility::getDayNumber(new DateTime("2018-05-26")));
        $this->assertEquals(7, DateUtility::getDayNumber(new DateTime("2018-05-27")));
    }

    /**
     * Tests the getMonthNumber() method.
     *
     * @return void
     */
    public function testGetMonthNumber() {

        $this->assertEquals(1, DateUtility::getMonthNumber(new DateTime("2018-01-01")));
        $this->assertEquals(2, DateUtility::getMonthNumber(new DateTime("2018-02-01")));
        $this->assertEquals(3, DateUtility::getMonthNumber(new DateTime("2018-03-01")));
        $this->assertEquals(4, DateUtility::getMonthNumber(new DateTime("2018-04-01")));
        $this->assertEquals(5, DateUtility::getMonthNumber(new DateTime("2018-05-01")));
        $this->assertEquals(6, DateUtility::getMonthNumber(new DateTime("2018-06-01")));
        $this->assertEquals(7, DateUtility::getMonthNumber(new DateTime("2018-07-01")));
        $this->assertEquals(8, DateUtility::getMonthNumber(new DateTime("2018-08-01")));
        $this->assertEquals(9, DateUtility::getMonthNumber(new DateTime("2018-09-01")));
        $this->assertEquals(10, DateUtility::getMonthNumber(new DateTime("2018-10-01")));
        $this->assertEquals(11, DateUtility::getMonthNumber(new DateTime("2018-11-01")));
        $this->assertEquals(12, DateUtility::getMonthNumber(new DateTime("2018-12-01")));
    }

    /**
     * Tests the getWeekNumber() method.
     *
     * @return void
     */
    public function testGetWeekNumber() {

        $this->assertEquals(1, DateUtility::getWeekNumber(new DateTime("2018-01-01")));
        $this->assertEquals(52, DateUtility::getWeekNumber(new DateTime("2018-12-30")));
        $this->assertEquals(1, DateUtility::getWeekNumber(new DateTime("2018-12-31")));

        $this->assertEquals(18, DateUtility::getWeekNumber(new DateTime("2018-05-01")));
        $this->assertEquals(19, DateUtility::getWeekNumber(new DateTime("2018-05-08")));
        $this->assertEquals(20, DateUtility::getWeekNumber(new DateTime("2018-05-15")));
        $this->assertEquals(21, DateUtility::getWeekNumber(new DateTime("2018-05-22")));
        $this->assertEquals(22, DateUtility::getWeekNumber(new DateTime("2018-05-29")));
    }

    /**
     * Tests the getWeekNumberToApply() method.
     *
     * @return void
     */
    public function testGetWeekNumberToApply() {

        // Test with bad week arguments.
        $this->assertEquals(-1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 0, 1));
        $this->assertEquals(-1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 1, 0));
        $this->assertEquals(-1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 1, 2));

        // Test with one week.
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 1, 1));

        // Test with two weeks.
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 2, 1));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 2, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 2, 1));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 2, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 2, 1));

        // Test with three weeks.
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 3, 1));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 3, 1));
        $this->assertEquals(3, DateUtility::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 3, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 3, 1));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 3, 1));

        // Test with four weeks.
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 4, 1));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 4, 1));
        $this->assertEquals(3, DateUtility::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 4, 1));
        $this->assertEquals(4, DateUtility::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 4, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 4, 1));

        // Test with five weeks.
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-02"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2018-05-09"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(3, DateUtility::getWeekNumberToApply(new DateTime("2018-05-16"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(4, DateUtility::getWeekNumberToApply(new DateTime("2018-05-23"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(5, DateUtility::getWeekNumberToApply(new DateTime("2018-05-30"), new DateTime("2018-05-01"), 5, 1));

        // Change the week number.
        $this->assertEquals(3, DateUtility::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 5, 3));
        $this->assertEquals(4, DateUtility::getWeekNumberToApply(new DateTime("2018-05-08"), new DateTime("2018-05-01"), 5, 3));
        $this->assertEquals(5, DateUtility::getWeekNumberToApply(new DateTime("2018-05-15"), new DateTime("2018-05-01"), 5, 3));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-22"), new DateTime("2018-05-01"), 5, 3));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2018-05-29"), new DateTime("2018-05-01"), 5, 3));

        // Change the week number.
        $this->assertEquals(5, DateUtility::getWeekNumberToApply(new DateTime("2018-05-01"), new DateTime("2018-05-01"), 5, 5));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2018-05-08"), new DateTime("2018-05-01"), 5, 5));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2018-05-15"), new DateTime("2018-05-01"), 5, 5));
        $this->assertEquals(3, DateUtility::getWeekNumberToApply(new DateTime("2018-05-22"), new DateTime("2018-05-01"), 5, 5));
        $this->assertEquals(4, DateUtility::getWeekNumberToApply(new DateTime("2018-05-29"), new DateTime("2018-05-01"), 5, 5));

        // Change the year.
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2022-05-01"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2022-05-08"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2022-05-15"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2022-05-22"), new DateTime("2018-05-01"), 1, 1));
        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2022-05-29"), new DateTime("2018-05-01"), 1, 1));

        $this->assertEquals(1, DateUtility::getWeekNumberToApply(new DateTime("2022-05-01"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(2, DateUtility::getWeekNumberToApply(new DateTime("2022-05-08"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(3, DateUtility::getWeekNumberToApply(new DateTime("2022-05-15"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(4, DateUtility::getWeekNumberToApply(new DateTime("2022-05-22"), new DateTime("2018-05-01"), 5, 1));
        $this->assertEquals(5, DateUtility::getWeekNumberToApply(new DateTime("2022-05-29"), new DateTime("2018-05-01"), 5, 1));
    }

    /**
     * Tests the getYearNumber() method.
     *
     * @return void
     */
    public function testGetYearNumber() {

        $this->assertEquals(1900, DateUtility::getYearNumber(new DateTime("1900-05-21")));
        $this->assertEquals(1970, DateUtility::getYearNumber(new DateTime("1970-05-22")));
        $this->assertEquals(2000, DateUtility::getYearNumber(new DateTime("2000-05-23")));
        $this->assertEquals(2018, DateUtility::getYearNumber(new DateTime("2018-05-24")));
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
            $this->assertEquals($res[$i], DateUtility::translateWeekDay($arg[$i]->format("l, Y-m-d"), DateUtility::getWeekdayFR()));
        }
    }

}
