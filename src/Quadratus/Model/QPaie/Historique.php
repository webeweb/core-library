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

use DateTime;

/**
 * Historique model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Historique {

	/**
	 * Annees.
	 *
	 * @var int
	 */
	private $annees;

	/**
	 * Annees plus.
	 *
	 * @var int
	 */
	private $anneesPlus;

	/**
	 * C s valide.
	 *
	 * @var DateTime
	 */
	private $cSValide;

	/**
	 * C t valide.
	 *
	 * @var DateTime
	 */
	private $cTValide;

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Rub.
	 *
	 * @var string
	 */
	private $rub;

	/**
	 * Service.
	 *
	 * @var string
	 */
	private $service;

	/**
	 * Visite medicale.
	 *
	 * @var DateTime
	 */
	private $visiteMedicale;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the annees.
	 *
	 * @return int Returns the annees.
	 */
	public function getAnnees() {
		return $this->annees;
	}

	/**
	 * Get the annees plus.
	 *
	 * @return int Returns the annees plus.
	 */
	public function getAnneesPlus() {
		return $this->anneesPlus;
	}

	/**
	 * Get the c s valide.
	 *
	 * @return DateTime Returns the c s valide.
	 */
	public function getCSValide() {
		return $this->cSValide;
	}

	/**
	 * Get the c t valide.
	 *
	 * @return DateTime Returns the c t valide.
	 */
	public function getCTValide() {
		return $this->cTValide;
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
	 * Get the rub.
	 *
	 * @return string Returns the rub.
	 */
	public function getRub() {
		return $this->rub;
	}

	/**
	 * Get the service.
	 *
	 * @return string Returns the service.
	 */
	public function getService() {
		return $this->service;
	}

	/**
	 * Get the visite medicale.
	 *
	 * @return DateTime Returns the visite medicale.
	 */
	public function getVisiteMedicale() {
		return $this->visiteMedicale;
	}

	/**
	 * Set the annees.
	 *
	 * @param int $annees The annees.
	 * @return Historique Returns this historique.
	 */
	public function setAnnees($annees) {
		$this->annees = $annees;
		return $this;
	}

	/**
	 * Set the annees plus.
	 *
	 * @param int $anneesPlus The annees plus.
	 * @return Historique Returns this historique.
	 */
	public function setAnneesPlus($anneesPlus) {
		$this->anneesPlus = $anneesPlus;
		return $this;
	}

	/**
	 * Set the c s valide.
	 *
	 * @param DateTime $cSValide The c s valide.
	 * @return Historique Returns this historique.
	 */
	public function setCSValide(DateTime $cSValide = null) {
		$this->cSValide = $cSValide;
		return $this;
	}

	/**
	 * Set the c t valide.
	 *
	 * @param DateTime $cTValide The c t valide.
	 * @return Historique Returns this historique.
	 */
	public function setCTValide(DateTime $cTValide = null) {
		$this->cTValide = $cTValide;
		return $this;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return Historique Returns this historique.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the rub.
	 *
	 * @param string $rub The rub.
	 * @return Historique Returns this historique.
	 */
	public function setRub($rub) {
		$this->rub = $rub;
		return $this;
	}

	/**
	 * Set the service.
	 *
	 * @param string $service The service.
	 * @return Historique Returns this historique.
	 */
	public function setService($service) {
		$this->service = $service;
		return $this;
	}

	/**
	 * Set the visite medicale.
	 *
	 * @param DateTime $visiteMedicale The visite medicale.
	 * @return Historique Returns this historique.
	 */
	public function setVisiteMedicale(DateTime $visiteMedicale = null) {
		$this->visiteMedicale = $visiteMedicale;
		return $this;
	}

}
