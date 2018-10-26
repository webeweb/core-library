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
 * Point emp heures abs compl rempl model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbsComplRempl {

	/**
	 * Avenant signe.
	 *
	 * @var boolean
	 */
	private $avenantSigne;

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
	 * Date.
	 *
	 * @var DateTime
	 */
	private $date;

	/**
	 * Date abs decalee.
	 *
	 * @var DateTime
	 */
	private $dateAbsDecalee;

	/**
	 * Date validation synchro.
	 *
	 * @var DateTime
	 */
	private $dateValidationSynchro;

	/**
	 * Employe remplace.
	 *
	 * @var string
	 */
	private $employeRemplace;

	/**
	 * Etat.
	 *
	 * @var string
	 */
	private $etat;

	/**
	 * Heure deb.
	 *
	 * @var DateTime
	 */
	private $heureDeb;

	/**
	 * Heures jour.
	 *
	 * @var DateTime
	 */
	private $heuresJour;

	/**
	 * Heures nuit.
	 *
	 * @var DateTime
	 */
	private $heuresNuit;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

	/**
	 * Numero avenant.
	 *
	 * @var int
	 */
	private $numeroAvenant;

	/**
	 * Type heure.
	 *
	 * @var string
	 */
	private $typeHeure;

	/**
	 * Uniq i d.
	 *
	 * @var string
	 */
	private $uniqID;

	/**
	 * Uniq i d planning.
	 *
	 * @var string
	 */
	private $uniqIDPlanning;

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
	 * Get the avenant signe.
	 *
	 * @return boolean Returns the avenant signe.
	 */
	public function getAvenantSigne() {
		return $this->avenantSigne;
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
	 * Get the date.
	 *
	 * @return DateTime Returns the date.
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Get the date abs decalee.
	 *
	 * @return DateTime Returns the date abs decalee.
	 */
	public function getDateAbsDecalee() {
		return $this->dateAbsDecalee;
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
	 * Get the employe remplace.
	 *
	 * @return string Returns the employe remplace.
	 */
	public function getEmployeRemplace() {
		return $this->employeRemplace;
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
	 * Get the heure deb.
	 *
	 * @return DateTime Returns the heure deb.
	 */
	public function getHeureDeb() {
		return $this->heureDeb;
	}

	/**
	 * Get the heures jour.
	 *
	 * @return DateTime Returns the heures jour.
	 */
	public function getHeuresJour() {
		return $this->heuresJour;
	}

	/**
	 * Get the heures nuit.
	 *
	 * @return DateTime Returns the heures nuit.
	 */
	public function getHeuresNuit() {
		return $this->heuresNuit;
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
	 * Get the numero avenant.
	 *
	 * @return int Returns the numero avenant.
	 */
	public function getNumeroAvenant() {
		return $this->numeroAvenant;
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
	 * Get the uniq i d.
	 *
	 * @return string Returns the uniq i d.
	 */
	public function getUniqID() {
		return $this->uniqID;
	}

	/**
	 * Get the uniq i d planning.
	 *
	 * @return string Returns the uniq i d planning.
	 */
	public function getUniqIDPlanning() {
		return $this->uniqIDPlanning;
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
	 * Set the avenant signe.
	 *
	 * @param boolean $avenantSigne The avenant signe.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setAvenantSigne($avenantSigne) {
		$this->avenantSigne = $avenantSigne;
		return $this;
	}

	/**
	 * Set the code absence.
	 *
	 * @param string $codeAbsence The code absence.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setCodeAbsence($codeAbsence) {
		$this->codeAbsence = $codeAbsence;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collabo valid.
	 *
	 * @param string $codeCollaboValid The code collabo valid.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setCodeCollaboValid($codeCollaboValid) {
		$this->codeCollaboValid = $codeCollaboValid;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the code tache.
	 *
	 * @param string $codeTache The code tache.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setCodeTache($codeTache) {
		$this->codeTache = $codeTache;
		return $this;
	}

	/**
	 * Set the date.
	 *
	 * @param DateTime $date The date.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setDate(DateTime $date = null) {
		$this->date = $date;
		return $this;
	}

	/**
	 * Set the date abs decalee.
	 *
	 * @param DateTime $dateAbsDecalee The date abs decalee.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setDateAbsDecalee(DateTime $dateAbsDecalee = null) {
		$this->dateAbsDecalee = $dateAbsDecalee;
		return $this;
	}

	/**
	 * Set the date validation synchro.
	 *
	 * @param DateTime $dateValidationSynchro The date validation synchro.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
		$this->dateValidationSynchro = $dateValidationSynchro;
		return $this;
	}

	/**
	 * Set the employe remplace.
	 *
	 * @param string $employeRemplace The employe remplace.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setEmployeRemplace($employeRemplace) {
		$this->employeRemplace = $employeRemplace;
		return $this;
	}

	/**
	 * Set the etat.
	 *
	 * @param string $etat The etat.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setEtat($etat) {
		$this->etat = $etat;
		return $this;
	}

	/**
	 * Set the heure deb.
	 *
	 * @param DateTime $heureDeb The heure deb.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setHeureDeb(DateTime $heureDeb = null) {
		$this->heureDeb = $heureDeb;
		return $this;
	}

	/**
	 * Set the heures jour.
	 *
	 * @param DateTime $heuresJour The heures jour.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setHeuresJour(DateTime $heuresJour = null) {
		$this->heuresJour = $heuresJour;
		return $this;
	}

	/**
	 * Set the heures nuit.
	 *
	 * @param DateTime $heuresNuit The heures nuit.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setHeuresNuit(DateTime $heuresNuit = null) {
		$this->heuresNuit = $heuresNuit;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the numero avenant.
	 *
	 * @param int $numeroAvenant The numero avenant.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setNumeroAvenant($numeroAvenant) {
		$this->numeroAvenant = $numeroAvenant;
		return $this;
	}

	/**
	 * Set the type heure.
	 *
	 * @param string $typeHeure The type heure.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setTypeHeure($typeHeure) {
		$this->typeHeure = $typeHeure;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

	/**
	 * Set the uniq i d planning.
	 *
	 * @param string $uniqIDPlanning The uniq i d planning.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setUniqIDPlanning($uniqIDPlanning) {
		$this->uniqIDPlanning = $uniqIDPlanning;
		return $this;
	}

	/**
	 * Set the uniq i d synchro.
	 *
	 * @param string $uniqIDSynchro The uniq i d synchro.
	 * @return PointEmpHeuresAbsComplRempl Returns this point emp heures abs compl rempl.
	 */
	public function setUniqIDSynchro($uniqIDSynchro) {
		$this->uniqIDSynchro = $uniqIDSynchro;
		return $this;
	}

}
