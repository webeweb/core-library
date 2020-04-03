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
 * Grilles type.
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
     * Contingent h sup rc.
     *
     * @var float
     */
    private $contingentHSupRc;

    /**
     * Contingent h sup rcit.
     *
     * @var float
     */
    private $contingentHSupRcit;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Date fin.
     *
     * @var DateTime|null
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
     * Gestion jfnt.
     *
     * @var bool
     */
    private $gestionJfnt;

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
     * Nb heures dans jour.
     *
     * @var float
     */
    private $nbHeuresDansJour;

    /**
     * Nb hjf1.
     *
     * @var float
     */
    private $nbHjf1;

    /**
     * Nb hjf2.
     *
     * @var float
     */
    private $nbHjf2;

    /**
     * Nb hjf3.
     *
     * @var float
     */
    private $nbHjf3;

    /**
     * Nb hjf4.
     *
     * @var float
     */
    private $nbHjf4;

    /**
     * Nb hjf5.
     *
     * @var float
     */
    private $nbHjf5;

    /**
     * Nb hjf6.
     *
     * @var float
     */
    private $nbHjf6;

    /**
     * Nb hjf7.
     *
     * @var float
     */
    private $nbHjf7;

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
     * Get the contingent h sup rc.
     *
     * @return float Returns the contingent h sup rc.
     */
    public function getContingentHSupRc() {
        return $this->contingentHSupRc;
    }

    /**
     * Get the contingent h sup rcit.
     *
     * @return float Returns the contingent h sup rcit.
     */
    public function getContingentHSupRcit() {
        return $this->contingentHSupRcit;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
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
     * Get the gestion jfnt.
     *
     * @return bool Returns the gestion jfnt.
     */
    public function getGestionJfnt() {
        return $this->gestionJfnt;
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
     * Get the nb heures dans jour.
     *
     * @return float Returns the nb heures dans jour.
     */
    public function getNbHeuresDansJour() {
        return $this->nbHeuresDansJour;
    }

    /**
     * Get the nb hjf1.
     *
     * @return float Returns the nb hjf1.
     */
    public function getNbHjf1() {
        return $this->nbHjf1;
    }

    /**
     * Get the nb hjf2.
     *
     * @return float Returns the nb hjf2.
     */
    public function getNbHjf2() {
        return $this->nbHjf2;
    }

    /**
     * Get the nb hjf3.
     *
     * @return float Returns the nb hjf3.
     */
    public function getNbHjf3() {
        return $this->nbHjf3;
    }

    /**
     * Get the nb hjf4.
     *
     * @return float Returns the nb hjf4.
     */
    public function getNbHjf4() {
        return $this->nbHjf4;
    }

    /**
     * Get the nb hjf5.
     *
     * @return float Returns the nb hjf5.
     */
    public function getNbHjf5() {
        return $this->nbHjf5;
    }

    /**
     * Get the nb hjf6.
     *
     * @return float Returns the nb hjf6.
     */
    public function getNbHjf6() {
        return $this->nbHjf6;
    }

    /**
     * Get the nb hjf7.
     *
     * @return float Returns the nb hjf7.
     */
    public function getNbHjf7() {
        return $this->nbHjf7;
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
     * @return GrillesType Returns this Grilles type.
     */
    public function setCodeLibHNuit($codeLibHNuit) {
        $this->codeLibHNuit = $codeLibHNuit;
        return $this;
    }

    /**
     * Set the contingent h sup rc.
     *
     * @param float $contingentHSupRc The contingent h sup rc.
     * @return GrillesType Returns this Grilles type.
     */
    public function setContingentHSupRc($contingentHSupRc) {
        $this->contingentHSupRc = $contingentHSupRc;
        return $this;
    }

    /**
     * Set the contingent h sup rcit.
     *
     * @param float $contingentHSupRcit The contingent h sup rcit.
     * @return GrillesType Returns this Grilles type.
     */
    public function setContingentHSupRcit($contingentHSupRcit) {
        $this->contingentHSupRcit = $contingentHSupRcit;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the duree hebdo.
     *
     * @param float $dureeHebdo The duree hebdo.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeHebdo($dureeHebdo) {
        $this->dureeHebdo = $dureeHebdo;
        return $this;
    }

    /**
     * Set the duree max hebdo.
     *
     * @param float $dureeMaxHebdo The duree max hebdo.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMaxHebdo($dureeMaxHebdo) {
        $this->dureeMaxHebdo = $dureeMaxHebdo;
        return $this;
    }

    /**
     * Set the duree max hebdo modul.
     *
     * @param float $dureeMaxHebdoModul The duree max hebdo modul.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMaxHebdoModul($dureeMaxHebdoModul) {
        $this->dureeMaxHebdoModul = $dureeMaxHebdoModul;
        return $this;
    }

    /**
     * Set the duree max mens.
     *
     * @param float $dureeMaxMens The duree max mens.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMaxMens($dureeMaxMens) {
        $this->dureeMaxMens = $dureeMaxMens;
        return $this;
    }

    /**
     * Set the duree moy hebdo1.
     *
     * @param float $dureeMoyHebdo1 The duree moy hebdo1.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMoyHebdo1($dureeMoyHebdo1) {
        $this->dureeMoyHebdo1 = $dureeMoyHebdo1;
        return $this;
    }

    /**
     * Set the duree moy hebdo2.
     *
     * @param float $dureeMoyHebdo2 The duree moy hebdo2.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMoyHebdo2($dureeMoyHebdo2) {
        $this->dureeMoyHebdo2 = $dureeMoyHebdo2;
        return $this;
    }

    /**
     * Set the duree moy periode1.
     *
     * @param int $dureeMoyPeriode1 The duree moy periode1.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMoyPeriode1($dureeMoyPeriode1) {
        $this->dureeMoyPeriode1 = $dureeMoyPeriode1;
        return $this;
    }

    /**
     * Set the duree moy periode2.
     *
     * @param int $dureeMoyPeriode2 The duree moy periode2.
     * @return GrillesType Returns this Grilles type.
     */
    public function setDureeMoyPeriode2($dureeMoyPeriode2) {
        $this->dureeMoyPeriode2 = $dureeMoyPeriode2;
        return $this;
    }

    /**
     * Set the gestion h nuit.
     *
     * @param bool $gestionHNuit The gestion h nuit.
     * @return GrillesType Returns this Grilles type.
     */
    public function setGestionHNuit($gestionHNuit) {
        $this->gestionHNuit = $gestionHNuit;
        return $this;
    }

    /**
     * Set the gestion jfnt.
     *
     * @param bool $gestionJfnt The gestion jfnt.
     * @return GrillesType Returns this Grilles type.
     */
    public function setGestionJfnt($gestionJfnt) {
        $this->gestionJfnt = $gestionJfnt;
        return $this;
    }

    /**
     * Set the gestion plages horaires.
     *
     * @param bool $gestionPlagesHoraires The gestion plages horaires.
     * @return GrillesType Returns this Grilles type.
     */
    public function setGestionPlagesHoraires($gestionPlagesHoraires) {
        $this->gestionPlagesHoraires = $gestionPlagesHoraires;
        return $this;
    }

    /**
     * Set the h nuit deb.
     *
     * @param string $hNuitDeb The h nuit deb.
     * @return GrillesType Returns this Grilles type.
     */
    public function setHNuitDeb($hNuitDeb) {
        $this->hNuitDeb = $hNuitDeb;
        return $this;
    }

    /**
     * Set the h nuit fin.
     *
     * @param string $hNuitFin The h nuit fin.
     * @return GrillesType Returns this Grilles type.
     */
    public function setHNuitFin($hNuitFin) {
        $this->hNuitFin = $hNuitFin;
        return $this;
    }

    /**
     * Set the h nuit tx majo.
     *
     * @param float $hNuitTxMajo The h nuit tx majo.
     * @return GrillesType Returns this Grilles type.
     */
    public function setHNuitTxMajo($hNuitTxMajo) {
        $this->hNuitTxMajo = $hNuitTxMajo;
        return $this;
    }

    /**
     * Set the hebdo mens.
     *
     * @param string $hebdoMens The hebdo mens.
     * @return GrillesType Returns this Grilles type.
     */
    public function setHebdoMens($hebdoMens) {
        $this->hebdoMens = $hebdoMens;
        return $this;
    }

    /**
     * Set the modulation.
     *
     * @param bool $modulation The modulation.
     * @return GrillesType Returns this Grilles type.
     */
    public function setModulation($modulation) {
        $this->modulation = $modulation;
        return $this;
    }

    /**
     * Set the nb heures dans jour.
     *
     * @param float $nbHeuresDansJour The nb heures dans jour.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHeuresDansJour($nbHeuresDansJour) {
        $this->nbHeuresDansJour = $nbHeuresDansJour;
        return $this;
    }

    /**
     * Set the nb hjf1.
     *
     * @param float $nbHjf1 The nb hjf1.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf1($nbHjf1) {
        $this->nbHjf1 = $nbHjf1;
        return $this;
    }

    /**
     * Set the nb hjf2.
     *
     * @param float $nbHjf2 The nb hjf2.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf2($nbHjf2) {
        $this->nbHjf2 = $nbHjf2;
        return $this;
    }

    /**
     * Set the nb hjf3.
     *
     * @param float $nbHjf3 The nb hjf3.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf3($nbHjf3) {
        $this->nbHjf3 = $nbHjf3;
        return $this;
    }

    /**
     * Set the nb hjf4.
     *
     * @param float $nbHjf4 The nb hjf4.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf4($nbHjf4) {
        $this->nbHjf4 = $nbHjf4;
        return $this;
    }

    /**
     * Set the nb hjf5.
     *
     * @param float $nbHjf5 The nb hjf5.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf5($nbHjf5) {
        $this->nbHjf5 = $nbHjf5;
        return $this;
    }

    /**
     * Set the nb hjf6.
     *
     * @param float $nbHjf6 The nb hjf6.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf6($nbHjf6) {
        $this->nbHjf6 = $nbHjf6;
        return $this;
    }

    /**
     * Set the nb hjf7.
     *
     * @param float $nbHjf7 The nb hjf7.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNbHjf7($nbHjf7) {
        $this->nbHjf7 = $nbHjf7;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     * @return GrillesType Returns this Grilles type.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the repos recup.
     *
     * @param bool $reposRecup The repos recup.
     * @return GrillesType Returns this Grilles type.
     */
    public function setReposRecup($reposRecup) {
        $this->reposRecup = $reposRecup;
        return $this;
    }

    /**
     * Set the taux repos comp.
     *
     * @param float $tauxReposComp The taux repos comp.
     * @return GrillesType Returns this Grilles type.
     */
    public function setTauxReposComp($tauxReposComp) {
        $this->tauxReposComp = $tauxReposComp;
        return $this;
    }
}
