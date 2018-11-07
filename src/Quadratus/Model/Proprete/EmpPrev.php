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
 * Emp prev model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class EmpPrev {

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
     * Dim type2.
     *
     * @var string
     */
    private $dimType2;

    /**
     * Discr tache.
     *
     * @var int
     */
    private $discrTache;

    /**
     * Duree.
     *
     * @var DateTime
     */
    private $duree;

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
     * H nuit type2.
     *
     * @var string
     */
    private $hNuitType2;

    /**
     * Heure deb.
     *
     * @var DateTime
     */
    private $heureDeb;

    /**
     * J f type2.
     *
     * @var string
     */
    private $jFType2;

    /**
     * Nb chambres.
     *
     * @var float
     */
    private $nbChambres;

    /**
     * Note memo.
     *
     * @var string
     */
    private $noteMemo;

    /**
     * Num chrono.
     *
     * @var int
     */
    private $numChrono;

    /**
     * Pointage.
     *
     * @var boolean
     */
    private $pointage;

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
     * Get the dim type2.
     *
     * @return string Returns the dim type2.
     */
    public function getDimType2() {
        return $this->dimType2;
    }

    /**
     * Get the discr tache.
     *
     * @return int Returns the discr tache.
     */
    public function getDiscrTache() {
        return $this->discrTache;
    }

    /**
     * Get the duree.
     *
     * @return DateTime Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
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
     * Get the h nuit type2.
     *
     * @return string Returns the h nuit type2.
     */
    public function getHNuitType2() {
        return $this->hNuitType2;
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
     * Get the j f type2.
     *
     * @return string Returns the j f type2.
     */
    public function getJFType2() {
        return $this->jFType2;
    }

    /**
     * Get the nb chambres.
     *
     * @return float Returns the nb chambres.
     */
    public function getNbChambres() {
        return $this->nbChambres;
    }

    /**
     * Get the note memo.
     *
     * @return string Returns the note memo.
     */
    public function getNoteMemo() {
        return $this->noteMemo;
    }

    /**
     * Get the num chrono.
     *
     * @return int Returns the num chrono.
     */
    public function getNumChrono() {
        return $this->numChrono;
    }

    /**
     * Get the pointage.
     *
     * @return boolean Returns the pointage.
     */
    public function getPointage() {
        return $this->pointage;
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
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return EmpPrev Returns this emp prev.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return EmpPrev Returns this emp prev.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return EmpPrev Returns this emp prev.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return EmpPrev Returns this emp prev.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date abs decalee.
     *
     * @param DateTime $dateAbsDecalee The date abs decalee.
     * @return EmpPrev Returns this emp prev.
     */
    public function setDateAbsDecalee(DateTime $dateAbsDecalee = null) {
        $this->dateAbsDecalee = $dateAbsDecalee;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime $dateValidationSynchro The date validation synchro.
     * @return EmpPrev Returns this emp prev.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the dim type2.
     *
     * @param string $dimType2 The dim type2.
     * @return EmpPrev Returns this emp prev.
     */
    public function setDimType2($dimType2) {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the discr tache.
     *
     * @param int $discrTache The discr tache.
     * @return EmpPrev Returns this emp prev.
     */
    public function setDiscrTache($discrTache) {
        $this->discrTache = $discrTache;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param DateTime $duree The duree.
     * @return EmpPrev Returns this emp prev.
     */
    public function setDuree(DateTime $duree = null) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the employe remplace.
     *
     * @param string $employeRemplace The employe remplace.
     * @return EmpPrev Returns this emp prev.
     */
    public function setEmployeRemplace($employeRemplace) {
        $this->employeRemplace = $employeRemplace;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return EmpPrev Returns this emp prev.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h nuit type2.
     *
     * @param string $hNuitType2 The h nuit type2.
     * @return EmpPrev Returns this emp prev.
     */
    public function setHNuitType2($hNuitType2) {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime $heureDeb The heure deb.
     * @return EmpPrev Returns this emp prev.
     */
    public function setHeureDeb(DateTime $heureDeb = null) {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the j f type2.
     *
     * @param string $jFType2 The j f type2.
     * @return EmpPrev Returns this emp prev.
     */
    public function setJFType2($jFType2) {
        $this->jFType2 = $jFType2;
        return $this;
    }

    /**
     * Set the nb chambres.
     *
     * @param float $nbChambres The nb chambres.
     * @return EmpPrev Returns this emp prev.
     */
    public function setNbChambres($nbChambres) {
        $this->nbChambres = $nbChambres;
        return $this;
    }

    /**
     * Set the note memo.
     *
     * @param string $noteMemo The note memo.
     * @return EmpPrev Returns this emp prev.
     */
    public function setNoteMemo($noteMemo) {
        $this->noteMemo = $noteMemo;
        return $this;
    }

    /**
     * Set the num chrono.
     *
     * @param int $numChrono The num chrono.
     * @return EmpPrev Returns this emp prev.
     */
    public function setNumChrono($numChrono) {
        $this->numChrono = $numChrono;
        return $this;
    }

    /**
     * Set the pointage.
     *
     * @param boolean $pointage The pointage.
     * @return EmpPrev Returns this emp prev.
     */
    public function setPointage($pointage) {
        $this->pointage = $pointage;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return EmpPrev Returns this emp prev.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }

    /**
     * Set the uniq i d planning.
     *
     * @param string $uniqIDPlanning The uniq i d planning.
     * @return EmpPrev Returns this emp prev.
     */
    public function setUniqIDPlanning($uniqIDPlanning) {
        $this->uniqIDPlanning = $uniqIDPlanning;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return EmpPrev Returns this emp prev.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }

}
