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
 * Absences entete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class AbsencesEntete {

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
	 * Set the code absence.
	 *
	 * @param string $codeAbsence The code absence.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setCodeAbsence($codeAbsence) {
		$this->codeAbsence = $codeAbsence;
		return $this;
	}

	/**
	 * Set the code collabo valid.
	 *
	 * @param string $codeCollaboValid The code collabo valid.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setCodeCollaboValid($codeCollaboValid) {
		$this->codeCollaboValid = $codeCollaboValid;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the date debut abs.
	 *
	 * @param DateTime $dateDebutAbs The date debut abs.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setDateDebutAbs(DateTime $dateDebutAbs = null) {
		$this->dateDebutAbs = $dateDebutAbs;
		return $this;
	}

	/**
	 * Set the date fin abs.
	 *
	 * @param DateTime $dateFinAbs The date fin abs.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setDateFinAbs(DateTime $dateFinAbs = null) {
		$this->dateFinAbs = $dateFinAbs;
		return $this;
	}

	/**
	 * Set the date validation synchro.
	 *
	 * @param DateTime $dateValidationSynchro The date validation synchro.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
		$this->dateValidationSynchro = $dateValidationSynchro;
		return $this;
	}

	/**
	 * Set the etat.
	 *
	 * @param string $etat The etat.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setEtat($etat) {
		$this->etat = $etat;
		return $this;
	}

	/**
	 * Set the from fermeture chantier.
	 *
	 * @param boolean $fromFermetureChantier The from fermeture chantier.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setFromFermetureChantier($fromFermetureChantier) {
		$this->fromFermetureChantier = $fromFermetureChantier;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

	/**
	 * Set the uniq i d synchro.
	 *
	 * @param string $uniqIDSynchro The uniq i d synchro.
	 * @return AbsencesEntete Returns this absences entete.
	 */
	public function setUniqIDSynchro($uniqIDSynchro) {
		$this->uniqIDSynchro = $uniqIDSynchro;
		return $this;
	}

}
