<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Affectations charge model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class AffectationsCharge {

    /**
     * Ajout charge.
     *
     * @var boolean
     */
    private $ajoutCharge;

    /**
     * Aou.
     *
     * @var boolean
     */
    private $aou;

    /**
     * Avr.
     *
     * @var boolean
     */
    private $avr;

    /**
     * Charge mensualisee.
     *
     * @var boolean
     */
    private $chargeMensualisee;

    /**
     * Charge q fact.
     *
     * @var boolean
     */
    private $chargeQFact;

    /**
     * Charge validee.
     *
     * @var boolean
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
     * @var boolean
     */
    private $dec;

    /**
     * Fev.
     *
     * @var boolean
     */
    private $fev;

    /**
     * Jan.
     *
     * @var boolean
     */
    private $jan;

    /**
     * Juil.
     *
     * @var boolean
     */
    private $juil;

    /**
     * Juin.
     *
     * @var boolean
     */
    private $juin;

    /**
     * Mai.
     *
     * @var boolean
     */
    private $mai;

    /**
     * Mar.
     *
     * @var boolean
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
     * @var boolean
     */
    private $nov;

    /**
     * Oct.
     *
     * @var boolean
     */
    private $oct;

    /**
     * Origine charge mens.
     *
     * @var boolean
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
     * @var boolean
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
     * @return boolean Returns the ajout charge.
     */
    public function getAjoutCharge() {
        return $this->ajoutCharge;
    }

    /**
     * Get the aou.
     *
     * @return boolean Returns the aou.
     */
    public function getAou() {
        return $this->aou;
    }

    /**
     * Get the avr.
     *
     * @return boolean Returns the avr.
     */
    public function getAvr() {
        return $this->avr;
    }

    /**
     * Get the charge mensualisee.
     *
     * @return boolean Returns the charge mensualisee.
     */
    public function getChargeMensualisee() {
        return $this->chargeMensualisee;
    }

    /**
     * Get the charge q fact.
     *
     * @return boolean Returns the charge q fact.
     */
    public function getChargeQFact() {
        return $this->chargeQFact;
    }

    /**
     * Get the charge validee.
     *
     * @return boolean Returns the charge validee.
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
     * @return boolean Returns the dec.
     */
    public function getDec() {
        return $this->dec;
    }

    /**
     * Get the fev.
     *
     * @return boolean Returns the fev.
     */
    public function getFev() {
        return $this->fev;
    }

    /**
     * Get the jan.
     *
     * @return boolean Returns the jan.
     */
    public function getJan() {
        return $this->jan;
    }

    /**
     * Get the juil.
     *
     * @return boolean Returns the juil.
     */
    public function getJuil() {
        return $this->juil;
    }

    /**
     * Get the juin.
     *
     * @return boolean Returns the juin.
     */
    public function getJuin() {
        return $this->juin;
    }

    /**
     * Get the mai.
     *
     * @return boolean Returns the mai.
     */
    public function getMai() {
        return $this->mai;
    }

    /**
     * Get the mar.
     *
     * @return boolean Returns the mar.
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
     * @return boolean Returns the nov.
     */
    public function getNov() {
        return $this->nov;
    }

    /**
     * Get the oct.
     *
     * @return boolean Returns the oct.
     */
    public function getOct() {
        return $this->oct;
    }

    /**
     * Get the origine charge mens.
     *
     * @return boolean Returns the origine charge mens.
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
     * @return boolean Returns the sep.
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
     * @param boolean $ajoutCharge The ajout charge.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setAjoutCharge($ajoutCharge) {
        $this->ajoutCharge = $ajoutCharge;
        return $this;
    }

    /**
     * Set the aou.
     *
     * @param boolean $aou The aou.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setAou($aou) {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param boolean $avr The avr.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setAvr($avr) {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the charge mensualisee.
     *
     * @param boolean $chargeMensualisee The charge mensualisee.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setChargeMensualisee($chargeMensualisee) {
        $this->chargeMensualisee = $chargeMensualisee;
        return $this;
    }

    /**
     * Set the charge q fact.
     *
     * @param boolean $chargeQFact The charge q fact.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setChargeQFact($chargeQFact) {
        $this->chargeQFact = $chargeQFact;
        return $this;
    }

    /**
     * Set the charge validee.
     *
     * @param boolean $chargeValidee The charge validee.
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
     * @param boolean $dec The dec.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setDec($dec) {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param boolean $fev The fev.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setFev($fev) {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param boolean $jan The jan.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setJan($jan) {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param boolean $juil The juil.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setJuil($juil) {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param boolean $juin The juin.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setJuin($juin) {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param boolean $mai The mai.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setMai($mai) {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param boolean $mar The mar.
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
     * @param boolean $nov The nov.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setNov($nov) {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param boolean $oct The oct.
     * @return AffectationsCharge Returns this affectations charge.
     */
    public function setOct($oct) {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the origine charge mens.
     *
     * @param boolean $origineChargeMens The origine charge mens.
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
     * @param boolean $sep The sep.
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
