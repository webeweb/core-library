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
 * Absences employe model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class AbsencesEmploye {

	/**
	 * Absence modifiee.
	 *
	 * @var string
	 */
	private $absenceModifiee;

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
	 * Code tache.
	 *
	 * @var string
	 */
	private $codeTache;

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
	 * Etat.
	 *
	 * @var string
	 */
	private $etat;

	/**
	 * From fermeture chantier.
	 *
	 * @var boolean
	 */
	private $fromFermetureChantier;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

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
	 * Get the absence modifiee.
	 *
	 * @return string Returns the absence modifiee.
	 */
	public function getAbsenceModifiee() {
		return $this->absenceModifiee;
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
	 * Get the code tache.
	 *
	 * @return string Returns the code tache.
	 */
	public function getCodeTache() {
		return $this->codeTache;
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
	 * Get the etat.
	 *
	 * @return string Returns the etat.
	 */
	public function getEtat() {
		return $this->etat;
	}

	/**
	 * Get the from fermeture chantier.
	 *
	 * @return boolean Returns the from fermeture chantier.
	 */
	public function getFromFermetureChantier() {
		return $this->fromFermetureChantier;
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
	 * Set the absence modifiee.
	 *
	 * @param string $absenceModifiee The absence modifiee.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setAbsenceModifiee($absenceModifiee) {
		$this->absenceModifiee = $absenceModifiee;
		return $this;
	}

	/**
	 * Set the code absence.
	 *
	 * @param string $codeAbsence The code absence.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setCodeAbsence($codeAbsence) {
		$this->codeAbsence = $codeAbsence;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collabo valid.
	 *
	 * @param string $codeCollaboValid The code collabo valid.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setCodeCollaboValid($codeCollaboValid) {
		$this->codeCollaboValid = $codeCollaboValid;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the code tache.
	 *
	 * @param string $codeTache The code tache.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setCodeTache($codeTache) {
		$this->codeTache = $codeTache;
		return $this;
	}

	/**
	 * Set the date debut abs.
	 *
	 * @param DateTime $dateDebutAbs The date debut abs.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setDateDebutAbs(DateTime $dateDebutAbs = null) {
		$this->dateDebutAbs = $dateDebutAbs;
		return $this;
	}

	/**
	 * Set the date fin abs.
	 *
	 * @param DateTime $dateFinAbs The date fin abs.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setDateFinAbs(DateTime $dateFinAbs = null) {
		$this->dateFinAbs = $dateFinAbs;
		return $this;
	}

	/**
	 * Set the date validation synchro.
	 *
	 * @param DateTime $dateValidationSynchro The date validation synchro.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
		$this->dateValidationSynchro = $dateValidationSynchro;
		return $this;
	}

	/**
	 * Set the etat.
	 *
	 * @param string $etat The etat.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setEtat($etat) {
		$this->etat = $etat;
		return $this;
	}

	/**
	 * Set the from fermeture chantier.
	 *
	 * @param boolean $fromFermetureChantier The from fermeture chantier.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setFromFermetureChantier($fromFermetureChantier) {
		$this->fromFermetureChantier = $fromFermetureChantier;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

	/**
	 * Set the uniq i d synchro.
	 *
	 * @param string $uniqIDSynchro The uniq i d synchro.
	 * @return AbsencesEmploye Returns this absences employe.
	 */
	public function setUniqIDSynchro($uniqIDSynchro) {
		$this->uniqIDSynchro = $uniqIDSynchro;
		return $this;
	}

}
