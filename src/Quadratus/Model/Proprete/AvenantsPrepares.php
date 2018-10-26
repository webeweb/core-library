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
 * Avenants prepares model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class AvenantsPrepares {

	/**
	 * Chrono.
	 *
	 * @var string
	 */
	private $chrono;

	/**
	 * Code employe.
	 *
	 * @var string
	 */
	private $codeEmploye;

	/**
	 * Continuer verif.
	 *
	 * @var boolean
	 */
	private $continuerVerif;

	/**
	 * Nom.
	 *
	 * @var string
	 */
	private $nom;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Prenom.
	 *
	 * @var string
	 */
	private $prenom;

	/**
	 * Type document.
	 *
	 * @var string
	 */
	private $typeDocument;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the chrono.
	 *
	 * @return string Returns the chrono.
	 */
	public function getChrono() {
		return $this->chrono;
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
	 * Get the continuer verif.
	 *
	 * @return boolean Returns the continuer verif.
	 */
	public function getContinuerVerif() {
		return $this->continuerVerif;
	}

	/**
	 * Get the nom.
	 *
	 * @return string Returns the nom.
	 */
	public function getNom() {
		return $this->nom;
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
	 * Get the prenom.
	 *
	 * @return string Returns the prenom.
	 */
	public function getPrenom() {
		return $this->prenom;
	}

	/**
	 * Get the type document.
	 *
	 * @return string Returns the type document.
	 */
	public function getTypeDocument() {
		return $this->typeDocument;
	}

	/**
	 * Set the chrono.
	 *
	 * @param string $chrono The chrono.
	 * @return AvenantsPrepares Returns this avenants prepares.
	 */
	public function setChrono($chrono) {
		$this->chrono = $chrono;
		return $this;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return AvenantsPrepares Returns this avenants prepares.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the continuer verif.
	 *
	 * @param boolean $continuerVerif The continuer verif.
	 * @return AvenantsPrepares Returns this avenants prepares.
	 */
	public function setContinuerVerif($continuerVerif) {
		$this->continuerVerif = $continuerVerif;
		return $this;
	}

	/**
	 * Set the nom.
	 *
	 * @param string $nom The nom.
	 * @return AvenantsPrepares Returns this avenants prepares.
	 */
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return AvenantsPrepares Returns this avenants prepares.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the prenom.
	 *
	 * @param string $prenom The prenom.
	 * @return AvenantsPrepares Returns this avenants prepares.
	 */
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}

	/**
	 * Set the type document.
	 *
	 * @param string $typeDocument The type document.
	 * @return AvenantsPrepares Returns this avenants prepares.
	 */
	public function setTypeDocument($typeDocument) {
		$this->typeDocument = $typeDocument;
		return $this;
	}

}
