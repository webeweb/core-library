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
 * Ecritures eco.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresEco {

    /**
     * Centre.
     *
     * @var string
     */
    private $centre;

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Code libelle auto.
     *
     * @var string
     */
    private $codeLibelleAuto;

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
     * Liaison ecriture.
     *
     * @var bool
     */
    private $liaisonEcriture;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

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
     * Nature.
     *
     * @var string
     */
    private $nature;

    /**
     * No lot trace.
     *
     * @var string
     */
    private $noLotTrace;

    /**
     * Num ecr eco.
     *
     * @var int
     */
    private $numEcrEco;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Quantite2.
     *
     * @var float
     */
    private $quantite2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the centre.
     *
     * @return string Returns the centre.
     */
    public function getCentre() {
        return $this->centre;
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
     * Get the code libelle auto.
     *
     * @return string Returns the code libelle auto.
     */
    public function getCodeLibelleAuto() {
        return $this->codeLibelleAuto;
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
     * Get the liaison ecriture.
     *
     * @return bool Returns the liaison ecriture.
     */
    public function getLiaisonEcriture() {
        return $this->liaisonEcriture;
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
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Get the no lot trace.
     *
     * @return string Returns the no lot trace.
     */
    public function getNoLotTrace() {
        return $this->noLotTrace;
    }

    /**
     * Get the num ecr eco.
     *
     * @return int Returns the num ecr eco.
     */
    public function getNumEcrEco() {
        return $this->numEcrEco;
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
     * Get the periode ecriture.
     *
     * @return DateTime|null Returns the periode ecriture.
     */
    public function getPeriodeEcriture() {
        return $this->periodeEcriture;
    }

    /**
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the quantite2.
     *
     * @return float Returns the quantite2.
     */
    public function getQuantite2() {
        return $this->quantite2;
    }

    /**
     * Set the centre.
     *
     * @param string $centre The centre.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
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
     * Set the code libelle auto.
     *
     * @param string $codeLibelleAuto The code libelle auto.
     */
    public function setCodeLibelleAuto($codeLibelleAuto) {
        $this->codeLibelleAuto = $codeLibelleAuto;
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
     * Set the liaison ecriture.
     *
     * @param bool $liaisonEcriture The liaison ecriture.
     */
    public function setLiaisonEcriture($liaisonEcriture) {
        $this->liaisonEcriture = $liaisonEcriture;
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
     * Set the nature.
     *
     * @param string $nature The nature.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the no lot trace.
     *
     * @param string $noLotTrace The no lot trace.
     */
    public function setNoLotTrace($noLotTrace) {
        $this->noLotTrace = $noLotTrace;
        return $this;
    }

    /**
     * Set the num ecr eco.
     *
     * @param int $numEcrEco The num ecr eco.
     */
    public function setNumEcrEco($numEcrEco) {
        $this->numEcrEco = $numEcrEco;
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
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     */
    public function setPeriodeEcriture(DateTime $periodeEcriture = null) {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite2.
     *
     * @param float $quantite2 The quantite2.
     */
    public function setQuantite2($quantite2) {
        $this->quantite2 = $quantite2;
        return $this;
    }
}
