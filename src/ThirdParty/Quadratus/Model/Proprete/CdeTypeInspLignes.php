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
 * Cde type insp lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeTypeInspLignes {

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
     * Code fournisseur.
     *
     * @var string
     */
    private $codeFournisseur;

    /**
     * Code inspecteur.
     *
     * @var string
     */
    private $codeInspecteur;

    /**
     * Code livraison.
     *
     * @var string
     */
    private $codeLivraison;

    /**
     * Commande isolee.
     *
     * @var bool
     */
    private $commandeIsolee;

    /**
     * Date debut validite.
     *
     * @var DateTime|null
     */
    private $dateDebutValidite;

    /**
     * Date fin validite.
     *
     * @var DateTime|null
     */
    private $dateFinValidite;

    /**
     * Date validee.
     *
     * @var DateTime|null
     */
    private $dateValidee;

    /**
     * Dec.
     *
     * @var bool
     */
    private $dec;

    /**
     * Designation1.
     *
     * @var string
     */
    private $designation1;

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
     * Jour livraison.
     *
     * @var string
     */
    private $jourLivraison;

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
     * Maj stock by da.
     *
     * @var bool
     */
    private $majStockByDa;

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
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Oct.
     *
     * @var bool
     */
    private $oct;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Saisir modalite liv.
     *
     * @var bool
     */
    private $saisirModaliteLiv;

    /**
     * Sep.
     *
     * @var bool
     */
    private $sep;

    /**
     * Type gestion.
     *
     * @var string
     */
    private $typeGestion;

    /**
     * Validee.
     *
     * @var bool
     */
    private $validee;

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
     * Get the code fournisseur.
     *
     * @return string Returns the code fournisseur.
     */
    public function getCodeFournisseur() {
        return $this->codeFournisseur;
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
     * Get the code livraison.
     *
     * @return string Returns the code livraison.
     */
    public function getCodeLivraison() {
        return $this->codeLivraison;
    }

    /**
     * Get the commande isolee.
     *
     * @return bool Returns the commande isolee.
     */
    public function getCommandeIsolee() {
        return $this->commandeIsolee;
    }

    /**
     * Get the date debut validite.
     *
     * @return DateTime|null Returns the date debut validite.
     */
    public function getDateDebutValidite() {
        return $this->dateDebutValidite;
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
     * Get the date validee.
     *
     * @return DateTime|null Returns the date validee.
     */
    public function getDateValidee() {
        return $this->dateValidee;
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
     * Get the designation1.
     *
     * @return string Returns the designation1.
     */
    public function getDesignation1() {
        return $this->designation1;
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
     * Get the jour livraison.
     *
     * @return string Returns the jour livraison.
     */
    public function getJourLivraison() {
        return $this->jourLivraison;
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
     * Get the maj stock by da.
     *
     * @return bool Returns the maj stock by da.
     */
    public function getMajStockByDa() {
        return $this->majStockByDa;
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
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
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
     * Get the poste rent.
     *
     * @return string Returns the poste rent.
     */
    public function getPosteRent() {
        return $this->posteRent;
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
     * Get the saisir modalite liv.
     *
     * @return bool Returns the saisir modalite liv.
     */
    public function getSaisirModaliteLiv() {
        return $this->saisirModaliteLiv;
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
     * Get the type gestion.
     *
     * @return string Returns the type gestion.
     */
    public function getTypeGestion() {
        return $this->typeGestion;
    }

    /**
     * Get the validee.
     *
     * @return bool Returns the validee.
     */
    public function getValidee() {
        return $this->validee;
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
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string $codeInspecteur The code inspecteur.
     */
    public function setCodeInspecteur($codeInspecteur) {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the code livraison.
     *
     * @param string $codeLivraison The code livraison.
     */
    public function setCodeLivraison($codeLivraison) {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }

    /**
     * Set the commande isolee.
     *
     * @param bool $commandeIsolee The commande isolee.
     */
    public function setCommandeIsolee($commandeIsolee) {
        $this->commandeIsolee = $commandeIsolee;
        return $this;
    }

    /**
     * Set the date debut validite.
     *
     * @param DateTime|null $dateDebutValidite The date debut validite.
     */
    public function setDateDebutValidite(DateTime $dateDebutValidite = null) {
        $this->dateDebutValidite = $dateDebutValidite;
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
     * Set the date validee.
     *
     * @param DateTime|null $dateValidee The date validee.
     */
    public function setDateValidee(DateTime $dateValidee = null) {
        $this->dateValidee = $dateValidee;
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
     * Set the designation1.
     *
     * @param string $designation1 The designation1.
     */
    public function setDesignation1($designation1) {
        $this->designation1 = $designation1;
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
     * Set the fev.
     *
     * @param bool $fev The fev.
     */
    public function setFev($fev) {
        $this->fev = $fev;
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
     * Set the jour livraison.
     *
     * @param string $jourLivraison The jour livraison.
     */
    public function setJourLivraison($jourLivraison) {
        $this->jourLivraison = $jourLivraison;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool $juil The juil.
     */
    public function setJuil($juil) {
        $this->juil = $juil;
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
     * Set the maj stock by da.
     *
     * @param bool $majStockByDa The maj stock by da.
     */
    public function setMajStockByDa($majStockByDa) {
        $this->majStockByDa = $majStockByDa;
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
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
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
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
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
     * Set the saisir modalite liv.
     *
     * @param bool $saisirModaliteLiv The saisir modalite liv.
     */
    public function setSaisirModaliteLiv($saisirModaliteLiv) {
        $this->saisirModaliteLiv = $saisirModaliteLiv;
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
     * Set the type gestion.
     *
     * @param string $typeGestion The type gestion.
     */
    public function setTypeGestion($typeGestion) {
        $this->typeGestion = $typeGestion;
        return $this;
    }

    /**
     * Set the validee.
     *
     * @param bool $validee The validee.
     */
    public function setValidee($validee) {
        $this->validee = $validee;
        return $this;
    }
}
