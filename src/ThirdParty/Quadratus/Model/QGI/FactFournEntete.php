<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Fact fourn entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class FactFournEntete {

    /**
     * Boni mali.
     *
     * @var bool
     */
    private $boniMali;

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Folio.
     *
     * @var int
     */
    private $folio;

    /**
     * Lib auto.
     *
     * @var string
     */
    private $libAuto;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Monnaie.
     *
     * @var string
     */
    private $monnaie;

    /**
     * Montant tt ccredit.
     *
     * @var string
     */
    private $montantTtCcredit;

    /**
     * Montant tt cdebit.
     *
     * @var string
     */
    private $montantTtCdebit;

    /**
     * Num doss cpta.
     *
     * @var string
     */
    private $numDossCpta;

    /**
     * Num facture.
     *
     * @var string
     */
    private $numFacture;

    /**
     * Num fournisseur.
     *
     * @var string
     */
    private $numFournisseur;

    /**
     * Num lot.
     *
     * @var int
     */
    private $numLot;

    /**
     * Num uniq.
     *
     * @var string
     */
    private $numUniq;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the boni mali.
     *
     * @return bool Returns the boni mali.
     */
    public function getBoniMali() {
        return $this->boniMali;
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
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
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
     * Get the lib auto.
     *
     * @return string Returns the lib auto.
     */
    public function getLibAuto() {
        return $this->libAuto;
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
     * Get the monnaie.
     *
     * @return string Returns the monnaie.
     */
    public function getMonnaie() {
        return $this->monnaie;
    }

    /**
     * Get the montant tt ccredit.
     *
     * @return string Returns the montant tt ccredit.
     */
    public function getMontantTtCcredit() {
        return $this->montantTtCcredit;
    }

    /**
     * Get the montant tt cdebit.
     *
     * @return string Returns the montant tt cdebit.
     */
    public function getMontantTtCdebit() {
        return $this->montantTtCdebit;
    }

    /**
     * Get the num doss cpta.
     *
     * @return string Returns the num doss cpta.
     */
    public function getNumDossCpta() {
        return $this->numDossCpta;
    }

    /**
     * Get the num facture.
     *
     * @return string Returns the num facture.
     */
    public function getNumFacture() {
        return $this->numFacture;
    }

    /**
     * Get the num fournisseur.
     *
     * @return string Returns the num fournisseur.
     */
    public function getNumFournisseur() {
        return $this->numFournisseur;
    }

    /**
     * Get the num lot.
     *
     * @return int Returns the num lot.
     */
    public function getNumLot() {
        return $this->numLot;
    }

    /**
     * Get the num uniq.
     *
     * @return string Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the ref image.
     *
     * @return string Returns the ref image.
     */
    public function getRefImage() {
        return $this->refImage;
    }

    /**
     * Set the boni mali.
     *
     * @param bool $boniMali The boni mali.
     */
    public function setBoniMali($boniMali) {
        $this->boniMali = $boniMali;
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
     * Set the date.
     *
     * @param DateTime|null $date The date.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
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
     * Set the lib auto.
     *
     * @param string $libAuto The lib auto.
     */
    public function setLibAuto($libAuto) {
        $this->libAuto = $libAuto;
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
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the montant tt ccredit.
     *
     * @param string $montantTtCcredit The montant tt ccredit.
     */
    public function setMontantTtCcredit($montantTtCcredit) {
        $this->montantTtCcredit = $montantTtCcredit;
        return $this;
    }

    /**
     * Set the montant tt cdebit.
     *
     * @param string $montantTtCdebit The montant tt cdebit.
     */
    public function setMontantTtCdebit($montantTtCdebit) {
        $this->montantTtCdebit = $montantTtCdebit;
        return $this;
    }

    /**
     * Set the num doss cpta.
     *
     * @param string $numDossCpta The num doss cpta.
     */
    public function setNumDossCpta($numDossCpta) {
        $this->numDossCpta = $numDossCpta;
        return $this;
    }

    /**
     * Set the num facture.
     *
     * @param string $numFacture The num facture.
     */
    public function setNumFacture($numFacture) {
        $this->numFacture = $numFacture;
        return $this;
    }

    /**
     * Set the num fournisseur.
     *
     * @param string $numFournisseur The num fournisseur.
     */
    public function setNumFournisseur($numFournisseur) {
        $this->numFournisseur = $numFournisseur;
        return $this;
    }

    /**
     * Set the num lot.
     *
     * @param int $numLot The num lot.
     */
    public function setNumLot($numLot) {
        $this->numLot = $numLot;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string $numUniq The num uniq.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }
}
