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

use DateTime;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Helper\Argument\DateTimeHelper;

/**
 * Time slot.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Organizer
 */
class TimeSlot {

    /**
     * End date.
     *
     * @var DateTime
     */
    private $endDate;

    /**
     * StartDate.
     *
     * @var DateTime
     */
    private $startDate;

    /**
     * Time slots.
     *
     * @var TimeSlot[]
     */
    private $timeSlots;

    /**
     * Constructor.
     *
     * @param DateTime $startDate The start date.
     * @param DateTime $endDate The end date.
     * @throws IllegalArgumentException Throws an illegal argument exception.
     */
    public function __construct(DateTime $startDate, DateTime $endDate) {
        if ($endDate < $startDate) {
            throw new IllegalArgumentException("The end date must be greater than start date");
        }
        $this->setEndDate($endDate);
        $this->setStartDate($startDate);
        $this->setTimeSlots([]);
    }

    /**
     * Add a time slot.
     *
     * @param TimeSlot $timeSlot The time slot.
     * @return TimeSlot Returns this time slot.
     */
    public function addTimeSlot(TimeSlot $timeSlot) {
        $this->timeSlots[] = $timeSlot;
        return $this;
    }

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

        // Has inner  ?
        if (false === self::hasInnerJoin($a, $b)) {
            return null;
        }

        // Initialize the date/times.
        $startDate = DateTimeHelper::getSmaller($a->getStartDate(), $b->getStartDate());
        $endDate   = DateTimeHelper::getGreater($a->getEndDate(), $b->getEndDate());

        // Return the time slot.
        return new TimeSlot(clone $startDate, clone $endDate);
    }

    /**
     * Get the end date.
     *
     * @return DateTime Returns the end date.
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * Get the start date.
     *
     * @return DateTime Returns the start date.
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * Get the time slots.
     *
     * @return TimeSlot[] Returns the time slots.
     */
    public function getTimeSlots() {
        return $this->timeSlots;
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
     * @return TimeSlot[] Returns the time slot in case of success, null otherwise.
     */
    public static function leftJoinWithout(TimeSlot $a, TimeSlot $b) {

        // Has inner join ?
        if (false === self::hasInnerJoin($a, $b) || true === self::contains($b, $a)) {
            return null;
        }

        // Contains ?
        if (true === self::contains($a, $b)) {
            return [
                new Timeslot(clone $a->getStartDate(), clone $b->getStartDate()),
                new Timeslot(clone $b->getEndDate(), clone $a->getEndDate()),
            ];
        }

        // Initialize the date/times.
        $startDate = true === DateTimeHelper::isLessThan($a->getStartDate(), $b->getStartDate()) ? $a->getStartDate() : $b->getEndDate();
        $endDate   = true === DateTimeHelper::isGreaterThan($a->getEndDate(), $b->getEndDate()) ? $a->getEndDate() : $b->getStartDate();

        // Return the time slot.
        return [
            new TimeSlot(clone $startDate, clone $endDate),
        ];
    }

    /**
     * Remove a time slot.
     *
     * @param TimeSlot $timeSlot The time slot.
     * @return TimeSlot Returns this time slot.
     */
    public function removeTimeSlot(TimeSlot $timeSlot) {
        for ($i = count($this->timeSlots) - 1; 0 <= $i; --$i) {
            if (true === self::equals($timeSlot, $this->timeSlots[$i])) {
                unset($this->timeSlots[$i]);
                break;
            }
        }
        return $this;
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
     * @return TimeSlot[] Returns the time slot in case of success, null otherwise.
     */
    public static function rightJoinWithout(TimeSlot $a, TimeSlot $b) {
        return self::leftJoinWithout($b, $a);
    }

    /**
     * Set the end date.
     *
     * @param DateTime $endDate The end date.
     * @return TimeSlot Returns this time slot.
     */
    protected function setEndDate(DateTime $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Set the start date.
     *
     * @param DateTime $startDate The start date.
     * @return TimeSlot Returns this time slot.
     */
    protected function setStartDate(DateTime $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Set the time slots.
     *
     * @param TimeSlot[] $timeSlots The time slots.
     * @return TimeSlot Returns this time slot.
     */
    protected function setTimeSlots(array $timeSlots) {
        $this->timeSlots = $timeSlots;
        return $this;
    }

}
