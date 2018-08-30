<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\SkiData\Model;

use DateTime;

/**
 * SkiData customer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\SkiData\Model
 */
trait SkiDataCustomerTrait {

    /**
     * Customer number.
     *
     * @var integer
     */
    private $customerNumber;

    /**
     * Date/time of last modification.
     *
     * @var DateTime
     */
    private $datetimeLastModification;

    /**
     * Deleted record.
     *
     * @var boolean
     */
    private $deletedRecord;

    /**
     * Division.
     *
     * @var string
     */
    private $division;

    /**
     * E-mail.
     *
     * @var string
     */
    private $email;

    /**
     * Firstname.
     *
     * @var string
     */
    private $firstname;

    /**
     * Group counting.
     *
     * @var boolean
     */
    private $groupCounting;

    /**
     * Remarks.
     *
     * @var string
     */
    private $remarks;

    /**
     * Remarks 2.
     *
     * @var string
     */
    private $remarks2;

    /**
     * Remarks 3.
     *
     * @var string
     */
    private $remarks3;

    /**
     * Surname.
     *
     * @var string
     */
    private $surname;

    /**
     * Title.
     *
     * @var string
     */
    private $title;

    /**
     * Get the customer number.
     *
     * @return int Returns the customer number.
     */
    public function getCustomerNumber() {
        return $this->customerNumber;
    }

    /**
     * Get the date/time of last modification.
     *
     * @return DateTime Returns the date/time of last modification.
     */
    public function getDatetimeLastModification() {
        return $this->datetimeLastModification;
    }

    /**
     * Get the deleted record.
     *
     * @return bool Returns the deleted record.
     */
    public function getDeletedRecord() {
        return $this->deletedRecord;
    }

    /**
     * Get the division.
     *
     * @return string Returns the division.
     */
    public function getDivision() {
        return $this->division;
    }

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get the firstname.
     *
     * @return string Returns the firstname.
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Get the group counting.
     *
     * @return bool Returns the group counting.
     */
    public function getGroupCounting() {
        return $this->groupCounting;
    }

    /**
     * Get the remarks.
     *
     * @return string Returns the remarks.
     */
    public function getRemarks() {
        return $this->remarks;
    }

    /**
     * Get the remarks 2.
     *
     * @return string Returns the remarks 2.
     */
    public function getRemarks2() {
        return $this->remarks2;
    }

    /**
     * Get the remarks 3.
     *
     * @return string Returns the remarks 3.
     */
    public function getRemarks3() {
        return $this->remarks3;
    }

    /**
     * Get the surname.
     *
     * @return string Returns the surname.
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * Get the title.
     *
     * @return string Returns the title.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the customer number.
     *
     * @param int $customerNumber The customer number.
     */
    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    /**
     * Set the date/time of last modification.
     *
     * @param DateTime $datetimeLastModification The date/time of last modification.
     */
    public function setDatetimeLastModification(DateTime $datetimeLastModification = null) {
        $this->datetimeLastModification = $datetimeLastModification;
        return $this;
    }

    /**
     * Set the deleted record.
     *
     * @param bool $deletedRecord The deleted record.
     */
    public function setDeletedRecord($deletedRecord) {
        $this->deletedRecord = $deletedRecord;
        return $this;
    }

    /**
     * Set the division.
     *
     * @param string $division The division.
     */
    public function setDivision($division) {
        $this->division = $division;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the firstname.
     *
     * @param string $firstname The firstname.
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Set the group counting.
     *
     * @param bool $groupCounting The group counting.
     */
    public function setGroupCounting($groupCounting) {
        $this->groupCounting = $groupCounting;
        return $this;
    }

    /**
     * Set the remarks.
     *
     * @param string $remarks The remarks .
     */
    public function setRemarks($remarks) {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Set the remarks 2.
     *
     * @param string $remarks2 The remarks 2.
     */
    public function setRemarks2($remarks2) {
        $this->remarks2 = $remarks2;
        return $this;
    }

    /**
     * Set the remarks 3.
     *
     * @param string $remarks3 The remarks 3.
     */
    public function setRemarks3($remarks3) {
        $this->remarks3 = $remarks3;
        return $this;
    }

    /**
     * Set the surname.
     *
     * @param string $surname The surname.
     */
    public function setSurname($surname) {
        $this->surname = $surname;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

}
