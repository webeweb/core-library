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
 * Histo paie absences model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class HistoPaieAbsences {

	/**
	 * Code abs paie.
	 *
	 * @var string
	 */
	private $codeAbsPaie;

	/**
	 * Code absence.
	 *
	 * @var string
	 */
	private $codeAbsence;

	/**
	 * Code collabo valid.
	 *
	 * @var string
	 */
	private $codeCollaboValid;

	/**
	 * Code collaborateur.
	 *
	 * @var string
	 */
	private $codeCollaborateur;

	/**
	 * Code employe.
	 *
	 * @var string
	 */
	private $codeEmploye;

	/**
	 * Date debut abs.
	 *
	 * @var DateTime
	 */
	private $dateDebutAbs;

	/**
	 * Date fin abs.
	 *
	 * @var DateTime
	 */
	private $dateFinAbs;

	/**
	 * Date validation synchro.
	 *
	 * @var DateTime
	 */
	private $dateValidationSynchro;

	/**
	 * Duree absence.
	 *
	 * @var float
	 */
	private $dureeAbsence;

	/**
	 * Etat.
	 *
	 * @var string
	 */
	private $etat;

	/**
	 * Nb jours abs.
	 *
	 * @var float
	 */
	private $nbJoursAbs;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Uniq i d.
	 *
	 * @var string
	 */
	private $uniqID;

	/**
	 * Uniq i d synchro.
	 *
	 * @var string
	 */
	private $uniqIDSynchro;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code abs paie.
	 *
	 * @return string Returns the code abs paie.
	 */
	public function getCodeAbsPaie() {
		return $this->codeAbsPaie;
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
	 * Get the code collabo valid.
	 *
	 * @return string Returns the code collabo valid.
	 */
	public function getCodeCollaboValid() {
		return $this->codeCollaboValid;
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
	 * Get the code employe.
	 *
	 * @return string Returns the code employe.
	 */
	public function getCodeEmploye() {
		return $this->codeEmploye;
	}

	/**
	 * Get the date debut abs.
	 *
	 * @return DateTime Returns the date debut abs.
	 */
	public function getDateDebutAbs() {
		return $this->dateDebutAbs;
	}

	/**
	 * Get the date fin abs.
	 *
	 * @return DateTime Returns the date fin abs.
	 */
	public function getDateFinAbs() {
		return $this->dateFinAbs;
	}

	/**
	 * Get the date validation synchro.
	 *
	 * @return DateTime Returns the date validation synchro.
	 */
	public function getDateValidationSynchro() {
		return $this->dateValidationSynchro;
	}

	/**
	 * Get the duree absence.
	 *
	 * @return float Returns the duree absence.
	 */
	public function getDureeAbsence() {
		return $this->dureeAbsence;
	}

	/**
	 * Get the etat.
	 *
	 * @return string Returns the etat.
	 */
	public function getEtat() {
		return $this->etat;
	}

	/**
	 * Get the nb jours abs.
	 *
	 * @return float Returns the nb jours abs.
	 */
	public function getNbJoursAbs() {
		return $this->nbJoursAbs;
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
	 * Get the uniq i d.
	 *
	 * @return string Returns the uniq i d.
	 */
	public function getUniqID() {
		return $this->uniqID;
	}

	/**
	 * Get the uniq i d synchro.
	 *
	 * @return string Returns the uniq i d synchro.
	 */
	public function getUniqIDSynchro() {
		return $this->uniqIDSynchro;
	}

	/**
	 * Set the code abs paie.
	 *
	 * @param string $codeAbsPaie The code abs paie.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setCodeAbsPaie($codeAbsPaie) {
		$this->codeAbsPaie = $codeAbsPaie;
		return $this;
	}

	/**
	 * Set the code absence.
	 *
	 * @param string $codeAbsence The code absence.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setCodeAbsence($codeAbsence) {
		$this->codeAbsence = $codeAbsence;
		return $this;
	}

	/**
	 * Set the code collabo valid.
	 *
	 * @param string $codeCollaboValid The code collabo valid.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setCodeCollaboValid($codeCollaboValid) {
		$this->codeCollaboValid = $codeCollaboValid;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the date debut abs.
	 *
	 * @param DateTime $dateDebutAbs The date debut abs.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setDateDebutAbs(DateTime $dateDebutAbs = null) {
		$this->dateDebutAbs = $dateDebutAbs;
		return $this;
	}

	/**
	 * Set the date fin abs.
	 *
	 * @param DateTime $dateFinAbs The date fin abs.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setDateFinAbs(DateTime $dateFinAbs = null) {
		$this->dateFinAbs = $dateFinAbs;
		return $this;
	}

	/**
	 * Set the date validation synchro.
	 *
	 * @param DateTime $dateValidationSynchro The date validation synchro.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
		$this->dateValidationSynchro = $dateValidationSynchro;
		return $this;
	}

	/**
	 * Set the duree absence.
	 *
	 * @param float $dureeAbsence The duree absence.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setDureeAbsence($dureeAbsence) {
		$this->dureeAbsence = $dureeAbsence;
		return $this;
	}

	/**
	 * Set the etat.
	 *
	 * @param string $etat The etat.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setEtat($etat) {
		$this->etat = $etat;
		return $this;
	}

	/**
	 * Set the nb jours abs.
	 *
	 * @param float $nbJoursAbs The nb jours abs.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setNbJoursAbs($nbJoursAbs) {
		$this->nbJoursAbs = $nbJoursAbs;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

	/**
	 * Set the uniq i d synchro.
	 *
	 * @param string $uniqIDSynchro The uniq i d synchro.
	 * @return HistoPaieAbsences Returns this histo paie absences.
	 */
	public function setUniqIDSynchro($uniqIDSynchro) {
		$this->uniqIDSynchro = $uniqIDSynchro;
		return $this;
	}

}
