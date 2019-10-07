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

use DateTime;

/**
 * Dec tva ult model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaUlt {

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Code tva.
     *
     * @var int
     */
    private $codeTva;

    /**
     * Compteur.
     *
     * @var int
     */
    private $compteur;

    /**
     * Folio.
     *
     * @var int
     */
    private $folio;

    /**
     * Libelle ecr.
     *
     * @var string
     */
    private $libelleEcr;

    /**
     * Ligne folio.
     *
     * @var int
     */
    private $ligneFolio;

    /**
     * Montant h t.
     *
     * @var float
     */
    private $montantHT;

    /**
     * Montant t v a.
     *
     * @var float
     */
    private $montantTVA;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num uniq ecr.
     *
     * @var int
     */
    private $numUniqEcr;

    /**
     * Per dec.
     *
     * @var DateTime
     */
    private $perDec;

    /**
     * Per dec ult.
     *
     * @var DateTime
     */
    private $perDecUlt;

    /**
     * Periode ecriture.
     *
     * @var DateTime
     */
    private $periodeEcriture;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code journal.
     *
     * @return string Returns the code journal.
     */
    public function getCodeJournal() {
        return $this->codeJournal;
    }

    /**
     * Get the code tva.
     *
     * @return int Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the compteur.
     *
     * @return int Returns the compteur.
     */
    public function getCompteur() {
        return $this->compteur;
    }

    /**
     * Get the folio.
     *
     * @return int Returns the folio.
     */
    public function getFolio() {
        return $this->folio;
    }

    /**
     * Get the libelle ecr.
     *
     * @return string Returns the libelle ecr.
     */
    public function getLibelleEcr() {
        return $this->libelleEcr;
    }

    /**
     * Get the ligne folio.
     *
     * @return int Returns the ligne folio.
     */
    public function getLigneFolio() {
        return $this->ligneFolio;
    }

    /**
     * Get the montant h t.
     *
     * @return float Returns the montant h t.
     */
    public function getMontantHT() {
        return $this->montantHT;
    }

    /**
     * Get the montant t v a.
     *
     * @return float Returns the montant t v a.
     */
    public function getMontantTVA() {
        return $this->montantTVA;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the num uniq ecr.
     *
     * @return int Returns the num uniq ecr.
     */
    public function getNumUniqEcr() {
        return $this->numUniqEcr;
    }

    /**
     * Get the per dec.
     *
     * @return DateTime Returns the per dec.
     */
    public function getPerDec() {
        return $this->perDec;
    }

    /**
     * Get the per dec ult.
     *
     * @return DateTime Returns the per dec ult.
     */
    public function getPerDecUlt() {
        return $this->perDecUlt;
    }

    /**
     * Get the periode ecriture.
     *
     * @return DateTime Returns the periode ecriture.
     */
    public function getPeriodeEcriture() {
        return $this->periodeEcriture;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param int $codeTva The code tva.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the compteur.
     *
     * @param int $compteur The compteur.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setCompteur($compteur) {
        $this->compteur = $compteur;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int $folio The folio.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setFolio($folio) {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the libelle ecr.
     *
     * @param string $libelleEcr The libelle ecr.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setLibelleEcr($libelleEcr) {
        $this->libelleEcr = $libelleEcr;
        return $this;
    }

    /**
     * Set the ligne folio.
     *
     * @param int $ligneFolio The ligne folio.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setLigneFolio($ligneFolio) {
        $this->ligneFolio = $ligneFolio;
        return $this;
    }

    /**
     * Set the montant h t.
     *
     * @param float $montantHT The montant h t.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setMontantHT($montantHT) {
        $this->montantHT = $montantHT;
        return $this;
    }

    /**
     * Set the montant t v a.
     *
     * @param float $montantTVA The montant t v a.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setMontantTVA($montantTVA) {
        $this->montantTVA = $montantTVA;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq ecr.
     *
     * @param int $numUniqEcr The num uniq ecr.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setNumUniqEcr($numUniqEcr) {
        $this->numUniqEcr = $numUniqEcr;
        return $this;
    }

    /**
     * Set the per dec.
     *
     * @param DateTime $perDec The per dec.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setPerDec(DateTime $perDec = null) {
        $this->perDec = $perDec;
        return $this;
    }

    /**
     * Set the per dec ult.
     *
     * @param DateTime $perDecUlt The per dec ult.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setPerDecUlt(DateTime $perDecUlt = null) {
        $this->perDecUlt = $perDecUlt;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime $periodeEcriture The periode ecriture.
     * @return DecTvaUlt Returns this dec tva ult.
     */
    public function setPeriodeEcriture(DateTime $periodeEcriture = null) {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }
}
