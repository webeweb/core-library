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
     * Get a year number.
     *
     * @param DateTime $dateTime The date/time.
     * @return integer Returns the year number.
     */
    public static function getYearNumber(DateTime $dateTime) {
        return intval($dateTime->format("Y"));
    }

}
