<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Factory;

use DateTime;
use InvalidArgumentException;
use Throwable;
use WBW\Library\Types\Helper\DateTimeHelper;
use WBW\Library\Types\Helper\DateTimeMethod;

/**
 * Date/time factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Factory
 */
class DateTimeFactory {

    /**
     * Range from a date/time to another date/time.
     *
     * @param DateTime $from From date/time.
     * @param DateTime $to To date/time.
     * @return DateTime[]|null Returns the date/time range.
     * @throws InvalidArgumentException Throws an illegal argument exception if the two date/time does not have the same time zone.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function range(DateTime $from, DateTime $to): ?array {

        if (false === DateTimeHelper::isLessThan($from, $to)) {
            return null;
        }

        $range = [];

        $current = clone $from;

        while (false === DateTimeHelper::isGreaterThan($current, $to)) {

            $range[] = clone $current;

            DateTimeMethod::addDay($current, 1);
        }

        return $range;
    }
}
