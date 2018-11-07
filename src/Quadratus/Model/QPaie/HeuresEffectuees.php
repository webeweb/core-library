<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Heures effectuees model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class HeuresEffectuees {

    /**
     * Date jour.
     *
     * @var DateTime
     */
    private $dateJour;

    /**
     * H deb a m.
     *
     * @var string
     */
    private $hDebAM;

    /**
     * H deb p m.
     *
     * @var string
     */
    private $hDebPM;

    /**
     * H fin a m.
     *
     * @var string
     */
    private $hFinAM;

    /**
     * H fin p m.
     *
     * @var string
     */
    private $hFinPM;

    /**
     * Nb h absence cp.
     *
     * @var float
     */
    private $nbHAbsenceCp;

    /**
     * Nb h j f n t.
     *
     * @var float
     */
    private $nbHJFNT;

    /**
     * Nb h majo.
     *
     * @var float
     */
    private $nbHMajo;

    /**
     * Nb h nuit.
     *
     * @var float
     */
    private $nbHNuit;

    /**
     * Nb h repos comp pris.
     *
     * @var float
     */
    private $nbHReposCompPris;

    /**
     * Nb h repos remplace pris.
     *
     * @var float
     */
    private $nbHReposRemplacePris;

    /**
     * Nb h travail reel.
     *
     * @var float
     */
    private $nbHTravailReel;

    /**
     * Nb j repos recup pris.
     *
     * @var float
     */
    private $nbJReposRecupPris;

    /**
     * Nb jour cp pris.
     *
     * @var float
     */
    private $nbJourCpPris;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date jour.
     *
     * @return DateTime Returns the date jour.
     */
    public function getDateJour() {
        return $this->dateJour;
    }

    /**
     * Get the h deb a m.
     *
     * @return string Returns the h deb a m.
     */
    public function getHDebAM() {
        return $this->hDebAM;
    }

    /**
     * Get the h deb p m.
     *
     * @return string Returns the h deb p m.
     */
    public function getHDebPM() {
        return $this->hDebPM;
    }

    /**
     * Get the h fin a m.
     *
     * @return string Returns the h fin a m.
     */
    public function getHFinAM() {
        return $this->hFinAM;
    }

    /**
     * Get the h fin p m.
     *
     * @return string Returns the h fin p m.
     */
    public function getHFinPM() {
        return $this->hFinPM;
    }

    /**
     * Get the nb h absence cp.
     *
     * @return float Returns the nb h absence cp.
     */
    public function getNbHAbsenceCp() {
        return $this->nbHAbsenceCp;
    }

    /**
     * Get the nb h j f n t.
     *
     * @return float Returns the nb h j f n t.
     */
    public function getNbHJFNT() {
        return $this->nbHJFNT;
    }

    /**
     * Get the nb h majo.
     *
     * @return float Returns the nb h majo.
     */
    public function getNbHMajo() {
        return $this->nbHMajo;
    }

    /**
     * Get the nb h nuit.
     *
     * @return float Returns the nb h nuit.
     */
    public function getNbHNuit() {
        return $this->nbHNuit;
    }

    /**
     * Get the nb h repos comp pris.
     *
     * @return float Returns the nb h repos comp pris.
     */
    public function getNbHReposCompPris() {
        return $this->nbHReposCompPris;
    }

    /**
     * Get the nb h repos remplace pris.
     *
     * @return float Returns the nb h repos remplace pris.
     */
    public function getNbHReposRemplacePris() {
        return $this->nbHReposRemplacePris;
    }

    /**
     * Get the nb h travail reel.
     *
     * @return float Returns the nb h travail reel.
     */
    public function getNbHTravailReel() {
        return $this->nbHTravailReel;
    }

    /**
     * Get the nb j repos recup pris.
     *
     * @return float Returns the nb j repos recup pris.
     */
    public function getNbJReposRecupPris() {
        return $this->nbJReposRecupPris;
    }

    /**
     * Get the nb jour cp pris.
     *
     * @return float Returns the nb jour cp pris.
     */
    public function getNbJourCpPris() {
        return $this->nbJourCpPris;
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
     * Set the date jour.
     *
     * @param DateTime $dateJour The date jour.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setDateJour(DateTime $dateJour = null) {
        $this->dateJour = $dateJour;
        return $this;
    }

    /**
     * Set the h deb a m.
     *
     * @param string $hDebAM The h deb a m.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setHDebAM($hDebAM) {
        $this->hDebAM = $hDebAM;
        return $this;
    }

    /**
     * Set the h deb p m.
     *
     * @param string $hDebPM The h deb p m.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setHDebPM($hDebPM) {
        $this->hDebPM = $hDebPM;
        return $this;
    }

    /**
     * Set the h fin a m.
     *
     * @param string $hFinAM The h fin a m.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setHFinAM($hFinAM) {
        $this->hFinAM = $hFinAM;
        return $this;
    }

    /**
     * Set the h fin p m.
     *
     * @param string $hFinPM The h fin p m.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setHFinPM($hFinPM) {
        $this->hFinPM = $hFinPM;
        return $this;
    }

    /**
     * Set the nb h absence cp.
     *
     * @param float $nbHAbsenceCp The nb h absence cp.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbHAbsenceCp($nbHAbsenceCp) {
        $this->nbHAbsenceCp = $nbHAbsenceCp;
        return $this;
    }

    /**
     * Set the nb h j f n t.
     *
     * @param float $nbHJFNT The nb h j f n t.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbHJFNT($nbHJFNT) {
        $this->nbHJFNT = $nbHJFNT;
        return $this;
    }

    /**
     * Set the nb h majo.
     *
     * @param float $nbHMajo The nb h majo.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbHMajo($nbHMajo) {
        $this->nbHMajo = $nbHMajo;
        return $this;
    }

    /**
     * Set the nb h nuit.
     *
     * @param float $nbHNuit The nb h nuit.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbHNuit($nbHNuit) {
        $this->nbHNuit = $nbHNuit;
        return $this;
    }

    /**
     * Set the nb h repos comp pris.
     *
     * @param float $nbHReposCompPris The nb h repos comp pris.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbHReposCompPris($nbHReposCompPris) {
        $this->nbHReposCompPris = $nbHReposCompPris;
        return $this;
    }

    /**
     * Set the nb h repos remplace pris.
     *
     * @param float $nbHReposRemplacePris The nb h repos remplace pris.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbHReposRemplacePris($nbHReposRemplacePris) {
        $this->nbHReposRemplacePris = $nbHReposRemplacePris;
        return $this;
    }

    /**
     * Set the nb h travail reel.
     *
     * @param float $nbHTravailReel The nb h travail reel.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbHTravailReel($nbHTravailReel) {
        $this->nbHTravailReel = $nbHTravailReel;
        return $this;
    }

    /**
     * Set the nb j repos recup pris.
     *
     * @param float $nbJReposRecupPris The nb j repos recup pris.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbJReposRecupPris($nbJReposRecupPris) {
        $this->nbJReposRecupPris = $nbJReposRecupPris;
        return $this;
    }

    /**
     * Set the nb jour cp pris.
     *
     * @param float $nbJourCpPris The nb jour cp pris.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNbJourCpPris($nbJourCpPris) {
        $this->nbJourCpPris = $nbJourCpPris;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return HeuresEffectuees Returns this heures effectuees.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

}
