<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes ata.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAta {

    /**
     * Avantages euro ou franc.
     *
     * @var string
     */
    private $avantagesEuroOuFranc;

    /**
     * Cs euro ou franc.
     *
     * @var string
     */
    private $csEuroOuFranc;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Frais pro soumis.
     *
     * @var float
     */
    private $fraisProSoumis;

    /**
     * Frais ps euro ou franc.
     *
     * @var string
     */
    private $fraisPsEuroOuFranc;

    /**
     * Indemnites euro ou franc.
     *
     * @var string
     */
    private $indemnitesEuroOuFranc;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Montant avantages.
     *
     * @var float
     */
    private $montantAvantages;

    /**
     * Montant cotis.
     *
     * @var float
     */
    private $montantCotis;

    /**
     * Montant euro ou franc.
     *
     * @var string
     */
    private $montantEuroOuFranc;

    /**
     * Montant indemnites.
     *
     * @var float
     */
    private $montantIndemnites;

    /**
     * Nb h trav.
     *
     * @var float
     */
    private $nbHTrav;

    /**
     * Num ligne.
     *
     * @var string
     */
    private $numLigne;

    /**
     * Numero attestation.
     *
     * @var string
     */
    private $numeroAttestation;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Taux ded sup.
     *
     * @var float
     */
    private $tauxDedSup;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avantages euro ou franc.
     *
     * @return string Returns the avantages euro ou franc.
     */
    public function getAvantagesEuroOuFranc() {
        return $this->avantagesEuroOuFranc;
    }

    /**
     * Get the cs euro ou franc.
     *
     * @return string Returns the cs euro ou franc.
     */
    public function getCsEuroOuFranc() {
        return $this->csEuroOuFranc;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime|null Returns the date echeance.
     */
    public function getDateEcheance() {
        return $this->dateEcheance;
    }

    /**
     * Get the frais pro soumis.
     *
     * @return float Returns the frais pro soumis.
     */
    public function getFraisProSoumis() {
        return $this->fraisProSoumis;
    }

    /**
     * Get the frais ps euro ou franc.
     *
     * @return string Returns the frais ps euro ou franc.
     */
    public function getFraisPsEuroOuFranc() {
        return $this->fraisPsEuroOuFranc;
    }

    /**
     * Get the indemnites euro ou franc.
     *
     * @return string Returns the indemnites euro ou franc.
     */
    public function getIndemnitesEuroOuFranc() {
        return $this->indemnitesEuroOuFranc;
    }

    /**
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Get the montant avantages.
     *
     * @return float Returns the montant avantages.
     */
    public function getMontantAvantages() {
        return $this->montantAvantages;
    }

    /**
     * Get the montant cotis.
     *
     * @return float Returns the montant cotis.
     */
    public function getMontantCotis() {
        return $this->montantCotis;
    }

    /**
     * Get the montant euro ou franc.
     *
     * @return string Returns the montant euro ou franc.
     */
    public function getMontantEuroOuFranc() {
        return $this->montantEuroOuFranc;
    }

    /**
     * Get the montant indemnites.
     *
     * @return float Returns the montant indemnites.
     */
    public function getMontantIndemnites() {
        return $this->montantIndemnites;
    }

    /**
     * Get the nb h trav.
     *
     * @return float Returns the nb h trav.
     */
    public function getNbHTrav() {
        return $this->nbHTrav;
    }

    /**
     * Get the num ligne.
     *
     * @return string Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the numero attestation.
     *
     * @return string Returns the numero attestation.
     */
    public function getNumeroAttestation() {
        return $this->numeroAttestation;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb() {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin() {
        return $this->periodeFin;
    }

    /**
     * Get the taux ded sup.
     *
     * @return float Returns the taux ded sup.
     */
    public function getTauxDedSup() {
        return $this->tauxDedSup;
    }

    /**
     * Set the avantages euro ou franc.
     *
     * @param string $avantagesEuroOuFranc The avantages euro ou franc.
     */
    public function setAvantagesEuroOuFranc($avantagesEuroOuFranc) {
        $this->avantagesEuroOuFranc = $avantagesEuroOuFranc;
        return $this;
    }

    /**
     * Set the cs euro ou franc.
     *
     * @param string $csEuroOuFranc The cs euro ou franc.
     */
    public function setCsEuroOuFranc($csEuroOuFranc) {
        $this->csEuroOuFranc = $csEuroOuFranc;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     */
    public function setDateEcheance(DateTime $dateEcheance = null) {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the frais pro soumis.
     *
     * @param float $fraisProSoumis The frais pro soumis.
     */
    public function setFraisProSoumis($fraisProSoumis) {
        $this->fraisProSoumis = $fraisProSoumis;
        return $this;
    }

    /**
     * Set the frais ps euro ou franc.
     *
     * @param string $fraisPsEuroOuFranc The frais ps euro ou franc.
     */
    public function setFraisPsEuroOuFranc($fraisPsEuroOuFranc) {
        $this->fraisPsEuroOuFranc = $fraisPsEuroOuFranc;
        return $this;
    }

    /**
     * Set the indemnites euro ou franc.
     *
     * @param string $indemnitesEuroOuFranc The indemnites euro ou franc.
     */
    public function setIndemnitesEuroOuFranc($indemnitesEuroOuFranc) {
        $this->indemnitesEuroOuFranc = $indemnitesEuroOuFranc;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant avantages.
     *
     * @param float $montantAvantages The montant avantages.
     */
    public function setMontantAvantages($montantAvantages) {
        $this->montantAvantages = $montantAvantages;
        return $this;
    }

    /**
     * Set the montant cotis.
     *
     * @param float $montantCotis The montant cotis.
     */
    public function setMontantCotis($montantCotis) {
        $this->montantCotis = $montantCotis;
        return $this;
    }

    /**
     * Set the montant euro ou franc.
     *
     * @param string $montantEuroOuFranc The montant euro ou franc.
     */
    public function setMontantEuroOuFranc($montantEuroOuFranc) {
        $this->montantEuroOuFranc = $montantEuroOuFranc;
        return $this;
    }

    /**
     * Set the montant indemnites.
     *
     * @param float $montantIndemnites The montant indemnites.
     */
    public function setMontantIndemnites($montantIndemnites) {
        $this->montantIndemnites = $montantIndemnites;
        return $this;
    }

    /**
     * Set the nb h trav.
     *
     * @param float $nbHTrav The nb h trav.
     */
    public function setNbHTrav($nbHTrav) {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string $numLigne The num ligne.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the taux ded sup.
     *
     * @param float $tauxDedSup The taux ded sup.
     */
    public function setTauxDedSup($tauxDedSup) {
        $this->tauxDedSup = $tauxDedSup;
        return $this;
    }
}
