<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Devises.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Devises {

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Nb dec.
     *
     * @var string
     */
    private $nbDec;

    /**
     * Taux.
     *
     * @var float
     */
    private $taux;

    /**
     * Use nb dec.
     *
     * @var bool
     */
    private $useNbDec;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the nb dec.
     *
     * @return string Returns the nb dec.
     */
    public function getNbDec() {
        return $this->nbDec;
    }

    /**
     * Get the taux.
     *
     * @return float Returns the taux.
     */
    public function getTaux() {
        return $this->taux;
    }

    /**
     * Get the use nb dec.
     *
     * @return bool Returns the use nb dec.
     */
    public function getUseNbDec() {
        return $this->useNbDec;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return Devises Returns this Devises.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return Devises Returns this Devises.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the nb dec.
     *
     * @param string $nbDec The nb dec.
     * @return Devises Returns this Devises.
     */
    public function setNbDec($nbDec) {
        $this->nbDec = $nbDec;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float $taux The taux.
     * @return Devises Returns this Devises.
     */
    public function setTaux($taux) {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the use nb dec.
     *
     * @param bool $useNbDec The use nb dec.
     * @return Devises Returns this Devises.
     */
    public function setUseNbDec($useNbDec) {
        $this->useNbDec = $useNbDec;
        return $this;
    }
}
