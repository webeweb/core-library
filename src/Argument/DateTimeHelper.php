<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use DateTime;
use Symfony\Component\Yaml\Yaml;
use WBW\Library\Core\Exception\Argument\DateArgumentException;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Date/time helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class DateTimeHelper {

    /**
     * Compare two date/time.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return int Returns
     *  -1: if the date/time A is lesser than date/time B
     *   0: if the date/time are equals.
     *   1: if the date/time A is greater than date/time B
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function compare(DateTime $a, DateTime $b) {
        if (true === static::isLessThan($a, $b)) {
            return -1;
        }
        if (true === static::isGreaterThan($a, $b)) {
            return 1;
        }
        return 0;
    }

    /**
     * Compare tow date/time zones.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return void
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    protected static function compareZone(DateTime $a, DateTime $b) {
        if (false === DateTimeZoneHelper::equals($a->getTimezone(), $b->getTimezone())) {
            throw new IllegalArgumentException("The two date/times does not have the same time zone");
        }
    }

    /**
     * Determines if two date/time are equals.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case o success, false otherwise.
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function equals(DateTime $a, DateTime $b) {
        return 0 === static::compare($a, $b);
    }

    /**
     * Get a day number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the day number between 1 and 7 with monday equals to 1.
     */
    public static function getDayNumber(DateTime $dateTime) {
        return intval($dateTime->format("N"));
    }

    /**
     * Get the duration.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return int Returns the duration.
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getDuration(DateTime $a, DateTime $b) {
        static::compareZone($a, $b);
        return $b->getTimestamp() - $a->getTimestamp();
    }

    /**
     * Get the greater date/time.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return DateTime Returns the greater date/time.
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getGreater(DateTime $a, DateTime $b) {
        return 0 <= static::compare($a, $b) ? $a : $b;
    }

    /**
     * Get a month number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the month number.
     */
    public static function getMonthNumber(DateTime $dateTime) {
        return intval($dateTime->format("m"));
    }

    /**
     * Get the smaller date/time.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return DateTime Returns the smaller date/time.
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getSmaller(DateTime $a, DateTime $b) {
        return 0 <= static::compare($a, $b) ? $b : $a;
    }

    /**
     * Get a week number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the week number.
     */
    public static function getWeekNumber(DateTime $dateTime) {
        return intval($dateTime->format("W"));
    }

    /**
     * Get a week number to apply with a schedule.
     * <p>
     * For example:
     * We have a schedule etablished over 5 weeks.
     * We start the schedule with the week number 1.
     * If the current date is 2018-01-01 and the start date is 2018-01-01, the week number is 1
     * If the current date is 2018-01-08 and the start date is 2018-01-01, the week number is 2
     * etc.
     * We start the schedule with the week number 3.
     * If the current date is 2018-01-01 and the start date is 2018-01-01, the week number is 3
     * If the current date is 2018-01-08 and the start date is 2018-01-01, the week number is 4
     * etc.
     * </p>
     *
     * @param DateTime $date The date.
     * @param DateTime $startDate The start date.
     * @param int $weekCount The week count.
     * @param int $weekOffset The week offset.
     * @return int Returns the week number to apply between 1 and $weekCount.
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
     * @return int Returns the year number.
     */
    public static function getYearNumber(DateTime $dateTime) {
        return intval($dateTime->format("Y"));
    }

    /**
     * Determines if a date/time is between date/time A and date/time B.
     *
     * @param DateTime $dateTime The date/time.
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isBetween(DateTime $dateTime, DateTime $a, DateTime $b) {
        static::compareZone($a, $b);
        $c1 = $a->getTimestamp() <= $dateTime->getTimestamp();
        $c2 = $dateTime->getTimestamp() <= $b->getTimestamp();
        return $c1 && $c2;
    }

    /**
     * Determines if a value is a date.
     *
     * @param mixed $value The value.
     * @return void
     * @throws DateArgumentException Throws a Date argument exception if the value is not of expected type.
     */
    public static function isDate($value) {
        if (false === strtotime($value)) {
            throw new DateArgumentException($value);
        }
    }

    /**
     * Detremines if date/time A is greater than date/time B.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isGreaterThan(DateTime $a, DateTime $b) {
        static::compareZone($a, $b);
        return $a->getTimestamp() > $b->getTimestamp();
    }

    /**
     * Detremines if date/time A is less than date/time B.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws IllegalArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isLessThan(DateTime $a, DateTime $b) {
        static::compareZone($a, $b);
        return $a->getTimestamp() < $b->getTimestamp();
    }

    /**
     * Translate the weekday part.
     *
     * @param string $date The date.
     * @param string $locale The locale.
     * @return string Returns the weekday part translated.
     */
    public static function translateWeekday($date, $locale = "en") {

        // Initialize.
        $template = __DIR__ . "/../Resources/translations/messages.%locale%.yml";
        $filename = str_replace("%locale%", $locale, $template);

        // Check if the filename exists.
        if (false === file_exists($filename)) {
            $filename = str_replace("%locale%", "en", $template);
        }

        // Parse the translations.
        $translations = Yaml::parse(file_get_contents($filename));

        // Return the weekday part translated.
        return str_ireplace(array_keys($translations["weekdays"]), array_values($translations["weekdays"]), $date);
    }

}
