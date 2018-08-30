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
 * SkiData user entity.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\SkiData\Entity
 */
class SkiDataUser {

    /**
     * Check licence plate.
     *
     * @var boolean
     */
    private $checkLicensePlate;

    /**
     * Credit card number.
     *
     * @var string
     */
    private $creditCardNumber;

    /**
     * Customer number.
     *
     * @var integer
     */
    private $customerNumber;

    /**
     * Date of birth.
     *
     * @var DateTime
     */
    private $dateBirth;

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
     * E-ticket authentication.
     *
     * @var integer
     */
    private $eTicketAuthentication;

    /**
     * E-ticket email/telephone.
     *
     * @var string
     */
    private $eTicketEmailTelephone;

    /**
     * E-ticket service art.
     *
     * @var integer
     */
    private $eTicketServiceArt;

    /**
     * E-ticket service typ.
     *
     * @var integer
     */
    private $eTicketServiceTyp;

    /**
     * E-ticket type p
     *
     * @var integer
     */
    private $eTicketTypeP;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Excess times with creadit card.
     *
     * @var boolean
     */
    private $excessTimesCreditCard;

    /**
     * Expiry date.
     *
     * @var DateTime
     */
    private $expiryDate;

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
     * Identification number.
     *
     * @var string
     */
    private $identificationNumber;

    /**
     * Parking space.
     *
     * @var string
     */
    private $parkingSpace;

    /**
     * Passage with license plate permitted
     *
     * @var boolean
     */
    private $passageLicensePlatePermitted;

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
     * Username.
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
     * User number.
     *
     * @var integer
     */
    private $userNumber;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the check licence plate.
     *
     * @return bool Returns the check licence plate
     */
    public function getCheckLicensePlate() {
        return $this->checkLicensePlate;
    }

