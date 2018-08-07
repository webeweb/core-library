<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Helper\Argument;

use DateTime;
use WBW\Library\Core\Exception\Argument\DateArgumentException;

/**
 * Date/time helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Helper\Argument
 */
class DateTimeHelper {

    /**
     * Compare two date/time.
     *
     * @param DateTime $a The date/time.
     * @param DateTime $b The date/time.
     * @return int Returns
     *  -1: if the date/time A is greater than date/time B
     *  1: if the date/time A is lesser than date/time B
     *  0: if the date/time are equals.
     */
    public static function compare(DateTime $a, DateTime $b) {
        $timestampA = $a->getTimestamp();
        $timestampB = $b->getTimestamp();
        if ($timestampA < $timestampB) {
            return -1;
        }
        if ($timestampB < $timestampA) {
            return 1;
        }
        return 0;
    }

    /**
     * Determines if two date/time are equals.
     *
     * @param DateTime $a The date/time.
     * @param DateTime $b The date/time.
     * @return boolean Returns true in case o success, false otherwise.
     */
    public static function equals(DateTime $a, DateTime $b) {
        return 0 === self::compare($a, $b);
    }

    /**
     * Get a day number.
     *
     * @param DateTime $dateTime The date/time.
     * @return integer Returns the day number between 1 and 7 with monday equals to 1.
     */
    public static function getDayNumber(DateTime $dateTime) {
        return intval($dateTime->format("N"));
    }

    /**
     * Get a month number.
     *
     * @param DateTime $dateTime The date/time.
     * @return integer Returns the month number.
     */
    public static function getMonthNumber(DateTime $dateTime) {
        return intval($dateTime->format("m"));
    }

    /**
     * Get a week number.
     *
     * @param DateTime $dateTime The date/time.
     * @return integer Returns the week number.
     */
    public static function getWeekNumber(DateTime $dateTime) {
        return intval($dateTime->format("W"));
    }

    /**
     * Get a week number to apply with a schedule.
     *
     * <p>
     * For example:
     * We have a schedule etablished over 5 weeks.
     *
     * We start the schedule with the week number 1.
     * If the current date is 2018-01-01 and the start date is 2018-01-01, the week number is 1
     * If the current date is 2018-01-08 and the start date is 2018-01-01, the week number is 2
     * etc.
     *
     * We start the schedule with the week number 3.
     * If the current date is 2018-01-01 and the start date is 2018-01-01, the week number is 3
     * If the current date is 2018-01-08 and the start date is 2018-01-01, the week number is 4
     * etc.
     * </p>
     *
     * @param DateTime $date The date.
     * @param DateTime $startDate The start date.
     * @param integer $weekCount The week count.
     * @param integer $weekOffset The week offset.
     * @return integer Returns the week number to apply between 1 and $weekCount.
     */
    public static function getWeekNumberToApply(DateTime $date, DateTime $startDate, $weekCount, $weekOffset = 1) {

        // Check the week arguments.
        if ($weekCount <= 0 || $weekOffset <= 0 || $weekCount < $weekOffset) {
            return -1;
        }

        // Calculate.
        $result = intval($date->diff($startDate)->d / 7);
        $result %= $weekCount;
        $result += $weekOffset;
        if ($weekCount < $result) {
            $result -= $weekCount;
        }

        // Return.
        return $result;
    }

    /**
     * Get a year number.
     *
     * @param DateTime $dateTime The date/time.
     * @return integer Returns the year number.
     */
    public static function getYearNumber(DateTime $dateTime) {
        return intval($dateTime->format("Y"));
    }

    /**
     * Determines if a value is a date.
     *
     * @param mixed $value The value.
     * @throws DateArgumentException Throws a Date argument exception if the value is not of expected type.
     */
    public static function isDate($value) {
        if (false === strtotime($value)) {
            throw new DateArgumentException($value);
        }
    }

}
