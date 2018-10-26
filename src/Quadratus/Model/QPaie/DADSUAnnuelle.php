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
 * D a d s u annuelle model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class DADSUAnnuelle {

	/**
	 * Nom fichier d a d s u.
	 *
	 * @var string
	 */
	private $nomFichierDADSU;

	/**
	 * Tds annee.
	 *
	 * @var int
	 */
	private $tdsAnnee;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the nom fichier d a d s u.
	 *
	 * @return string Returns the nom fichier d a d s u.
	 */
	public function getNomFichierDADSU() {
		return $this->nomFichierDADSU;
	}

	/**
	 * Get the tds annee.
	 *
	 * @return int Returns the tds annee.
	 */
	public function getTdsAnnee() {
		return $this->tdsAnnee;
	}

	/**
	 * Set the nom fichier d a d s u.
	 *
	 * @param string $nomFichierDADSU The nom fichier d a d s u.
	 * @return DADSUAnnuelle Returns this d a d s u annuelle.
	 */
	public function setNomFichierDADSU($nomFichierDADSU) {
		$this->nomFichierDADSU = $nomFichierDADSU;
		return $this;
	}

	/**
	 * Set the tds annee.
	 *
	 * @param int $tdsAnnee The tds annee.
	 * @return DADSUAnnuelle Returns this d a d s u annuelle.
	 */
	public function setTdsAnnee($tdsAnnee) {
		$this->tdsAnnee = $tdsAnnee;
		return $this;
	}

}
