<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Renderer;

use DateTime;
use Exception;

/**
 * Date/time renderer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Renderer
 */
class DateTimeRenderer {

    /**
     * Date/time format.
     *
     * @var string
     */
    const DATETIME_FORMAT = "Y-m-d H:i";

    /**
     * Render an age.
     *
     * @param DateTime $birthDate The birth date.
     * @param DateTime|null $refDate The reference date.
     * @return int Returns the age.
     * @throws Exception Throws an exception if an errors occurs.
     */
    public static function renderAge(DateTime $birthDate, DateTime $refDate = null) {

        // Use the current date/time.
        if (null === $refDate) {
            $refDate = new DateTime();
        }

        $diff  = $refDate->getTimestamp() - $birthDate->getTimestamp();
        $years = new DateTime("@" . $diff);

        return intval($years->format("Y")) - 1970;
    }

    /**
     * Render a date/time.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param string $format The format.
     * @return string Returns the rendered date/time.
     */
    public static function renderDateTime(DateTime $dateTime = null, $format = self::DATETIME_FORMAT) {
        if (null === $dateTime) {
            return "";
        }
        return $dateTime->format($format);
    }
}