    /**
     * Get the credit card number.
     *
     * @return string Returns the credit card number.
     */
    public function getCreditCardNumber() {
        return $this->creditCardNumber;
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
     * Get the date of birth.
     *
     * @return DateTime Returns the date of birth.
     */
    public function getDateBirth() {
        return $this->dateBirth;
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
     * Get the E-ticket authentication.
     *
     * @return int Returns the E-ticket authentication.
     */
    public function getETicketAuthentication() {
        return $this->eTicketAuthentication;
    }

    /**
     * Get the E-ticket email/telephone.
     *
     * @return string Returns the E-ticket email/telephone.
     */
    public function getETicketEmailTelephone() {
        return $this->eTicketEmailTelephone;
    }

    /**
     * Get the E-ticket service art.
     *
     * @return int Returns the E-ticket service art.
     */
    public function getETicketServiceArt() {
        return $this->eTicketServiceArt;
    }

    /**
     * Get the E-ticket service typ.
     *
     * @return int Returns the E-ticket service typ.
     */
    public function getETicketServiceTyp() {
        return $this->eTicketServiceTyp;
    }

    /**
     * Get the E-ticket type p.
     *
     * @return int Returns the E-ticket type p.
     */
    public function getETicketTypeP() {
        return $this->eTicketTypeP;
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
     * Get the excess times with credit card.
     *
     * @return bool Returns the excess times with credit card.
     */
    public function getExcessTimesCreditCard() {
        return $this->excessTimesCreditCard;
    }

    /**
     * Get the expiry date.
     *
     * @return DateTime Returns the expiry date.
     */
    public function getExpiryDate() {
        return $this->expiryDate;
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
     * Get the identifiation number.
     *
     * @return string Returns the identification number.
     */
    public function getIdentificationNumber() {
        return $this->identificationNumber;
    }

    /**
     * Get the parking space.
     *
     * @return string Returns the parking space.
     */
    public function getParkingSpace() {
        return $this->parkingSpace;
    }

    /**
     * Get the passage with license plate permitted.
     *
     * @return bool Returns teh passage with license plate permitted.
     */
    public function getPassageLicensePlatePermitted() {
        return $this->passageLicensePlatePermitted;
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
     * Get the user number.
     *
     * @return int Returns the user number.
     */
    public function getUserNumber() {
        return $this->userNumber;
    }

    /**
     * Set the check with license plate.
     *
     * @param bool $checkLicensePlate The check with license plate.
     * @return SkiDataUser Returns this user entity.
     */
    public function setCheckLicensePlate($checkLicensePlate) {
        $this->checkLicensePlate = $checkLicensePlate;
        return $this;
    }

    /**
     * Set the credit card number.
     *
     * @param string $creditCardNumber The credit card number.
     * @return SkiDataUser Returns this user entity.
     */
    public function setCreditCardNumber($creditCardNumber) {
        $this->creditCardNumber = $creditCardNumber;
        return $this;
    }

    /**
     * Set the customer number.
     *
     * @param int $customerNumber The customer number.
     * @return SkiDataUser Returns this user entity.
     */
    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    /**
     * Set the date of birth.
     *
     * @param DateTime $dateBirth The date of birth.
     * @return SkiDataUser Returns this user entity.
     */
    public function setDateBirth(DateTime $dateBirth = null) {
        $this->dateBirth = $dateBirth;
        return $this;
    }

    /**
     * Set the date/time of last modification.
     *
     * @param DateTime $datetimeLastModification The date/time of last modification.
     * @return SkiDataUser Returns this user entity.
     */
    public function setDatetimeLastModification(DateTime $datetimeLastModification = null) {
        $this->datetimeLastModification = $datetimeLastModification;
        return $this;
    }

    /**
     * Set the deleted record.
     *
     * @param bool $deletedRecord The deleted record.
     * @return SkiDataUser Returns this user entity.
     */
    public function setDeletedRecord($deletedRecord) {
        $this->deletedRecord = $deletedRecord;
        return $this;
    }

    /**
     * Set the division.
     *
     * @param string $division The division.
     * @return SkiDataUser Returns this user entity.
     */
    public function setDivision($division) {
        $this->division = $division;
        return $this;
    }

    /**
     * Set the E-ticket authentication.
     *
     * @param int $eTicketAuthentication The E-ticket authentication.
     * @return SkiDataUser Returns this user entity.
     */
    public function setETicketAuthentication($eTicketAuthentication) {
        $this->eTicketAuthentication = $eTicketAuthentication;
        return $this;
    }

    /**
     * Set the E-ticket email/telephone.
     *
     * @param string $eTicketEmailTelephone The E-ticket email/telephone.
     * @return SkiDataUser Returns this user entity.
     */
    public function setETicketEmailTelephone($eTicketEmailTelephone) {
        $this->eTicketEmailTelephone = $eTicketEmailTelephone;
        return $this;
    }

    /**
     * Set the E-ticket service art.
     *
     * @param int $eTicketServiceArt The E-ticket service art.
     * @return SkiDataUser Returns this user entity.
     */
    public function setETicketServiceArt($eTicketServiceArt) {
        $this->eTicketServiceArt = $eTicketServiceArt;
        return $this;
    }

    /**
     * Set the E-ticket service typ.
     *
     * @param int $eTicketServiceTyp The E-ticket service typ.
     * @return SkiDataUser Returns this user entity.
     */
    public function setETicketServiceTyp($eTicketServiceTyp) {
        $this->eTicketServiceTyp = $eTicketServiceTyp;
        return $this;
    }

    /**
     * Set the E-ticket type p.
     *
     * @param int $eTicketTypeP The E-ticket type p.
     * @return SkiDataUser Returns this user entity.
     */
    public function setETicketTypeP($eTicketTypeP) {
        $this->eTicketTypeP = $eTicketTypeP;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return SkiDataUser Returns this user entity.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the excess times with credit card.
     *
     * @param bool $excessTimesCreditCard The excess times with credit card.
     * @return SkiDataUser Returns this user entity.
     */
    public function setExcessTimesCreditCard($excessTimesCreditCard) {
        $this->excessTimesCreditCard = $excessTimesCreditCard;
        return $this;
    }

    /**
     * Set the expiry date.
     *
     * @param DateTime $expiryDate The expiry date.
     * @return SkiDataUser Returns this user entity.
     */
    public function setExpiryDate(DateTime $expiryDate = null) {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Set the firstname.
     *
     * @param string $firstname The firstname.
     * @return SkiDataUser Returns this user entity.
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Set the group counting.
     *
     * @param bool $groupCounting The group counting.
     * @return SkiDataUser Returns this user entity.
     */
    public function setGroupCounting($groupCounting) {
        $this->groupCounting = $groupCounting;
        return $this;
    }

    /**
     * Set the identification number.
     *
     * @param string $identificationNumber The identification number.
     * @return SkiDataUser Returns this user entity.
     */
    public function setIdentificationNumber($identificationNumber) {
        $this->identificationNumber = $identificationNumber;
        return $this;
    }

    /**
     * Set the parking space.
     *
     * @param string $parkingSpace The parking space.
     * @return SkiDataUser Returns this user entity.
     */
    public function setParkingSpace($parkingSpace) {
        $this->parkingSpace = $parkingSpace;
        return $this;
    }

    /**
     * Set the passage with license plate permitted.
     *
     * @return SkiDataUser Returns this user entity.
     * @param bool $passageLicensePlatePermitted The passage with license plate permitted.
     */
    public function setPassageLicensePlatePermitted($passageLicensePlatePermitted) {
        $this->passageLicensePlatePermitted = $passageLicensePlatePermitted;
        return $this;
    }

    /**
     * Set the remarks.
     *
     * @param string $remarks The remarks.
     * @return SkiDataUser Returns this user entity.
     */
    public function setRemarks($remarks) {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Set the remarks 2.
     *
     * @param string $remarks2 The remarks 2.
     * @return SkiDataUser Returns this user entity.
     */
    public function setRemarks2($remarks2) {
        $this->remarks2 = $remarks2;
        return $this;
    }

    /**
     * Set the remarks 3.
     *
     * @param string $remarks3 The remarks 3.
     * @return SkiDataUser Returns this user entity.
     */
    public function setRemarks3($remarks3) {
        $this->remarks3 = $remarks3;
        return $this;
    }

    /**
     * Set the surname.
     *
     * @param string $surname The surname.
     * @return SkiDataUser Returns this user entity.
     */
    public function setSurname($surname) {
        $this->surname = $surname;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return SkiDataUser Returns this user entity.
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the user number.
     *
     * @param int $userNumber The user number.
     * @return SkiDataUser Returns this user entity.
     */
    public function setUserNumber($userNumber) {
        $this->userNumber = $userNumber;
        return $this;
    }

}
