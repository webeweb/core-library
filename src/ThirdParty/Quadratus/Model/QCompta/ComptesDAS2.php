<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;


/**
 * Comptes d a s2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesDAS2 {

    /**
     * Avantage nature.
     *
     * @var float
     */
    private $avantageNature;

    /**
     * Indemnite rbt.
     *
     * @var float
     */
    private $indemniteRbt;

    /**
     * Montant1.
     *
     * @var float
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float
     */
    private $montant2;

    /**
     * Nature1.
     *
     * @var string
     */
    private $nature1;

    /**
     * Nature2.
     *
     * @var string
     */
    private $nature2;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Retenue source.
     *
     * @var float
     */
    private $retenueSource;

    /**
     * T v a d a.
     *
     * @var float
     */
    private $tVADA;

    /**
     * Type a n.
     *
     * @var string
     */
    private $typeAN;

    /**
     * Type i r.
     *
     * @var string
     */
    private $typeIR;

    /**
     * Type r s.
     *
     * @var string
     */
    private $typeRS;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avantage nature.
     *
     * @return float Returns the avantage nature.
     */
    public function getAvantageNature() {
        return $this->avantageNature;
    }

    /**
     * Get the indemnite rbt.
     *
     * @return float Returns the indemnite rbt.
     */
    public function getIndemniteRbt() {
        return $this->indemniteRbt;
    }

    /**
     * Get the montant1.
     *
     * @return float Returns the montant1.
     */
    public function getMontant1() {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float Returns the montant2.
     */
    public function getMontant2() {
        return $this->montant2;
    }

    /**
     * Get the nature1.
     *
     * @return string Returns the nature1.
     */
    public function getNature1() {
        return $this->nature1;
    }

    /**
     * Get the nature2.
     *
     * @return string Returns the nature2.
     */
    public function getNature2() {
        return $this->nature2;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the retenue source.
     *
     * @return float Returns the retenue source.
     */
    public function getRetenueSource() {
        return $this->retenueSource;
    }

    /**
     * Get the t v a d a.
     *
     * @return float Returns the t v a d a.
     */
    public function getTVADA() {
        return $this->tVADA;
    }

    /**
     * Get the type a n.
     *
     * @return string Returns the type a n.
     */
    public function getTypeAN() {
        return $this->typeAN;
    }

    /**
     * Get the type i r.
     *
     * @return string Returns the type i r.
     */
    public function getTypeIR() {
        return $this->typeIR;
    }

    /**
     * Get the type r s.
     *
     * @return string Returns the type r s.
     */
    public function getTypeRS() {
        return $this->typeRS;
    }

    /**
     * Set the avantage nature.
     *
     * @param float $avantageNature The avantage nature.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setAvantageNature($avantageNature) {
        $this->avantageNature = $avantageNature;
        return $this;
    }

    /**
     * Set the indemnite rbt.
     *
     * @param float $indemniteRbt The indemnite rbt.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setIndemniteRbt($indemniteRbt) {
        $this->indemniteRbt = $indemniteRbt;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float $montant1 The montant1.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setMontant1($montant1) {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the nature1.
     *
     * @param string $nature1 The nature1.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setNature1($nature1) {
        $this->nature1 = $nature1;
        return $this;
    }

    /**
     * Set the nature2.
     *
     * @param string $nature2 The nature2.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setNature2($nature2) {
        $this->nature2 = $nature2;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the retenue source.
     *
     * @param float $retenueSource The retenue source.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setRetenueSource($retenueSource) {
        $this->retenueSource = $retenueSource;
        return $this;
    }

    /**
     * Set the t v a d a.
     *
     * @param float $tVADA The t v a d a.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setTVADA($tVADA) {
        $this->tVADA = $tVADA;
        return $this;
    }

    /**
     * Set the type a n.
     *
     * @param string $typeAN The type a n.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setTypeAN($typeAN) {
        $this->typeAN = $typeAN;
        return $this;
    }

    /**
     * Set the type i r.
     *
     * @param string $typeIR The type i r.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setTypeIR($typeIR) {
        $this->typeIR = $typeIR;
        return $this;
    }

    /**
     * Set the type r s.
     *
     * @param string $typeRS The type r s.
     * @return ComptesDAS2 Returns this comptes d a s2.
     */
    public function setTypeRS($typeRS) {
        $this->typeRS = $typeRS;
        return $this;
    }
}
