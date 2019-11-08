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
 * Prepa paie.
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
     * H sup a comptabiliser rc.
     *
     * @var float
     */
    private $hSupAComptabiliserRc;

    /**
     * H sup a comptabiliser rcit.
     *
     * @var float
     */
    private $hSupAComptabiliserRcit;

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
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pourcent h bonif.
     *
     * @var float
     */
    private $pourcentHBonif;

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
     * Rc acquis.
     *
     * @var float
     */
    private $rcAcquis;

    /**
     * Rc pris.
     *
     * @var float
     */
    private $rcPris;

    /**
     * Rr acquis.
     *
     * @var float
     */
    private $rrAcquis;

    /**
     * Rr pris.
     *
     * @var float
     */
    private $rrPris;

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
     * Get the h sup a comptabiliser rc.
     *
     * @return float Returns the h sup a comptabiliser rc.
     */
    public function getHSupAComptabiliserRc() {
        return $this->hSupAComptabiliserRc;
    }

    /**
     * Get the h sup a comptabiliser rcit.
     *
     * @return float Returns the h sup a comptabiliser rcit.
     */
    public function getHSupAComptabiliserRcit() {
        return $this->hSupAComptabiliserRcit;
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
     * @return DateTime|null Returns the periode.
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
     * Get the rc acquis.
     *
     * @return float Returns the rc acquis.
     */
    public function getRcAcquis() {
        return $this->rcAcquis;
    }

    /**
     * Get the rc pris.
     *
     * @return float Returns the rc pris.
     */
    public function getRcPris() {
        return $this->rcPris;
    }

    /**
     * Get the rr acquis.
     *
     * @return float Returns the rr acquis.
     */
    public function getRrAcquis() {
        return $this->rrAcquis;
    }

    /**
     * Get the rr pris.
     *
     * @return float Returns the rr pris.
     */
    public function getRrPris() {
        return $this->rrPris;
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
     */
    public function setCpPris($cpPris) {
        $this->cpPris = $cpPris;
        return $this;
    }

    /**
     * Set the h majo acquis.
     *
     * @param float $hMajoAcquis The h majo acquis.
     */
    public function setHMajoAcquis($hMajoAcquis) {
        $this->hMajoAcquis = $hMajoAcquis;
        return $this;
    }

    /**
     * Set the h majo pris.
     *
     * @param float $hMajoPris The h majo pris.
     */
    public function setHMajoPris($hMajoPris) {
        $this->hMajoPris = $hMajoPris;
        return $this;
    }

    /**
     * Set the h sup a comptabiliser rc.
     *
     * @param float $hSupAComptabiliserRc The h sup a comptabiliser rc.
     */
    public function setHSupAComptabiliserRc($hSupAComptabiliserRc) {
        $this->hSupAComptabiliserRc = $hSupAComptabiliserRc;
        return $this;
    }

    /**
     * Set the h sup a comptabiliser rcit.
     *
     * @param float $hSupAComptabiliserRcit The h sup a comptabiliser rcit.
     */
    public function setHSupAComptabiliserRcit($hSupAComptabiliserRcit) {
        $this->hSupAComptabiliserRcit = $hSupAComptabiliserRcit;
        return $this;
    }

    /**
     * Set the h sup bonif.
     *
     * @param float $hSupBonif The h sup bonif.
     */
    public function setHSupBonif($hSupBonif) {
        $this->hSupBonif = $hSupBonif;
        return $this;
    }

    /**
     * Set the horaire prevu.
     *
     * @param float $horairePrevu The horaire prevu.
     */
    public function setHorairePrevu($horairePrevu) {
        $this->horairePrevu = $horairePrevu;
        return $this;
    }

    /**
     * Set the nb h comp.
     *
     * @param float $nbHComp The nb h comp.
     */
    public function setNbHComp($nbHComp) {
        $this->nbHComp = $nbHComp;
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
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent h bonif.
     *
     * @param float $pourcentHBonif The pourcent h bonif.
     */
    public function setPourcentHBonif($pourcentHBonif) {
        $this->pourcentHBonif = $pourcentHBonif;
        return $this;
    }

    /**
     * Set the r recup acquis.
     *
     * @param float $rRecupAcquis The r recup acquis.
     */
    public function setRRecupAcquis($rRecupAcquis) {
        $this->rRecupAcquis = $rRecupAcquis;
        return $this;
    }

    /**
     * Set the r recup pris.
     *
     * @param float $rRecupPris The r recup pris.
     */
    public function setRRecupPris($rRecupPris) {
        $this->rRecupPris = $rRecupPris;
        return $this;
    }

    /**
     * Set the rc acquis.
     *
     * @param float $rcAcquis The rc acquis.
     */
    public function setRcAcquis($rcAcquis) {
        $this->rcAcquis = $rcAcquis;
        return $this;
    }

    /**
     * Set the rc pris.
     *
     * @param float $rcPris The rc pris.
     */
    public function setRcPris($rcPris) {
        $this->rcPris = $rcPris;
        return $this;
    }

    /**
     * Set the rr acquis.
     *
     * @param float $rrAcquis The rr acquis.
     */
    public function setRrAcquis($rrAcquis) {
        $this->rrAcquis = $rrAcquis;
        return $this;
    }

    /**
     * Set the rr pris.
     *
     * @param float $rrPris The rr pris.
     */
    public function setRrPris($rrPris) {
        $this->rrPris = $rrPris;
        return $this;
    }

    /**
     * Set the semaine.
     *
     * @param string $semaine The semaine.
     */
    public function setSemaine($semaine) {
        $this->semaine = $semaine;
        return $this;
    }

    /**
     * Set the tot realise.
     *
     * @param float $totRealise The tot realise.
     */
    public function setTotRealise($totRealise) {
        $this->totRealise = $totRealise;
        return $this;
    }

    /**
     * Set the travail effectif.
     *
     * @param float $travailEffectif The travail effectif.
     */
    public function setTravailEffectif($travailEffectif) {
        $this->travailEffectif = $travailEffectif;
        return $this;
    }
}
