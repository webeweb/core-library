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
 * Centralisateur.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Centralisateur {

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Credit classe15.
     *
     * @var float
     */
    private $creditClasse15;

    /**
     * Credit classe67.
     *
     * @var float
     */
    private $creditClasse67;

    /**
     * Credit client.
     *
     * @var float
     */
    private $creditClient;

    /**
     * Credit fournisseur.
     *
     * @var float
     */
    private $creditFournisseur;

    /**
     * Debit classe15.
     *
     * @var float
     */
    private $debitClasse15;

    /**
     * Debit classe67.
     *
     * @var float
     */
    private $debitClasse67;

    /**
     * Debit client.
     *
     * @var float
     */
    private $debitClient;

    /**
     * Debit fournisseur.
     *
     * @var float
     */
    private $debitFournisseur;

    /**
     * Folio.
     *
     * @var int
     */
    private $folio;

    /**
     * Nb ligne folio.
     *
     * @var int
     */
    private $nbLigneFolio;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Prochaine ligne.
     *
     * @var int
     */
    private $prochaineLigne;

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
     * Get the credit classe15.
     *
     * @return float Returns the credit classe15.
     */
    public function getCreditClasse15() {
        return $this->creditClasse15;
    }

    /**
     * Get the credit classe67.
     *
     * @return float Returns the credit classe67.
     */
    public function getCreditClasse67() {
        return $this->creditClasse67;
    }

    /**
     * Get the credit client.
     *
     * @return float Returns the credit client.
     */
    public function getCreditClient() {
        return $this->creditClient;
    }

    /**
     * Get the credit fournisseur.
     *
     * @return float Returns the credit fournisseur.
     */
    public function getCreditFournisseur() {
        return $this->creditFournisseur;
    }

    /**
     * Get the debit classe15.
     *
     * @return float Returns the debit classe15.
     */
    public function getDebitClasse15() {
        return $this->debitClasse15;
    }

    /**
     * Get the debit classe67.
     *
     * @return float Returns the debit classe67.
     */
    public function getDebitClasse67() {
        return $this->debitClasse67;
    }

    /**
     * Get the debit client.
     *
     * @return float Returns the debit client.
     */
    public function getDebitClient() {
        return $this->debitClient;
    }

    /**
     * Get the debit fournisseur.
     *
     * @return float Returns the debit fournisseur.
     */
    public function getDebitFournisseur() {
        return $this->debitFournisseur;
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
     * Get the nb ligne folio.
     *
     * @return int Returns the nb ligne folio.
     */
    public function getNbLigneFolio() {
        return $this->nbLigneFolio;
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
     * Get the prochaine ligne.
     *
     * @return int Returns the prochaine ligne.
     */
    public function getProchaineLigne() {
        return $this->prochaineLigne;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the credit classe15.
     *
     * @param float $creditClasse15 The credit classe15.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCreditClasse15($creditClasse15) {
        $this->creditClasse15 = $creditClasse15;
        return $this;
    }

    /**
     * Set the credit classe67.
     *
     * @param float $creditClasse67 The credit classe67.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCreditClasse67($creditClasse67) {
        $this->creditClasse67 = $creditClasse67;
        return $this;
    }

    /**
     * Set the credit client.
     *
     * @param float $creditClient The credit client.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCreditClient($creditClient) {
        $this->creditClient = $creditClient;
        return $this;
    }

    /**
     * Set the credit fournisseur.
     *
     * @param float $creditFournisseur The credit fournisseur.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCreditFournisseur($creditFournisseur) {
        $this->creditFournisseur = $creditFournisseur;
        return $this;
    }

    /**
     * Set the debit classe15.
     *
     * @param float $debitClasse15 The debit classe15.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setDebitClasse15($debitClasse15) {
        $this->debitClasse15 = $debitClasse15;
        return $this;
    }

    /**
     * Set the debit classe67.
     *
     * @param float $debitClasse67 The debit classe67.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setDebitClasse67($debitClasse67) {
        $this->debitClasse67 = $debitClasse67;
        return $this;
    }

    /**
     * Set the debit client.
     *
     * @param float $debitClient The debit client.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setDebitClient($debitClient) {
        $this->debitClient = $debitClient;
        return $this;
    }

    /**
     * Set the debit fournisseur.
     *
     * @param float $debitFournisseur The debit fournisseur.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setDebitFournisseur($debitFournisseur) {
        $this->debitFournisseur = $debitFournisseur;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int $folio The folio.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setFolio($folio) {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the nb ligne folio.
     *
     * @param int $nbLigneFolio The nb ligne folio.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setNbLigneFolio($nbLigneFolio) {
        $this->nbLigneFolio = $nbLigneFolio;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prochaine ligne.
     *
     * @param int $prochaineLigne The prochaine ligne.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setProchaineLigne($prochaineLigne) {
        $this->prochaineLigne = $prochaineLigne;
        return $this;
    }
}
