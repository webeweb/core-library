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


/**
 * Tranches h sup model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class TranchesHSup {

	/**
	 * Nb heures.
	 *
	 * @var int
	 */
	private $nbHeures;

	/**
	 * Taux.
	 *
	 * @var float
	 */
	private $taux;

	/**
	 * Type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the nb heures.
	 *
	 * @return int Returns the nb heures.
	 */
	public function getNbHeures() {
		return $this->nbHeures;
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
	 * Get the type.
	 *
	 * @return string Returns the type.
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set the nb heures.
	 *
	 * @param int $nbHeures The nb heures.
	 * @return TranchesHSup Returns this tranches h sup.
	 */
	public function setNbHeures($nbHeures) {
		$this->nbHeures = $nbHeures;
		return $this;
	}

	/**
	 * Set the taux.
	 *
	 * @param float $taux The taux.
	 * @return TranchesHSup Returns this tranches h sup.
	 */
	public function setTaux($taux) {
		$this->taux = $taux;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return TranchesHSup Returns this tranches h sup.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

}
