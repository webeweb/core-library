<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument\Helper;

use DateTime;
use InvalidArgumentException;
use Symfony\Component\Yaml\Yaml;
use WBW\Library\Core\Argument\Exception\DateArgumentException;

/**
 * Date/time helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument\Helper
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
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function compare(DateTime $a, DateTime $b): int {
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
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    protected static function compareZone(DateTime $a, DateTime $b): void {
        if (false === DateTimeZoneHelper::equals($a->getTimezone(), $b->getTimezone())) {
            throw new InvalidArgumentException("The two date/times does not have the same time zone");
        }
    }

    /**
     * Determines if two date/time are equals.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case o success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function equals(DateTime $a, DateTime $b): bool {
        return 0 === static::compare($a, $b);
    }

    /**
     * Get a day number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the day number between 1 and 7 with monday equals to 1.
     */
    public static function getDayNumber(DateTime $dateTime): int {
        return intval($dateTime->format("N"));
    }

    /**
     * Get the duration.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return int Returns the duration.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getDuration(DateTime $a, DateTime $b): int {
        static::compareZone($a, $b);
        return $b->getTimestamp() - $a->getTimestamp();
    }

    /**
     * Get the greater date/time.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return DateTime Returns the greater date/time.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getGreater(DateTime $a, DateTime $b): DateTime {
        return 0 <= static::compare($a, $b) ? $a : $b;
    }

    /**
     * Get a month number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the month number.
     */
    public static function getMonthNumber(DateTime $dateTime): int {
        return intval($dateTime->format("m"));
    }

    /**
     * Get the smaller date/time.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return DateTime Returns the smaller date/time.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function getSmaller(DateTime $a, DateTime $b): DateTime {
        return 0 <= static::compare($a, $b) ? $b : $a;
    }

    /**
     * Get a week number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the week number.
     */
    public static function getWeekNumber(DateTime $dateTime): int {
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
    public static function getWeekNumberToApply(DateTime $date, DateTime $startDate, int $weekCount, int $weekOffset = 1): int {

        if ($weekCount <= 0 || $weekOffset <= 0 || $weekCount < $weekOffset) {
            return -1;
        }

        $result = intval($date->diff($startDate)->d / 7);
        $result %= $weekCount;
        $result += $weekOffset;
        if ($weekCount < $result) {
            $result -= $weekCount;
        }

        return $result;
    }

    /**
     * Get a year number.
     *
     * @param DateTime $dateTime The date/time.
     * @return int Returns the year number.
     */
    public static function getYearNumber(DateTime $dateTime): int {
        return intval($dateTime->format("Y"));
    }

    /**
     * Determines if a date/time is between date/time A and date/time B.
     *
     * @param DateTime $dateTime The date/time.
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isBetween(DateTime $dateTime, DateTime $a, DateTime $b): bool {
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
    public static function isDate($value): void {
        if (false === strtotime($value)) {
            throw new DateArgumentException($value);
        }
    }

    /**
     * Determines if date/time A is greater than date/time B.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isGreaterThan(DateTime $a, DateTime $b): bool {
        static::compareZone($a, $b);
        return $a->getTimestamp() > $b->getTimestamp();
    }

    /**
     * Detremines if date/time A is less than date/time B.
     *
     * @param DateTime $a The date/time A.
     * @param DateTime $b The date/time B.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     */
    public static function isLessThan(DateTime $a, DateTime $b): bool {
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
    public static function translateWeekday(string $date, $locale = "en"): string {

        $messages = __DIR__ . "/../../Resources/translations/messages.%locale%.yml";
        $filename = str_replace("%locale%", $locale, $messages);

        if (false === file_exists($filename)) {
            $filename = str_replace("%locale%", "en", $messages);
        }

        $translations = Yaml::parse(file_get_contents(realpath($filename)));

        return str_ireplace(array_keys($translations["weekdays"]), array_values($translations["weekdays"]), $date);
    }
}
