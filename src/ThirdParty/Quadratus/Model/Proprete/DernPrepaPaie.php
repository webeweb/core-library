<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Dern prepa paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DernPrepaPaie {

    /**
     * Alerte rouge.
     *
     * @var bool
     */
    private $alerteRouge;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Designation.
     *
     * @var string
     */
    private $designation;

    /**
     * Dt prepa.
     *
     * @var DateTime|null
     */
    private $dtPrepa;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the alerte rouge.
     *
     * @return bool Returns the alerte rouge.
     */
    public function getAlerteRouge() {
        return $this->alerteRouge;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the designation.
     *
     * @return string Returns the designation.
     */
    public function getDesignation() {
        return $this->designation;
    }

    /**
     * Get the dt prepa.
     *
     * @return DateTime|null Returns the dt prepa.
     */
    public function getDtPrepa() {
        return $this->dtPrepa;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Set the alerte rouge.
     *
     * @param bool $alerteRouge The alerte rouge.
     */
    public function setAlerteRouge($alerteRouge) {
        $this->alerteRouge = $alerteRouge;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the dt prepa.
     *
     * @param DateTime|null $dtPrepa The dt prepa.
     */
    public function setDtPrepa(DateTime $dtPrepa = null) {
        $this->dtPrepa = $dtPrepa;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }
}
