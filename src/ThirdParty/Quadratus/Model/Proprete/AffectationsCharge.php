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
 * Affectations charge model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AffectationsCharge {

    /**
     * Ajout charge.
     *
     * @var bool
     */
    private $ajoutCharge;

    /**
     * Aou.
     *
     * @var bool
     */
    private $aou;

    /**
     * Avr.
     *
     * @var bool
     */
    private $avr;

    /**
     * Charge mensualisee.
     *
     * @var bool
     */
    private $chargeMensualisee;

    /**
     * Charge q fact.
     *
     * @var bool
     */
    private $chargeQFact;

    /**
     * Charge validee.
     *
     * @var bool
     */
    private $chargeValidee;

    /**
     * Chef equipe.
     *
     * @var string
     */
    private $chefEquipe;

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
     * Code charge.
     *
     * @var string
     */
    private $codeCharge;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code inspecteur.
     *
     * @var string
     */
    private $codeInspecteur;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Dec.
     *
     * @var bool
     */
    private $dec;

    /**
     * Fev.
     *
     * @var bool
     */
    private $fev;

    /**
     * Jan.
     *
     * @var bool
     */
    private $jan;

    /**
     * Juil.
     *
     * @var bool
     */
    private $juil;

    /**
     * Juin.
     *
     * @var bool
     */
    private $juin;

    /**
     * Mai.
     *
     * @var bool
     */
    private $mai;

    /**
     * Mar.
     *
     * @var bool
     */
    private $mar;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Nov.
     *
     * @var bool
     */
    private $nov;

    /**
     * Oct.
     *
     * @var bool
     */
    private $oct;

    /**
     * Origine charge mens.
     *
     * @var bool
     */
    private $origineChargeMens;

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
     * Sep.
     *
     * @var bool
     */
    private $sep;

    /**
     * Uniq i d.
     *
     * @var string
     */
    private $uniqID;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ajout charge.
     *
     * @return bool Returns the ajout charge.
     */
    public function getAjoutCharge() {
        return $this->ajoutCharge;
    }

    /**
     * Get the aou.
     *
     * @return bool Returns the aou.
     */
    public function getAou() {
        return $this->aou;
    }

    /**
     * Get the avr.
     *
     * @return bool Returns the avr.
     */
    public function getAvr() {
        return $this->avr;
    }

    /**
     * Get the charge mensualisee.
     *
     * @return bool Returns the charge mensualisee.
     */
    public function getChargeMensualisee() {
        return $this->chargeMensualisee;
    }

    /**
     * Get the charge q fact.
     *
     * @return bool Returns the charge q fact.
     */
    public function getChargeQFact() {
        return $this->chargeQFact;
    }

    /**
     * Get the charge validee.
     *
     * @return bool Returns the charge validee.
     */
    public function getChargeValidee() {
        return $this->chargeValidee;
    }

    /**
     * Get the chef equipe.
     *
     * @return string Returns the chef equipe.
     */
    public function getChefEquipe() {
        return $this->chefEquipe;
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
     * Get the code charge.
     *
     * @return string Returns the code charge.
     */
    public function getCodeCharge() {
        return $this->codeCharge;
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
     * Get the code inspecteur.
     *
     * @return string Returns the code inspecteur.
     */
    public function getCodeInspecteur() {
        return $this->codeInspecteur;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the dec.
     *
     * @return bool Returns the dec.
     */
    public function getDec() {
        return $this->dec;
    }

    /**
     * Get the fev.
     *
     * @return bool Returns the fev.
     */
    public function getFev() {
        return $this->fev;
    }

    /**
     * Get the jan.
     *
     * @return bool Returns the jan.
     */
    public function getJan() {
        return $this->jan;
    }

    /**
     * Get the juil.
     *
     * @return bool Returns the juil.
     */
    public function getJuil() {
        return $this->juil;
    }

    /**
     * Get the juin.
     *
     * @return bool Returns the juin.
     */
    public function getJuin() {
        return $this->juin;
    }

    /**
     * Get the mai.
     *
     * @return bool Returns the mai.
     */
    public function getMai() {
        return $this->mai;
    }

    /**
     * Get the mar.
     *
     * @return bool Returns the mar.
     */
    public function getMar() {
        return $this->mar;
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
     * Get the nov.
     *
     * @return bool Returns the nov.
     */
    public function getNov() {
        return $this->nov;
    }

    /**
     * Get the oct.
     *
     * @return bool Returns the oct.
     */
    public function getOct() {
        return $this->oct;
    }

    /**
     * Get the origine charge mens.
     *
     * @return bool Returns the origine charge mens.
     */
    public function getOrigineChargeMens() {
        return $this->origineChargeMens;
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
     * Get the sep.
     *
     * @return bool Returns the sep.
     */
    public function getSep() {
        return $this->sep;
    }

    /**
     * Get the uniq i d.
     *
     * @return string Returns the uniq i d.
     */
    public function getUniqID() {
        return $this->uniqID;
    }

    /**
     * Set the ajout charge.
     *
     * @param bool $ajoutCharge The ajout charge.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setAjoutCharge($ajoutCharge) {
        $this->ajoutCharge = $ajoutCharge;
        return $this;
    }

    /**
     * Set the aou.
     *
     * @param bool $aou The aou.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setAou($aou) {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool $avr The avr.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setAvr($avr) {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the charge mensualisee.
     *
     * @param bool $chargeMensualisee The charge mensualisee.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setChargeMensualisee($chargeMensualisee) {
        $this->chargeMensualisee = $chargeMensualisee;
        return $this;
    }

    /**
     * Set the charge q fact.
     *
     * @param bool $chargeQFact The charge q fact.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setChargeQFact($chargeQFact) {
        $this->chargeQFact = $chargeQFact;
        return $this;
    }

    /**
     * Set the charge validee.
     *
     * @param bool $chargeValidee The charge validee.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setChargeValidee($chargeValidee) {
        $this->chargeValidee = $chargeValidee;
        return $this;
    }

    /**
     * Set the chef equipe.
     *
     * @param string $chefEquipe The chef equipe.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setChefEquipe($chefEquipe) {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code charge.
     *
     * @param string $codeCharge The code charge.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setCodeCharge($codeCharge) {
        $this->codeCharge = $codeCharge;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string $codeInspecteur The code inspecteur.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setCodeInspecteur($codeInspecteur) {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool $dec The dec.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setDec($dec) {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool $fev The fev.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setFev($fev) {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool $jan The jan.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setJan($jan) {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool $juil The juil.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setJuil($juil) {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool $juin The juin.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setJuin($juin) {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool $mai The mai.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setMai($mai) {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool $mar The mar.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setMar($mar) {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool $nov The nov.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setNov($nov) {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool $oct The oct.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setOct($oct) {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the origine charge mens.
     *
     * @param bool $origineChargeMens The origine charge mens.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setOrigineChargeMens($origineChargeMens) {
        $this->origineChargeMens = $origineChargeMens;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime $periodeDeb The periode deb.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime $periodeFin The periode fin.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool $sep The sep.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setSep($sep) {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }
}
