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
 * Histo paie absences.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
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
     * @var DateTime|null
     */
    private $dateDebutAbs;

    /**
     * Date fin abs.
     *
     * @var DateTime|null
     */
    private $dateFinAbs;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
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
     * @var DateTime|null
     */
    private $periode;

    /**
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

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
     * @return DateTime|null Returns the date debut abs.
     */
    public function getDateDebutAbs() {
        return $this->dateDebutAbs;
    }

    /**
     * Get the date fin abs.
     *
     * @return DateTime|null Returns the date fin abs.
     */
    public function getDateFinAbs() {
        return $this->dateFinAbs;
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
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
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
     * Get the uniq id synchro.
     *
     * @return string Returns the uniq id synchro.
     */
    public function getUniqIdSynchro() {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code abs paie.
     *
     * @param string $codeAbsPaie The code abs paie.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeAbsPaie($codeAbsPaie) {
        $this->codeAbsPaie = $codeAbsPaie;
        return $this;
    }

    /**
     * Set the code absence.
     *
     * @param string $codeAbsence The code absence.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeAbsence($codeAbsence) {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date debut abs.
     *
     * @param DateTime|null $dateDebutAbs The date debut abs.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setDateDebutAbs(DateTime $dateDebutAbs = null) {
        $this->dateDebutAbs = $dateDebutAbs;
        return $this;
    }

    /**
     * Set the date fin abs.
     *
     * @param DateTime|null $dateFinAbs The date fin abs.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setDateFinAbs(DateTime $dateFinAbs = null) {
        $this->dateFinAbs = $dateFinAbs;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the duree absence.
     *
     * @param float $dureeAbsence The duree absence.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setDureeAbsence($dureeAbsence) {
        $this->dureeAbsence = $dureeAbsence;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the nb jours abs.
     *
     * @param float $nbJoursAbs The nb jours abs.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setNbJoursAbs($nbJoursAbs) {
        $this->nbJoursAbs = $nbJoursAbs;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     * @return HistoPaieAbsences Returns this Histo paie absences.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
