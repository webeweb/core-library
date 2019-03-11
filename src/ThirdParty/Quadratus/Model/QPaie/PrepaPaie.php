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
 * Prepa paie model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class PrepaPaie {

    /**
     * Cp pris.
     *
     * @var float
     */
    private $cpPris;

    /**
     * H majo acquis.
     *
     * @var float
     */
    private $hMajoAcquis;

    /**
     * H majo pris.
     *
     * @var float
     */
    private $hMajoPris;

    /**
     * H sup a comptabiliser r c.
     *
     * @var float
     */
    private $hSupAComptabiliserRC;

    /**
     * H sup a comptabiliser r c i t.
     *
     * @var float
     */
    private $hSupAComptabiliserRCIT;

    /**
     * H sup bonif.
     *
     * @var float
     */
    private $hSupBonif;

    /**
     * Horaire prevu.
     *
     * @var float
     */
    private $horairePrevu;

    /**
     * Nb h comp.
     *
     * @var float
     */
    private $nbHComp;

    /**
     * Nb h nuit.
     *
     * @var float
     */
    private $nbHNuit;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Pourcent h bonif.
     *
     * @var float
     */
    private $pourcentHBonif;

    /**
     * R c acquis.
     *
     * @var float
     */
    private $rCAcquis;

    /**
     * R c pris.
     *
     * @var float
     */
    private $rCPris;

    /**
     * R r acquis.
     *
     * @var float
     */
    private $rRAcquis;

    /**
     * R r pris.
     *
     * @var float
     */
    private $rRPris;

    /**
     * R recup acquis.
     *
     * @var float
     */
    private $rRecupAcquis;

    /**
     * R recup pris.
     *
     * @var float
     */
    private $rRecupPris;

    /**
     * Semaine.
     *
     * @var string
     */
    private $semaine;

    /**
     * Tot realise.
     *
     * @var float
     */
    private $totRealise;

    /**
     * Travail effectif.
     *
     * @var float
     */
    private $travailEffectif;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the cp pris.
     *
     * @return float Returns the cp pris.
     */
    public function getCpPris() {
        return $this->cpPris;
    }

    /**
     * Get the h majo acquis.
     *
     * @return float Returns the h majo acquis.
     */
    public function getHMajoAcquis() {
        return $this->hMajoAcquis;
    }

    /**
     * Get the h majo pris.
     *
     * @return float Returns the h majo pris.
     */
    public function getHMajoPris() {
        return $this->hMajoPris;
    }

    /**
     * Get the h sup a comptabiliser r c.
     *
     * @return float Returns the h sup a comptabiliser r c.
     */
    public function getHSupAComptabiliserRC() {
        return $this->hSupAComptabiliserRC;
    }

    /**
     * Get the h sup a comptabiliser r c i t.
     *
     * @return float Returns the h sup a comptabiliser r c i t.
     */
    public function getHSupAComptabiliserRCIT() {
        return $this->hSupAComptabiliserRCIT;
    }

    /**
     * Get the h sup bonif.
     *
     * @return float Returns the h sup bonif.
     */
    public function getHSupBonif() {
        return $this->hSupBonif;
    }

    /**
     * Get the horaire prevu.
     *
     * @return float Returns the horaire prevu.
     */
    public function getHorairePrevu() {
        return $this->horairePrevu;
    }

    /**
     * Get the nb h comp.
     *
     * @return float Returns the nb h comp.
     */
    public function getNbHComp() {
        return $this->nbHComp;
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
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the pourcent h bonif.
     *
     * @return float Returns the pourcent h bonif.
     */
    public function getPourcentHBonif() {
        return $this->pourcentHBonif;
    }

    /**
     * Get the r c acquis.
     *
     * @return float Returns the r c acquis.
     */
    public function getRCAcquis() {
        return $this->rCAcquis;
    }

    /**
     * Get the r c pris.
     *
     * @return float Returns the r c pris.
     */
    public function getRCPris() {
        return $this->rCPris;
    }

    /**
     * Get the r r acquis.
     *
     * @return float Returns the r r acquis.
     */
    public function getRRAcquis() {
        return $this->rRAcquis;
    }

    /**
     * Get the r r pris.
     *
     * @return float Returns the r r pris.
     */
    public function getRRPris() {
        return $this->rRPris;
    }

    /**
     * Get the r recup acquis.
     *
     * @return float Returns the r recup acquis.
     */
    public function getRRecupAcquis() {
        return $this->rRecupAcquis;
    }

    /**
     * Get the r recup pris.
     *
     * @return float Returns the r recup pris.
     */
    public function getRRecupPris() {
        return $this->rRecupPris;
    }

    /**
     * Get the semaine.
     *
     * @return string Returns the semaine.
     */
    public function getSemaine() {
        return $this->semaine;
    }

    /**
     * Get the tot realise.
     *
     * @return float Returns the tot realise.
     */
    public function getTotRealise() {
        return $this->totRealise;
    }

    /**
     * Get the travail effectif.
     *
     * @return float Returns the travail effectif.
     */
    public function getTravailEffectif() {
        return $this->travailEffectif;
    }

    /**
     * Set the cp pris.
     *
     * @param float $cpPris The cp pris.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setCpPris($cpPris) {
        $this->cpPris = $cpPris;
        return $this;
    }

    /**
     * Set the h majo acquis.
     *
     * @param float $hMajoAcquis The h majo acquis.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setHMajoAcquis($hMajoAcquis) {
        $this->hMajoAcquis = $hMajoAcquis;
        return $this;
    }

    /**
     * Set the h majo pris.
     *
     * @param float $hMajoPris The h majo pris.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setHMajoPris($hMajoPris) {
        $this->hMajoPris = $hMajoPris;
        return $this;
    }

    /**
     * Set the h sup a comptabiliser r c.
     *
     * @param float $hSupAComptabiliserRC The h sup a comptabiliser r c.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setHSupAComptabiliserRC($hSupAComptabiliserRC) {
        $this->hSupAComptabiliserRC = $hSupAComptabiliserRC;
        return $this;
    }

    /**
     * Set the h sup a comptabiliser r c i t.
     *
     * @param float $hSupAComptabiliserRCIT The h sup a comptabiliser r c i t.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setHSupAComptabiliserRCIT($hSupAComptabiliserRCIT) {
        $this->hSupAComptabiliserRCIT = $hSupAComptabiliserRCIT;
        return $this;
    }

    /**
     * Set the h sup bonif.
     *
     * @param float $hSupBonif The h sup bonif.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setHSupBonif($hSupBonif) {
        $this->hSupBonif = $hSupBonif;
        return $this;
    }

    /**
     * Set the horaire prevu.
     *
     * @param float $horairePrevu The horaire prevu.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setHorairePrevu($horairePrevu) {
        $this->horairePrevu = $horairePrevu;
        return $this;
    }

    /**
     * Set the nb h comp.
     *
     * @param float $nbHComp The nb h comp.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setNbHComp($nbHComp) {
        $this->nbHComp = $nbHComp;
        return $this;
    }

    /**
     * Set the nb h nuit.
     *
     * @param float $nbHNuit The nb h nuit.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setNbHNuit($nbHNuit) {
        $this->nbHNuit = $nbHNuit;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent h bonif.
     *
     * @param float $pourcentHBonif The pourcent h bonif.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setPourcentHBonif($pourcentHBonif) {
        $this->pourcentHBonif = $pourcentHBonif;
        return $this;
    }

    /**
     * Set the r c acquis.
     *
     * @param float $rCAcquis The r c acquis.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setRCAcquis($rCAcquis) {
        $this->rCAcquis = $rCAcquis;
        return $this;
    }

    /**
     * Set the r c pris.
     *
     * @param float $rCPris The r c pris.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setRCPris($rCPris) {
        $this->rCPris = $rCPris;
        return $this;
    }

    /**
     * Set the r r acquis.
     *
     * @param float $rRAcquis The r r acquis.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setRRAcquis($rRAcquis) {
        $this->rRAcquis = $rRAcquis;
        return $this;
    }

    /**
     * Set the r r pris.
     *
     * @param float $rRPris The r r pris.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setRRPris($rRPris) {
        $this->rRPris = $rRPris;
        return $this;
    }

    /**
     * Set the r recup acquis.
     *
     * @param float $rRecupAcquis The r recup acquis.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setRRecupAcquis($rRecupAcquis) {
        $this->rRecupAcquis = $rRecupAcquis;
        return $this;
    }

    /**
     * Set the r recup pris.
     *
     * @param float $rRecupPris The r recup pris.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setRRecupPris($rRecupPris) {
        $this->rRecupPris = $rRecupPris;
        return $this;
    }

    /**
     * Set the semaine.
     *
     * @param string $semaine The semaine.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setSemaine($semaine) {
        $this->semaine = $semaine;
        return $this;
    }

    /**
     * Set the tot realise.
     *
     * @param float $totRealise The tot realise.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setTotRealise($totRealise) {
        $this->totRealise = $totRealise;
        return $this;
    }

    /**
     * Set the travail effectif.
     *
     * @param float $travailEffectif The travail effectif.
     * @return PrepaPaie Returns this prepa paie.
     */
    public function setTravailEffectif($travailEffectif) {
        $this->travailEffectif = $travailEffectif;
        return $this;
    }
}
