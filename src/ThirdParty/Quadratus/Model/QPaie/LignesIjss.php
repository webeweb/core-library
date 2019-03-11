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
 * Lignes ijss model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesIjss {

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Montant2.
     *
     * @var float
     */
    private $montant2;

    /**
     * Montant euro ou franc.
     *
     * @var string
     */
    private $montantEuroOuFranc;

    /**
     * Motif.
     *
     * @var string
     */
    private $motif;

    /**
     * Mt brut perte salaire.
     *
     * @var float
     */
    private $mtBrutPerteSalaire;

    /**
     * Nb c.
     *
     * @var float
     */
    private $nbC;

    /**
     * Nb e.
     *
     * @var float
     */
    private $nbE;

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
     * Sal ret euro ou franc.
     *
     * @var string
     */
    private $salRetEuroOuFranc;

    /**
     * Salaire ret.
     *
     * @var float
     */
    private $salaireRet;

    /**
     * Somme regul1.
     *
     * @var float
     */
    private $sommeRegul1;

    /**
     * Somme regul2.
     *
     * @var float
     */
    private $sommeRegul2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the montant2.
     *
     * @return float Returns the montant2.
     */
    public function getMontant2() {
        return $this->montant2;
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
     * Get the motif.
     *
     * @return string Returns the motif.
     */
    public function getMotif() {
        return $this->motif;
    }

    /**
     * Get the mt brut perte salaire.
     *
     * @return float Returns the mt brut perte salaire.
     */
    public function getMtBrutPerteSalaire() {
        return $this->mtBrutPerteSalaire;
    }

    /**
     * Get the nb c.
     *
     * @return float Returns the nb c.
     */
    public function getNbC() {
        return $this->nbC;
    }

    /**
     * Get the nb e.
     *
     * @return float Returns the nb e.
     */
    public function getNbE() {
        return $this->nbE;
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
     * Get the sal ret euro ou franc.
     *
     * @return string Returns the sal ret euro ou franc.
     */
    public function getSalRetEuroOuFranc() {
        return $this->salRetEuroOuFranc;
    }

    /**
     * Get the salaire ret.
     *
     * @return float Returns the salaire ret.
     */
    public function getSalaireRet() {
        return $this->salaireRet;
    }

    /**
     * Get the somme regul1.
     *
     * @return float Returns the somme regul1.
     */
    public function getSommeRegul1() {
        return $this->sommeRegul1;
    }

    /**
     * Get the somme regul2.
     *
     * @return float Returns the somme regul2.
     */
    public function getSommeRegul2() {
        return $this->sommeRegul2;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant euro ou franc.
     *
     * @param string $montantEuroOuFranc The montant euro ou franc.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setMontantEuroOuFranc($montantEuroOuFranc) {
        $this->montantEuroOuFranc = $montantEuroOuFranc;
        return $this;
    }

    /**
     * Set the motif.
     *
     * @param string $motif The motif.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setMotif($motif) {
        $this->motif = $motif;
        return $this;
    }

    /**
     * Set the mt brut perte salaire.
     *
     * @param float $mtBrutPerteSalaire The mt brut perte salaire.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setMtBrutPerteSalaire($mtBrutPerteSalaire) {
        $this->mtBrutPerteSalaire = $mtBrutPerteSalaire;
        return $this;
    }

    /**
     * Set the nb c.
     *
     * @param float $nbC The nb c.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setNbC($nbC) {
        $this->nbC = $nbC;
        return $this;
    }

    /**
     * Set the nb e.
     *
     * @param float $nbE The nb e.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setNbE($nbE) {
        $this->nbE = $nbE;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string $numLigne The num ligne.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime $periodeDeb The periode deb.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime $periodeFin The periode fin.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the sal ret euro ou franc.
     *
     * @param string $salRetEuroOuFranc The sal ret euro ou franc.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setSalRetEuroOuFranc($salRetEuroOuFranc) {
        $this->salRetEuroOuFranc = $salRetEuroOuFranc;
        return $this;
    }

    /**
     * Set the salaire ret.
     *
     * @param float $salaireRet The salaire ret.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setSalaireRet($salaireRet) {
        $this->salaireRet = $salaireRet;
        return $this;
    }

    /**
     * Set the somme regul1.
     *
     * @param float $sommeRegul1 The somme regul1.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setSommeRegul1($sommeRegul1) {
        $this->sommeRegul1 = $sommeRegul1;
        return $this;
    }

    /**
     * Set the somme regul2.
     *
     * @param float $sommeRegul2 The somme regul2.
     * @return LignesIjss Returns this lignes ijss.
     */
    public function setSommeRegul2($sommeRegul2) {
        $this->sommeRegul2 = $sommeRegul2;
        return $this;
    }
}
