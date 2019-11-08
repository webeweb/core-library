<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Ecritures rappro bancaire.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresRapproBancaire {

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Date rappro bancaire.
     *
     * @var DateTime|null
     */
    private $dateRapproBancaire;

    /**
     * Jour ecriture.
     *
     * @var string
     */
    private $jourEcriture;

    /**
     * Jrn rappro bancaire.
     *
     * @var string
     */
    private $jrnRapproBancaire;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant saisi credit.
     *
     * @var float
     */
    private $montantSaisiCredit;

    /**
     * Montant saisi debit.
     *
     * @var float
     */
    private $montantSaisiDebit;

    /**
     * Montant tenu credit.
     *
     * @var float
     */
    private $montantTenuCredit;

    /**
     * Montant tenu debit.
     *
     * @var float
     */
    private $montantTenuDebit;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Numero piece.
     *
     * @var string
     */
    private $numeroPiece;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

    /**
     * Rappro bancaire ok.
     *
     * @var bool
     */
    private $rapproBancaireOk;

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
     * Get the date rappro bancaire.
     *
     * @return DateTime|null Returns the date rappro bancaire.
     */
    public function getDateRapproBancaire() {
        return $this->dateRapproBancaire;
    }

    /**
     * Get the jour ecriture.
     *
     * @return string Returns the jour ecriture.
     */
    public function getJourEcriture() {
        return $this->jourEcriture;
    }

    /**
     * Get the jrn rappro bancaire.
     *
     * @return string Returns the jrn rappro bancaire.
     */
    public function getJrnRapproBancaire() {
        return $this->jrnRapproBancaire;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the montant saisi credit.
     *
     * @return float Returns the montant saisi credit.
     */
    public function getMontantSaisiCredit() {
        return $this->montantSaisiCredit;
    }

    /**
     * Get the montant saisi debit.
     *
     * @return float Returns the montant saisi debit.
     */
    public function getMontantSaisiDebit() {
        return $this->montantSaisiDebit;
    }

    /**
     * Get the montant tenu credit.
     *
     * @return float Returns the montant tenu credit.
     */
    public function getMontantTenuCredit() {
        return $this->montantTenuCredit;
    }

    /**
     * Get the montant tenu debit.
     *
     * @return float Returns the montant tenu debit.
     */
    public function getMontantTenuDebit() {
        return $this->montantTenuDebit;
    }

    /**
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the numero piece.
     *
     * @return string Returns the numero piece.
     */
    public function getNumeroPiece() {
        return $this->numeroPiece;
    }

    /**
     * Get the periode ecriture.
     *
     * @return DateTime|null Returns the periode ecriture.
     */
    public function getPeriodeEcriture() {
        return $this->periodeEcriture;
    }

    /**
     * Get the rappro bancaire ok.
     *
     * @return bool Returns the rappro bancaire ok.
     */
    public function getRapproBancaireOk() {
        return $this->rapproBancaireOk;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the date rappro bancaire.
     *
     * @param DateTime|null $dateRapproBancaire The date rappro bancaire.
     */
    public function setDateRapproBancaire(DateTime $dateRapproBancaire = null) {
        $this->dateRapproBancaire = $dateRapproBancaire;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string $jourEcriture The jour ecriture.
     */
    public function setJourEcriture($jourEcriture) {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the jrn rappro bancaire.
     *
     * @param string $jrnRapproBancaire The jrn rappro bancaire.
     */
    public function setJrnRapproBancaire($jrnRapproBancaire) {
        $this->jrnRapproBancaire = $jrnRapproBancaire;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant saisi credit.
     *
     * @param float $montantSaisiCredit The montant saisi credit.
     */
    public function setMontantSaisiCredit($montantSaisiCredit) {
        $this->montantSaisiCredit = $montantSaisiCredit;
        return $this;
    }

    /**
     * Set the montant saisi debit.
     *
     * @param float $montantSaisiDebit The montant saisi debit.
     */
    public function setMontantSaisiDebit($montantSaisiDebit) {
        $this->montantSaisiDebit = $montantSaisiDebit;
        return $this;
    }

    /**
     * Set the montant tenu credit.
     *
     * @param float $montantTenuCredit The montant tenu credit.
     */
    public function setMontantTenuCredit($montantTenuCredit) {
        $this->montantTenuCredit = $montantTenuCredit;
        return $this;
    }

    /**
     * Set the montant tenu debit.
     *
     * @param float $montantTenuDebit The montant tenu debit.
     */
    public function setMontantTenuDebit($montantTenuDebit) {
        $this->montantTenuDebit = $montantTenuDebit;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero piece.
     *
     * @param string $numeroPiece The numero piece.
     */
    public function setNumeroPiece($numeroPiece) {
        $this->numeroPiece = $numeroPiece;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     */
    public function setPeriodeEcriture(DateTime $periodeEcriture = null) {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the rappro bancaire ok.
     *
     * @param bool $rapproBancaireOk The rappro bancaire ok.
     */
    public function setRapproBancaireOk($rapproBancaireOk) {
        $this->rapproBancaireOk = $rapproBancaireOk;
        return $this;
    }
}
