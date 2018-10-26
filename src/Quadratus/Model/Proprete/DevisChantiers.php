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
 * Devis chantiers model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class DevisChantiers {

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
	 * Maj descriptif.
	 *
	 * @var boolean
	 */
	private $majDescriptif;

	/**
	 * Montant h t.
	 *
	 * @var float
	 */
	private $montantHT;

	/**
	 * Num devis.
	 *
	 * @var string
	 */
	private $numDevis;

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
	 * Get the maj descriptif.
	 *
	 * @return boolean Returns the maj descriptif.
	 */
	public function getMajDescriptif() {
		return $this->majDescriptif;
	}

	/**
	 * Get the montant h t.
	 *
	 * @return float Returns the montant h t.
	 */
	public function getMontantHT() {
		return $this->montantHT;
	}

	/**
	 * Get the num devis.
	 *
	 * @return string Returns the num devis.
	 */
	public function getNumDevis() {
		return $this->numDevis;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return DevisChantiers Returns this devis chantiers.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return DevisChantiers Returns this devis chantiers.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return DevisChantiers Returns this devis chantiers.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the maj descriptif.
	 *
	 * @param boolean $majDescriptif The maj descriptif.
	 * @return DevisChantiers Returns this devis chantiers.
	 */
	public function setMajDescriptif($majDescriptif) {
		$this->majDescriptif = $majDescriptif;
		return $this;
	}

	/**
	 * Set the montant h t.
	 *
	 * @param float $montantHT The montant h t.
	 * @return DevisChantiers Returns this devis chantiers.
	 */
	public function setMontantHT($montantHT) {
		$this->montantHT = $montantHT;
		return $this;
	}

	/**
	 * Set the num devis.
	 *
	 * @param string $numDevis The num devis.
	 * @return DevisChantiers Returns this devis chantiers.
	 */
	public function setNumDevis($numDevis) {
		$this->numDevis = $numDevis;
		return $this;
	}

}
