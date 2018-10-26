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
 * Emp d a d s u retraite lignes contrat model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpDADSURetraiteLignesContrat {

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Code organisme.
	 *
	 * @var string
	 */
	private $codeOrganisme;

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
	 * Get the code etablissement.
	 *
	 * @return int Returns the code etablissement.
	 */
	public function getCodeEtablissement() {
		return $this->codeEtablissement;
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
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return EmpDADSURetraiteLignesContrat Returns this emp d a d s u retraite lignes contrat.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the code organisme.
	 *
	 * @param string $codeOrganisme The code organisme.
	 * @return EmpDADSURetraiteLignesContrat Returns this emp d a d s u retraite lignes contrat.
	 */
	public function setCodeOrganisme($codeOrganisme) {
		$this->codeOrganisme = $codeOrganisme;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return EmpDADSURetraiteLignesContrat Returns this emp d a d s u retraite lignes contrat.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the ref contrat.
	 *
	 * @param string $refContrat The ref contrat.
	 * @return EmpDADSURetraiteLignesContrat Returns this emp d a d s u retraite lignes contrat.
	 */
	public function setRefContrat($refContrat) {
		$this->refContrat = $refContrat;
		return $this;
	}

}
