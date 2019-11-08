<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Point emp heures abs compl rempl.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbsComplRempl {

    /**
     * Avenant signe.
     *
     * @var bool
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
     * @var DateTime|null
     */
    private $date;

    /**
     * Date abs decalee.
     *
     * @var DateTime|null
     */
    private $dateAbsDecalee;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
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
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Heures jour.
     *
     * @var DateTime|null
     */
    private $heuresJour;

    /**
     * Heures nuit.
     *
     * @var DateTime|null
     */
    private $heuresNuit;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

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
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

    /**
     * Uniq id planning.
     *
     * @var string
     */
    private $uniqIdPlanning;

    /**
     * Uniq id synchro.
     *
     * @var string
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avenant signe.
     *
     * @return bool Returns the avenant signe.
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
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the date abs decalee.
     *
     * @return DateTime|null Returns the date abs decalee.
     */
    public function getDateAbsDecalee() {
        return $this->dateAbsDecalee;
    }

    /**
     * Get the date validation synchro.
     *
     * @return DateTime|null Returns the date validation synchro.
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
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb() {
        return $this->heureDeb;
    }

    /**
     * Get the heures jour.
     *
     * @return DateTime|null Returns the heures jour.
     */
    public function getHeuresJour() {
        return $this->heuresJour;
    }

    /**
     * Get the heures nuit.
     *
     * @return DateTime|null Returns the heures nuit.
     */
    public function getHeuresNuit() {
        return $this->heuresNuit;
    }

    /**
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
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
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
    }

    /**
     * Get the uniq id planning.
     *
     * @return string Returns the uniq id planning.
     */
    public function getUniqIdPlanning() {
        return $this->uniqIdPlanning;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string Returns the uniq id synchro.
     */
    public function getUniqIdSynchro() {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the avenant signe.
     *
     * @param bool $avenantSigne The avenant signe.
     */
    public function setAvenantSigne($avenantSigne) {
        $this->avenantSigne = $avenantSigne;
        return $this;
    }

    /**
     * Set the code absence.
     *
     * @param string $codeAbsence The code absence.
     */
    public function setCodeAbsence($codeAbsence) {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date abs decalee.
     *
     * @param DateTime|null $dateAbsDecalee The date abs decalee.
     */
    public function setDateAbsDecalee(DateTime $dateAbsDecalee = null) {
        $this->dateAbsDecalee = $dateAbsDecalee;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the employe remplace.
     *
     * @param string $employeRemplace The employe remplace.
     */
    public function setEmployeRemplace($employeRemplace) {
        $this->employeRemplace = $employeRemplace;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     */
    public function setHeureDeb(DateTime $heureDeb = null) {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the heures jour.
     *
     * @param DateTime|null $heuresJour The heures jour.
     */
    public function setHeuresJour(DateTime $heuresJour = null) {
        $this->heuresJour = $heuresJour;
        return $this;
    }

    /**
     * Set the heures nuit.
     *
     * @param DateTime|null $heuresNuit The heures nuit.
     */
    public function setHeuresNuit(DateTime $heuresNuit = null) {
        $this->heuresNuit = $heuresNuit;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string $typeHeure The type heure.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id planning.
     *
     * @param string $uniqIdPlanning The uniq id planning.
     */
    public function setUniqIdPlanning($uniqIdPlanning) {
        $this->uniqIdPlanning = $uniqIdPlanning;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
