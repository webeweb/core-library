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

/**
 * Start record format .
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\SkiData\Model
 */
class StartRecordFormat {

    /**
     * Currency.
     *
     * @var string
     */
    private $currency;

    /**
     * Date of file.
     *
     * @var DateTime
     */
    private $dateFile;

    /**
     * Facility number
     *
     * @var int
     */
    private $facilityNumber;

    /**
     * Number of records.
     *
     * @var int
     */
    private $numberRecords;

    /**
     * Version of record structure.
     *
     * @var int
     */
    private $versionRecordStructure;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the currency.
     *
     * @return string Returns the currency.
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * Get the date of file.
     *
     * @return DateTime Returns the date of file.
     */
    public function getDateFile() {
        return $this->dateFile;
    }

    /**
     * Get the facility number.
     *
     * @return int Returns the facility number.
     */
    public function getFacilityNumber() {
        return $this->facilityNumber;
    }

    /**
     * Get the number of records.
     *
     * @return int Returns the number of records.
     */
    public function getNumberRecords() {
        return $this->numberRecords;
    }

    /**
     * Get the version of record structure.
     *
     * @return int Returns the version of record structure.
     */
    public function getVersionRecordStructure() {
        return $this->versionRecordStructure;
    }

    /**
     * Set the currency.
     *
     * @param string $currency The currency.
     * @return StartRecordFormat Returns this start record format entity.
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Set the date of file.
     *
     * @param DateTime $dateFile The date of file.
     * @return StartRecordFormat Returns this start record format entity.
     */
    public function setDateFile(DateTime $dateFile = null) {
        $this->dateFile = $dateFile;
        return $this;
    }

    /**
     * Set the facility number.
     *
     * @param int $facilityNumber The facility number.
     * @return StartRecordFormat Returns this start record format entity.
     */
    public function setFacilityNumber($facilityNumber) {
        $this->facilityNumber = $facilityNumber;
        return $this;
    }

    /**
     * Set the number of records.
     *
     * @param int $numberRecords The number of records.
     * @return StartRecordFormat Returns this start record format entity.
     */
    public function setNumberRecords($numberRecords) {
        $this->numberRecords = $numberRecords;
        return $this;
    }

    /**
     * Set the version of record structure.
     *
     * @param int $versionRecordStructure The version of record structure.
     * @return StartRecordFormat Returns this start record format entity.
     */
    public function setVersionRecordStructure($versionRecordStructure) {
        $this->versionRecordStructure = $versionRecordStructure;
        return $this;
    }
}
