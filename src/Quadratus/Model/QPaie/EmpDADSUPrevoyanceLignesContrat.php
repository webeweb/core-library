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
 * Emp d a d s u prevoyance lignes contrat model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpDADSUPrevoyanceLignesContrat {

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
	 * Nb enfants.
	 *
	 * @var string
	 */
	private $nbEnfants;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Ref contrat.
	 *
	 * @var string
	 */
	private $refContrat;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
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
	 * Get the nb enfants.
	 *
	 * @return string Returns the nb enfants.
	 */
	public function getNbEnfants() {
		return $this->nbEnfants;
	}

	/**
	 * Get the numero employe.
	 *
	 * @return string Returns the numero employe.
	 */
	public function getNumeroEmploye() {
		return $this->numeroEmploye;
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
	 * Set the code option.
	 *
	 * @param string $codeOption The code option.
	 * @return EmpDADSUPrevoyanceLignesContrat Returns this emp d a d s u prevoyance lignes contrat.
	 */
	public function setCodeOption($codeOption) {
		$this->codeOption = $codeOption;
		return $this;
	}

	/**
	 * Set the code organisme.
	 *
	 * @param string $codeOrganisme The code organisme.
	 * @return EmpDADSUPrevoyanceLignesContrat Returns this emp d a d s u prevoyance lignes contrat.
	 */
	public function setCodeOrganisme($codeOrganisme) {
		$this->codeOrganisme = $codeOrganisme;
		return $this;
	}

	/**
	 * Set the code population.
	 *
	 * @param string $codePopulation The code population.
	 * @return EmpDADSUPrevoyanceLignesContrat Returns this emp d a d s u prevoyance lignes contrat.
	 */
	public function setCodePopulation($codePopulation) {
		$this->codePopulation = $codePopulation;
		return $this;
	}

	/**
	 * Set the nb enfants.
	 *
	 * @param string $nbEnfants The nb enfants.
	 * @return EmpDADSUPrevoyanceLignesContrat Returns this emp d a d s u prevoyance lignes contrat.
	 */
	public function setNbEnfants($nbEnfants) {
		$this->nbEnfants = $nbEnfants;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return EmpDADSUPrevoyanceLignesContrat Returns this emp d a d s u prevoyance lignes contrat.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the ref contrat.
	 *
	 * @param string $refContrat The ref contrat.
	 * @return EmpDADSUPrevoyanceLignesContrat Returns this emp d a d s u prevoyance lignes contrat.
	 */
	public function setRefContrat($refContrat) {
		$this->refContrat = $refContrat;
		return $this;
	}

}
