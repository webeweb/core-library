<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Plans en tete bon trav.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PlansEnTeteBonTrav {

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code pays.
     *
     * @var string
     */
    private $codePays;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Dt avant dern prepa.
     *
     * @var DateTime|null
     */
    private $dtAvantDernPrepa;

    /**
     * Dt dern prepa.
     *
     * @var DateTime|null
     */
    private $dtDernPrepa;

    /**
     * Dt validite fact deb.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactDeb;

    /**
     * Dt validite fact deb deb mois.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactDebDebMois;

    /**
     * Dt validite fact fin.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactFin;

    /**
     * Dt validite fact fin fin mois.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactFinFinMois;

    /**
     * Jour fact.
     *
     * @var string
     */
    private $jourFact;

    /**
     * Montant htpx.
     *
     * @var float
     */
    private $montantHtpx;

    /**
     * Montant htvm.
     *
     * @var float
     */
    private $montantHtvm;

    /**
     * Nom client.
     *
     * @var string
     */
    private $nomClient;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

    /**
     * Nom suite2.
     *
     * @var string
     */
    private $nomSuite2;

    /**
     * Nom suite3.
     *
     * @var string
     */
    private $nomSuite3;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Reference facture.
     *
     * @var string
     */
    private $referenceFacture;

    /**
     * Reference facture2.
     *
     * @var string
     */
    private $referenceFacture2;

    /**
     * Reprise dates employes.
     *
     * @var bool
     */
    private $repriseDatesEmployes;

    /**
     * Type adresse.
     *
     * @var string
     */
    private $typeAdresse;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the btq.
     *
     * @return string Returns the btq.
     */
    public function getBtq() {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
    }

    /**
     * Get the civilite.
     *
     * @return string Returns the civilite.
     */
    public function getCivilite() {
        return $this->civilite;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code pays.
     *
     * @return string Returns the code pays.
     */
    public function getCodePays() {
        return $this->codePays;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * Get the dt avant dern prepa.
     *
     * @return DateTime|null Returns the dt avant dern prepa.
     */
    public function getDtAvantDernPrepa() {
        return $this->dtAvantDernPrepa;
    }

    /**
     * Get the dt dern prepa.
     *
     * @return DateTime|null Returns the dt dern prepa.
     */
    public function getDtDernPrepa() {
        return $this->dtDernPrepa;
    }

    /**
     * Get the dt validite fact deb.
     *
     * @return DateTime|null Returns the dt validite fact deb.
     */
    public function getDtValiditeFactDeb() {
        return $this->dtValiditeFactDeb;
    }

    /**
     * Get the dt validite fact deb deb mois.
     *
     * @return DateTime|null Returns the dt validite fact deb deb mois.
     */
    public function getDtValiditeFactDebDebMois() {
        return $this->dtValiditeFactDebDebMois;
    }

    /**
     * Get the dt validite fact fin.
     *
     * @return DateTime|null Returns the dt validite fact fin.
     */
    public function getDtValiditeFactFin() {
        return $this->dtValiditeFactFin;
    }

    /**
     * Get the dt validite fact fin fin mois.
     *
     * @return DateTime|null Returns the dt validite fact fin fin mois.
     */
    public function getDtValiditeFactFinFinMois() {
        return $this->dtValiditeFactFinFinMois;
    }

    /**
     * Get the jour fact.
     *
     * @return string Returns the jour fact.
     */
    public function getJourFact() {
        return $this->jourFact;
    }

    /**
     * Get the montant htpx.
     *
     * @return float Returns the montant htpx.
     */
    public function getMontantHtpx() {
        return $this->montantHtpx;
    }

    /**
     * Get the montant htvm.
     *
     * @return float Returns the montant htvm.
     */
    public function getMontantHtvm() {
        return $this->montantHtvm;
    }

    /**
     * Get the nom client.
     *
     * @return string Returns the nom client.
     */
    public function getNomClient() {
        return $this->nomClient;
    }

    /**
     * Get the nom suite.
     *
     * @return string Returns the nom suite.
     */
    public function getNomSuite() {
        return $this->nomSuite;
    }

    /**
     * Get the nom suite2.
     *
     * @return string Returns the nom suite2.
     */
    public function getNomSuite2() {
        return $this->nomSuite2;
    }

    /**
     * Get the nom suite3.
     *
     * @return string Returns the nom suite3.
     */
    public function getNomSuite3() {
        return $this->nomSuite3;
    }

    /**
     * Get the nom voie.
     *
     * @return string Returns the nom voie.
     */
    public function getNomVoie() {
        return $this->nomVoie;
    }

    /**
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
    }

    /**
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Get the reference facture.
     *
     * @return string Returns the reference facture.
     */
    public function getReferenceFacture() {
        return $this->referenceFacture;
    }

    /**
     * Get the reference facture2.
     *
     * @return string Returns the reference facture2.
     */
    public function getReferenceFacture2() {
        return $this->referenceFacture2;
    }

    /**
     * Get the reprise dates employes.
     *
     * @return bool Returns the reprise dates employes.
     */
    public function getRepriseDatesEmployes() {
        return $this->repriseDatesEmployes;
    }

    /**
     * Get the type adresse.
     *
     * @return string Returns the type adresse.
     */
    public function getTypeAdresse() {
        return $this->typeAdresse;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string $civilite The civilite.
     */
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the dt avant dern prepa.
     *
     * @param DateTime|null $dtAvantDernPrepa The dt avant dern prepa.
     */
    public function setDtAvantDernPrepa(DateTime $dtAvantDernPrepa = null) {
        $this->dtAvantDernPrepa = $dtAvantDernPrepa;
        return $this;
    }

    /**
     * Set the dt dern prepa.
     *
     * @param DateTime|null $dtDernPrepa The dt dern prepa.
     */
    public function setDtDernPrepa(DateTime $dtDernPrepa = null) {
        $this->dtDernPrepa = $dtDernPrepa;
        return $this;
    }

    /**
     * Set the dt validite fact deb.
     *
     * @param DateTime|null $dtValiditeFactDeb The dt validite fact deb.
     */
    public function setDtValiditeFactDeb(DateTime $dtValiditeFactDeb = null) {
        $this->dtValiditeFactDeb = $dtValiditeFactDeb;
        return $this;
    }

    /**
     * Set the dt validite fact deb deb mois.
     *
     * @param DateTime|null $dtValiditeFactDebDebMois The dt validite fact deb deb mois.
     */
    public function setDtValiditeFactDebDebMois(DateTime $dtValiditeFactDebDebMois = null) {
        $this->dtValiditeFactDebDebMois = $dtValiditeFactDebDebMois;
        return $this;
    }

    /**
     * Set the dt validite fact fin.
     *
     * @param DateTime|null $dtValiditeFactFin The dt validite fact fin.
     */
    public function setDtValiditeFactFin(DateTime $dtValiditeFactFin = null) {
        $this->dtValiditeFactFin = $dtValiditeFactFin;
        return $this;
    }

    /**
     * Set the dt validite fact fin fin mois.
     *
     * @param DateTime|null $dtValiditeFactFinFinMois The dt validite fact fin fin mois.
     */
    public function setDtValiditeFactFinFinMois(DateTime $dtValiditeFactFinFinMois = null) {
        $this->dtValiditeFactFinFinMois = $dtValiditeFactFinFinMois;
        return $this;
    }

    /**
     * Set the jour fact.
     *
     * @param string $jourFact The jour fact.
     */
    public function setJourFact($jourFact) {
        $this->jourFact = $jourFact;
        return $this;
    }

    /**
     * Set the montant htpx.
     *
     * @param float $montantHtpx The montant htpx.
     */
    public function setMontantHtpx($montantHtpx) {
        $this->montantHtpx = $montantHtpx;
        return $this;
    }

    /**
     * Set the montant htvm.
     *
     * @param float $montantHtvm The montant htvm.
     */
    public function setMontantHtvm($montantHtvm) {
        $this->montantHtvm = $montantHtvm;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string $nomClient The nom client.
     */
    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string $nomSuite2 The nom suite2.
     */
    public function setNomSuite2($nomSuite2) {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string $nomSuite3 The nom suite3.
     */
    public function setNomSuite3($nomSuite3) {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the reference facture.
     *
     * @param string $referenceFacture The reference facture.
     */
    public function setReferenceFacture($referenceFacture) {
        $this->referenceFacture = $referenceFacture;
        return $this;
    }

    /**
     * Set the reference facture2.
     *
     * @param string $referenceFacture2 The reference facture2.
     */
    public function setReferenceFacture2($referenceFacture2) {
        $this->referenceFacture2 = $referenceFacture2;
        return $this;
    }

    /**
     * Set the reprise dates employes.
     *
     * @param bool $repriseDatesEmployes The reprise dates employes.
     */
    public function setRepriseDatesEmployes($repriseDatesEmployes) {
        $this->repriseDatesEmployes = $repriseDatesEmployes;
        return $this;
    }

    /**
     * Set the type adresse.
     *
     * @param string $typeAdresse The type adresse.
     */
    public function setTypeAdresse($typeAdresse) {
        $this->typeAdresse = $typeAdresse;
        return $this;
    }
}
