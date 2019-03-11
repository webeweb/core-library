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
 * Grilles type model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class GrillesType {

    /**
     * Code lib h nuit.
     *
     * @var string
     */
    private $codeLibHNuit;

    /**
     * Contingent h sup r c.
     *
     * @var float
     */
    private $contingentHSupRC;

    /**
     * Contingent h sup r c i t.
     *
     * @var float
     */
    private $contingentHSupRCIT;

    /**
     * Date application.
     *
     * @var DateTime
     */
    private $dateApplication;

    /**
     * Date fin.
     *
     * @var DateTime
     */
    private $dateFin;

    /**
     * Duree hebdo.
     *
     * @var float
     */
    private $dureeHebdo;

    /**
     * Duree max hebdo.
     *
     * @var float
     */
    private $dureeMaxHebdo;

    /**
     * Duree max hebdo modul.
     *
     * @var float
     */
    private $dureeMaxHebdoModul;

    /**
     * Duree max mens.
     *
     * @var float
     */
    private $dureeMaxMens;

    /**
     * Duree moy hebdo1.
     *
     * @var float
     */
    private $dureeMoyHebdo1;

    /**
     * Duree moy hebdo2.
     *
     * @var float
     */
    private $dureeMoyHebdo2;

    /**
     * Duree moy periode1.
     *
     * @var int
     */
    private $dureeMoyPeriode1;

    /**
     * Duree moy periode2.
     *
     * @var int
     */
    private $dureeMoyPeriode2;

    /**
     * Gestion h nuit.
     *
     * @var bool
     */
    private $gestionHNuit;

    /**
     * Gestion j f n t.
     *
     * @var bool
     */
    private $gestionJFNT;

    /**
     * Gestion plages horaires.
     *
     * @var bool
     */
    private $gestionPlagesHoraires;

    /**
     * H nuit deb.
     *
     * @var string
     */
    private $hNuitDeb;

    /**
     * H nuit fin.
     *
     * @var string
     */
    private $hNuitFin;

    /**
     * H nuit tx majo.
     *
     * @var float
     */
    private $hNuitTxMajo;

    /**
     * Hebdo mens.
     *
     * @var string
     */
    private $hebdoMens;

    /**
     * Modulation.
     *
     * @var bool
     */
    private $modulation;

    /**
     * Nb h j f1.
     *
     * @var float
     */
    private $nbHJF1;

    /**
     * Nb h j f2.
     *
     * @var float
     */
    private $nbHJF2;

    /**
     * Nb h j f3.
     *
     * @var float
     */
    private $nbHJF3;

    /**
     * Nb h j f4.
     *
     * @var float
     */
    private $nbHJF4;

    /**
     * Nb h j f5.
     *
     * @var float
     */
    private $nbHJF5;

    /**
     * Nb h j f6.
     *
     * @var float
     */
    private $nbHJF6;

    /**
     * Nb h j f7.
     *
     * @var float
     */
    private $nbHJF7;

    /**
     * Nb heures dans jour.
     *
     * @var float
     */
    private $nbHeuresDansJour;

    /**
     * Numero grille type.
     *
     * @var int
     */
    private $numeroGrilleType;

    /**
     * Repos recup.
     *
     * @var bool
     */
    private $reposRecup;

    /**
     * Taux repos comp.
     *
     * @var float
     */
    private $tauxReposComp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code lib h nuit.
     *
     * @return string Returns the code lib h nuit.
     */
    public function getCodeLibHNuit() {
        return $this->codeLibHNuit;
    }

    /**
     * Get the contingent h sup r c.
     *
     * @return float Returns the contingent h sup r c.
     */
    public function getContingentHSupRC() {
        return $this->contingentHSupRC;
    }

    /**
     * Get the contingent h sup r c i t.
     *
     * @return float Returns the contingent h sup r c i t.
     */
    public function getContingentHSupRCIT() {
        return $this->contingentHSupRCIT;
    }

    /**
     * Get the date application.
     *
     * @return DateTime Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the duree hebdo.
     *
     * @return float Returns the duree hebdo.
     */
    public function getDureeHebdo() {
        return $this->dureeHebdo;
    }

    /**
     * Get the duree max hebdo.
     *
     * @return float Returns the duree max hebdo.
     */
    public function getDureeMaxHebdo() {
        return $this->dureeMaxHebdo;
    }

    /**
     * Get the duree max hebdo modul.
     *
     * @return float Returns the duree max hebdo modul.
     */
    public function getDureeMaxHebdoModul() {
        return $this->dureeMaxHebdoModul;
    }

    /**
     * Get the duree max mens.
     *
     * @return float Returns the duree max mens.
     */
    public function getDureeMaxMens() {
        return $this->dureeMaxMens;
    }

    /**
     * Get the duree moy hebdo1.
     *
     * @return float Returns the duree moy hebdo1.
     */
    public function getDureeMoyHebdo1() {
        return $this->dureeMoyHebdo1;
    }

    /**
     * Get the duree moy hebdo2.
     *
     * @return float Returns the duree moy hebdo2.
     */
    public function getDureeMoyHebdo2() {
        return $this->dureeMoyHebdo2;
    }

    /**
     * Get the duree moy periode1.
     *
     * @return int Returns the duree moy periode1.
     */
    public function getDureeMoyPeriode1() {
        return $this->dureeMoyPeriode1;
    }

    /**
     * Get the duree moy periode2.
     *
     * @return int Returns the duree moy periode2.
     */
    public function getDureeMoyPeriode2() {
        return $this->dureeMoyPeriode2;
    }

    /**
     * Get the gestion h nuit.
     *
     * @return bool Returns the gestion h nuit.
     */
    public function getGestionHNuit() {
        return $this->gestionHNuit;
    }

    /**
     * Get the gestion j f n t.
     *
     * @return bool Returns the gestion j f n t.
     */
    public function getGestionJFNT() {
        return $this->gestionJFNT;
    }

    /**
     * Get the gestion plages horaires.
     *
     * @return bool Returns the gestion plages horaires.
     */
    public function getGestionPlagesHoraires() {
        return $this->gestionPlagesHoraires;
    }

    /**
     * Get the h nuit deb.
     *
     * @return string Returns the h nuit deb.
     */
    public function getHNuitDeb() {
        return $this->hNuitDeb;
    }

    /**
     * Get the h nuit fin.
     *
     * @return string Returns the h nuit fin.
     */
    public function getHNuitFin() {
        return $this->hNuitFin;
    }

    /**
     * Get the h nuit tx majo.
     *
     * @return float Returns the h nuit tx majo.
     */
    public function getHNuitTxMajo() {
        return $this->hNuitTxMajo;
    }

    /**
     * Get the hebdo mens.
     *
     * @return string Returns the hebdo mens.
     */
    public function getHebdoMens() {
        return $this->hebdoMens;
    }

    /**
     * Get the modulation.
     *
     * @return bool Returns the modulation.
     */
    public function getModulation() {
        return $this->modulation;
    }

    /**
     * Get the nb h j f1.
     *
     * @return float Returns the nb h j f1.
     */
    public function getNbHJF1() {
        return $this->nbHJF1;
    }

    /**
     * Get the nb h j f2.
     *
     * @return float Returns the nb h j f2.
     */
    public function getNbHJF2() {
        return $this->nbHJF2;
    }

    /**
     * Get the nb h j f3.
     *
     * @return float Returns the nb h j f3.
     */
    public function getNbHJF3() {
        return $this->nbHJF3;
    }

    /**
     * Get the nb h j f4.
     *
     * @return float Returns the nb h j f4.
     */
    public function getNbHJF4() {
        return $this->nbHJF4;
    }

    /**
     * Get the nb h j f5.
     *
     * @return float Returns the nb h j f5.
     */
    public function getNbHJF5() {
        return $this->nbHJF5;
    }

    /**
     * Get the nb h j f6.
     *
     * @return float Returns the nb h j f6.
     */
    public function getNbHJF6() {
        return $this->nbHJF6;
    }

    /**
     * Get the nb h j f7.
     *
     * @return float Returns the nb h j f7.
     */
    public function getNbHJF7() {
        return $this->nbHJF7;
    }

    /**
     * Get the nb heures dans jour.
     *
     * @return float Returns the nb heures dans jour.
     */
    public function getNbHeuresDansJour() {
        return $this->nbHeuresDansJour;
    }

    /**
     * Get the numero grille type.
     *
     * @return int Returns the numero grille type.
     */
    public function getNumeroGrilleType() {
        return $this->numeroGrilleType;
    }

    /**
     * Get the repos recup.
     *
     * @return bool Returns the repos recup.
     */
    public function getReposRecup() {
        return $this->reposRecup;
    }

    /**
     * Get the taux repos comp.
     *
     * @return float Returns the taux repos comp.
     */
    public function getTauxReposComp() {
        return $this->tauxReposComp;
    }

    /**
     * Set the code lib h nuit.
     *
     * @param string $codeLibHNuit The code lib h nuit.
     * @return GrillesType Returns this grilles type.
     */
    public function setCodeLibHNuit($codeLibHNuit) {
        $this->codeLibHNuit = $codeLibHNuit;
        return $this;
    }

    /**
     * Set the contingent h sup r c.
     *
     * @param float $contingentHSupRC The contingent h sup r c.
     * @return GrillesType Returns this grilles type.
     */
    public function setContingentHSupRC($contingentHSupRC) {
        $this->contingentHSupRC = $contingentHSupRC;
        return $this;
    }

    /**
     * Set the contingent h sup r c i t.
     *
     * @param float $contingentHSupRCIT The contingent h sup r c i t.
     * @return GrillesType Returns this grilles type.
     */
    public function setContingentHSupRCIT($contingentHSupRCIT) {
        $this->contingentHSupRCIT = $contingentHSupRCIT;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime $dateApplication The date application.
     * @return GrillesType Returns this grilles type.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime $dateFin The date fin.
     * @return GrillesType Returns this grilles type.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the duree hebdo.
     *
     * @param float $dureeHebdo The duree hebdo.
     * @return GrillesType Returns this grilles type.
     */
    public function setDureeHebdo($dureeHebdo) {
        $this->dureeHebdo = $dureeHebdo;
        return $this;
    }

    /**
     * Set the duree max hebdo.
     *
     * @param float $dureeMaxHebdo The duree max hebdo.
     * @return GrillesType Returns this grilles type.
     */
    public function setDureeMaxHebdo($dureeMaxHebdo) {
        $this->dureeMaxHebdo = $dureeMaxHebdo;
        return $this;
    }

    /**
     * Set the duree max hebdo modul.
     *
     * @param float $dureeMaxHebdoModul The duree max hebdo modul.
     * @return GrillesType Returns this grilles type.
     */
    public function setDureeMaxHebdoModul($dureeMaxHebdoModul) {
        $this->dureeMaxHebdoModul = $dureeMaxHebdoModul;
        return $this;
    }

    /**
     * Set the duree max mens.
     *
     * @param float $dureeMaxMens The duree max mens.
     * @return GrillesType Returns this grilles type.
     */
    public function setDureeMaxMens($dureeMaxMens) {
        $this->dureeMaxMens = $dureeMaxMens;
        return $this;
    }

    /**
     * Set the duree moy hebdo1.
     *
     * @param float $dureeMoyHebdo1 The duree moy hebdo1.
     * @return GrillesType Returns this grilles type.
     */
    public function setDureeMoyHebdo1($dureeMoyHebdo1) {
        $this->dureeMoyHebdo1 = $dureeMoyHebdo1;
        return $this;
    }

    /**
     * Set the duree moy hebdo2.
     *
     * @param float $dureeMoyHebdo2 The duree moy hebdo2.
     * @return GrillesType Returns this grilles type.
     */
    public function setDureeMoyHebdo2($dureeMoyHebdo2) {
        $this->dureeMoyHebdo2 = $dureeMoyHebdo2;
        return $this;
    }

    /**
     * Set the duree moy periode1.
     *
     * @param int $dureeMoyPeriode1 The duree moy periode1.
     * @return GrillesType Returns this grilles type.
     */
    public function setDureeMoyPeriode1($dureeMoyPeriode1) {
        $this->dureeMoyPeriode1 = $dureeMoyPeriode1;
        return $this;
    }

    /**
     * Set the duree moy periode2.
     *
     * @param int $dureeMoyPeriode2 The duree moy periode2.
     * @return GrillesType Returns this grilles type.
     */
    public function setDureeMoyPeriode2($dureeMoyPeriode2) {
        $this->dureeMoyPeriode2 = $dureeMoyPeriode2;
        return $this;
    }

    /**
     * Set the gestion h nuit.
     *
     * @param bool $gestionHNuit The gestion h nuit.
     * @return GrillesType Returns this grilles type.
     */
    public function setGestionHNuit($gestionHNuit) {
        $this->gestionHNuit = $gestionHNuit;
        return $this;
    }

    /**
     * Set the gestion j f n t.
     *
     * @param bool $gestionJFNT The gestion j f n t.
     * @return GrillesType Returns this grilles type.
     */
    public function setGestionJFNT($gestionJFNT) {
        $this->gestionJFNT = $gestionJFNT;
        return $this;
    }

    /**
     * Set the gestion plages horaires.
     *
     * @param bool $gestionPlagesHoraires The gestion plages horaires.
     * @return GrillesType Returns this grilles type.
     */
    public function setGestionPlagesHoraires($gestionPlagesHoraires) {
        $this->gestionPlagesHoraires = $gestionPlagesHoraires;
        return $this;
    }

    /**
     * Set the h nuit deb.
     *
     * @param string $hNuitDeb The h nuit deb.
     * @return GrillesType Returns this grilles type.
     */
    public function setHNuitDeb($hNuitDeb) {
        $this->hNuitDeb = $hNuitDeb;
        return $this;
    }

    /**
     * Set the h nuit fin.
     *
     * @param string $hNuitFin The h nuit fin.
     * @return GrillesType Returns this grilles type.
     */
    public function setHNuitFin($hNuitFin) {
        $this->hNuitFin = $hNuitFin;
        return $this;
    }

    /**
     * Set the h nuit tx majo.
     *
     * @param float $hNuitTxMajo The h nuit tx majo.
     * @return GrillesType Returns this grilles type.
     */
    public function setHNuitTxMajo($hNuitTxMajo) {
        $this->hNuitTxMajo = $hNuitTxMajo;
        return $this;
    }

    /**
     * Set the hebdo mens.
     *
     * @param string $hebdoMens The hebdo mens.
     * @return GrillesType Returns this grilles type.
     */
    public function setHebdoMens($hebdoMens) {
        $this->hebdoMens = $hebdoMens;
        return $this;
    }

    /**
     * Set the modulation.
     *
     * @param bool $modulation The modulation.
     * @return GrillesType Returns this grilles type.
     */
    public function setModulation($modulation) {
        $this->modulation = $modulation;
        return $this;
    }

    /**
     * Set the nb h j f1.
     *
     * @param float $nbHJF1 The nb h j f1.
     * @return GrillesType Returns this grilles type.
     */
    public function setNbHJF1($nbHJF1) {
        $this->nbHJF1 = $nbHJF1;
        return $this;
    }

    /**
     * Set the nb h j f2.
     *
     * @param float $nbHJF2 The nb h j f2.
     * @return GrillesType Returns this grilles type.
     */
    public function setNbHJF2($nbHJF2) {
        $this->nbHJF2 = $nbHJF2;
        return $this;
    }

    /**
     * Set the nb h j f3.
     *
     * @param float $nbHJF3 The nb h j f3.
     * @return GrillesType Returns this grilles type.
     */
    public function setNbHJF3($nbHJF3) {
        $this->nbHJF3 = $nbHJF3;
        return $this;
    }

    /**
     * Set the nb h j f4.
     *
     * @param float $nbHJF4 The nb h j f4.
     * @return GrillesType Returns this grilles type.
     */
    public function setNbHJF4($nbHJF4) {
        $this->nbHJF4 = $nbHJF4;
        return $this;
    }

    /**
     * Set the nb h j f5.
     *
     * @param float $nbHJF5 The nb h j f5.
     * @return GrillesType Returns this grilles type.
     */
    public function setNbHJF5($nbHJF5) {
        $this->nbHJF5 = $nbHJF5;
        return $this;
    }

    /**
     * Set the nb h j f6.
     *
     * @param float $nbHJF6 The nb h j f6.
     * @return GrillesType Returns this grilles type.
     */
    public function setNbHJF6($nbHJF6) {
        $this->nbHJF6 = $nbHJF6;
        return $this;
    }

    /**
     * Set the nb h j f7.
     *
     * @param float $nbHJF7 The nb h j f7.
     * @return GrillesType Returns this grilles type.
     */
    public function setNbHJF7($nbHJF7) {
        $this->nbHJF7 = $nbHJF7;
        return $this;
    }

    /**
     * Set the nb heures dans jour.
     *
     * @param float $nbHeuresDansJour The nb heures dans jour.
     * @return GrillesType Returns this grilles type.
     */
    public function setNbHeuresDansJour($nbHeuresDansJour) {
        $this->nbHeuresDansJour = $nbHeuresDansJour;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     * @return GrillesType Returns this grilles type.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the repos recup.
     *
     * @param bool $reposRecup The repos recup.
     * @return GrillesType Returns this grilles type.
     */
    public function setReposRecup($reposRecup) {
        $this->reposRecup = $reposRecup;
        return $this;
    }

    /**
     * Set the taux repos comp.
     *
     * @param float $tauxReposComp The taux repos comp.
     * @return GrillesType Returns this grilles type.
     */
    public function setTauxReposComp($tauxReposComp) {
        $this->tauxReposComp = $tauxReposComp;
        return $this;
    }
}
