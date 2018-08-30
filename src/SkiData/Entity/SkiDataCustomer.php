<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\SkiData\Entity;

use DateTime;

/**
 * SkiData customer entity.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\SkiData\Entity
 */
class SkiDataCustomer {

    /**
     * Accounting number
     *
     * @var string
     */
    private $accountingNumber;

    /**
     * Begin date.
     *
     * @var DateTime
     */
    private $beginDate;

    /**
     * Blocked.
     *
     * @var boolean
     */
    private $blocked;

    /**
     * Blocked as of date.
     *
     * @var DateTime
     */
    private $blockedDate;

    /**
     * Counting of neutral cards.
     *
     * @var boolean
     */
    private $countingNeutralCards;

    /**
     * City.
     *
     * @var string
     */
    private $city;

    /**
     * Country.
     *
     * @var string
     */
    private $country;

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
     * Deposit.
     *
     * @var integer
     */
    private $deposit;

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
     * Entry during max. level allowed.
     *
     * @var boolean
     */
    private $entryMaxLevelAllowed;

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
     * ID document no.
     *
     * @var string
     */
    private $idDocumentNo;

    /**
     * Max. level per car park.
     *
     * @var boolean
     */
    private $maxLevelCarPark;

    /**
     * Maximum level.
     *
     * @var integer
     */
    private $maximumLevel;

    /**
     * Natinality.
     *
     * @var string
     */
    private $nationality;

    /**
     * PCode.
     *
     * @var string
     */
    private $pCode;

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
     * Rental agreement no.
     *
     * @var string
     */
    private $rentalAgreementNo;

    /**
     * Street.
     *
     * @var string
     */
    private $street;

    /**
     * Surname.
     *
     * @var string
     */
    private $surname;

    /**
     * Tax code.
     *
     * @var string
     */
    private $taxCode;

    /**
     * Telephone.
     *
     * @var string
     */
    private $telephone;

    /**
     * Termination date.
     *
     * @var DateTime
     */
    private $terminationDate;

    /**
     * Ticket return allowed.
     *
     * @var boolean
     */
    private $ticketReturnAllowed;

    /**
     * Title.
     *
     * @var string
     */
    private $title;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the accounting number.
     *
     * @return string Returns the accounting number.
     */
    public function getAccountingNumber() {
        return $this->accountingNumber;
    }

    /**
     * Get the begin date.
     *
     * @return DateTime Returns the begin date.
     */
    public function getBeginDate() {
        return $this->beginDate;
    }

    /**
     * Get the blocked.
     *
     * @return bool Returns the blocked.
     */
    public function getBlocked() {
        return $this->blocked;
    }

    /**
     * Get the blocked as of date.
     *
     * @return DateTime Returns the blocked as of date.
     */
    public function getBlockedDate() {
        return $this->blockedDate;
    }

    /**
     * Get the couting neutral cards.
     *
     * @return bool Returns the couting neutral cards.
     */
    public function getCountingNeutralCards() {
        return $this->countingNeutralCards;
    }

