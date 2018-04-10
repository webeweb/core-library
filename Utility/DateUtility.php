<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

/**
 * Date utility.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class DateUtility implements DateUtilityInterface {

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
