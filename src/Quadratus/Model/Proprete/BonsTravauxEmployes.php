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
 * Bons travaux employes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class BonsTravauxEmployes {

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
	 * Code employe.
	 *
	 * @var string
	 */
	private $codeEmploye;

	/**
	 * Code equipe.
	 *
	 * @var string
	 */
	private $codeEquipe;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

	/**
	 * Transfert paie.
	 *
	 * @var string
	 */
	private $transfertPaie;

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
	 * Get the code employe.
	 *
	 * @return string Returns the code employe.
	 */
	public function getCodeEmploye() {
		return $this->codeEmploye;
	}

	/**
	 * Get the code equipe.
	 *
	 * @return string Returns the code equipe.
	 */
	public function getCodeEquipe() {
		return $this->codeEquipe;
	}

	/**
	 * Get the num b t.
	 *
	 * @return int Returns the num b t.
	 */
	public function getNumBT() {
		return $this->numBT;
	}

	/**
	 * Get the transfert paie.
	 *
	 * @return string Returns the transfert paie.
	 */
	public function getTransfertPaie() {
		return $this->transfertPaie;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return BonsTravauxEmployes Returns this bons travaux employes.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return BonsTravauxEmployes Returns this bons travaux employes.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return BonsTravauxEmployes Returns this bons travaux employes.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return BonsTravauxEmployes Returns this bons travaux employes.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the code equipe.
	 *
	 * @param string $codeEquipe The code equipe.
	 * @return BonsTravauxEmployes Returns this bons travaux employes.
	 */
	public function setCodeEquipe($codeEquipe) {
		$this->codeEquipe = $codeEquipe;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return BonsTravauxEmployes Returns this bons travaux employes.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the transfert paie.
	 *
	 * @param string $transfertPaie The transfert paie.
	 * @return BonsTravauxEmployes Returns this bons travaux employes.
	 */
	public function setTransfertPaie($transfertPaie) {
		$this->transfertPaie = $transfertPaie;
		return $this;
	}

}
