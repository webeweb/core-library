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
 * Heures effectuees.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HeuresEffectuees {

    /**
     * Date jour.
     *
     * @var DateTime|null
     */
    private $dateJour;

    /**
     * H deb am.
     *
     * @var string
     */
    private $hDebAm;

    /**
     * H deb pm.
     *
     * @var string
     */
    private $hDebPm;

    /**
     * H fin am.
     *
     * @var string
     */
    private $hFinAm;

    /**
     * H fin pm.
     *
     * @var string
     */
    private $hFinPm;

    /**
     * Nb h absence cp.
     *
     * @var float
     */
    private $nbHAbsenceCp;

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
     * Nb hjfnt.
     *
     * @var float
     */
    private $nbHjfnt;

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
     * @return DateTime|null Returns the date jour.
     */
    public function getDateJour() {
        return $this->dateJour;
    }

    /**
     * Get the h deb am.
     *
     * @return string Returns the h deb am.
     */
    public function getHDebAm() {
        return $this->hDebAm;
    }

    /**
     * Get the h deb pm.
     *
     * @return string Returns the h deb pm.
     */
    public function getHDebPm() {
        return $this->hDebPm;
    }

    /**
     * Get the h fin am.
     *
     * @return string Returns the h fin am.
     */
    public function getHFinAm() {
        return $this->hFinAm;
    }

    /**
     * Get the h fin pm.
     *
     * @return string Returns the h fin pm.
     */
    public function getHFinPm() {
        return $this->hFinPm;
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
     * Get the nb hjfnt.
     *
     * @return float Returns the nb hjfnt.
     */
    public function getNbHjfnt() {
        return $this->nbHjfnt;
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
     * @param DateTime|null $dateJour The date jour.
     */
    public function setDateJour(DateTime $dateJour = null) {
        $this->dateJour = $dateJour;
        return $this;
    }

    /**
     * Set the h deb am.
     *
     * @param string $hDebAm The h deb am.
     */
    public function setHDebAm($hDebAm) {
        $this->hDebAm = $hDebAm;
        return $this;
    }

    /**
     * Set the h deb pm.
     *
     * @param string $hDebPm The h deb pm.
     */
    public function setHDebPm($hDebPm) {
        $this->hDebPm = $hDebPm;
        return $this;
    }

    /**
     * Set the h fin am.
     *
     * @param string $hFinAm The h fin am.
     */
    public function setHFinAm($hFinAm) {
        $this->hFinAm = $hFinAm;
        return $this;
    }

    /**
     * Set the h fin pm.
     *
     * @param string $hFinPm The h fin pm.
     */
    public function setHFinPm($hFinPm) {
        $this->hFinPm = $hFinPm;
        return $this;
    }

    /**
     * Set the nb h absence cp.
     *
     * @param float $nbHAbsenceCp The nb h absence cp.
     */
    public function setNbHAbsenceCp($nbHAbsenceCp) {
        $this->nbHAbsenceCp = $nbHAbsenceCp;
        return $this;
    }

    /**
     * Set the nb h majo.
     *
     * @param float $nbHMajo The nb h majo.
     */
    public function setNbHMajo($nbHMajo) {
        $this->nbHMajo = $nbHMajo;
        return $this;
    }

    /**
     * Set the nb h nuit.
     *
     * @param float $nbHNuit The nb h nuit.
     */
    public function setNbHNuit($nbHNuit) {
        $this->nbHNuit = $nbHNuit;
        return $this;
    }

    /**
     * Set the nb h repos comp pris.
     *
     * @param float $nbHReposCompPris The nb h repos comp pris.
     */
    public function setNbHReposCompPris($nbHReposCompPris) {
        $this->nbHReposCompPris = $nbHReposCompPris;
        return $this;
    }

    /**
     * Set the nb h repos remplace pris.
     *
     * @param float $nbHReposRemplacePris The nb h repos remplace pris.
     */
    public function setNbHReposRemplacePris($nbHReposRemplacePris) {
        $this->nbHReposRemplacePris = $nbHReposRemplacePris;
        return $this;
    }

    /**
     * Set the nb h travail reel.
     *
     * @param float $nbHTravailReel The nb h travail reel.
     */
    public function setNbHTravailReel($nbHTravailReel) {
        $this->nbHTravailReel = $nbHTravailReel;
        return $this;
    }

    /**
     * Set the nb hjfnt.
     *
     * @param float $nbHjfnt The nb hjfnt.
     */
    public function setNbHjfnt($nbHjfnt) {
        $this->nbHjfnt = $nbHjfnt;
        return $this;
    }

    /**
     * Set the nb j repos recup pris.
     *
     * @param float $nbJReposRecupPris The nb j repos recup pris.
     */
    public function setNbJReposRecupPris($nbJReposRecupPris) {
        $this->nbJReposRecupPris = $nbJReposRecupPris;
        return $this;
    }

    /**
     * Set the nb jour cp pris.
     *
     * @param float $nbJourCpPris The nb jour cp pris.
     */
    public function setNbJourCpPris($nbJourCpPris) {
        $this->nbJourCpPris = $nbJourCpPris;
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
}
