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
 * Plans facturation model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class PlansFacturation {

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
	 * @var DateTime
	 */
	private $dateFinValidite;

	/**
	 * Dec.
	 *
	 * @var boolean
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
	 * Designation r t f.
	 *
	 * @var string
	 */
	private $designationRTF;

	/**
	 * Duree.
	 *
	 * @var float
	 */
	private $duree;

	/**
	 * Fev.
	 *
	 * @var boolean
	 */
	private $fev;

	/**
	 * Fin periode tarif.
	 *
	 * @var DateTime
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
	 * @var boolean
	 */
	private $jan;

	/**
	 * Jui.
	 *
	 * @var boolean
	 */
	private $jui;

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
	 * Nov.
	 *
	 * @var boolean
	 */
	private $nov;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

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
	 * @var boolean
	 */
	private $oct;

	/**
	 * Periode tarif.
	 *
	 * @var DateTime
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
	 * @var boolean
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
	 * @var boolean
	 */
	private $refArticle;

	/**
	 * Ref poste cde web f t.
	 *
	 * @var string
	 */
	private $refPosteCdeWebFT;

	/**
	 * Sep.
	 *
	 * @var boolean
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
	 * @var boolean
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
	 * @return DateTime Returns the date fin validite.
	 */
	public function getDateFinValidite() {
		return $this->dateFinValidite;
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
	 * Get the designation r t f.
	 *
	 * @return string Returns the designation r t f.
	 */
	public function getDesignationRTF() {
		return $this->designationRTF;
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
	 * @return boolean Returns the fev.
	 */
	public function getFev() {
		return $this->fev;
	}

	/**
	 * Get the fin periode tarif.
	 *
	 * @return DateTime Returns the fin periode tarif.
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
	 * @return boolean Returns the jan.
	 */
	public function getJan() {
		return $this->jan;
	}

	/**
	 * Get the jui.
	 *
	 * @return boolean Returns the jui.
	 */
	public function getJui() {
		return $this->jui;
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
	 * Get the nov.
	 *
	 * @return boolean Returns the nov.
	 */
	public function getNov() {
		return $this->nov;
	}

	/**
	 * Get the num b t.
	 *
	 * @return int Returns the num b t.
	 */
	public function getNumBT() {
		return $this->numBT;
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
	 * @return boolean Returns the oct.
	 */
	public function getOct() {
		return $this->oct;
	}

	/**
	 * Get the periode tarif.
	 *
	 * @return DateTime Returns the periode tarif.
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
	 * @return boolean Returns the px facture.
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
	 * @return boolean Returns the ref article.
	 */
	public function getRefArticle() {
		return $this->refArticle;
	}

	/**
	 * Get the ref poste cde web f t.
	 *
	 * @return string Returns the ref poste cde web f t.
	 */
	public function getRefPosteCdeWebFT() {
		return $this->refPosteCdeWebFT;
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
	 * @return boolean Returns the ventil marge.
	 */
	public function getVentilMarge() {
		return $this->ventilMarge;
	}

	/**
	 * Set the aou.
	 *
	 * @param boolean $aou The aou.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setAou($aou) {
		$this->aou = $aou;
		return $this;
	}

	/**
	 * Set the avr.
	 *
	 * @param boolean $avr The avr.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setAvr($avr) {
		$this->avr = $avr;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code article.
	 *
	 * @param string $codeArticle The code article.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setCodeArticle($codeArticle) {
		$this->codeArticle = $codeArticle;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code regroupement.
	 *
	 * @param string $codeRegroupement The code regroupement.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setCodeRegroupement($codeRegroupement) {
		$this->codeRegroupement = $codeRegroupement;
		return $this;
	}

	/**
	 * Set the coefficient.
	 *
	 * @param float $coefficient The coefficient.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setCoefficient($coefficient) {
		$this->coefficient = $coefficient;
		return $this;
	}

	/**
	 * Set the date fin validite.
	 *
	 * @param DateTime $dateFinValidite The date fin validite.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDateFinValidite(DateTime $dateFinValidite = null) {
		$this->dateFinValidite = $dateFinValidite;
		return $this;
	}

	/**
	 * Set the dec.
	 *
	 * @param boolean $dec The dec.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDec($dec) {
		$this->dec = $dec;
		return $this;
	}

	/**
	 * Set the designation.
	 *
	 * @param string $designation The designation.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDesignation($designation) {
		$this->designation = $designation;
		return $this;
	}

	/**
	 * Set the designation2.
	 *
	 * @param string $designation2 The designation2.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDesignation2($designation2) {
		$this->designation2 = $designation2;
		return $this;
	}

	/**
	 * Set the designation3.
	 *
	 * @param string $designation3 The designation3.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDesignation3($designation3) {
		$this->designation3 = $designation3;
		return $this;
	}

	/**
	 * Set the designation bis.
	 *
	 * @param string $designationBis The designation bis.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDesignationBis($designationBis) {
		$this->designationBis = $designationBis;
		return $this;
	}

	/**
	 * Set the designation bis2.
	 *
	 * @param string $designationBis2 The designation bis2.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDesignationBis2($designationBis2) {
		$this->designationBis2 = $designationBis2;
		return $this;
	}

	/**
	 * Set the designation bis3.
	 *
	 * @param string $designationBis3 The designation bis3.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDesignationBis3($designationBis3) {
		$this->designationBis3 = $designationBis3;
		return $this;
	}

	/**
	 * Set the designation r t f.
	 *
	 * @param string $designationRTF The designation r t f.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDesignationRTF($designationRTF) {
		$this->designationRTF = $designationRTF;
		return $this;
	}

	/**
	 * Set the duree.
	 *
	 * @param float $duree The duree.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setDuree($duree) {
		$this->duree = $duree;
		return $this;
	}

	/**
	 * Set the fev.
	 *
	 * @param boolean $fev The fev.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setFev($fev) {
		$this->fev = $fev;
		return $this;
	}

	/**
	 * Set the fin periode tarif.
	 *
	 * @param DateTime $finPeriodeTarif The fin periode tarif.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setFinPeriodeTarif(DateTime $finPeriodeTarif = null) {
		$this->finPeriodeTarif = $finPeriodeTarif;
		return $this;
	}

	/**
	 * Set the indice.
	 *
	 * @param int $indice The indice.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setIndice($indice) {
		$this->indice = $indice;
		return $this;
	}

	/**
	 * Set the jan.
	 *
	 * @param boolean $jan The jan.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setJan($jan) {
		$this->jan = $jan;
		return $this;
	}

	/**
	 * Set the jui.
	 *
	 * @param boolean $jui The jui.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setJui($jui) {
		$this->jui = $jui;
		return $this;
	}

	/**
	 * Set the juin.
	 *
	 * @param boolean $juin The juin.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setJuin($juin) {
		$this->juin = $juin;
		return $this;
	}

	/**
	 * Set the mai.
	 *
	 * @param boolean $mai The mai.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setMai($mai) {
		$this->mai = $mai;
		return $this;
	}

	/**
	 * Set the mar.
	 *
	 * @param boolean $mar The mar.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setMar($mar) {
		$this->mar = $mar;
		return $this;
	}

	/**
	 * Set the nov.
	 *
	 * @param boolean $nov The nov.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setNov($nov) {
		$this->nov = $nov;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the numero devis.
	 *
	 * @param string $numeroDevis The numero devis.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setNumeroDevis($numeroDevis) {
		$this->numeroDevis = $numeroDevis;
		return $this;
	}

	/**
	 * Set the numero historique.
	 *
	 * @param int $numeroHistorique The numero historique.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setNumeroHistorique($numeroHistorique) {
		$this->numeroHistorique = $numeroHistorique;
		return $this;
	}

	/**
	 * Set the oct.
	 *
	 * @param boolean $oct The oct.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setOct($oct) {
		$this->oct = $oct;
		return $this;
	}

	/**
	 * Set the periode tarif.
	 *
	 * @param DateTime $periodeTarif The periode tarif.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setPeriodeTarif(DateTime $periodeTarif = null) {
		$this->periodeTarif = $periodeTarif;
		return $this;
	}

	/**
	 * Set the poste rent.
	 *
	 * @param string $posteRent The poste rent.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setPosteRent($posteRent) {
		$this->posteRent = $posteRent;
		return $this;
	}

	/**
	 * Set the prix achat.
	 *
	 * @param float $prixAchat The prix achat.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setPrixAchat($prixAchat) {
		$this->prixAchat = $prixAchat;
		return $this;
	}

	/**
	 * Set the prix vente.
	 *
	 * @param float $prixVente The prix vente.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setPrixVente($prixVente) {
		$this->prixVente = $prixVente;
		return $this;
	}

	/**
	 * Set the px facture.
	 *
	 * @param boolean $pxFacture The px facture.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setPxFacture($pxFacture) {
		$this->pxFacture = $pxFacture;
		return $this;
	}

	/**
	 * Set the quantite.
	 *
	 * @param float $quantite The quantite.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setQuantite($quantite) {
		$this->quantite = $quantite;
		return $this;
	}

	/**
	 * Set the ref article.
	 *
	 * @param boolean $refArticle The ref article.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setRefArticle($refArticle) {
		$this->refArticle = $refArticle;
		return $this;
	}

	/**
	 * Set the ref poste cde web f t.
	 *
	 * @param string $refPosteCdeWebFT The ref poste cde web f t.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setRefPosteCdeWebFT($refPosteCdeWebFT) {
		$this->refPosteCdeWebFT = $refPosteCdeWebFT;
		return $this;
	}

	/**
	 * Set the sep.
	 *
	 * @param boolean $sep The sep.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setSep($sep) {
		$this->sep = $sep;
		return $this;
	}

	/**
	 * Set the taux.
	 *
	 * @param float $taux The taux.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setTaux($taux) {
		$this->taux = $taux;
		return $this;
	}

	/**
	 * Set the ventil marge.
	 *
	 * @param boolean $ventilMarge The ventil marge.
	 * @return PlansFacturation Returns this plans facturation.
	 */
	public function setVentilMarge($ventilMarge) {
		$this->ventilMarge = $ventilMarge;
		return $this;
	}

}
