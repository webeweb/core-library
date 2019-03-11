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
 * Lignes a t a model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesATA {

    /**
     * Avantages euro ou franc.
     *
     * @var string
     */
    private $avantagesEuroOuFranc;

    /**
     * C s euro ou franc.
     *
     * @var string
     */
    private $cSEuroOuFranc;

    /**
     * Date echeance.
     *
     * @var DateTime
     */
    private $dateEcheance;

    /**
     * Frais p s euro ou franc.
     *
     * @var string
     */
    private $fraisPSEuroOuFranc;

    /**
     * Frais pro soumis.
     *
     * @var float
     */
    private $fraisProSoumis;

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
     * @var DateTime
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime
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
     * Get the c s euro ou franc.
     *
     * @return string Returns the c s euro ou franc.
     */
    public function getCSEuroOuFranc() {
        return $this->cSEuroOuFranc;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime Returns the date echeance.
     */
    public function getDateEcheance() {
        return $this->dateEcheance;
    }

    /**
     * Get the frais p s euro ou franc.
     *
     * @return string Returns the frais p s euro ou franc.
     */
    public function getFraisPSEuroOuFranc() {
        return $this->fraisPSEuroOuFranc;
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
     * @return DateTime Returns the periode deb.
     */
    public function getPeriodeDeb() {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime Returns the periode fin.
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
     * @return LignesATA Returns this lignes a t a.
     */
    public function setAvantagesEuroOuFranc($avantagesEuroOuFranc) {
        $this->avantagesEuroOuFranc = $avantagesEuroOuFranc;
        return $this;
    }

    /**
     * Set the c s euro ou franc.
     *
     * @param string $cSEuroOuFranc The c s euro ou franc.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setCSEuroOuFranc($cSEuroOuFranc) {
        $this->cSEuroOuFranc = $cSEuroOuFranc;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime $dateEcheance The date echeance.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setDateEcheance(DateTime $dateEcheance = null) {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the frais p s euro ou franc.
     *
     * @param string $fraisPSEuroOuFranc The frais p s euro ou franc.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setFraisPSEuroOuFranc($fraisPSEuroOuFranc) {
        $this->fraisPSEuroOuFranc = $fraisPSEuroOuFranc;
        return $this;
    }

    /**
     * Set the frais pro soumis.
     *
     * @param float $fraisProSoumis The frais pro soumis.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setFraisProSoumis($fraisProSoumis) {
        $this->fraisProSoumis = $fraisProSoumis;
        return $this;
    }

    /**
     * Set the indemnites euro ou franc.
     *
     * @param string $indemnitesEuroOuFranc The indemnites euro ou franc.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setIndemnitesEuroOuFranc($indemnitesEuroOuFranc) {
        $this->indemnitesEuroOuFranc = $indemnitesEuroOuFranc;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant avantages.
     *
     * @param float $montantAvantages The montant avantages.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setMontantAvantages($montantAvantages) {
        $this->montantAvantages = $montantAvantages;
        return $this;
    }

    /**
     * Set the montant cotis.
     *
     * @param float $montantCotis The montant cotis.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setMontantCotis($montantCotis) {
        $this->montantCotis = $montantCotis;
        return $this;
    }

    /**
     * Set the montant euro ou franc.
     *
     * @param string $montantEuroOuFranc The montant euro ou franc.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setMontantEuroOuFranc($montantEuroOuFranc) {
        $this->montantEuroOuFranc = $montantEuroOuFranc;
        return $this;
    }

    /**
     * Set the montant indemnites.
     *
     * @param float $montantIndemnites The montant indemnites.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setMontantIndemnites($montantIndemnites) {
        $this->montantIndemnites = $montantIndemnites;
        return $this;
    }

    /**
     * Set the nb h trav.
     *
     * @param float $nbHTrav The nb h trav.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setNbHTrav($nbHTrav) {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string $numLigne The num ligne.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime $periodeDeb The periode deb.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime $periodeFin The periode fin.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the taux ded sup.
     *
     * @param float $tauxDedSup The taux ded sup.
     * @return LignesATA Returns this lignes a t a.
     */
    public function setTauxDedSup($tauxDedSup) {
        $this->tauxDedSup = $tauxDedSup;
        return $this;
    }
}
