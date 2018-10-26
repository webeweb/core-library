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
 * Cumuls libelles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class CumulsLibelles {

	/**
	 * Montant cumul.
	 *
	 * @var float
	 */
	private $montantCumul;

	/**
	 * Num cumul bulletin.
	 *
	 * @var int
	 */
	private $numCumulBulletin;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the montant cumul.
	 *
	 * @return float Returns the montant cumul.
	 */
	public function getMontantCumul() {
		return $this->montantCumul;
	}

	/**
	 * Get the num cumul bulletin.
	 *
	 * @return int Returns the num cumul bulletin.
	 */
	public function getNumCumulBulletin() {
		return $this->numCumulBulletin;
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
	 * Set the montant cumul.
	 *
	 * @param float $montantCumul The montant cumul.
	 * @return CumulsLibelles Returns this cumuls libelles.
	 */
	public function setMontantCumul($montantCumul) {
		$this->montantCumul = $montantCumul;
		return $this;
	}

	/**
	 * Set the num cumul bulletin.
	 *
	 * @param int $numCumulBulletin The num cumul bulletin.
	 * @return CumulsLibelles Returns this cumuls libelles.
	 */
	public function setNumCumulBulletin($numCumulBulletin) {
		$this->numCumulBulletin = $numCumulBulletin;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return CumulsLibelles Returns this cumuls libelles.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

}
