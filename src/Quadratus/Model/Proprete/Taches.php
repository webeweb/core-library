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
 * Taches model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Taches {

	/**
	 * Auto incr.
	 *
	 * @var int
	 */
	private $autoIncr;

	/**
	 * Cadence.
	 *
	 * @var float
	 */
	private $cadence;

	/**
	 * Code affaire.
	 *
	 * @var string
	 */
	private $codeAffaire;

	/**
	 * Code analytique.
	 *
	 * @var string
	 */
	private $codeAnalytique;

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
	 * Code dern sem gen.
	 *
	 * @var string
	 */
	private $codeDernSemGen;

	/**
	 * Code prime dimanche1 type2.
	 *
	 * @var string
	 */
	private $codePrimeDimanche1Type2;

	/**
	 * Code prime j f1 type2.
	 *
	 * @var string
	 */
	private $codePrimeJF1Type2;

	/**
	 * Code prime nuit1 type2.
	 *
	 * @var string
	 */
	private $codePrimeNuit1Type2;

	/**
	 * Code tache.
	 *
	 * @var string
	 */
	private $codeTache;

	/**
	 * Code tache type.
	 *
	 * @var string
	 */
	private $codeTacheType;

	/**
	 * Descriptif.
	 *
	 * @var string
	 */
	private $descriptif;

	/**
	 * Dt dern sem gen.
	 *
	 * @var DateTime
	 */
	private $dtDernSemGen;

	/**
	 * Duree budget.
	 *
	 * @var float
	 */
	private $dureeBudget;

	/**
	 * Fiche poste.
	 *
	 * @var string
	 */
	private $fichePoste;

	/**
	 * Gestion hotellerie.
	 *
	 * @var boolean
	 */
	private $gestionHotellerie;

	/**
	 * Maj dim normal type2.
	 *
	 * @var float
	 */
	private $majDimNormalType2;

	/**
	 * Maj j f normal type2.
	 *
	 * @var float
	 */
	private $majJFNormalType2;

	/**
	 * Maj nuit normal type2.
	 *
	 * @var float
	 */
	private $majNuitNormalType2;

	/**
	 * Niveau qualif.
	 *
	 * @var int
	 */
	private $niveauQualif;

	/**
	 * Non oeuvrant.
	 *
	 * @var boolean
	 */
	private $nonOeuvrant;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

	/**
	 * Planning dern sem prioritaire.
	 *
	 * @var boolean
	 */
	private $planningDernSemPrioritaire;

	/**
	 * Poste rent.
	 *
	 * @var string
	 */
	private $posteRent;

	/**
	 * Suivi heures.
	 *
	 * @var boolean
	 */
	private $suiviHeures;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the auto incr.
	 *
	 * @return int Returns the auto incr.
	 */
	public function getAutoIncr() {
		return $this->autoIncr;
	}

	/**
	 * Get the cadence.
	 *
	 * @return float Returns the cadence.
	 */
	public function getCadence() {
		return $this->cadence;
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
	 * Get the code analytique.
	 *
	 * @return string Returns the code analytique.
	 */
	public function getCodeAnalytique() {
		return $this->codeAnalytique;
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
	 * Get the code dern sem gen.
	 *
	 * @return string Returns the code dern sem gen.
	 */
	public function getCodeDernSemGen() {
		return $this->codeDernSemGen;
	}

	/**
	 * Get the code prime dimanche1 type2.
	 *
	 * @return string Returns the code prime dimanche1 type2.
	 */
	public function getCodePrimeDimanche1Type2() {
		return $this->codePrimeDimanche1Type2;
	}

	/**
	 * Get the code prime j f1 type2.
	 *
	 * @return string Returns the code prime j f1 type2.
	 */
	public function getCodePrimeJF1Type2() {
		return $this->codePrimeJF1Type2;
	}

	/**
	 * Get the code prime nuit1 type2.
	 *
	 * @return string Returns the code prime nuit1 type2.
	 */
	public function getCodePrimeNuit1Type2() {
		return $this->codePrimeNuit1Type2;
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
	 * Get the code tache type.
	 *
	 * @return string Returns the code tache type.
	 */
	public function getCodeTacheType() {
		return $this->codeTacheType;
	}

	/**
	 * Get the descriptif.
	 *
	 * @return string Returns the descriptif.
	 */
	public function getDescriptif() {
		return $this->descriptif;
	}

	/**
	 * Get the dt dern sem gen.
	 *
	 * @return DateTime Returns the dt dern sem gen.
	 */
	public function getDtDernSemGen() {
		return $this->dtDernSemGen;
	}

	/**
	 * Get the duree budget.
	 *
	 * @return float Returns the duree budget.
	 */
	public function getDureeBudget() {
		return $this->dureeBudget;
	}

	/**
	 * Get the fiche poste.
	 *
	 * @return string Returns the fiche poste.
	 */
	public function getFichePoste() {
		return $this->fichePoste;
	}

	/**
	 * Get the gestion hotellerie.
	 *
	 * @return boolean Returns the gestion hotellerie.
	 */
	public function getGestionHotellerie() {
		return $this->gestionHotellerie;
	}

	/**
	 * Get the maj dim normal type2.
	 *
	 * @return float Returns the maj dim normal type2.
	 */
	public function getMajDimNormalType2() {
		return $this->majDimNormalType2;
	}

	/**
	 * Get the maj j f normal type2.
	 *
	 * @return float Returns the maj j f normal type2.
	 */
	public function getMajJFNormalType2() {
		return $this->majJFNormalType2;
	}

	/**
	 * Get the maj nuit normal type2.
	 *
	 * @return float Returns the maj nuit normal type2.
	 */
	public function getMajNuitNormalType2() {
		return $this->majNuitNormalType2;
	}

	/**
	 * Get the niveau qualif.
	 *
	 * @return int Returns the niveau qualif.
	 */
	public function getNiveauQualif() {
		return $this->niveauQualif;
	}

	/**
	 * Get the non oeuvrant.
	 *
	 * @return boolean Returns the non oeuvrant.
	 */
	public function getNonOeuvrant() {
		return $this->nonOeuvrant;
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
	 * Get the planning dern sem prioritaire.
	 *
	 * @return boolean Returns the planning dern sem prioritaire.
	 */
	public function getPlanningDernSemPrioritaire() {
		return $this->planningDernSemPrioritaire;
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
	 * Get the suivi heures.
	 *
	 * @return boolean Returns the suivi heures.
	 */
	public function getSuiviHeures() {
		return $this->suiviHeures;
	}

	/**
	 * Set the auto incr.
	 *
	 * @param int $autoIncr The auto incr.
	 * @return Taches Returns this taches.
	 */
	public function setAutoIncr($autoIncr) {
		$this->autoIncr = $autoIncr;
		return $this;
	}

	/**
	 * Set the cadence.
	 *
	 * @param float $cadence The cadence.
	 * @return Taches Returns this taches.
	 */
	public function setCadence($cadence) {
		$this->cadence = $cadence;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return Taches Returns this taches.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code analytique.
	 *
	 * @param string $codeAnalytique The code analytique.
	 * @return Taches Returns this taches.
	 */
	public function setCodeAnalytique($codeAnalytique) {
		$this->codeAnalytique = $codeAnalytique;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return Taches Returns this taches.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return Taches Returns this taches.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code dern sem gen.
	 *
	 * @param string $codeDernSemGen The code dern sem gen.
	 * @return Taches Returns this taches.
	 */
	public function setCodeDernSemGen($codeDernSemGen) {
		$this->codeDernSemGen = $codeDernSemGen;
		return $this;
	}

	/**
	 * Set the code prime dimanche1 type2.
	 *
	 * @param string $codePrimeDimanche1Type2 The code prime dimanche1 type2.
	 * @return Taches Returns this taches.
	 */
	public function setCodePrimeDimanche1Type2($codePrimeDimanche1Type2) {
		$this->codePrimeDimanche1Type2 = $codePrimeDimanche1Type2;
		return $this;
	}

	/**
	 * Set the code prime j f1 type2.
	 *
	 * @param string $codePrimeJF1Type2 The code prime j f1 type2.
	 * @return Taches Returns this taches.
	 */
	public function setCodePrimeJF1Type2($codePrimeJF1Type2) {
		$this->codePrimeJF1Type2 = $codePrimeJF1Type2;
		return $this;
	}

	/**
	 * Set the code prime nuit1 type2.
	 *
	 * @param string $codePrimeNuit1Type2 The code prime nuit1 type2.
	 * @return Taches Returns this taches.
	 */
	public function setCodePrimeNuit1Type2($codePrimeNuit1Type2) {
		$this->codePrimeNuit1Type2 = $codePrimeNuit1Type2;
		return $this;
	}

	/**
	 * Set the code tache.
	 *
	 * @param string $codeTache The code tache.
	 * @return Taches Returns this taches.
	 */
	public function setCodeTache($codeTache) {
		$this->codeTache = $codeTache;
		return $this;
	}

	/**
	 * Set the code tache type.
	 *
	 * @param string $codeTacheType The code tache type.
	 * @return Taches Returns this taches.
	 */
	public function setCodeTacheType($codeTacheType) {
		$this->codeTacheType = $codeTacheType;
		return $this;
	}

	/**
	 * Set the descriptif.
	 *
	 * @param string $descriptif The descriptif.
	 * @return Taches Returns this taches.
	 */
	public function setDescriptif($descriptif) {
		$this->descriptif = $descriptif;
		return $this;
	}

	/**
	 * Set the dt dern sem gen.
	 *
	 * @param DateTime $dtDernSemGen The dt dern sem gen.
	 * @return Taches Returns this taches.
	 */
	public function setDtDernSemGen(DateTime $dtDernSemGen = null) {
		$this->dtDernSemGen = $dtDernSemGen;
		return $this;
	}

	/**
	 * Set the duree budget.
	 *
	 * @param float $dureeBudget The duree budget.
	 * @return Taches Returns this taches.
	 */
	public function setDureeBudget($dureeBudget) {
		$this->dureeBudget = $dureeBudget;
		return $this;
	}

	/**
	 * Set the fiche poste.
	 *
	 * @param string $fichePoste The fiche poste.
	 * @return Taches Returns this taches.
	 */
	public function setFichePoste($fichePoste) {
		$this->fichePoste = $fichePoste;
		return $this;
	}

	/**
	 * Set the gestion hotellerie.
	 *
	 * @param boolean $gestionHotellerie The gestion hotellerie.
	 * @return Taches Returns this taches.
	 */
	public function setGestionHotellerie($gestionHotellerie) {
		$this->gestionHotellerie = $gestionHotellerie;
		return $this;
	}

	/**
	 * Set the maj dim normal type2.
	 *
	 * @param float $majDimNormalType2 The maj dim normal type2.
	 * @return Taches Returns this taches.
	 */
	public function setMajDimNormalType2($majDimNormalType2) {
		$this->majDimNormalType2 = $majDimNormalType2;
		return $this;
	}

	/**
	 * Set the maj j f normal type2.
	 *
	 * @param float $majJFNormalType2 The maj j f normal type2.
	 * @return Taches Returns this taches.
	 */
	public function setMajJFNormalType2($majJFNormalType2) {
		$this->majJFNormalType2 = $majJFNormalType2;
		return $this;
	}

	/**
	 * Set the maj nuit normal type2.
	 *
	 * @param float $majNuitNormalType2 The maj nuit normal type2.
	 * @return Taches Returns this taches.
	 */
	public function setMajNuitNormalType2($majNuitNormalType2) {
		$this->majNuitNormalType2 = $majNuitNormalType2;
		return $this;
	}

	/**
	 * Set the niveau qualif.
	 *
	 * @param int $niveauQualif The niveau qualif.
	 * @return Taches Returns this taches.
	 */
	public function setNiveauQualif($niveauQualif) {
		$this->niveauQualif = $niveauQualif;
		return $this;
	}

	/**
	 * Set the non oeuvrant.
	 *
	 * @param boolean $nonOeuvrant The non oeuvrant.
	 * @return Taches Returns this taches.
	 */
	public function setNonOeuvrant($nonOeuvrant) {
		$this->nonOeuvrant = $nonOeuvrant;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return Taches Returns this taches.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the planning dern sem prioritaire.
	 *
	 * @param boolean $planningDernSemPrioritaire The planning dern sem prioritaire.
	 * @return Taches Returns this taches.
	 */
	public function setPlanningDernSemPrioritaire($planningDernSemPrioritaire) {
		$this->planningDernSemPrioritaire = $planningDernSemPrioritaire;
		return $this;
	}

	/**
	 * Set the poste rent.
	 *
	 * @param string $posteRent The poste rent.
	 * @return Taches Returns this taches.
	 */
	public function setPosteRent($posteRent) {
		$this->posteRent = $posteRent;
		return $this;
	}

	/**
	 * Set the suivi heures.
	 *
	 * @param boolean $suiviHeures The suivi heures.
	 * @return Taches Returns this taches.
	 */
	public function setSuiviHeures($suiviHeures) {
		$this->suiviHeures = $suiviHeures;
		return $this;
	}

}
