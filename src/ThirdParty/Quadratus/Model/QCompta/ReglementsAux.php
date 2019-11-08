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
 * Reglements aux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ReglementsAux {

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Autre dom banque.
     *
     * @var string
     */
    private $autreDomBanque;

    /**
     * Autre rib.
     *
     * @var string
     */
    private $autreRib;

    /**
     * Code journal banque.
     *
     * @var string
     */
    private $codeJournalBanque;

    /**
     * Code mode paiement.
     *
     * @var string
     */
    private $codeModePaiement;

    /**
     * Dans1 groupe.
     *
     * @var bool
     */
    private $dans1Groupe;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Montant groupe.
     *
     * @var float
     */
    private $montantGroupe;

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
     * No rib.
     *
     * @var string
     */
    private $noRib;

    /**
     * Num groupe.
     *
     * @var int
     */
    private $numGroupe;

    /**
     * Num lot lcr.
     *
     * @var int
     */
    private $numLotLcr;

    /**
     * Num lot lettre p.
     *
     * @var int
     */
    private $numLotLettreP;

    /**
     * Num lot traite.
     *
     * @var int
     */
    private $numLotTraite;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Num uniq ecriture.
     *
     * @var int
     */
    private $numUniqEcriture;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Reference tire.
     *
     * @var string
     */
    private $referenceTire;

    /**
     * Type reglement.
     *
     * @var string
     */
    private $typeReglement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actif.
     *
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the autre dom banque.
     *
     * @return string Returns the autre dom banque.
     */
    public function getAutreDomBanque() {
        return $this->autreDomBanque;
    }

    /**
     * Get the autre rib.
     *
     * @return string Returns the autre rib.
     */
    public function getAutreRib() {
        return $this->autreRib;
    }

    /**
     * Get the code journal banque.
     *
     * @return string Returns the code journal banque.
     */
    public function getCodeJournalBanque() {
        return $this->codeJournalBanque;
    }

    /**
     * Get the code mode paiement.
     *
     * @return string Returns the code mode paiement.
     */
    public function getCodeModePaiement() {
        return $this->codeModePaiement;
    }

    /**
     * Get the dans1 groupe.
     *
     * @return bool Returns the dans1 groupe.
     */
    public function getDans1Groupe() {
        return $this->dans1Groupe;
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
     * Get the montant groupe.
     *
     * @return float Returns the montant groupe.
     */
    public function getMontantGroupe() {
        return $this->montantGroupe;
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
     * Get the no rib.
     *
     * @return string Returns the no rib.
     */
    public function getNoRib() {
        return $this->noRib;
    }

    /**
     * Get the num groupe.
     *
     * @return int Returns the num groupe.
     */
    public function getNumGroupe() {
        return $this->numGroupe;
    }

    /**
     * Get the num lot lcr.
     *
     * @return int Returns the num lot lcr.
     */
    public function getNumLotLcr() {
        return $this->numLotLcr;
    }

    /**
     * Get the num lot lettre p.
     *
     * @return int Returns the num lot lettre p.
     */
    public function getNumLotLettreP() {
        return $this->numLotLettreP;
    }

    /**
     * Get the num lot traite.
     *
     * @return int Returns the num lot traite.
     */
    public function getNumLotTraite() {
        return $this->numLotTraite;
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
     * Get the num uniq ecriture.
     *
     * @return int Returns the num uniq ecriture.
     */
    public function getNumUniqEcriture() {
        return $this->numUniqEcriture;
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
     * Get the reference tire.
     *
     * @return string Returns the reference tire.
     */
    public function getReferenceTire() {
        return $this->referenceTire;
    }

    /**
     * Get the type reglement.
     *
     * @return string Returns the type reglement.
     */
    public function getTypeReglement() {
        return $this->typeReglement;
    }

    /**
     * Set the actif.
     *
     * @param bool $actif The actif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the autre dom banque.
     *
     * @param string $autreDomBanque The autre dom banque.
     */
    public function setAutreDomBanque($autreDomBanque) {
        $this->autreDomBanque = $autreDomBanque;
        return $this;
    }

    /**
     * Set the autre rib.
     *
     * @param string $autreRib The autre rib.
     */
    public function setAutreRib($autreRib) {
        $this->autreRib = $autreRib;
        return $this;
    }

    /**
     * Set the code journal banque.
     *
     * @param string $codeJournalBanque The code journal banque.
     */
    public function setCodeJournalBanque($codeJournalBanque) {
        $this->codeJournalBanque = $codeJournalBanque;
        return $this;
    }

    /**
     * Set the code mode paiement.
     *
     * @param string $codeModePaiement The code mode paiement.
     */
    public function setCodeModePaiement($codeModePaiement) {
        $this->codeModePaiement = $codeModePaiement;
        return $this;
    }

    /**
     * Set the dans1 groupe.
     *
     * @param bool $dans1Groupe The dans1 groupe.
     */
    public function setDans1Groupe($dans1Groupe) {
        $this->dans1Groupe = $dans1Groupe;
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
     * Set the montant groupe.
     *
     * @param float $montantGroupe The montant groupe.
     */
    public function setMontantGroupe($montantGroupe) {
        $this->montantGroupe = $montantGroupe;
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
     * Set the no rib.
     *
     * @param string $noRib The no rib.
     */
    public function setNoRib($noRib) {
        $this->noRib = $noRib;
        return $this;
    }

    /**
     * Set the num groupe.
     *
     * @param int $numGroupe The num groupe.
     */
    public function setNumGroupe($numGroupe) {
        $this->numGroupe = $numGroupe;
        return $this;
    }

    /**
     * Set the num lot lcr.
     *
     * @param int $numLotLcr The num lot lcr.
     */
    public function setNumLotLcr($numLotLcr) {
        $this->numLotLcr = $numLotLcr;
        return $this;
    }

    /**
     * Set the num lot lettre p.
     *
     * @param int $numLotLettreP The num lot lettre p.
     */
    public function setNumLotLettreP($numLotLettreP) {
        $this->numLotLettreP = $numLotLettreP;
        return $this;
    }

    /**
     * Set the num lot traite.
     *
     * @param int $numLotTraite The num lot traite.
     */
    public function setNumLotTraite($numLotTraite) {
        $this->numLotTraite = $numLotTraite;
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
     * Set the num uniq ecriture.
     *
     * @param int $numUniqEcriture The num uniq ecriture.
     */
    public function setNumUniqEcriture($numUniqEcriture) {
        $this->numUniqEcriture = $numUniqEcriture;
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
     * Set the reference tire.
     *
     * @param string $referenceTire The reference tire.
     */
    public function setReferenceTire($referenceTire) {
        $this->referenceTire = $referenceTire;
        return $this;
    }

    /**
     * Set the type reglement.
     *
     * @param string $typeReglement The type reglement.
     */
    public function setTypeReglement($typeReglement) {
        $this->typeReglement = $typeReglement;
        return $this;
    }
}