    /**
     * Get the city.
     *
     * @return string Returns the city.
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Get the country.
     *
     * @return string Returns the country.
     */
    public function getCountry() {
        return $this->country;
    }

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
     * Get the deposit.
     *
     * @return int Returns the deposit.
     */
    public function getDeposit() {
        return $this->deposit;
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
     * Get the entry during max. level allowed.
     *
     * @return bool Returns the entry during max. level allowed.
     */
    public function getEntryMaxLevelAllowed() {
        return $this->entryMaxLevelAllowed;
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
     * @return bool Returns the group couting.
     */
    public function getGroupCounting() {
        return $this->groupCounting;
    }

    /**
     * Get the ID document no.
     *
     * @return string Returns the ID document no.
     */
    public function getIdDocumentNo() {
        return $this->idDocumentNo;
    }

    /**
     * Get the max level per car park.
     *
     * @return bool Returns the max level per car park.
     */
    public function getMaxLevelCarPark() {
        return $this->maxLevelCarPark;
    }

    /**
     * Get the maximum level.
     *
     * @return int Returns the maximum level.
     */
    public function getMaximumLevel() {
        return $this->maximumLevel;
    }

    /**
     * Get the nationality.
     *
     * @return string Returns the nationality.
     */
    public function getNationality() {
        return $this->nationality;
    }

    /**
     * Get the PCode.
     *
     * @return string Returns the PCode.
     */
    public function getPCode() {
        return $this->pCode;
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
     * Get the rental aggreement no.
     *
     * @return string Returns the rental agreement no.
     */
    public function getRentalAgreementNo() {
        return $this->rentalAgreementNo;
    }

    /**
     * Get the street.
     *
     * @return string Returns the street.
     */
    public function getStreet() {
        return $this->street;
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
     * Get the tax code.
     *
     * @return string Returns the tax code.
     */
    public function getTaxCode() {
        return $this->taxCode;
    }

    /**
     * Get the telephone.
     *
     * @return string Return the telephone.
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Get the termination date.
     *
     * @return DateTime Returns the termination date.
     */
    public function getTerminationDate() {
        return $this->terminationDate;
    }

    /**
     * Get the ticket return allowed.
     *
     * @return bool Returns the ticket return allowed.
     */
    public function getTicketReturnAllowed() {
        return $this->ticketReturnAllowed;
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
     * Set the accounting number.
     *
     * @param string $accountingNumber The accounting number.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setAccountingNumber($accountingNumber) {
        $this->accountingNumber = $accountingNumber;
        return $this;
    }

    /**
     * Set the begin date.
     *
     * @param DateTime $beginDate The begin date.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setBeginDate(DateTime $beginDate = null) {
        $this->beginDate = $beginDate;
        return $this;
    }

    /**
     * Set the blocked.
     *
     * @param bool $blocked The blocked.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setBlocked($blocked) {
        $this->blocked = $blocked;
        return $this;
    }

    /**
     * Set the blocked as of date.
     *
     * @param DateTime $blockedDate The blocked as of date.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setBlockedDate(DateTime $blockedDate = null) {
        $this->blockedDate = $blockedDate;
        return $this;
    }

    /**
     * Set the couting neutral cards.
     *
     * @param bool $countingNeutralCards The couting neutral cards.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setCountingNeutralCards($countingNeutralCards) {
        $this->countingNeutralCards = $countingNeutralCards;
        return $this;
    }

    /**
     * Set the city.
     *
     * @param string $city The city.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Set the country.
     *
     * @param string $country The country.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Set the customer number.
     *
     * @param int $customerNumber The customer number.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    /**
     * Set the date/time of last modification.
     *
     * @param DateTime $datetimeLastModification The date/time of last modification.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setDatetimeLastModification(DateTime $datetimeLastModification = null) {
        $this->datetimeLastModification = $datetimeLastModification;
        return $this;
    }

    /**
     * Set the deleted record.
     *
     * @param bool $deletedRecord The deleted record.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setDeletedRecord($deletedRecord) {
        $this->deletedRecord = $deletedRecord;
        return $this;
    }

    /**
     * Set the deposit.
     *
     * @param int $deposit The deposit.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setDeposit($deposit) {
        $this->deposit = $deposit;
        return $this;
    }

    /**
     * Set the division.
     *
     * @param string $division The division.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setDivision($division) {
        $this->division = $division;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the entry during max level allowed.
     *
     * @param bool $entryMaxLevelAllowed The entry during max level allowed.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setEntryMaxLevelAllowed($entryMaxLevelAllowed) {
        $this->entryMaxLevelAllowed = $entryMaxLevelAllowed;
        return $this;
    }

    /**
     * Set the firstname.
     *
     * @param string $firstname The firstname.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Set the group counting.
     *
     * @param bool $groupCouting The group counting.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setGroupCounting($groupCouting) {
        $this->groupCounting = $groupCouting;
        return $this;
    }

    /**
     * Set the ID document no.
     *
     * @param string $idDocumentNo The ID document no.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setIdDocumentNo($idDocumentNo) {
        $this->idDocumentNo = $idDocumentNo;
        return $this;
    }

    /**
     * Set the max level per car park.
     *
     * @param bool $maxLevelCarPark The max level per car park.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setMaxLevelCarPark($maxLevelCarPark) {
        $this->maxLevelCarPark = $maxLevelCarPark;
        return $this;
    }

    /**
     * Set the maximum level.
     *
     * @param int $maximumLevel The maximum level.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setMaximumLevel($maximumLevel) {
        $this->maximumLevel = $maximumLevel;
        return $this;
    }

    /**
     * Set the nationality.
     *
     * @param string $nationality The nationality.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setNationality($nationality) {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * Set the PCode.
     *
     * @param string $pCode The PCode.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setPCode($pCode) {
        $this->pCode = $pCode;
        return $this;
    }

    /**
     * Set the remarks.
     *
     * @param string $remarks The remarks.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setRemarks($remarks) {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Set the remarks 2.
     *
     * @param string $remarks2 The remarks 2.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setRemarks2($remarks2) {
        $this->remarks2 = $remarks2;
        return $this;
    }

    /**
     * Set the remarks 3.
     *
     * @param string $remarks3 The remarks 3.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setRemarks3($remarks3) {
        $this->remarks3 = $remarks3;
        return $this;
    }

    /**
     * Set the rental agreements no.
     *
     * @param string $rentalAgreementNo The rental agreement no.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setRentalAgreementNo($rentalAgreementNo) {
        $this->rentalAgreementNo = $rentalAgreementNo;
        return $this;
    }

    /**
     * Set the street.
     *
     * @param string $street The street.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setStreet($street) {
        $this->street = $street;
        return $this;
    }

    /**
     * Set the surname.
     *
     * @param string $surname The surname.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setSurname($surname) {
        $this->surname = $surname;
        return $this;
    }

    /**
     * Set the tax code.
     *
     * @param string $taxCode The tax code.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setTaxCode($taxCode) {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the termination date.
     *
     * @param DateTime $terminationDate The termination date.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setTerminationDate(DateTime $terminationDate = null) {
        $this->terminationDate = $terminationDate;
        return $this;
    }

    /**
     * Set the ticket return allowed.
     *
     * @param bool $ticketReturnAllowed The ticket return allowed.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setTicketReturnAllowed($ticketReturnAllowed) {
        $this->ticketReturnAllowed = $ticketReturnAllowed;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return SkiDataCustomer Returns this customer entity.
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

}
