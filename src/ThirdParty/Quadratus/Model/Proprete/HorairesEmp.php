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
 * Horaires emp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HorairesEmp {

    /**
     * Aou.
     *
     * @var bool
     */
    private $aou;

    /**
     * Avr.
     *
     * @var bool
     */
    private $avr;

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
     * Date debut affectation.
     *
     * @var DateTime|null
     */
    private $dateDebutAffectation;

    /**
     * Date fin affectation.
     *
     * @var DateTime|null
     */
    private $dateFinAffectation;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Dec.
     *
     * @var bool
     */
    private $dec;

    /**
     * Dim type2.
     *
     * @var string
     */
    private $dimType2;

    /**
     * Discr sem.
     *
     * @var int
     */
    private $discrSem;

    /**
     * Duree.
     *
     * @var DateTime|null
     */
    private $duree;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Fev.
     *
     * @var bool
     */
    private $fev;

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
     * Jan.
     *
     * @var bool
     */
    private $jan;

    /**
     * Jf type2.
     *
     * @var string
     */
    private $jfType2;

    /**
     * Juil.
     *
     * @var bool
     */
    private $juil;

    /**
     * Juin.
     *
     * @var bool
     */
    private $juin;

    /**
     * Mai.
     *
     * @var bool
     */
    private $mai;

    /**
     * Mar.
     *
     * @var bool
     */
    private $mar;

    /**
     * Note memo.
     *
     * @var string
     */
    private $noteMemo;

    /**
     * Nov.
     *
     * @var bool
     */
    private $nov;

    /**
     * Num chrono.
     *
     * @var int
     */
    private $numChrono;

    /**
     * Num jour.
     *
     * @var string
     */
    private $numJour;

    /**
     * Numero avenant.
     *
     * @var int
     */
    private $numeroAvenant;

    /**
     * Numero semaine.
     *
     * @var string
     */
    private $numeroSemaine;

    /**
     * Oct.
     *
     * @var bool
     */
    private $oct;

    /**
     * Sauf semaine complete.
     *
     * @var string
     */
    private $saufSemaineComplete;

    /**
     * Semaine complete.
     *
     * @var bool
     */
    private $semaineComplete;

    /**
     * Sep.
     *
     * @var bool
     */
    private $sep;

    /**
     * Travaille jf.
     *
     * @var string
     */
    private $travailleJf;

    /**
     * Type contrat.
     *
     * @var string
     */
    private $typeContrat;

    /**
     * Type freq.
     *
     * @var string
     */
    private $typeFreq;

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
     * Get the aou.
     *
     * @return bool Returns the aou.
     */
    public function getAou() {
        return $this->aou;
    }

    /**
     * Get the avr.
     *
     * @return bool Returns the avr.
     */
    public function getAvr() {
        return $this->avr;
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
     * Get the date debut affectation.
     *
     * @return DateTime|null Returns the date debut affectation.
     */
    public function getDateDebutAffectation() {
        return $this->dateDebutAffectation;
    }

    /**
     * Get the date fin affectation.
     *
     * @return DateTime|null Returns the date fin affectation.
     */
    public function getDateFinAffectation() {
        return $this->dateFinAffectation;
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
     * Get the dec.
     *
     * @return bool Returns the dec.
     */
    public function getDec() {
        return $this->dec;
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
     * Get the discr sem.
     *
     * @return int Returns the discr sem.
     */
    public function getDiscrSem() {
        return $this->discrSem;
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
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the fev.
     *
     * @return bool Returns the fev.
     */
    public function getFev() {
        return $this->fev;
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
     * Get the jan.
     *
     * @return bool Returns the jan.
     */
    public function getJan() {
        return $this->jan;
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
     * Get the juil.
     *
     * @return bool Returns the juil.
     */
    public function getJuil() {
        return $this->juil;
    }

    /**
     * Get the juin.
     *
     * @return bool Returns the juin.
     */
    public function getJuin() {
        return $this->juin;
    }

    /**
     * Get the mai.
     *
     * @return bool Returns the mai.
     */
    public function getMai() {
        return $this->mai;
    }

    /**
     * Get the mar.
     *
     * @return bool Returns the mar.
     */
    public function getMar() {
        return $this->mar;
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
     * Get the nov.
     *
     * @return bool Returns the nov.
     */
    public function getNov() {
        return $this->nov;
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
     * Get the num jour.
     *
     * @return string Returns the num jour.
     */
    public function getNumJour() {
        return $this->numJour;
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
     * Get the numero semaine.
     *
     * @return string Returns the numero semaine.
     */
    public function getNumeroSemaine() {
        return $this->numeroSemaine;
    }

    /**
     * Get the oct.
     *
     * @return bool Returns the oct.
     */
    public function getOct() {
        return $this->oct;
    }

    /**
     * Get the sauf semaine complete.
     *
     * @return string Returns the sauf semaine complete.
     */
    public function getSaufSemaineComplete() {
        return $this->saufSemaineComplete;
    }

    /**
     * Get the semaine complete.
     *
     * @return bool Returns the semaine complete.
     */
    public function getSemaineComplete() {
        return $this->semaineComplete;
    }

    /**
     * Get the sep.
     *
     * @return bool Returns the sep.
     */
    public function getSep() {
        return $this->sep;
    }

    /**
     * Get the travaille jf.
     *
     * @return string Returns the travaille jf.
     */
    public function getTravailleJf() {
        return $this->travailleJf;
    }

    /**
     * Get the type contrat.
     *
     * @return string Returns the type contrat.
     */
    public function getTypeContrat() {
        return $this->typeContrat;
    }

    /**
     * Get the type freq.
     *
     * @return string Returns the type freq.
     */
    public function getTypeFreq() {
        return $this->typeFreq;
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
     * Set the aou.
     *
     * @param bool $aou The aou.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setAou($aou) {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool $avr The avr.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setAvr($avr) {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date debut affectation.
     *
     * @param DateTime|null $dateDebutAffectation The date debut affectation.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDateDebutAffectation(DateTime $dateDebutAffectation = null) {
        $this->dateDebutAffectation = $dateDebutAffectation;
        return $this;
    }

    /**
     * Set the date fin affectation.
     *
     * @param DateTime|null $dateFinAffectation The date fin affectation.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDateFinAffectation(DateTime $dateFinAffectation = null) {
        $this->dateFinAffectation = $dateFinAffectation;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool $dec The dec.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDec($dec) {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the dim type2.
     *
     * @param string $dimType2 The dim type2.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDimType2($dimType2) {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the discr sem.
     *
     * @param int $discrSem The discr sem.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDiscrSem($discrSem) {
        $this->discrSem = $discrSem;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param DateTime|null $duree The duree.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setDuree(DateTime $duree = null) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool $fev The fev.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setFev($fev) {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the h nuit type2.
     *
     * @param string $hNuitType2 The h nuit type2.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setHNuitType2($hNuitType2) {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setHeureDeb(DateTime $heureDeb = null) {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool $jan The jan.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setJan($jan) {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jf type2.
     *
     * @param string $jfType2 The jf type2.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setJfType2($jfType2) {
        $this->jfType2 = $jfType2;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool $juil The juil.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setJuil($juil) {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool $juin The juin.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setJuin($juin) {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool $mai The mai.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setMai($mai) {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool $mar The mar.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setMar($mar) {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the note memo.
     *
     * @param string $noteMemo The note memo.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNoteMemo($noteMemo) {
        $this->noteMemo = $noteMemo;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool $nov The nov.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNov($nov) {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num chrono.
     *
     * @param int $numChrono The num chrono.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNumChrono($numChrono) {
        $this->numChrono = $numChrono;
        return $this;
    }

    /**
     * Set the num jour.
     *
     * @param string $numJour The num jour.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNumJour($numJour) {
        $this->numJour = $numJour;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the numero semaine.
     *
     * @param string $numeroSemaine The numero semaine.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setNumeroSemaine($numeroSemaine) {
        $this->numeroSemaine = $numeroSemaine;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool $oct The oct.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setOct($oct) {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the sauf semaine complete.
     *
     * @param string $saufSemaineComplete The sauf semaine complete.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setSaufSemaineComplete($saufSemaineComplete) {
        $this->saufSemaineComplete = $saufSemaineComplete;
        return $this;
    }

    /**
     * Set the semaine complete.
     *
     * @param bool $semaineComplete The semaine complete.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setSemaineComplete($semaineComplete) {
        $this->semaineComplete = $semaineComplete;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool $sep The sep.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setSep($sep) {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the travaille jf.
     *
     * @param string $travailleJf The travaille jf.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setTravailleJf($travailleJf) {
        $this->travailleJf = $travailleJf;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param string $typeContrat The type contrat.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type freq.
     *
     * @param string $typeFreq The type freq.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setTypeFreq($typeFreq) {
        $this->typeFreq = $typeFreq;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     * @return HorairesEmp Returns this Horaires emp.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
