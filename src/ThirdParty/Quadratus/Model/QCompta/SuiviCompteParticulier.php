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
 * Suivi compte particulier.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class SuiviCompteParticulier {

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Code lettrage.
     *
     * @var string
     */
    private $codeLettrage;

    /**
     * Code libelle auto.
     *
     * @var string
     */
    private $codeLibelleAuto;

    /**
     * Code operateur.
     *
     * @var string
     */
    private $codeOperateur;

    /**
     * Date operation.
     *
     * @var DateTime|null
     */
    private $dateOperation;

    /**
     * Folio.
     *
     * @var int
     */
    private $folio;

    /**
     * Jour ecriture.
     *
     * @var string
     */
    private $jourEcriture;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Ligne folio.
     *
     * @var int
     */
    private $ligneFolio;

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
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

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
     * Type ligne.
     *
     * @var string
     */
    private $typeLigne;

    /**
     * Type operation.
     *
     * @var string
     */
    private $typeOperation;

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
     * Get the code lettrage.
     *
     * @return string Returns the code lettrage.
     */
    public function getCodeLettrage() {
        return $this->codeLettrage;
    }

    /**
     * Get the code libelle auto.
     *
     * @return string Returns the code libelle auto.
     */
    public function getCodeLibelleAuto() {
        return $this->codeLibelleAuto;
    }

    /**
     * Get the code operateur.
     *
     * @return string Returns the code operateur.
     */
    public function getCodeOperateur() {
        return $this->codeOperateur;
    }

    /**
     * Get the date operation.
     *
     * @return DateTime|null Returns the date operation.
     */
    public function getDateOperation() {
        return $this->dateOperation;
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
     * Get the jour ecriture.
     *
     * @return string Returns the jour ecriture.
     */
    public function getJourEcriture() {
        return $this->jourEcriture;
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
     * Get the ligne folio.
     *
     * @return int Returns the ligne folio.
     */
    public function getLigneFolio() {
        return $this->ligneFolio;
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
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
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
     * Get the type ligne.
     *
     * @return string Returns the type ligne.
     */
    public function getTypeLigne() {
        return $this->typeLigne;
    }

    /**
     * Get the type operation.
     *
     * @return string Returns the type operation.
     */
    public function getTypeOperation() {
        return $this->typeOperation;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code lettrage.
     *
     * @param string $codeLettrage The code lettrage.
     */
    public function setCodeLettrage($codeLettrage) {
        $this->codeLettrage = $codeLettrage;
        return $this;
    }

    /**
     * Set the code libelle auto.
     *
     * @param string $codeLibelleAuto The code libelle auto.
     */
    public function setCodeLibelleAuto($codeLibelleAuto) {
        $this->codeLibelleAuto = $codeLibelleAuto;
        return $this;
    }

    /**
     * Set the code operateur.
     *
     * @param string $codeOperateur The code operateur.
     */
    public function setCodeOperateur($codeOperateur) {
        $this->codeOperateur = $codeOperateur;
        return $this;
    }

    /**
     * Set the date operation.
     *
     * @param DateTime|null $dateOperation The date operation.
     */
    public function setDateOperation(DateTime $dateOperation = null) {
        $this->dateOperation = $dateOperation;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int $folio The folio.
     */
    public function setFolio($folio) {
        $this->folio = $folio;
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
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the ligne folio.
     *
     * @param int $ligneFolio The ligne folio.
     */
    public function setLigneFolio($ligneFolio) {
        $this->ligneFolio = $ligneFolio;
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
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
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
     * Set the type ligne.
     *
     * @param string $typeLigne The type ligne.
     */
    public function setTypeLigne($typeLigne) {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the type operation.
     *
     * @param string $typeOperation The type operation.
     */
    public function setTypeOperation($typeOperation) {
        $this->typeOperation = $typeOperation;
        return $this;
    }
}
