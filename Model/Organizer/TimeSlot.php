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
use WBW\Library\Core\Argument\DateTimeHelper;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

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
        if (false === DateTimeHelper::isLessThan($startDate, $endDate)) {
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
     * Get the duration.
     *
     * @return int Returns the duration.
     */
    public function getDuration() {
        return DateTimeHelper::getDuration($this->getStartDate(), $this->getEndDate());
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
     * Remove a time slot.
     *
     * @param TimeSlot $timeSlot The time slot.
     * @return TimeSlot Returns this time slot.
     */
    public function removeTimeSlot(TimeSlot $timeSlot) {
        for ($i = count($this->timeSlots) - 1; 0 <= $i; --$i) {
            if (true === TimeSlotHelper::equals($timeSlot, $this->timeSlots[$i])) {
                unset($this->timeSlots[$i]);
                break;
            }
        }
        return $this;
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
    protected function setTimeSlots($timeSlots) {
        $this->timeSlots = $timeSlots;
        return $this;
    }

}
