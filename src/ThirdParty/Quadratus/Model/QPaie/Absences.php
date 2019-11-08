<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Absences.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Absences {

    /**
     * Abs jour.
     *
     * @var bool
     */
    private $absJour;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code user.
     *
     * @var string
     */
    private $codeUser;

    /**
     * Conges payes.
     *
     * @var bool
     */
    private $congesPayes;

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Date added coll.
     *
     * @var DateTime|null
     */
    private $dateAddedColl;

    /**
     * In bul.
     *
     * @var bool
     */
    private $inBul;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Nb30.
     *
     * @var float
     */
    private $nb30;

    /**
     * Nb h ab cp calcule.
     *
     * @var float
     */
    private $nbHAbCpCalcule;

    /**
     * Nb h ab cp saisi.
     *
     * @var float
     */
    private $nbHAbCpSaisi;

    /**
     * Nb jh.
     *
     * @var float
     */
    private $nbJh;

    /**
     * Nb jh calcule.
     *
     * @var float
     */
    private $nbJhCalcule;

    /**
     * Num evenement.
     *
     * @var int
     */
    private $numEvenement;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode bul.
     *
     * @var DateTime|null
     */
    private $periodeBul;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Prolongation.
     *
     * @var bool
     */
    private $prolongation;

    /**
     * Reprise.
     *
     * @var bool
     */
    private $reprise;

    /**
     * Type abs.
     *
     * @var string
     */
    private $typeAbs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the abs jour.
     *
     * @return bool Returns the abs jour.
     */
    public function getAbsJour() {
        return $this->absJour;
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
     * Get the code user.
     *
     * @return string Returns the code user.
     */
    public function getCodeUser() {
        return $this->codeUser;
    }

    /**
     * Get the conges payes.
     *
     * @return bool Returns the conges payes.
     */
    public function getCongesPayes() {
        return $this->congesPayes;
    }

    /**
     * Get the date added.
     *
     * @return DateTime|null Returns the date added.
     */
    public function getDateAdded() {
        return $this->dateAdded;
    }

    /**
     * Get the date added coll.
     *
     * @return DateTime|null Returns the date added coll.
     */
    public function getDateAddedColl() {
        return $this->dateAddedColl;
    }

    /**
     * Get the in bul.
     *
     * @return bool Returns the in bul.
     */
    public function getInBul() {
        return $this->inBul;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the nb30.
     *
     * @return float Returns the nb30.
     */
    public function getNb30() {
        return $this->nb30;
    }

    /**
     * Get the nb h ab cp calcule.
     *
     * @return float Returns the nb h ab cp calcule.
     */
    public function getNbHAbCpCalcule() {
        return $this->nbHAbCpCalcule;
    }

    /**
     * Get the nb h ab cp saisi.
     *
     * @return float Returns the nb h ab cp saisi.
     */
    public function getNbHAbCpSaisi() {
        return $this->nbHAbCpSaisi;
    }

    /**
     * Get the nb jh.
     *
     * @return float Returns the nb jh.
     */
    public function getNbJh() {
        return $this->nbJh;
    }

    /**
     * Get the nb jh calcule.
     *
     * @return float Returns the nb jh calcule.
     */
    public function getNbJhCalcule() {
        return $this->nbJhCalcule;
    }

    /**
     * Get the num evenement.
     *
     * @return int Returns the num evenement.
     */
    public function getNumEvenement() {
        return $this->numEvenement;
    }

    /**
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode bul.
     *
     * @return DateTime|null Returns the periode bul.
     */
    public function getPeriodeBul() {
        return $this->periodeBul;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb() {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin() {
        return $this->periodeFin;
    }

    /**
     * Get the prolongation.
     *
     * @return bool Returns the prolongation.
     */
    public function getProlongation() {
        return $this->prolongation;
    }

    /**
     * Get the reprise.
     *
     * @return bool Returns the reprise.
     */
    public function getReprise() {
        return $this->reprise;
    }

    /**
     * Get the type abs.
     *
     * @return string Returns the type abs.
     */
    public function getTypeAbs() {
        return $this->typeAbs;
    }

    /**
     * Set the abs jour.
     *
     * @param bool $absJour The abs jour.
     */
    public function setAbsJour($absJour) {
        $this->absJour = $absJour;
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
     * Set the code user.
     *
     * @param string $codeUser The code user.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the conges payes.
     *
     * @param bool $congesPayes The conges payes.
     */
    public function setCongesPayes($congesPayes) {
        $this->congesPayes = $congesPayes;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime|null $dateAdded The date added.
     */
    public function setDateAdded(DateTime $dateAdded = null) {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the date added coll.
     *
     * @param DateTime|null $dateAddedColl The date added coll.
     */
    public function setDateAddedColl(DateTime $dateAddedColl = null) {
        $this->dateAddedColl = $dateAddedColl;
        return $this;
    }

    /**
     * Set the in bul.
     *
     * @param bool $inBul The in bul.
     */
    public function setInBul($inBul) {
        $this->inBul = $inBul;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nb30.
     *
     * @param float $nb30 The nb30.
     */
    public function setNb30($nb30) {
        $this->nb30 = $nb30;
        return $this;
    }

    /**
     * Set the nb h ab cp calcule.
     *
     * @param float $nbHAbCpCalcule The nb h ab cp calcule.
     */
    public function setNbHAbCpCalcule($nbHAbCpCalcule) {
        $this->nbHAbCpCalcule = $nbHAbCpCalcule;
        return $this;
    }

    /**
     * Set the nb h ab cp saisi.
     *
     * @param float $nbHAbCpSaisi The nb h ab cp saisi.
     */
    public function setNbHAbCpSaisi($nbHAbCpSaisi) {
        $this->nbHAbCpSaisi = $nbHAbCpSaisi;
        return $this;
    }

    /**
     * Set the nb jh.
     *
     * @param float $nbJh The nb jh.
     */
    public function setNbJh($nbJh) {
        $this->nbJh = $nbJh;
        return $this;
    }

    /**
     * Set the nb jh calcule.
     *
     * @param float $nbJhCalcule The nb jh calcule.
     */
    public function setNbJhCalcule($nbJhCalcule) {
        $this->nbJhCalcule = $nbJhCalcule;
        return $this;
    }

    /**
     * Set the num evenement.
     *
     * @param int $numEvenement The num evenement.
     */
    public function setNumEvenement($numEvenement) {
        $this->numEvenement = $numEvenement;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode bul.
     *
     * @param DateTime|null $periodeBul The periode bul.
     */
    public function setPeriodeBul(DateTime $periodeBul = null) {
        $this->periodeBul = $periodeBul;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the prolongation.
     *
     * @param bool $prolongation The prolongation.
     */
    public function setProlongation($prolongation) {
        $this->prolongation = $prolongation;
        return $this;
    }

    /**
     * Set the reprise.
     *
     * @param bool $reprise The reprise.
     */
    public function setReprise($reprise) {
        $this->reprise = $reprise;
        return $this;
    }

    /**
     * Set the type abs.
     *
     * @param string $typeAbs The type abs.
     */
    public function setTypeAbs($typeAbs) {
        $this->typeAbs = $typeAbs;
        return $this;
    }
}
