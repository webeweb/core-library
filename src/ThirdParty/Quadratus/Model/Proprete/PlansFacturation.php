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
 * Plans facturation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PlansFacturation {

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
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

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
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Date fin validite.
     *
     * @var DateTime|null
     */
    private $dateFinValidite;

    /**
     * Dec.
     *
     * @var bool
     */
    private $dec;

    /**
     * Designation.
     *
     * @var string
     */
    private $designation;

    /**
     * Designation2.
     *
     * @var string
     */
    private $designation2;

    /**
     * Designation3.
     *
     * @var string
     */
    private $designation3;

    /**
     * Designation bis.
     *
     * @var string
     */
    private $designationBis;

    /**
     * Designation bis2.
     *
     * @var string
     */
    private $designationBis2;

    /**
     * Designation bis3.
     *
     * @var string
     */
    private $designationBis3;

    /**
     * Designation rtf.
     *
     * @var string
     */
    private $designationRtf;

    /**
     * Duree.
     *
     * @var float
     */
    private $duree;

    /**
     * Fev.
     *
     * @var bool
     */
    private $fev;

    /**
     * Fin periode tarif.
     *
     * @var DateTime|null
     */
    private $finPeriodeTarif;

    /**
     * Indice.
     *
     * @var int
     */
    private $indice;

    /**
     * Jan.
     *
     * @var bool
     */
    private $jan;

    /**
     * Jui.
     *
     * @var bool
     */
    private $jui;

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
     * Nov.
     *
     * @var bool
     */
    private $nov;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Numero devis.
     *
     * @var string
     */
    private $numeroDevis;

    /**
     * Numero historique.
     *
     * @var int
     */
    private $numeroHistorique;

    /**
     * Oct.
     *
     * @var bool
     */
    private $oct;

    /**
     * Periode tarif.
     *
     * @var DateTime|null
     */
    private $periodeTarif;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Prix achat.
     *
     * @var float
     */
    private $prixAchat;

    /**
     * Prix vente.
     *
     * @var float
     */
    private $prixVente;

    /**
     * Px facture.
     *
     * @var bool
     */
    private $pxFacture;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Ref article.
     *
     * @var bool
     */
    private $refArticle;

    /**
     * Ref poste cde web ft.
     *
     * @var string
     */
    private $refPosteCdeWebFt;

    /**
     * Sep.
     *
     * @var bool
     */
    private $sep;

    /**
     * Taux.
     *
     * @var float
     */
    private $taux;

    /**
     * Ventil marge.
     *
     * @var bool
     */
    private $ventilMarge;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the coefficient.
     *
     * @return float Returns the coefficient.
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Get the date fin validite.
     *
     * @return DateTime|null Returns the date fin validite.
     */
    public function getDateFinValidite() {
        return $this->dateFinValidite;
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
     * Get the designation.
     *
     * @return string Returns the designation.
     */
    public function getDesignation() {
        return $this->designation;
    }

    /**
     * Get the designation2.
     *
     * @return string Returns the designation2.
     */
    public function getDesignation2() {
        return $this->designation2;
    }

    /**
     * Get the designation3.
     *
     * @return string Returns the designation3.
     */
    public function getDesignation3() {
        return $this->designation3;
    }

    /**
     * Get the designation bis.
     *
     * @return string Returns the designation bis.
     */
    public function getDesignationBis() {
        return $this->designationBis;
    }

    /**
     * Get the designation bis2.
     *
     * @return string Returns the designation bis2.
     */
    public function getDesignationBis2() {
        return $this->designationBis2;
    }

    /**
     * Get the designation bis3.
     *
     * @return string Returns the designation bis3.
     */
    public function getDesignationBis3() {
        return $this->designationBis3;
    }

    /**
     * Get the designation rtf.
     *
     * @return string Returns the designation rtf.
     */
    public function getDesignationRtf() {
        return $this->designationRtf;
    }

    /**
     * Get the duree.
     *
     * @return float Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
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
     * Get the fin periode tarif.
     *
     * @return DateTime|null Returns the fin periode tarif.
     */
    public function getFinPeriodeTarif() {
        return $this->finPeriodeTarif;
    }

    /**
     * Get the indice.
     *
     * @return int Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
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
     * Get the jui.
     *
     * @return bool Returns the jui.
     */
    public function getJui() {
        return $this->jui;
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
     * Get the nov.
     *
     * @return bool Returns the nov.
     */
    public function getNov() {
        return $this->nov;
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
     * Get the numero devis.
     *
     * @return string Returns the numero devis.
     */
    public function getNumeroDevis() {
        return $this->numeroDevis;
    }

    /**
     * Get the numero historique.
     *
     * @return int Returns the numero historique.
     */
    public function getNumeroHistorique() {
        return $this->numeroHistorique;
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
     * Get the periode tarif.
     *
     * @return DateTime|null Returns the periode tarif.
     */
    public function getPeriodeTarif() {
        return $this->periodeTarif;
    }

    /**
     * Get the poste rent.
     *
     * @return string Returns the poste rent.
     */
    public function getPosteRent() {
        return $this->posteRent;
    }

    /**
     * Get the prix achat.
     *
     * @return float Returns the prix achat.
     */
    public function getPrixAchat() {
        return $this->prixAchat;
    }

    /**
     * Get the prix vente.
     *
     * @return float Returns the prix vente.
     */
    public function getPrixVente() {
        return $this->prixVente;
    }

    /**
     * Get the px facture.
     *
     * @return bool Returns the px facture.
     */
    public function getPxFacture() {
        return $this->pxFacture;
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
     * Get the ref article.
     *
     * @return bool Returns the ref article.
     */
    public function getRefArticle() {
        return $this->refArticle;
    }

    /**
     * Get the ref poste cde web ft.
     *
     * @return string Returns the ref poste cde web ft.
     */
    public function getRefPosteCdeWebFt() {
        return $this->refPosteCdeWebFt;
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
     * Get the taux.
     *
     * @return float Returns the taux.
     */
    public function getTaux() {
        return $this->taux;
    }

    /**
     * Get the ventil marge.
     *
     * @return bool Returns the ventil marge.
     */
    public function getVentilMarge() {
        return $this->ventilMarge;
    }

    /**
     * Set the aou.
     *
     * @param bool $aou The aou.
     */
    public function setAou($aou) {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool $avr The avr.
     */
    public function setAvr($avr) {
        $this->avr = $avr;
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
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
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
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the date fin validite.
     *
     * @param DateTime|null $dateFinValidite The date fin validite.
     */
    public function setDateFinValidite(DateTime $dateFinValidite = null) {
        $this->dateFinValidite = $dateFinValidite;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool $dec The dec.
     */
    public function setDec($dec) {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation bis.
     *
     * @param string $designationBis The designation bis.
     */
    public function setDesignationBis($designationBis) {
        $this->designationBis = $designationBis;
        return $this;
    }

    /**
     * Set the designation bis2.
     *
     * @param string $designationBis2 The designation bis2.
     */
    public function setDesignationBis2($designationBis2) {
        $this->designationBis2 = $designationBis2;
        return $this;
    }

    /**
     * Set the designation bis3.
     *
     * @param string $designationBis3 The designation bis3.
     */
    public function setDesignationBis3($designationBis3) {
        $this->designationBis3 = $designationBis3;
        return $this;
    }

    /**
     * Set the designation rtf.
     *
     * @param string $designationRtf The designation rtf.
     */
    public function setDesignationRtf($designationRtf) {
        $this->designationRtf = $designationRtf;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param float $duree The duree.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool $fev The fev.
     */
    public function setFev($fev) {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the fin periode tarif.
     *
     * @param DateTime|null $finPeriodeTarif The fin periode tarif.
     */
    public function setFinPeriodeTarif(DateTime $finPeriodeTarif = null) {
        $this->finPeriodeTarif = $finPeriodeTarif;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool $jan The jan.
     */
    public function setJan($jan) {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jui.
     *
     * @param bool $jui The jui.
     */
    public function setJui($jui) {
        $this->jui = $jui;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool $juin The juin.
     */
    public function setJuin($juin) {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool $mai The mai.
     */
    public function setMai($mai) {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool $mar The mar.
     */
    public function setMar($mar) {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool $nov The nov.
     */
    public function setNov($nov) {
        $this->nov = $nov;
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
     * Set the numero devis.
     *
     * @param string $numeroDevis The numero devis.
     */
    public function setNumeroDevis($numeroDevis) {
        $this->numeroDevis = $numeroDevis;
        return $this;
    }

    /**
     * Set the numero historique.
     *
     * @param int $numeroHistorique The numero historique.
     */
    public function setNumeroHistorique($numeroHistorique) {
        $this->numeroHistorique = $numeroHistorique;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool $oct The oct.
     */
    public function setOct($oct) {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the periode tarif.
     *
     * @param DateTime|null $periodeTarif The periode tarif.
     */
    public function setPeriodeTarif(DateTime $periodeTarif = null) {
        $this->periodeTarif = $periodeTarif;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float $prixAchat The prix achat.
     */
    public function setPrixAchat($prixAchat) {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float $prixVente The prix vente.
     */
    public function setPrixVente($prixVente) {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool $pxFacture The px facture.
     */
    public function setPxFacture($pxFacture) {
        $this->pxFacture = $pxFacture;
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
     * Set the ref article.
     *
     * @param bool $refArticle The ref article.
     */
    public function setRefArticle($refArticle) {
        $this->refArticle = $refArticle;
        return $this;
    }

    /**
     * Set the ref poste cde web ft.
     *
     * @param string $refPosteCdeWebFt The ref poste cde web ft.
     */
    public function setRefPosteCdeWebFt($refPosteCdeWebFt) {
        $this->refPosteCdeWebFt = $refPosteCdeWebFt;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool $sep The sep.
     */
    public function setSep($sep) {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float $taux The taux.
     */
    public function setTaux($taux) {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool $ventilMarge The ventil marge.
     */
    public function setVentilMarge($ventilMarge) {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
