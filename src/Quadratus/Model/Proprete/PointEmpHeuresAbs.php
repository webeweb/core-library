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
 * Point emp heures abs model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbs {

	/**
	 * Code absence.
	 *
	 * @var string
	 */
	private $codeAbsence;

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
	 * Code tache.
	 *
	 * @var string
	 */
	private $codeTache;

	/**
	 * Date.
	 *
	 * @var DateTime
	 */
	private $date;

	/**
	 * Heure abs.
	 *
	 * @var DateTime
	 */
	private $heureAbs;

	/**
	 * Heure abs nuit.
	 *
	 * @var DateTime
	 */
	private $heureAbsNuit;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

	/**
	 * Type heure.
	 *
	 * @var string
	 */
	private $typeHeure;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code absence.
	 *
	 * @return string Returns the code absence.
	 */
	public function getCodeAbsence() {
		return $this->codeAbsence;
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
	 * Get the code tache.
	 *
	 * @return string Returns the code tache.
	 */
	public function getCodeTache() {
		return $this->codeTache;
	}

	/**
	 * Get the date.
	 *
	 * @return DateTime Returns the date.
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Get the heure abs.
	 *
	 * @return DateTime Returns the heure abs.
	 */
	public function getHeureAbs() {
		return $this->heureAbs;
	}

	/**
	 * Get the heure abs nuit.
	 *
	 * @return DateTime Returns the heure abs nuit.
	 */
	public function getHeureAbsNuit() {
		return $this->heureAbsNuit;
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
	 * Get the type heure.
	 *
	 * @return string Returns the type heure.
	 */
	public function getTypeHeure() {
		return $this->typeHeure;
	}

	/**
	 * Set the code absence.
	 *
	 * @param string $codeAbsence The code absence.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setCodeAbsence($codeAbsence) {
		$this->codeAbsence = $codeAbsence;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the code tache.
	 *
	 * @param string $codeTache The code tache.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setCodeTache($codeTache) {
		$this->codeTache = $codeTache;
		return $this;
	}

	/**
	 * Set the date.
	 *
	 * @param DateTime $date The date.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setDate(DateTime $date = null) {
		$this->date = $date;
		return $this;
	}

	/**
	 * Set the heure abs.
	 *
	 * @param DateTime $heureAbs The heure abs.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setHeureAbs(DateTime $heureAbs = null) {
		$this->heureAbs = $heureAbs;
		return $this;
	}

	/**
	 * Set the heure abs nuit.
	 *
	 * @param DateTime $heureAbsNuit The heure abs nuit.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setHeureAbsNuit(DateTime $heureAbsNuit = null) {
		$this->heureAbsNuit = $heureAbsNuit;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the type heure.
	 *
	 * @param string $typeHeure The type heure.
	 * @return PointEmpHeuresAbs Returns this point emp heures abs.
	 */
	public function setTypeHeure($typeHeure) {
		$this->typeHeure = $typeHeure;
		return $this;
	}

}
