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
use WBW\Library\Core\SkiData\Model\SkiDataCustomerTrait;

/**
 * SkiData user entity.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\SkiData\Entity
 */
class SkiDataUser {

    use SkiDataCustomerTrait;

    /**
     * Check licence plate.
     *
     * @var bool
     */
    private $checkLicensePlate;

    /**
     * Credit card number.
     *
     * @var string
     */
    private $creditCardNumber;

    /**
     * Date of birth.
     *
     * @var DateTime
     */
    private $dateBirth;

    /**
     * E-ticket authentication.
     *
     * @var int
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
     * @var int
     */
    private $eTicketServiceArt;

    /**
     * E-ticket service typ.
     *
     * @var int
     */
    private $eTicketServiceTyp;

    /**
     * E-ticket type p
     *
     * @var int
     */
    private $eTicketTypeP;

    /**
     * Excess times with creadit card.
     *
     * @var bool
     */
    private $excessTimesCreditCard;

    /**
     * Expiry date.
     *
     * @var DateTime
     */
    private $expiryDate;

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
     * @var bool
     */
    private $passageLicensePlatePermitted;

    /**
     * User number.
     *
     * @var int
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
     * Get the date of birth.
     *
     * @return DateTime Returns the date of birth.
     */
    public function getDateBirth() {
        return $this->dateBirth;
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
     * @param bool $passageLicensePlatePermitted The passage with license plate permitted.
     * @return SkiDataUser Returns this user entity.
     */
    public function setPassageLicensePlatePermitted($passageLicensePlatePermitted) {
        $this->passageLicensePlatePermitted = $passageLicensePlatePermitted;
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
