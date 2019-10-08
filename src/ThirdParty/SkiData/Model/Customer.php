<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\SkiData\Model;

use DateTime;
use WBW\Library\Core\ThirdParty\SkiData\Traits\CardTrait;
use WBW\Library\Core\ThirdParty\SkiData\Traits\CustomerTrait;

/**
 * Customer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\SkiData\Model
 */
class Customer {

    use CardTrait;
    use CustomerTrait;

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
     * City.
     *
     * @var string
     */
    private $city;

    /**
     * Counting of neutral cards.
     *
     * @var bool
     */
    private $countingNeutralCards;

    /**
     * Country.
     *
     * @var string
     */
    private $country;

    /**
     * Deposit.
     *
     * @var int
     */
    private $deposit;

    /**
     * Entry during max. level allowed.
     *
     * @var bool
     */
    private $entryMaxLevelAllowed;

    /**
     * ID document no.
     *
     * @var string
     */
    private $idDocumentNo;

    /**
     * Max. level per car park.
     *
     * @var bool
     */
    private $maxLevelCarPark;

    /**
     * Maximum level.
     *
     * @var int
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
     * @var bool
     */
    private $ticketReturnAllowed;

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
     * Get the city.
     *
     * @return string Returns the city.
     */
    public function getCity() {
        return $this->city;
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
     * Get the country.
     *
     * @return string Returns the country.
     */
    public function getCountry() {
        return $this->country;
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
     * Get the entry during max. level allowed.
     *
     * @return bool Returns the entry during max. level allowed.
     */
    public function getEntryMaxLevelAllowed() {
        return $this->entryMaxLevelAllowed;
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
     * Set the accounting number.
     *
     * @param string $accountingNumber The accounting number.
     * @return Customer Returns this customer entity.
     */
    public function setAccountingNumber($accountingNumber) {
        $this->accountingNumber = $accountingNumber;
        return $this;
    }

    /**
     * Set the begin date.
     *
     * @param DateTime $beginDate The begin date.
     * @return Customer Returns this customer entity.
     */
    public function setBeginDate(DateTime $beginDate = null) {
        $this->beginDate = $beginDate;
        return $this;
    }

    /**
     * Set the city.
     *
     * @param string $city The city.
     * @return Customer Returns this customer entity.
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Set the couting neutral cards.
     *
     * @param bool $countingNeutralCards The couting neutral cards.
     * @return Customer Returns this customer entity.
     */
    public function setCountingNeutralCards($countingNeutralCards) {
        $this->countingNeutralCards = $countingNeutralCards;
        return $this;
    }

    /**
     * Set the country.
     *
     * @param string $country The country.
     * @return Customer Returns this customer entity.
     */
    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Set the deposit.
     *
     * @param int $deposit The deposit.
     * @return Customer Returns this customer entity.
     */
    public function setDeposit($deposit) {
        $this->deposit = $deposit;
        return $this;
    }

    /**
     * Set the entry during max level allowed.
     *
     * @param bool $entryMaxLevelAllowed The entry during max level allowed.
     * @return Customer Returns this customer entity.
     */
    public function setEntryMaxLevelAllowed($entryMaxLevelAllowed) {
        $this->entryMaxLevelAllowed = $entryMaxLevelAllowed;
        return $this;
    }

    /**
     * Set the ID document no.
     *
     * @param string $idDocumentNo The ID document no.
     * @return Customer Returns this customer entity.
     */
    public function setIdDocumentNo($idDocumentNo) {
        $this->idDocumentNo = $idDocumentNo;
        return $this;
    }

    /**
     * Set the max level per car park.
     *
     * @param bool $maxLevelCarPark The max level per car park.
     * @return Customer Returns this customer entity.
     */
    public function setMaxLevelCarPark($maxLevelCarPark) {
        $this->maxLevelCarPark = $maxLevelCarPark;
        return $this;
    }

    /**
     * Set the maximum level.
     *
     * @param int $maximumLevel The maximum level.
     * @return Customer Returns this customer entity.
     */
    public function setMaximumLevel($maximumLevel) {
        $this->maximumLevel = $maximumLevel;
        return $this;
    }

    /**
     * Set the nationality.
     *
     * @param string $nationality The nationality.
     * @return Customer Returns this customer entity.
     */
    public function setNationality($nationality) {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * Set the PCode.
     *
     * @param string $pCode The PCode.
     * @return Customer Returns this customer entity.
     */
    public function setPCode($pCode) {
        $this->pCode = $pCode;
        return $this;
    }

    /**
     * Set the rental agreements no.
     *
     * @param string $rentalAgreementNo The rental agreement no.
     * @return Customer Returns this customer entity.
     */
    public function setRentalAgreementNo($rentalAgreementNo) {
        $this->rentalAgreementNo = $rentalAgreementNo;
        return $this;
    }

    /**
     * Set the street.
     *
     * @param string $street The street.
     * @return Customer Returns this customer entity.
     */
    public function setStreet($street) {
        $this->street = $street;
        return $this;
    }

    /**
     * Set the tax code.
     *
     * @param string $taxCode The tax code.
     * @return Customer Returns this customer entity.
     */
    public function setTaxCode($taxCode) {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     * @return Customer Returns this customer entity.
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the termination date.
     *
     * @param DateTime $terminationDate The termination date.
     * @return Customer Returns this customer entity.
     */
    public function setTerminationDate(DateTime $terminationDate = null) {
        $this->terminationDate = $terminationDate;
        return $this;
    }

    /**
     * Set the ticket return allowed.
     *
     * @param bool $ticketReturnAllowed The ticket return allowed.
     * @return Customer Returns this customer entity.
     */
    public function setTicketReturnAllowed($ticketReturnAllowed) {
        $this->ticketReturnAllowed = $ticketReturnAllowed;
        return $this;
    }
}
