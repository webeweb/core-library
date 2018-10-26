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
 * Dern prepa fact model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class DernPrepaFact {

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
	 * Dt prepa.
	 *
	 * @var DateTime
	 */
	private $dtPrepa;

	/**
	 * No chrono preparation.
	 *
	 * @var int
	 */
	private $noChronoPreparation;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
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
	 * Get the dt prepa.
	 *
	 * @return DateTime Returns the dt prepa.
	 */
	public function getDtPrepa() {
		return $this->dtPrepa;
	}

	/**
	 * Get the no chrono preparation.
	 *
	 * @return int Returns the no chrono preparation.
	 */
	public function getNoChronoPreparation() {
		return $this->noChronoPreparation;
	}

	/**
	 * Get the periode.
	 *
	 * @return DateTime Returns the periode.
	 */
	public function getPeriode() {
		return $this->periode;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return DernPrepaFact Returns this dern prepa fact.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return DernPrepaFact Returns this dern prepa fact.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return DernPrepaFact Returns this dern prepa fact.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code regroupement.
	 *
	 * @param string $codeRegroupement The code regroupement.
	 * @return DernPrepaFact Returns this dern prepa fact.
	 */
	public function setCodeRegroupement($codeRegroupement) {
		$this->codeRegroupement = $codeRegroupement;
		return $this;
	}

	/**
	 * Set the dt prepa.
	 *
	 * @param DateTime $dtPrepa The dt prepa.
	 * @return DernPrepaFact Returns this dern prepa fact.
	 */
	public function setDtPrepa(DateTime $dtPrepa = null) {
		$this->dtPrepa = $dtPrepa;
		return $this;
	}

	/**
	 * Set the no chrono preparation.
	 *
	 * @param int $noChronoPreparation The no chrono preparation.
	 * @return DernPrepaFact Returns this dern prepa fact.
	 */
	public function setNoChronoPreparation($noChronoPreparation) {
		$this->noChronoPreparation = $noChronoPreparation;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return DernPrepaFact Returns this dern prepa fact.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

}
