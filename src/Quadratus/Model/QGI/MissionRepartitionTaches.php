<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;


/**
 * Mission repartition taches model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class MissionRepartitionTaches {

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code collaborateur.
	 *
	 * @var string
	 */
	private $codeCollaborateur;

	/**
	 * Code mission.
	 *
	 * @var string
	 */
	private $codeMission;

	/**
	 * Code tache.
	 *
	 * @var string
	 */
	private $codeTache;

	/**
	 * Repartition.
	 *
	 * @var float
	 */
	private $repartition;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
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
	 * Get the code collaborateur.
	 *
	 * @return string Returns the code collaborateur.
	 */
	public function getCodeCollaborateur() {
		return $this->codeCollaborateur;
	}

	/**
	 * Get the code mission.
	 *
	 * @return string Returns the code mission.
	 */
	public function getCodeMission() {
		return $this->codeMission;
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
	 * Get the repartition.
	 *
	 * @return float Returns the repartition.
	 */
	public function getRepartition() {
		return $this->repartition;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return MissionRepartitionTaches Returns this mission repartition taches.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return MissionRepartitionTaches Returns this mission repartition taches.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the code mission.
	 *
	 * @param string $codeMission The code mission.
	 * @return MissionRepartitionTaches Returns this mission repartition taches.
	 */
	public function setCodeMission($codeMission) {
		$this->codeMission = $codeMission;
		return $this;
	}

	/**
	 * Set the code tache.
	 *
	 * @param string $codeTache The code tache.
	 * @return MissionRepartitionTaches Returns this mission repartition taches.
	 */
	public function setCodeTache($codeTache) {
		$this->codeTache = $codeTache;
		return $this;
	}

	/**
	 * Set the repartition.
	 *
	 * @param float $repartition The repartition.
	 * @return MissionRepartitionTaches Returns this mission repartition taches.
	 */
	public function setRepartition($repartition) {
		$this->repartition = $repartition;
		return $this;
	}

}
