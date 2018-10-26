<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;


/**
 * D a d s u prevoyance lignes contrat model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class DADSUPrevoyanceLignesContrat {

	/**
	 * Code deleg gestion.
	 *
	 * @var string
	 */
	private $codeDelegGestion;

	/**
	 * Code libelle.
	 *
	 * @var string
	 */
	private $codeLibelle;

	/**
	 * Code option.
	 *
	 * @var string
	 */
	private $codeOption;

	/**
	 * Code organisme.
	 *
	 * @var string
	 */
	private $codeOrganisme;

	/**
	 * Code population.
	 *
	 * @var string
	 */
	private $codePopulation;

	/**
	 * Intitule.
	 *
	 * @var string
	 */
	private $intitule;

	/**
	 * Periode affectation.
	 *
	 * @var string
	 */
	private $periodeAffectation;

	/**
	 * Qualification frais sante.
	 *
	 * @var string
	 */
	private $qualificationFraisSante;

	/**
	 * Ref contrat.
	 *
	 * @var string
	 */
	private $refContrat;

	/**
	 * Type cotis.
	 *
	 * @var string
	 */
	private $typeCotis;

	/**
	 * Type population.
	 *
	 * @var string
	 */
	private $typePopulation;

	/**
	 * Unite date ancien branche.
	 *
	 * @var string
	 */
	private $uniteDateAncienBranche;

	/**
	 * Unite date ancien college.
	 *
	 * @var string
	 */
	private $uniteDateAncienCollege;

	/**
	 * Unite date ancien poste.
	 *
	 * @var string
	 */
	private $uniteDateAncienPoste;

	/**
	 * Unite prem date entree.
	 *
	 * @var string
	 */
	private $unitePremDateEntree;

	/**
	 * Valeur cotis.
	 *
	 * @var float
	 */
	private $valeurCotis;

	/**
	 * Valeur cotis initiale.
	 *
	 * @var float
	 */
	private $valeurCotisInitiale;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code deleg gestion.
	 *
	 * @return string Returns the code deleg gestion.
	 */
	public function getCodeDelegGestion() {
		return $this->codeDelegGestion;
	}

	/**
	 * Get the code libelle.
	 *
	 * @return string Returns the code libelle.
	 */
	public function getCodeLibelle() {
		return $this->codeLibelle;
	}

	/**
	 * Get the code option.
	 *
	 * @return string Returns the code option.
	 */
	public function getCodeOption() {
		return $this->codeOption;
	}

	/**
	 * Get the code organisme.
	 *
	 * @return string Returns the code organisme.
	 */
	public function getCodeOrganisme() {
		return $this->codeOrganisme;
	}

	/**
	 * Get the code population.
	 *
	 * @return string Returns the code population.
	 */
	public function getCodePopulation() {
		return $this->codePopulation;
	}

	/**
	 * Get the intitule.
	 *
	 * @return string Returns the intitule.
	 */
	public function getIntitule() {
		return $this->intitule;
	}

	/**
	 * Get the periode affectation.
	 *
	 * @return string Returns the periode affectation.
	 */
	public function getPeriodeAffectation() {
		return $this->periodeAffectation;
	}

	/**
	 * Get the qualification frais sante.
	 *
	 * @return string Returns the qualification frais sante.
	 */
	public function getQualificationFraisSante() {
		return $this->qualificationFraisSante;
	}

	/**
	 * Get the ref contrat.
	 *
	 * @return string Returns the ref contrat.
	 */
	public function getRefContrat() {
		return $this->refContrat;
	}

	/**
	 * Get the type cotis.
	 *
	 * @return string Returns the type cotis.
	 */
	public function getTypeCotis() {
		return $this->typeCotis;
	}

	/**
	 * Get the type population.
	 *
	 * @return string Returns the type population.
	 */
	public function getTypePopulation() {
		return $this->typePopulation;
	}

	/**
	 * Get the unite date ancien branche.
	 *
	 * @return string Returns the unite date ancien branche.
	 */
	public function getUniteDateAncienBranche() {
		return $this->uniteDateAncienBranche;
	}

	/**
	 * Get the unite date ancien college.
	 *
	 * @return string Returns the unite date ancien college.
	 */
	public function getUniteDateAncienCollege() {
		return $this->uniteDateAncienCollege;
	}

	/**
	 * Get the unite date ancien poste.
	 *
	 * @return string Returns the unite date ancien poste.
	 */
	public function getUniteDateAncienPoste() {
		return $this->uniteDateAncienPoste;
	}

	/**
	 * Get the unite prem date entree.
	 *
	 * @return string Returns the unite prem date entree.
	 */
	public function getUnitePremDateEntree() {
		return $this->unitePremDateEntree;
	}

	/**
	 * Get the valeur cotis.
	 *
	 * @return float Returns the valeur cotis.
	 */
	public function getValeurCotis() {
		return $this->valeurCotis;
	}

	/**
	 * Get the valeur cotis initiale.
	 *
	 * @return float Returns the valeur cotis initiale.
	 */
	public function getValeurCotisInitiale() {
		return $this->valeurCotisInitiale;
	}

	/**
	 * Set the code deleg gestion.
	 *
	 * @param string $codeDelegGestion The code deleg gestion.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setCodeDelegGestion($codeDelegGestion) {
		$this->codeDelegGestion = $codeDelegGestion;
		return $this;
	}

	/**
	 * Set the code libelle.
	 *
	 * @param string $codeLibelle The code libelle.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setCodeLibelle($codeLibelle) {
		$this->codeLibelle = $codeLibelle;
		return $this;
	}

	/**
	 * Set the code option.
	 *
	 * @param string $codeOption The code option.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setCodeOption($codeOption) {
		$this->codeOption = $codeOption;
		return $this;
	}

	/**
	 * Set the code organisme.
	 *
	 * @param string $codeOrganisme The code organisme.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setCodeOrganisme($codeOrganisme) {
		$this->codeOrganisme = $codeOrganisme;
		return $this;
	}

	/**
	 * Set the code population.
	 *
	 * @param string $codePopulation The code population.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setCodePopulation($codePopulation) {
		$this->codePopulation = $codePopulation;
		return $this;
	}

	/**
	 * Set the intitule.
	 *
	 * @param string $intitule The intitule.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setIntitule($intitule) {
		$this->intitule = $intitule;
		return $this;
	}

	/**
	 * Set the periode affectation.
	 *
	 * @param string $periodeAffectation The periode affectation.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setPeriodeAffectation($periodeAffectation) {
		$this->periodeAffectation = $periodeAffectation;
		return $this;
	}

	/**
	 * Set the qualification frais sante.
	 *
	 * @param string $qualificationFraisSante The qualification frais sante.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setQualificationFraisSante($qualificationFraisSante) {
		$this->qualificationFraisSante = $qualificationFraisSante;
		return $this;
	}

	/**
	 * Set the ref contrat.
	 *
	 * @param string $refContrat The ref contrat.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setRefContrat($refContrat) {
		$this->refContrat = $refContrat;
		return $this;
	}

	/**
	 * Set the type cotis.
	 *
	 * @param string $typeCotis The type cotis.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setTypeCotis($typeCotis) {
		$this->typeCotis = $typeCotis;
		return $this;
	}

	/**
	 * Set the type population.
	 *
	 * @param string $typePopulation The type population.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setTypePopulation($typePopulation) {
		$this->typePopulation = $typePopulation;
		return $this;
	}

	/**
	 * Set the unite date ancien branche.
	 *
	 * @param string $uniteDateAncienBranche The unite date ancien branche.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setUniteDateAncienBranche($uniteDateAncienBranche) {
		$this->uniteDateAncienBranche = $uniteDateAncienBranche;
		return $this;
	}

	/**
	 * Set the unite date ancien college.
	 *
	 * @param string $uniteDateAncienCollege The unite date ancien college.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setUniteDateAncienCollege($uniteDateAncienCollege) {
		$this->uniteDateAncienCollege = $uniteDateAncienCollege;
		return $this;
	}

	/**
	 * Set the unite date ancien poste.
	 *
	 * @param string $uniteDateAncienPoste The unite date ancien poste.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setUniteDateAncienPoste($uniteDateAncienPoste) {
		$this->uniteDateAncienPoste = $uniteDateAncienPoste;
		return $this;
	}

	/**
	 * Set the unite prem date entree.
	 *
	 * @param string $unitePremDateEntree The unite prem date entree.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setUnitePremDateEntree($unitePremDateEntree) {
		$this->unitePremDateEntree = $unitePremDateEntree;
		return $this;
	}

	/**
	 * Set the valeur cotis.
	 *
	 * @param float $valeurCotis The valeur cotis.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setValeurCotis($valeurCotis) {
		$this->valeurCotis = $valeurCotis;
		return $this;
	}

	/**
	 * Set the valeur cotis initiale.
	 *
	 * @param float $valeurCotisInitiale The valeur cotis initiale.
	 * @return DADSUPrevoyanceLignesContrat Returns this d a d s u prevoyance lignes contrat.
	 */
	public function setValeurCotisInitiale($valeurCotisInitiale) {
		$this->valeurCotisInitiale = $valeurCotisInitiale;
		return $this;
	}

}
