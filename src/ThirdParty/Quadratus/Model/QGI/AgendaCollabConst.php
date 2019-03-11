<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Agenda collab const model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AgendaCollabConst {

    /**
     * A r t t.
     *
     * @var bool
     */
    private $aRTT;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code site tenue.
     *
     * @var string
     */
    private $codeSiteTenue;

    /**
     * Confidentiel.
     *
     * @var bool
     */
    private $confidentiel;

    /**
     * Date derniere modif agenda.
     *
     * @var DateTime
     */
    private $dateDerniereModifAgenda;

    /**
     * Dimanche a mdeb.
     *
     * @var DateTime
     */
    private $dimancheAMdeb;

    /**
     * Dimanche a mfin.
     *
     * @var DateTime
     */
    private $dimancheAMfin;

    /**
     * Dimanche p mdeb.
     *
     * @var DateTime
     */
    private $dimanchePMdeb;

    /**
     * Dimanche p mfin.
     *
     * @var DateTime
     */
    private $dimanchePMfin;

    /**
     * Interdire rd v hors travail.
     *
     * @var bool
     */
    private $interdireRdVHorsTravail;

    /**
     * Jeudi a mdeb.
     *
     * @var DateTime
     */
    private $jeudiAMdeb;

    /**
     * Jeudi a mfin.
     *
     * @var DateTime
     */
    private $jeudiAMfin;

    /**
     * Jeudi p mdeb.
     *
     * @var DateTime
     */
    private $jeudiPMdeb;

    /**
     * Jeudi p mfin.
     *
     * @var DateTime
     */
    private $jeudiPMfin;

    /**
     * Lundi a mdeb.
     *
     * @var DateTime
     */
    private $lundiAMdeb;

    /**
     * Lundi a mfin.
     *
     * @var DateTime
     */
    private $lundiAMfin;

    /**
     * Lundi p mdeb.
     *
     * @var DateTime
     */
    private $lundiPMdeb;

    /**
     * Lundi p mfin.
     *
     * @var DateTime
     */
    private $lundiPMfin;

    /**
     * Mardi a mdeb.
     *
     * @var DateTime
     */
    private $mardiAMdeb;

    /**
     * Mardi a mfin.
     *
     * @var DateTime
     */
    private $mardiAMfin;

    /**
     * Mardi p mdeb.
     *
     * @var DateTime
     */
    private $mardiPMdeb;

    /**
     * Mardi p mfin.
     *
     * @var DateTime
     */
    private $mardiPMfin;

    /**
     * Mercredi a mdeb.
     *
     * @var DateTime
     */
    private $mercrediAMdeb;

    /**
     * Mercredi a mfin.
     *
     * @var DateTime
     */
    private $mercrediAMfin;

    /**
     * Mercredi p mdeb.
     *
     * @var DateTime
     */
    private $mercrediPMdeb;

    /**
     * Mercredi p mfin.
     *
     * @var DateTime
     */
    private $mercrediPMfin;

    /**
     * Plus petite date activite modifiee.
     *
     * @var DateTime
     */
    private $plusPetiteDateActiviteModifiee;

    /**
     * Samedi a mdeb.
     *
     * @var DateTime
     */
    private $samediAMdeb;

    /**
     * Samedi a mfin.
     *
     * @var DateTime
     */
    private $samediAMfin;

    /**
     * Samedi p mdeb.
     *
     * @var DateTime
     */
    private $samediPMdeb;

    /**
     * Samedi p mfin.
     *
     * @var DateTime
     */
    private $samediPMfin;

    /**
     * Suivi ordre mission.
     *
     * @var bool
     */
    private $suiviOrdreMission;

    /**
     * Unite r d v.
     *
     * @var string
     */
    private $uniteRDV;

    /**
     * Vendredi a mdeb.
     *
     * @var DateTime
     */
    private $vendrediAMdeb;

    /**
     * Vendredi a mfin.
     *
     * @var DateTime
     */
    private $vendrediAMfin;

    /**
     * Vendredi p mdeb.
     *
     * @var DateTime
     */
    private $vendrediPMdeb;

    /**
     * Vendredi p mfin.
     *
     * @var DateTime
     */
    private $vendrediPMfin;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a r t t.
     *
     * @return bool Returns the a r t t.
     */
    public function getARTT() {
        return $this->aRTT;
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
     * Get the code site tenue.
     *
     * @return string Returns the code site tenue.
     */
    public function getCodeSiteTenue() {
        return $this->codeSiteTenue;
    }

    /**
     * Get the confidentiel.
     *
     * @return bool Returns the confidentiel.
     */
    public function getConfidentiel() {
        return $this->confidentiel;
    }

    /**
     * Get the date derniere modif agenda.
     *
     * @return DateTime Returns the date derniere modif agenda.
     */
    public function getDateDerniereModifAgenda() {
        return $this->dateDerniereModifAgenda;
    }

    /**
     * Get the dimanche a mdeb.
     *
     * @return DateTime Returns the dimanche a mdeb.
     */
    public function getDimancheAMdeb() {
        return $this->dimancheAMdeb;
    }

    /**
     * Get the dimanche a mfin.
     *
     * @return DateTime Returns the dimanche a mfin.
     */
    public function getDimancheAMfin() {
        return $this->dimancheAMfin;
    }

    /**
     * Get the dimanche p mdeb.
     *
     * @return DateTime Returns the dimanche p mdeb.
     */
    public function getDimanchePMdeb() {
        return $this->dimanchePMdeb;
    }

    /**
     * Get the dimanche p mfin.
     *
     * @return DateTime Returns the dimanche p mfin.
     */
    public function getDimanchePMfin() {
        return $this->dimanchePMfin;
    }

    /**
     * Get the interdire rd v hors travail.
     *
     * @return bool Returns the interdire rd v hors travail.
     */
    public function getInterdireRdVHorsTravail() {
        return $this->interdireRdVHorsTravail;
    }

    /**
     * Get the jeudi a mdeb.
     *
     * @return DateTime Returns the jeudi a mdeb.
     */
    public function getJeudiAMdeb() {
        return $this->jeudiAMdeb;
    }

    /**
     * Get the jeudi a mfin.
     *
     * @return DateTime Returns the jeudi a mfin.
     */
    public function getJeudiAMfin() {
        return $this->jeudiAMfin;
    }

    /**
     * Get the jeudi p mdeb.
     *
     * @return DateTime Returns the jeudi p mdeb.
     */
    public function getJeudiPMdeb() {
        return $this->jeudiPMdeb;
    }

    /**
     * Get the jeudi p mfin.
     *
     * @return DateTime Returns the jeudi p mfin.
     */
    public function getJeudiPMfin() {
        return $this->jeudiPMfin;
    }

    /**
     * Get the lundi a mdeb.
     *
     * @return DateTime Returns the lundi a mdeb.
     */
    public function getLundiAMdeb() {
        return $this->lundiAMdeb;
    }

    /**
     * Get the lundi a mfin.
     *
     * @return DateTime Returns the lundi a mfin.
     */
    public function getLundiAMfin() {
        return $this->lundiAMfin;
    }

    /**
     * Get the lundi p mdeb.
     *
     * @return DateTime Returns the lundi p mdeb.
     */
    public function getLundiPMdeb() {
        return $this->lundiPMdeb;
    }

    /**
     * Get the lundi p mfin.
     *
     * @return DateTime Returns the lundi p mfin.
     */
    public function getLundiPMfin() {
        return $this->lundiPMfin;
    }

    /**
     * Get the mardi a mdeb.
     *
     * @return DateTime Returns the mardi a mdeb.
     */
    public function getMardiAMdeb() {
        return $this->mardiAMdeb;
    }

    /**
     * Get the mardi a mfin.
     *
     * @return DateTime Returns the mardi a mfin.
     */
    public function getMardiAMfin() {
        return $this->mardiAMfin;
    }

    /**
     * Get the mardi p mdeb.
     *
     * @return DateTime Returns the mardi p mdeb.
     */
    public function getMardiPMdeb() {
        return $this->mardiPMdeb;
    }

    /**
     * Get the mardi p mfin.
     *
     * @return DateTime Returns the mardi p mfin.
     */
    public function getMardiPMfin() {
        return $this->mardiPMfin;
    }

    /**
     * Get the mercredi a mdeb.
     *
     * @return DateTime Returns the mercredi a mdeb.
     */
    public function getMercrediAMdeb() {
        return $this->mercrediAMdeb;
    }

    /**
     * Get the mercredi a mfin.
     *
     * @return DateTime Returns the mercredi a mfin.
     */
    public function getMercrediAMfin() {
        return $this->mercrediAMfin;
    }

    /**
     * Get the mercredi p mdeb.
     *
     * @return DateTime Returns the mercredi p mdeb.
     */
    public function getMercrediPMdeb() {
        return $this->mercrediPMdeb;
    }

    /**
     * Get the mercredi p mfin.
     *
     * @return DateTime Returns the mercredi p mfin.
     */
    public function getMercrediPMfin() {
        return $this->mercrediPMfin;
    }

    /**
     * Get the plus petite date activite modifiee.
     *
     * @return DateTime Returns the plus petite date activite modifiee.
     */
    public function getPlusPetiteDateActiviteModifiee() {
        return $this->plusPetiteDateActiviteModifiee;
    }

    /**
     * Get the samedi a mdeb.
     *
     * @return DateTime Returns the samedi a mdeb.
     */
    public function getSamediAMdeb() {
        return $this->samediAMdeb;
    }

    /**
     * Get the samedi a mfin.
     *
     * @return DateTime Returns the samedi a mfin.
     */
    public function getSamediAMfin() {
        return $this->samediAMfin;
    }

    /**
     * Get the samedi p mdeb.
     *
     * @return DateTime Returns the samedi p mdeb.
     */
    public function getSamediPMdeb() {
        return $this->samediPMdeb;
    }

    /**
     * Get the samedi p mfin.
     *
     * @return DateTime Returns the samedi p mfin.
     */
    public function getSamediPMfin() {
        return $this->samediPMfin;
    }

    /**
     * Get the suivi ordre mission.
     *
     * @return bool Returns the suivi ordre mission.
     */
    public function getSuiviOrdreMission() {
        return $this->suiviOrdreMission;
    }

    /**
     * Get the unite r d v.
     *
     * @return string Returns the unite r d v.
     */
    public function getUniteRDV() {
        return $this->uniteRDV;
    }

    /**
     * Get the vendredi a mdeb.
     *
     * @return DateTime Returns the vendredi a mdeb.
     */
    public function getVendrediAMdeb() {
        return $this->vendrediAMdeb;
    }

    /**
     * Get the vendredi a mfin.
     *
     * @return DateTime Returns the vendredi a mfin.
     */
    public function getVendrediAMfin() {
        return $this->vendrediAMfin;
    }

    /**
     * Get the vendredi p mdeb.
     *
     * @return DateTime Returns the vendredi p mdeb.
     */
    public function getVendrediPMdeb() {
        return $this->vendrediPMdeb;
    }

    /**
     * Get the vendredi p mfin.
     *
     * @return DateTime Returns the vendredi p mfin.
     */
    public function getVendrediPMfin() {
        return $this->vendrediPMfin;
    }

    /**
     * Set the a r t t.
     *
     * @param bool $aRTT The a r t t.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setARTT($aRTT) {
        $this->aRTT = $aRTT;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code site tenue.
     *
     * @param string $codeSiteTenue The code site tenue.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setCodeSiteTenue($codeSiteTenue) {
        $this->codeSiteTenue = $codeSiteTenue;
        return $this;
    }

    /**
     * Set the confidentiel.
     *
     * @param bool $confidentiel The confidentiel.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setConfidentiel($confidentiel) {
        $this->confidentiel = $confidentiel;
        return $this;
    }

    /**
     * Set the date derniere modif agenda.
     *
     * @param DateTime $dateDerniereModifAgenda The date derniere modif agenda.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setDateDerniereModifAgenda(DateTime $dateDerniereModifAgenda = null) {
        $this->dateDerniereModifAgenda = $dateDerniereModifAgenda;
        return $this;
    }

    /**
     * Set the dimanche a mdeb.
     *
     * @param DateTime $dimancheAMdeb The dimanche a mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setDimancheAMdeb(DateTime $dimancheAMdeb = null) {
        $this->dimancheAMdeb = $dimancheAMdeb;
        return $this;
    }

    /**
     * Set the dimanche a mfin.
     *
     * @param DateTime $dimancheAMfin The dimanche a mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setDimancheAMfin(DateTime $dimancheAMfin = null) {
        $this->dimancheAMfin = $dimancheAMfin;
        return $this;
    }

    /**
     * Set the dimanche p mdeb.
     *
     * @param DateTime $dimanchePMdeb The dimanche p mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setDimanchePMdeb(DateTime $dimanchePMdeb = null) {
        $this->dimanchePMdeb = $dimanchePMdeb;
        return $this;
    }

    /**
     * Set the dimanche p mfin.
     *
     * @param DateTime $dimanchePMfin The dimanche p mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setDimanchePMfin(DateTime $dimanchePMfin = null) {
        $this->dimanchePMfin = $dimanchePMfin;
        return $this;
    }

    /**
     * Set the interdire rd v hors travail.
     *
     * @param bool $interdireRdVHorsTravail The interdire rd v hors travail.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setInterdireRdVHorsTravail($interdireRdVHorsTravail) {
        $this->interdireRdVHorsTravail = $interdireRdVHorsTravail;
        return $this;
    }

    /**
     * Set the jeudi a mdeb.
     *
     * @param DateTime $jeudiAMdeb The jeudi a mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setJeudiAMdeb(DateTime $jeudiAMdeb = null) {
        $this->jeudiAMdeb = $jeudiAMdeb;
        return $this;
    }

    /**
     * Set the jeudi a mfin.
     *
     * @param DateTime $jeudiAMfin The jeudi a mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setJeudiAMfin(DateTime $jeudiAMfin = null) {
        $this->jeudiAMfin = $jeudiAMfin;
        return $this;
    }

    /**
     * Set the jeudi p mdeb.
     *
     * @param DateTime $jeudiPMdeb The jeudi p mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setJeudiPMdeb(DateTime $jeudiPMdeb = null) {
        $this->jeudiPMdeb = $jeudiPMdeb;
        return $this;
    }

    /**
     * Set the jeudi p mfin.
     *
     * @param DateTime $jeudiPMfin The jeudi p mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setJeudiPMfin(DateTime $jeudiPMfin = null) {
        $this->jeudiPMfin = $jeudiPMfin;
        return $this;
    }

    /**
     * Set the lundi a mdeb.
     *
     * @param DateTime $lundiAMdeb The lundi a mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setLundiAMdeb(DateTime $lundiAMdeb = null) {
        $this->lundiAMdeb = $lundiAMdeb;
        return $this;
    }

    /**
     * Set the lundi a mfin.
     *
     * @param DateTime $lundiAMfin The lundi a mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setLundiAMfin(DateTime $lundiAMfin = null) {
        $this->lundiAMfin = $lundiAMfin;
        return $this;
    }

    /**
     * Set the lundi p mdeb.
     *
     * @param DateTime $lundiPMdeb The lundi p mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setLundiPMdeb(DateTime $lundiPMdeb = null) {
        $this->lundiPMdeb = $lundiPMdeb;
        return $this;
    }

    /**
     * Set the lundi p mfin.
     *
     * @param DateTime $lundiPMfin The lundi p mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setLundiPMfin(DateTime $lundiPMfin = null) {
        $this->lundiPMfin = $lundiPMfin;
        return $this;
    }

    /**
     * Set the mardi a mdeb.
     *
     * @param DateTime $mardiAMdeb The mardi a mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setMardiAMdeb(DateTime $mardiAMdeb = null) {
        $this->mardiAMdeb = $mardiAMdeb;
        return $this;
    }

    /**
     * Set the mardi a mfin.
     *
     * @param DateTime $mardiAMfin The mardi a mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setMardiAMfin(DateTime $mardiAMfin = null) {
        $this->mardiAMfin = $mardiAMfin;
        return $this;
    }

    /**
     * Set the mardi p mdeb.
     *
     * @param DateTime $mardiPMdeb The mardi p mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setMardiPMdeb(DateTime $mardiPMdeb = null) {
        $this->mardiPMdeb = $mardiPMdeb;
        return $this;
    }

    /**
     * Set the mardi p mfin.
     *
     * @param DateTime $mardiPMfin The mardi p mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setMardiPMfin(DateTime $mardiPMfin = null) {
        $this->mardiPMfin = $mardiPMfin;
        return $this;
    }

    /**
     * Set the mercredi a mdeb.
     *
     * @param DateTime $mercrediAMdeb The mercredi a mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setMercrediAMdeb(DateTime $mercrediAMdeb = null) {
        $this->mercrediAMdeb = $mercrediAMdeb;
        return $this;
    }

    /**
     * Set the mercredi a mfin.
     *
     * @param DateTime $mercrediAMfin The mercredi a mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setMercrediAMfin(DateTime $mercrediAMfin = null) {
        $this->mercrediAMfin = $mercrediAMfin;
        return $this;
    }

    /**
     * Set the mercredi p mdeb.
     *
     * @param DateTime $mercrediPMdeb The mercredi p mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setMercrediPMdeb(DateTime $mercrediPMdeb = null) {
        $this->mercrediPMdeb = $mercrediPMdeb;
        return $this;
    }

    /**
     * Set the mercredi p mfin.
     *
     * @param DateTime $mercrediPMfin The mercredi p mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setMercrediPMfin(DateTime $mercrediPMfin = null) {
        $this->mercrediPMfin = $mercrediPMfin;
        return $this;
    }

    /**
     * Set the plus petite date activite modifiee.
     *
     * @param DateTime $plusPetiteDateActiviteModifiee The plus petite date activite modifiee.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setPlusPetiteDateActiviteModifiee(DateTime $plusPetiteDateActiviteModifiee = null) {
        $this->plusPetiteDateActiviteModifiee = $plusPetiteDateActiviteModifiee;
        return $this;
    }

    /**
     * Set the samedi a mdeb.
     *
     * @param DateTime $samediAMdeb The samedi a mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setSamediAMdeb(DateTime $samediAMdeb = null) {
        $this->samediAMdeb = $samediAMdeb;
        return $this;
    }

    /**
     * Set the samedi a mfin.
     *
     * @param DateTime $samediAMfin The samedi a mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setSamediAMfin(DateTime $samediAMfin = null) {
        $this->samediAMfin = $samediAMfin;
        return $this;
    }

    /**
     * Set the samedi p mdeb.
     *
     * @param DateTime $samediPMdeb The samedi p mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setSamediPMdeb(DateTime $samediPMdeb = null) {
        $this->samediPMdeb = $samediPMdeb;
        return $this;
    }

    /**
     * Set the samedi p mfin.
     *
     * @param DateTime $samediPMfin The samedi p mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setSamediPMfin(DateTime $samediPMfin = null) {
        $this->samediPMfin = $samediPMfin;
        return $this;
    }

    /**
     * Set the suivi ordre mission.
     *
     * @param bool $suiviOrdreMission The suivi ordre mission.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setSuiviOrdreMission($suiviOrdreMission) {
        $this->suiviOrdreMission = $suiviOrdreMission;
        return $this;
    }

    /**
     * Set the unite r d v.
     *
     * @param string $uniteRDV The unite r d v.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setUniteRDV($uniteRDV) {
        $this->uniteRDV = $uniteRDV;
        return $this;
    }

    /**
     * Set the vendredi a mdeb.
     *
     * @param DateTime $vendrediAMdeb The vendredi a mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setVendrediAMdeb(DateTime $vendrediAMdeb = null) {
        $this->vendrediAMdeb = $vendrediAMdeb;
        return $this;
    }

    /**
     * Set the vendredi a mfin.
     *
     * @param DateTime $vendrediAMfin The vendredi a mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setVendrediAMfin(DateTime $vendrediAMfin = null) {
        $this->vendrediAMfin = $vendrediAMfin;
        return $this;
    }

    /**
     * Set the vendredi p mdeb.
     *
     * @param DateTime $vendrediPMdeb The vendredi p mdeb.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setVendrediPMdeb(DateTime $vendrediPMdeb = null) {
        $this->vendrediPMdeb = $vendrediPMdeb;
        return $this;
    }

    /**
     * Set the vendredi p mfin.
     *
     * @param DateTime $vendrediPMfin The vendredi p mfin.
     * @return AgendaCollabConst Returns this agenda collab const.
     */
    public function setVendrediPMfin(DateTime $vendrediPMfin = null) {
        $this->vendrediPMfin = $vendrediPMfin;
        return $this;
    }
}
