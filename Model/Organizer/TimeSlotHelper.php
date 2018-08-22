<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Organizer;

use WBW\Library\Core\Argument\DateTimeHelper;
use WBW\Library\Core\Sorting\QuickSort;

/**
 * Time slot helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Organizer
 */
class TimeSlotHelper {

    /**
     * Determines if a time slot A contains a time slot b.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function contains(TimeSlot $a, TimeSlot $b) {
        $c1 = DateTimeHelper::isBetween($b->getStartDate(), $a->getStartDate(), $a->getEndDate());
        $c2 = DateTimeHelper::isBetween($b->getEndDate(), $a->getStartDate(), $a->getEndDate());
        return $c1 && $c2;
    }

    /**
     * Determines if two time slots are equals.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return boolean Returns true in case of success, false otherwise.
     */
    public static function equals(TimeSlot $a, TimeSlot $b) {

        // Compare the start dates.
        if (false === DateTimeHelper::equals($a->getStartDate(), $b->getStartDate())) {
            return false;
        }

        // Compare the end dates.
        if (false === DateTimeHelper::equals($a->getEndDate(), $b->getEndDate())) {
            return false;
        }

        // Compare the time slots count.
        if (count($a->getTimeSlots()) !== count($b->getTimeSlots())) {
            return false;
        }

        // Handle each time slot.
        for ($i = count($a->getTimeSlots()) - 1; 0 <= $i; --$i) {
            if (false === self::equals($a->getTimeSlots()[$i], $b->getTimeSlots()[$i])) {
                return false;
            }
        }

        //
        return true;
    }

    /**
     * Full join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot|null Returns a time slot in case of success, null otherwise.
     */
    public static function fullJoin(TimeSlot $a, TimeSlot $b) {

        // Has full join ?
        if (false === self::hasFullJoin($a, $b)) {
            return null;
        }

        // Initialize the date/times.
        $startDate = DateTimeHelper::getSmaller($a->getStartDate(), $b->getStartDate());
        $endDate   = DateTimeHelper::getGreater($a->getEndDate(), $b->getEndDate());

        // Return the time slot.
        return new TimeSlot(clone $startDate, clone $endDate);
    }

    /**
     * Full join two time slots without time slots intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[] Returns the time slots in case of success, null otherwise.
     */
    public static function fullJoinWithout(TimeSlot $a, TimeSlot $b) {

        // Initialize the time slots.
        $leftJoins  = self::leftJoinWithout($a, $b);
        $rightJoins = self::rightJoinWithout($a, $b);

        // Check the time slots.
        if (null === $leftJoins && null === $rightJoins) {
            return null;
        }
        if (null === $leftJoins) {
            return $rightJoins;
        }
        if (null === $rightJoins) {
            return $leftJoins;
        }

        // Return the time slots.
        return self::sort(array_merge($leftJoins, $rightJoins));
    }

    /**
     * Determines if a time slot A has full join with time slot B.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function hasFullJoin(TimeSlot $a, TimeSlot $b) {
        return true === self::hasInnerJoin($a, $b);
    }

    /**
     * Determines if a time slot A has an inner join with time slot B.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function hasInnerJoin(TimeSlot $a, TimeSlot $b) {
        $c1 = DateTimeHelper::isBetween($b->getStartDate(), $a->getStartDate(), $a->getEndDate());
        $c2 = DateTimeHelper::isBetween($b->getEndDate(), $a->getStartDate(), $a->getEndDate());
        $c3 = DateTimeHelper::isBetween($a->getStartDate(), $b->getStartDate(), $b->getEndDate());
        $c4 = DateTimeHelper::isBetween($a->getEndDate(), $b->getStartDate(), $b->getEndDate());
        return $c1 || $c2 || $c3 || $c4;
    }

    /**
     * Inner join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot|null Returns a time slot in case of success, null otherwise.
     */
    public static function innerJoin(TimeSlot $a, TimeSlot $b) {

        // Has inner join ?
        if (false === self::hasInnerJoin($a, $b)) {
            return null;
        }

        // Initialize the date/times.
        $startDate = DateTimeHelper::getGreater($a->getStartDate(), $b->getStartDate());
        $endDate   = DateTimeHelper::getSmaller($a->getEndDate(), $b->getEndDate());

        // Return the time slot.
        return new TimeSlot(clone $startDate, clone $endDate);
    }

    /**
     * Left join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot Returns the time slot in case of success, null otherwise.
     */
    public static function leftJoin(TimeSlot $a, TimeSlot $b) {

        // Has inner join ?
        if (false === self::hasInnerJoin($a, $b)) {
            return null;
        }

        // Return the time slot.
        return new TimeSlot(clone $a->getStartDate(), clone $a->getEndDate());
    }

    /**
     * Left join two time slots without time slot B intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[] Returns the time slots in case of success, null otherwise.
     */
    public static function leftJoinWithout(TimeSlot $a, TimeSlot $b) {

        // Has inner join ?
        if (false === self::hasInnerJoin($a, $b) || true === self::contains($b, $a)) {
            return null;
        }

        // Contains ?
        if (true === self::contains($a, $b)) {
            return self::sort([
                    new TimeSlot(clone $a->getStartDate(), clone $b->getStartDate()),
                    new TimeSlot(clone $b->getEndDate(), clone $a->getEndDate()),
            ]);
        }

        // Initialize the date/times.
        $startDate = true === DateTimeHelper::isLessThan($a->getStartDate(), $b->getStartDate()) ? $a->getStartDate() : $b->getEndDate();
        $endDate   = true === DateTimeHelper::isGreaterThan($a->getEndDate(), $b->getEndDate()) ? $a->getEndDate() : $b->getStartDate();

        // Return the time slots.
        return [
            new TimeSlot(clone $startDate, clone $endDate),
        ];
    }

    /**
     * Right join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot Returns the time slot in case of success, null otherwise.
     */
    public static function rightJoin(TimeSlot $a, TimeSlot $b) {
        return self::leftJoin($b, $a);
    }

    /**
     * Right join two time slots without time slot B intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[] Returns the time slots in case of success, null otherwise.
     */
    public static function rightJoinWithout(TimeSlot $a, TimeSlot $b) {
        return self::leftJoinWithout($b, $a);
    }

    /**
     * Sort time slots.
     *
     * @param TimeSlot[] $timeSlots The time slots.
     * @return TimeSlot[] Returns the sorted time slots.
     */
    public static function sort($timeSlots) {

        // Initialize a Qucik sort.
        $sorter = new QuickSort($timeSlots, new TimeSlotFunctor());
        $sorter->sort();

        // Return the time slots.
        return $sorter->getValues();
    }

}
