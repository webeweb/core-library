<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Charges paie model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ChargesPaie {

    /**
     * Arbitrage.
     *
     * @var float
     */
    private $arbitrage;

    /**
     * Brut.
     *
     * @var float
     */
    private $brut;

    /**
     * Brut a l.
     *
     * @var float
     */
    private $brutAL;

    /**
     * Brut a n l.
     *
     * @var float
     */
    private $brutANL;

    /**
     * Charges patronales.
     *
     * @var float
     */
    private $chargesPatronales;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Euro.
     *
     * @var boolean
     */
    private $euro;

    /**
     * Heures sup.
     *
     * @var float
     */
    private $heuresSup;

    /**
     * Impos.
     *
     * @var float
     */
    private $impos;

    /**
     * Indemnite c p.
     *
     * @var float
     */
    private $indemniteCP;

    /**
     * Indemnite precarite.
     *
     * @var float
     */
    private $indemnitePrecarite;

    /**
     * Interessement.
     *
     * @var float
     */
    private $interessement;

    /**
     * Mt net paye theo.
     *
     * @var float
     */
    private $mtNetPayeTheo;

    /**
     * Nb h abs.
     *
     * @var float
     */
    private $nbHAbs;

    /**
     * Nb h base.
     *
     * @var float
     */
    private $nbHBase;

    /**
     * Nb h n.
     *
     * @var float
     */
    private $nbHN;

    /**
     * Nb h rc.
     *
     * @var float
     */
    private $nbHRc;

    /**
     * Nb h sup1.
     *
     * @var float
     */
    private $nbHSup1;

    /**
     * Nb h sup2.
     *
     * @var float
     */
    private $nbHSup2;

    /**
     * Nb h sup3.
     *
     * @var float
     */
    private $nbHSup3;

    /**
     * Nb h t.
     *
     * @var float
     */
    private $nbHT;

    /**
     * Participation.
     *
     * @var float
     */
    private $participation;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Provision c p.
     *
     * @var float
     */
    private $provisionCP;

    /**
     * S base.
     *
     * @var float
     */
    private $sBase;

    /**
     * Salaire.
     *
     * @var float
     */
    private $salaire;

    /**
     * Tot ret.
     *
     * @var float
     */
    private $totRet;

    /**
     * Tr a.
     *
     * @var float
     */
    private $trA;

    /**
     * Tr b.
     *
     * @var float
     */
    private $trB;

    /**
     * Tr c.
     *
     * @var float
     */
    private $trC;

    /**
     * Tx h n.
     *
     * @var float
     */
    private $txHN;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the arbitrage.
     *
     * @return float Returns the arbitrage.
     */
    public function getArbitrage() {
        return $this->arbitrage;
    }

    /**
     * Get the brut.
     *
     * @return float Returns the brut.
     */
    public function getBrut() {
        return $this->brut;
    }

    /**
     * Get the brut a l.
     *
     * @return float Returns the brut a l.
     */
    public function getBrutAL() {
        return $this->brutAL;
    }

    /**
     * Get the brut a n l.
     *
     * @return float Returns the brut a n l.
     */
    public function getBrutANL() {
        return $this->brutANL;
    }

    /**
     * Get the charges patronales.
     *
     * @return float Returns the charges patronales.
     */
    public function getChargesPatronales() {
        return $this->chargesPatronales;
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
     * Get the euro.
     *
     * @return boolean Returns the euro.
     */
    public function getEuro() {
        return $this->euro;
    }

    /**
     * Get the heures sup.
     *
     * @return float Returns the heures sup.
     */
    public function getHeuresSup() {
        return $this->heuresSup;
    }

    /**
     * Get the impos.
     *
     * @return float Returns the impos.
     */
    public function getImpos() {
        return $this->impos;
    }

    /**
     * Get the indemnite c p.
     *
     * @return float Returns the indemnite c p.
     */
    public function getIndemniteCP() {
        return $this->indemniteCP;
    }

    /**
     * Get the indemnite precarite.
     *
     * @return float Returns the indemnite precarite.
     */
    public function getIndemnitePrecarite() {
        return $this->indemnitePrecarite;
    }

    /**
     * Get the interessement.
     *
     * @return float Returns the interessement.
     */
    public function getInteressement() {
        return $this->interessement;
    }

    /**
     * Get the mt net paye theo.
     *
     * @return float Returns the mt net paye theo.
     */
    public function getMtNetPayeTheo() {
        return $this->mtNetPayeTheo;
    }

    /**
     * Get the nb h abs.
     *
     * @return float Returns the nb h abs.
     */
    public function getNbHAbs() {
        return $this->nbHAbs;
    }

    /**
     * Get the nb h base.
     *
     * @return float Returns the nb h base.
     */
    public function getNbHBase() {
        return $this->nbHBase;
    }

    /**
     * Get the nb h n.
     *
     * @return float Returns the nb h n.
     */
    public function getNbHN() {
        return $this->nbHN;
    }

    /**
     * Get the nb h rc.
     *
     * @return float Returns the nb h rc.
     */
    public function getNbHRc() {
        return $this->nbHRc;
    }

    /**
     * Get the nb h sup1.
     *
     * @return float Returns the nb h sup1.
     */
    public function getNbHSup1() {
        return $this->nbHSup1;
    }

    /**
     * Get the nb h sup2.
     *
     * @return float Returns the nb h sup2.
     */
    public function getNbHSup2() {
        return $this->nbHSup2;
    }

    /**
     * Get the nb h sup3.
     *
     * @return float Returns the nb h sup3.
     */
    public function getNbHSup3() {
        return $this->nbHSup3;
    }

    /**
     * Get the nb h t.
     *
     * @return float Returns the nb h t.
     */
    public function getNbHT() {
        return $this->nbHT;
    }

    /**
     * Get the participation.
     *
     * @return float Returns the participation.
     */
    public function getParticipation() {
        return $this->participation;
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
     * Get the provision c p.
     *
     * @return float Returns the provision c p.
     */
    public function getProvisionCP() {
        return $this->provisionCP;
    }

    /**
     * Get the s base.
     *
     * @return float Returns the s base.
     */
    public function getSBase() {
        return $this->sBase;
    }

    /**
     * Get the salaire.
     *
     * @return float Returns the salaire.
     */
    public function getSalaire() {
        return $this->salaire;
    }

    /**
     * Get the tot ret.
     *
     * @return float Returns the tot ret.
     */
    public function getTotRet() {
        return $this->totRet;
    }

    /**
     * Get the tr a.
     *
     * @return float Returns the tr a.
     */
    public function getTrA() {
        return $this->trA;
    }

    /**
     * Get the tr b.
     *
     * @return float Returns the tr b.
     */
    public function getTrB() {
        return $this->trB;
    }

    /**
     * Get the tr c.
     *
     * @return float Returns the tr c.
     */
    public function getTrC() {
        return $this->trC;
    }

    /**
     * Get the tx h n.
     *
     * @return float Returns the tx h n.
     */
    public function getTxHN() {
        return $this->txHN;
    }

    /**
     * Set the arbitrage.
     *
     * @param float $arbitrage The arbitrage.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setArbitrage($arbitrage) {
        $this->arbitrage = $arbitrage;
        return $this;
    }

    /**
     * Set the brut.
     *
     * @param float $brut The brut.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setBrut($brut) {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the brut a l.
     *
     * @param float $brutAL The brut a l.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setBrutAL($brutAL) {
        $this->brutAL = $brutAL;
        return $this;
    }

    /**
     * Set the brut a n l.
     *
     * @param float $brutANL The brut a n l.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setBrutANL($brutANL) {
        $this->brutANL = $brutANL;
        return $this;
    }

    /**
     * Set the charges patronales.
     *
     * @param float $chargesPatronales The charges patronales.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setChargesPatronales($chargesPatronales) {
        $this->chargesPatronales = $chargesPatronales;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the euro.
     *
     * @param boolean $euro The euro.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setEuro($euro) {
        $this->euro = $euro;
        return $this;
    }

    /**
     * Set the heures sup.
     *
     * @param float $heuresSup The heures sup.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setHeuresSup($heuresSup) {
        $this->heuresSup = $heuresSup;
        return $this;
    }

    /**
     * Set the impos.
     *
     * @param float $impos The impos.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setImpos($impos) {
        $this->impos = $impos;
        return $this;
    }

    /**
     * Set the indemnite c p.
     *
     * @param float $indemniteCP The indemnite c p.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setIndemniteCP($indemniteCP) {
        $this->indemniteCP = $indemniteCP;
        return $this;
    }

    /**
     * Set the indemnite precarite.
     *
     * @param float $indemnitePrecarite The indemnite precarite.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setIndemnitePrecarite($indemnitePrecarite) {
        $this->indemnitePrecarite = $indemnitePrecarite;
        return $this;
    }

    /**
     * Set the interessement.
     *
     * @param float $interessement The interessement.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setInteressement($interessement) {
        $this->interessement = $interessement;
        return $this;
    }

    /**
     * Set the mt net paye theo.
     *
     * @param float $mtNetPayeTheo The mt net paye theo.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setMtNetPayeTheo($mtNetPayeTheo) {
        $this->mtNetPayeTheo = $mtNetPayeTheo;
        return $this;
    }

    /**
     * Set the nb h abs.
     *
     * @param float $nbHAbs The nb h abs.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setNbHAbs($nbHAbs) {
        $this->nbHAbs = $nbHAbs;
        return $this;
    }

    /**
     * Set the nb h base.
     *
     * @param float $nbHBase The nb h base.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setNbHBase($nbHBase) {
        $this->nbHBase = $nbHBase;
        return $this;
    }

    /**
     * Set the nb h n.
     *
     * @param float $nbHN The nb h n.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setNbHN($nbHN) {
        $this->nbHN = $nbHN;
        return $this;
    }

    /**
     * Set the nb h rc.
     *
     * @param float $nbHRc The nb h rc.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setNbHRc($nbHRc) {
        $this->nbHRc = $nbHRc;
        return $this;
    }

    /**
     * Set the nb h sup1.
     *
     * @param float $nbHSup1 The nb h sup1.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setNbHSup1($nbHSup1) {
        $this->nbHSup1 = $nbHSup1;
        return $this;
    }

    /**
     * Set the nb h sup2.
     *
     * @param float $nbHSup2 The nb h sup2.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setNbHSup2($nbHSup2) {
        $this->nbHSup2 = $nbHSup2;
        return $this;
    }

    /**
     * Set the nb h sup3.
     *
     * @param float $nbHSup3 The nb h sup3.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setNbHSup3($nbHSup3) {
        $this->nbHSup3 = $nbHSup3;
        return $this;
    }

    /**
     * Set the nb h t.
     *
     * @param float $nbHT The nb h t.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setNbHT($nbHT) {
        $this->nbHT = $nbHT;
        return $this;
    }

    /**
     * Set the participation.
     *
     * @param float $participation The participation.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setParticipation($participation) {
        $this->participation = $participation;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the provision c p.
     *
     * @param float $provisionCP The provision c p.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setProvisionCP($provisionCP) {
        $this->provisionCP = $provisionCP;
        return $this;
    }

    /**
     * Set the s base.
     *
     * @param float $sBase The s base.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setSBase($sBase) {
        $this->sBase = $sBase;
        return $this;
    }

    /**
     * Set the salaire.
     *
     * @param float $salaire The salaire.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setSalaire($salaire) {
        $this->salaire = $salaire;
        return $this;
    }

    /**
     * Set the tot ret.
     *
     * @param float $totRet The tot ret.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setTotRet($totRet) {
        $this->totRet = $totRet;
        return $this;
    }

    /**
     * Set the tr a.
     *
     * @param float $trA The tr a.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setTrA($trA) {
        $this->trA = $trA;
        return $this;
    }

    /**
     * Set the tr b.
     *
     * @param float $trB The tr b.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setTrB($trB) {
        $this->trB = $trB;
        return $this;
    }

    /**
     * Set the tr c.
     *
     * @param float $trC The tr c.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setTrC($trC) {
        $this->trC = $trC;
        return $this;
    }

    /**
     * Set the tx h n.
     *
     * @param float $txHN The tx h n.
     * @return ChargesPaie Returns this charges paie.
     */
    public function setTxHN($txHN) {
        $this->txHN = $txHN;
        return $this;
    }

}
