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
 * Dern err prepa fact.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DernErrPrepaFact {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

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
     * No chrono preparation.
     *
     * @var int
     */
    private $noChronoPreparation;

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
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
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
     * Get the no chrono preparation.
     *
     * @return int Returns the no chrono preparation.
     */
    public function getNoChronoPreparation() {
        return $this->noChronoPreparation;
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
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
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
     * Set the no chrono preparation.
     *
     * @param int $noChronoPreparation The no chrono preparation.
     */
    public function setNoChronoPreparation($noChronoPreparation) {
        $this->noChronoPreparation = $noChronoPreparation;
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
