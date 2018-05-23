<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility\Argument;

use DateTime;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Date utility.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility\Argument
 * @final
 */
final class DateUtility implements DateUtilityInterface {

    /**
     * Get a day number.
     *
     * @param DateTime $date The date.
     * @return integer Returns the day number between 1 and 7 with monday equals to 1.
     */
    public static function getDayNumber(DateTime $date) {
        return intval($date->format("N"));
    }

    /**
     * Get a week number.
     *
     * @param DateTime $date The date.
     * @return integer Returns the week number.
     */
    public static function getWeekNumber(DateTime $date) {
        return intval($date->format("W"));
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
     * @param DateTime $startDate The start  date.
     * @param integer $weekCount The week count.
     * @param integer $weekNumber The week number.
     * @return integer Returns the week number to apply between 1 and $weekCount.
     */
    public static function getWeekNumberToApply(DateTime $date, DateTime $startDate, $weekCount, $weekNumber) {
        if ($weekCount <= 0 || $weekNumber <= 0 || $weekCount < $weekNumber) {
            return -1;
        }
        $result = self::getWeekNumber($date) - self::getWeekNumber($startDate) + $weekNumber;
        if ($weekCount < $result) {
            $result -= $weekCount;
        }
        return abs($result);
    }

    /**
     * Get the weekday into FR.
     *
     * @return array Returns the weekday into FR.
     */
    public static function getWeekdayFR() {
        return [
            self::EN_WEEKDAY_SUNDAY    => self::FR_WEEKDAY_SUNDAY,
            self::EN_WEEKDAY_MONDAY    => self::FR_WEEKDAY_MONDAY,
            self::EN_WEEKDAY_TUESDAY   => self::FR_WEEKDAY_TUESDAY,
            self::EN_WEEKDAY_WEDNESDAY => self::FR_WEEKDAY_WEDNESDAY,
            self::EN_WEEKDAY_THURSDAY  => self::FR_WEEKDAY_THURSDAY,
            self::EN_WEEKDAY_FRIDAY    => self::FR_WEEKDAY_FRIDAY,
            self::EN_WEEKDAY_SATURDAY  => self::FR_WEEKDAY_SATURDAY,
        ];
    }

    /**
     * Translate the weekday part.
     *
     * @param string $date The date.
     * @param array $translations The translations: day => translation.
     * @return string Returns the weekday part translated.
     */
    public static function translateWeekday($date, array $translations = []) {
        return StringUtility::replace($date, array_keys($translations), array_values($translations));
    }

}
