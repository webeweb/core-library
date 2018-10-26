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
 * Alertes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Alertes {

	/**
	 * Cloturee.
	 *
	 * @var boolean
	 */
	private $cloturee;

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Commentaire.
	 *
	 * @var string
	 */
	private $commentaire;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

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
	 * Get the cloturee.
	 *
	 * @return boolean Returns the cloturee.
	 */
	public function getCloturee() {
		return $this->cloturee;
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
	 * Get the commentaire.
	 *
	 * @return string Returns the commentaire.
	 */
	public function getCommentaire() {
		return $this->commentaire;
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
	 * Get the periode.
	 *
	 * @return DateTime Returns the periode.
	 */
	public function getPeriode() {
		return $this->periode;
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
	 * Set the cloturee.
	 *
	 * @param boolean $cloturee The cloturee.
	 * @return Alertes Returns this alertes.
	 */
	public function setCloturee($cloturee) {
		$this->cloturee = $cloturee;
		return $this;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return Alertes Returns this alertes.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the commentaire.
	 *
	 * @param string $commentaire The commentaire.
	 * @return Alertes Returns this alertes.
	 */
	public function setCommentaire($commentaire) {
		$this->commentaire = $commentaire;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return Alertes Returns this alertes.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return Alertes Returns this alertes.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return Alertes Returns this alertes.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

}
