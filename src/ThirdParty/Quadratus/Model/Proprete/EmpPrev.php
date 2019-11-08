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
 * Emp prev.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
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
     * @var DateTime|null
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
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Jf type2.
     *
     * @var string
     */
    private $jfType2;

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
     * @var bool
     */
    private $pointage;

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
     * @return DateTime|null Returns the duree.
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
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb() {
        return $this->heureDeb;
    }

    /**
     * Get the jf type2.
     *
     * @return string Returns the jf type2.
     */
    public function getJfType2() {
        return $this->jfType2;
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
     * @return bool Returns the pointage.
     */
    public function getPointage() {
        return $this->pointage;
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
     * Set the dim type2.
     *
     * @param string $dimType2 The dim type2.
     */
    public function setDimType2($dimType2) {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the discr tache.
     *
     * @param int $discrTache The discr tache.
     */
    public function setDiscrTache($discrTache) {
        $this->discrTache = $discrTache;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param DateTime|null $duree The duree.
     */
    public function setDuree(DateTime $duree = null) {
        $this->duree = $duree;
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
     * Set the h nuit type2.
     *
     * @param string $hNuitType2 The h nuit type2.
     */
    public function setHNuitType2($hNuitType2) {
        $this->hNuitType2 = $hNuitType2;
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
     * Set the jf type2.
     *
     * @param string $jfType2 The jf type2.
     */
    public function setJfType2($jfType2) {
        $this->jfType2 = $jfType2;
        return $this;
    }

    /**
     * Set the nb chambres.
     *
     * @param float $nbChambres The nb chambres.
     */
    public function setNbChambres($nbChambres) {
        $this->nbChambres = $nbChambres;
        return $this;
    }

    /**
     * Set the note memo.
     *
     * @param string $noteMemo The note memo.
     */
    public function setNoteMemo($noteMemo) {
        $this->noteMemo = $noteMemo;
        return $this;
    }

    /**
     * Set the num chrono.
     *
     * @param int $numChrono The num chrono.
     */
    public function setNumChrono($numChrono) {
        $this->numChrono = $numChrono;
        return $this;
    }

    /**
     * Set the pointage.
     *
     * @param bool $pointage The pointage.
     */
    public function setPointage($pointage) {
        $this->pointage = $pointage;
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
