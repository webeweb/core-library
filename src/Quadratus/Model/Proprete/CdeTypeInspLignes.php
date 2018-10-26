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
 * Cde type insp lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class CdeTypeInspLignes {

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
	 * @var boolean
	 */
	private $commandeIsolee;

	/**
	 * Date debut validite.
	 *
	 * @var DateTime
	 */
	private $dateDebutValidite;

	/**
	 * Date fin validite.
	 *
	 * @var DateTime
	 */
	private $dateFinValidite;

	/**
	 * Date validee.
	 *
	 * @var DateTime
	 */
	private $dateValidee;

	/**
	 * Dec.
	 *
	 * @var boolean
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
	 * Jour livraison.
	 *
	 * @var string
	 */
	private $jourLivraison;

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
	 * Maj stock by d a.
	 *
	 * @var boolean
	 */
	private $majStockByDA;

	/**
	 * Mar.
	 *
	 * @var boolean
	 */
	private $mar;

	/**
	 * Nov.
	 *
	 * @var boolean
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
	 * @var boolean
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
	 * @var boolean
	 */
	private $saisirModaliteLiv;

	/**
	 * Sep.
	 *
	 * @var boolean
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
	 * @var boolean
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
	 * @return boolean Returns the commande isolee.
	 */
	public function getCommandeIsolee() {
		return $this->commandeIsolee;
	}

	/**
	 * Get the date debut validite.
	 *
	 * @return DateTime Returns the date debut validite.
	 */
	public function getDateDebutValidite() {
		return $this->dateDebutValidite;
	}

	/**
	 * Get the date fin validite.
	 *
	 * @return DateTime Returns the date fin validite.
	 */
	public function getDateFinValidite() {
		return $this->dateFinValidite;
	}

	/**
	 * Get the date validee.
	 *
	 * @return DateTime Returns the date validee.
	 */
	public function getDateValidee() {
		return $this->dateValidee;
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
	 * Get the maj stock by d a.
	 *
	 * @return boolean Returns the maj stock by d a.
	 */
	public function getMajStockByDA() {
		return $this->majStockByDA;
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
	 * Get the nov.
	 *
	 * @return boolean Returns the nov.
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
	 * @return boolean Returns the oct.
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
	 * @return boolean Returns the saisir modalite liv.
	 */
	public function getSaisirModaliteLiv() {
		return $this->saisirModaliteLiv;
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
	 * @return boolean Returns the validee.
	 */
	public function getValidee() {
		return $this->validee;
	}

	/**
	 * Set the aou.
	 *
	 * @param boolean $aou The aou.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setAou($aou) {
		$this->aou = $aou;
		return $this;
	}

	/**
	 * Set the avr.
	 *
	 * @param boolean $avr The avr.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setAvr($avr) {
		$this->avr = $avr;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code article.
	 *
	 * @param string $codeArticle The code article.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setCodeArticle($codeArticle) {
		$this->codeArticle = $codeArticle;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code fournisseur.
	 *
	 * @param string $codeFournisseur The code fournisseur.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setCodeFournisseur($codeFournisseur) {
		$this->codeFournisseur = $codeFournisseur;
		return $this;
	}

	/**
	 * Set the code inspecteur.
	 *
	 * @param string $codeInspecteur The code inspecteur.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setCodeInspecteur($codeInspecteur) {
		$this->codeInspecteur = $codeInspecteur;
		return $this;
	}

	/**
	 * Set the code livraison.
	 *
	 * @param string $codeLivraison The code livraison.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setCodeLivraison($codeLivraison) {
		$this->codeLivraison = $codeLivraison;
		return $this;
	}

	/**
	 * Set the commande isolee.
	 *
	 * @param boolean $commandeIsolee The commande isolee.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setCommandeIsolee($commandeIsolee) {
		$this->commandeIsolee = $commandeIsolee;
		return $this;
	}

	/**
	 * Set the date debut validite.
	 *
	 * @param DateTime $dateDebutValidite The date debut validite.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setDateDebutValidite(DateTime $dateDebutValidite = null) {
		$this->dateDebutValidite = $dateDebutValidite;
		return $this;
	}

	/**
	 * Set the date fin validite.
	 *
	 * @param DateTime $dateFinValidite The date fin validite.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setDateFinValidite(DateTime $dateFinValidite = null) {
		$this->dateFinValidite = $dateFinValidite;
		return $this;
	}

	/**
	 * Set the date validee.
	 *
	 * @param DateTime $dateValidee The date validee.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setDateValidee(DateTime $dateValidee = null) {
		$this->dateValidee = $dateValidee;
		return $this;
	}

	/**
	 * Set the dec.
	 *
	 * @param boolean $dec The dec.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setDec($dec) {
		$this->dec = $dec;
		return $this;
	}

	/**
	 * Set the designation1.
	 *
	 * @param string $designation1 The designation1.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setDesignation1($designation1) {
		$this->designation1 = $designation1;
		return $this;
	}

	/**
	 * Set the designation2.
	 *
	 * @param string $designation2 The designation2.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setDesignation2($designation2) {
		$this->designation2 = $designation2;
		return $this;
	}

	/**
	 * Set the designation3.
	 *
	 * @param string $designation3 The designation3.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setDesignation3($designation3) {
		$this->designation3 = $designation3;
		return $this;
	}

	/**
	 * Set the fev.
	 *
	 * @param boolean $fev The fev.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setFev($fev) {
		$this->fev = $fev;
		return $this;
	}

	/**
	 * Set the jan.
	 *
	 * @param boolean $jan The jan.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setJan($jan) {
		$this->jan = $jan;
		return $this;
	}

	/**
	 * Set the jour livraison.
	 *
	 * @param string $jourLivraison The jour livraison.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setJourLivraison($jourLivraison) {
		$this->jourLivraison = $jourLivraison;
		return $this;
	}

	/**
	 * Set the juil.
	 *
	 * @param boolean $juil The juil.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setJuil($juil) {
		$this->juil = $juil;
		return $this;
	}

	/**
	 * Set the juin.
	 *
	 * @param boolean $juin The juin.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setJuin($juin) {
		$this->juin = $juin;
		return $this;
	}

	/**
	 * Set the mai.
	 *
	 * @param boolean $mai The mai.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setMai($mai) {
		$this->mai = $mai;
		return $this;
	}

	/**
	 * Set the maj stock by d a.
	 *
	 * @param boolean $majStockByDA The maj stock by d a.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setMajStockByDA($majStockByDA) {
		$this->majStockByDA = $majStockByDA;
		return $this;
	}

	/**
	 * Set the mar.
	 *
	 * @param boolean $mar The mar.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setMar($mar) {
		$this->mar = $mar;
		return $this;
	}

	/**
	 * Set the nov.
	 *
	 * @param boolean $nov The nov.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setNov($nov) {
		$this->nov = $nov;
		return $this;
	}

	/**
	 * Set the numero ligne.
	 *
	 * @param int $numeroLigne The numero ligne.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setNumeroLigne($numeroLigne) {
		$this->numeroLigne = $numeroLigne;
		return $this;
	}

	/**
	 * Set the oct.
	 *
	 * @param boolean $oct The oct.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setOct($oct) {
		$this->oct = $oct;
		return $this;
	}

	/**
	 * Set the poste rent.
	 *
	 * @param string $posteRent The poste rent.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setPosteRent($posteRent) {
		$this->posteRent = $posteRent;
		return $this;
	}

	/**
	 * Set the quantite.
	 *
	 * @param float $quantite The quantite.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setQuantite($quantite) {
		$this->quantite = $quantite;
		return $this;
	}

	/**
	 * Set the saisir modalite liv.
	 *
	 * @param boolean $saisirModaliteLiv The saisir modalite liv.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setSaisirModaliteLiv($saisirModaliteLiv) {
		$this->saisirModaliteLiv = $saisirModaliteLiv;
		return $this;
	}

	/**
	 * Set the sep.
	 *
	 * @param boolean $sep The sep.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setSep($sep) {
		$this->sep = $sep;
		return $this;
	}

	/**
	 * Set the type gestion.
	 *
	 * @param string $typeGestion The type gestion.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setTypeGestion($typeGestion) {
		$this->typeGestion = $typeGestion;
		return $this;
	}

	/**
	 * Set the validee.
	 *
	 * @param boolean $validee The validee.
	 * @return CdeTypeInspLignes Returns this cde type insp lignes.
	 */
	public function setValidee($validee) {
		$this->validee = $validee;
		return $this;
	}

}
