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
 * Travaux type lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class TravauxTypeLignes {

	/**
	 * Code repartition.
	 *
	 * @var string
	 */
	private $codeRepartition;

	/**
	 * Code travail.
	 *
	 * @var string
	 */
	private $codeTravail;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Nb u o.
	 *
	 * @var float
	 */
	private $nbUO;

	/**
	 * Niveau ligne.
	 *
	 * @var string
	 */
	private $niveauLigne;

	/**
	 * Numero ligne.
	 *
	 * @var int
	 */
	private $numeroLigne;

	/**
	 * Police.
	 *
	 * @var string
	 */
	private $police;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code repartition.
	 *
	 * @return string Returns the code repartition.
	 */
	public function getCodeRepartition() {
		return $this->codeRepartition;
	}

	/**
	 * Get the code travail.
	 *
	 * @return string Returns the code travail.
	 */
	public function getCodeTravail() {
		return $this->codeTravail;
	}

	/**
	 * Get the libelle.
	 *
	 * @return string Returns the libelle.
	 */
	public function getLibelle() {
		return $this->libelle;
	}

	/**
	 * Get the nb u o.
	 *
	 * @return float Returns the nb u o.
	 */
	public function getNbUO() {
		return $this->nbUO;
	}

	/**
	 * Get the niveau ligne.
	 *
	 * @return string Returns the niveau ligne.
	 */
	public function getNiveauLigne() {
		return $this->niveauLigne;
	}

	/**
	 * Get the numero ligne.
	 *
	 * @return int Returns the numero ligne.
	 */
	public function getNumeroLigne() {
		return $this->numeroLigne;
	}

	/**
	 * Get the police.
	 *
	 * @return string Returns the police.
	 */
	public function getPolice() {
		return $this->police;
	}

	/**
	 * Set the code repartition.
	 *
	 * @param string $codeRepartition The code repartition.
	 * @return TravauxTypeLignes Returns this travaux type lignes.
	 */
	public function setCodeRepartition($codeRepartition) {
		$this->codeRepartition = $codeRepartition;
		return $this;
	}

	/**
	 * Set the code travail.
	 *
	 * @param string $codeTravail The code travail.
	 * @return TravauxTypeLignes Returns this travaux type lignes.
	 */
	public function setCodeTravail($codeTravail) {
		$this->codeTravail = $codeTravail;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return TravauxTypeLignes Returns this travaux type lignes.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the nb u o.
	 *
	 * @param float $nbUO The nb u o.
	 * @return TravauxTypeLignes Returns this travaux type lignes.
	 */
	public function setNbUO($nbUO) {
		$this->nbUO = $nbUO;
		return $this;
	}

	/**
	 * Set the niveau ligne.
	 *
	 * @param string $niveauLigne The niveau ligne.
	 * @return TravauxTypeLignes Returns this travaux type lignes.
	 */
	public function setNiveauLigne($niveauLigne) {
		$this->niveauLigne = $niveauLigne;
		return $this;
	}

	/**
	 * Set the numero ligne.
	 *
	 * @param int $numeroLigne The numero ligne.
	 * @return TravauxTypeLignes Returns this travaux type lignes.
	 */
	public function setNumeroLigne($numeroLigne) {
		$this->numeroLigne = $numeroLigne;
		return $this;
	}

	/**
	 * Set the police.
	 *
	 * @param string $police The police.
	 * @return TravauxTypeLignes Returns this travaux type lignes.
	 */
	public function setPolice($police) {
		$this->police = $police;
		return $this;
	}

}
