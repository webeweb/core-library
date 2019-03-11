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
 * Tranches s i bul model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesSIBul {

    /**
     * Brutal sans s i.
     *
     * @var float
     */
    private $brutalSansSI;

    /**
     * Cum brutal sans s i.
     *
     * @var float
     */
    private $cumBrutalSansSI;

    /**
     * Cum tot s i.
     *
     * @var float
     */
    private $cumTotSI;

    /**
     * Cum tranche2 s i.
     *
     * @var float
     */
    private $cumTranche2SI;

    /**
     * Cum tranche2 sans s i.
     *
     * @var float
     */
    private $cumTranche2SansSI;

    /**
     * Cum tranche a s i.
     *
     * @var float
     */
    private $cumTrancheASI;

    /**
     * Cum tranche a sans s i.
     *
     * @var float
     */
    private $cumTrancheASansSI;

    /**
     * Cum tranche b s i.
     *
     * @var float
     */
    private $cumTrancheBSI;

    /**
     * Cum tranche b sans s i.
     *
     * @var float
     */
    private $cumTrancheBSansSI;

    /**
     * Cum tranche c s i.
     *
     * @var float
     */
    private $cumTrancheCSI;

    /**
     * Cum tranche c sans s i.
     *
     * @var float
     */
    private $cumTrancheCSansSI;

    /**
     * Cum tranche d1 sans s i.
     *
     * @var float
     */
    private $cumTrancheD1SansSI;

    /**
     * Cum tranche d sans s i.
     *
     * @var float
     */
    private $cumTrancheDSansSI;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

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
     * Tot s i.
     *
     * @var float
     */
    private $totSI;

    /**
     * Tranche2 s i.
     *
     * @var float
     */
    private $tranche2SI;

    /**
     * Tranche2 sans s i.
     *
     * @var float
     */
    private $tranche2SansSI;

    /**
     * Tranche a s i.
     *
     * @var float
     */
    private $trancheASI;

    /**
     * Tranche a sans s i.
     *
     * @var float
     */
    private $trancheASansSI;

    /**
     * Tranche b s i.
     *
     * @var float
     */
    private $trancheBSI;

    /**
     * Tranche b sans s i.
     *
     * @var float
     */
    private $trancheBSansSI;

    /**
     * Tranche c s i.
     *
     * @var float
     */
    private $trancheCSI;

    /**
     * Tranche c sans s i.
     *
     * @var float
     */
    private $trancheCSansSI;

    /**
     * Tranche d1 sans s i.
     *
     * @var float
     */
    private $trancheD1SansSI;

    /**
     * Tranche d sans s i.
     *
     * @var float
     */
    private $trancheDSansSI;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the brutal sans s i.
     *
     * @return float Returns the brutal sans s i.
     */
    public function getBrutalSansSI() {
        return $this->brutalSansSI;
    }

    /**
     * Get the cum brutal sans s i.
     *
     * @return float Returns the cum brutal sans s i.
     */
    public function getCumBrutalSansSI() {
        return $this->cumBrutalSansSI;
    }

    /**
     * Get the cum tot s i.
     *
     * @return float Returns the cum tot s i.
     */
    public function getCumTotSI() {
        return $this->cumTotSI;
    }

    /**
     * Get the cum tranche2 s i.
     *
     * @return float Returns the cum tranche2 s i.
     */
    public function getCumTranche2SI() {
        return $this->cumTranche2SI;
    }

    /**
     * Get the cum tranche2 sans s i.
     *
     * @return float Returns the cum tranche2 sans s i.
     */
    public function getCumTranche2SansSI() {
        return $this->cumTranche2SansSI;
    }

    /**
     * Get the cum tranche a s i.
     *
     * @return float Returns the cum tranche a s i.
     */
    public function getCumTrancheASI() {
        return $this->cumTrancheASI;
    }

    /**
     * Get the cum tranche a sans s i.
     *
     * @return float Returns the cum tranche a sans s i.
     */
    public function getCumTrancheASansSI() {
        return $this->cumTrancheASansSI;
    }

    /**
     * Get the cum tranche b s i.
     *
     * @return float Returns the cum tranche b s i.
     */
    public function getCumTrancheBSI() {
        return $this->cumTrancheBSI;
    }

    /**
     * Get the cum tranche b sans s i.
     *
     * @return float Returns the cum tranche b sans s i.
     */
    public function getCumTrancheBSansSI() {
        return $this->cumTrancheBSansSI;
    }

    /**
     * Get the cum tranche c s i.
     *
     * @return float Returns the cum tranche c s i.
     */
    public function getCumTrancheCSI() {
        return $this->cumTrancheCSI;
    }

    /**
     * Get the cum tranche c sans s i.
     *
     * @return float Returns the cum tranche c sans s i.
     */
    public function getCumTrancheCSansSI() {
        return $this->cumTrancheCSansSI;
    }

    /**
     * Get the cum tranche d1 sans s i.
     *
     * @return float Returns the cum tranche d1 sans s i.
     */
    public function getCumTrancheD1SansSI() {
        return $this->cumTrancheD1SansSI;
    }

    /**
     * Get the cum tranche d sans s i.
     *
     * @return float Returns the cum tranche d sans s i.
     */
    public function getCumTrancheDSansSI() {
        return $this->cumTrancheDSansSI;
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
     * Get the tot s i.
     *
     * @return float Returns the tot s i.
     */
    public function getTotSI() {
        return $this->totSI;
    }

    /**
     * Get the tranche2 s i.
     *
     * @return float Returns the tranche2 s i.
     */
    public function getTranche2SI() {
        return $this->tranche2SI;
    }

    /**
     * Get the tranche2 sans s i.
     *
     * @return float Returns the tranche2 sans s i.
     */
    public function getTranche2SansSI() {
        return $this->tranche2SansSI;
    }

    /**
     * Get the tranche a s i.
     *
     * @return float Returns the tranche a s i.
     */
    public function getTrancheASI() {
        return $this->trancheASI;
    }

    /**
     * Get the tranche a sans s i.
     *
     * @return float Returns the tranche a sans s i.
     */
    public function getTrancheASansSI() {
        return $this->trancheASansSI;
    }

    /**
     * Get the tranche b s i.
     *
     * @return float Returns the tranche b s i.
     */
    public function getTrancheBSI() {
        return $this->trancheBSI;
    }

    /**
     * Get the tranche b sans s i.
     *
     * @return float Returns the tranche b sans s i.
     */
    public function getTrancheBSansSI() {
        return $this->trancheBSansSI;
    }

    /**
     * Get the tranche c s i.
     *
     * @return float Returns the tranche c s i.
     */
    public function getTrancheCSI() {
        return $this->trancheCSI;
    }

    /**
     * Get the tranche c sans s i.
     *
     * @return float Returns the tranche c sans s i.
     */
    public function getTrancheCSansSI() {
        return $this->trancheCSansSI;
    }

    /**
     * Get the tranche d1 sans s i.
     *
     * @return float Returns the tranche d1 sans s i.
     */
    public function getTrancheD1SansSI() {
        return $this->trancheD1SansSI;
    }

    /**
     * Get the tranche d sans s i.
     *
     * @return float Returns the tranche d sans s i.
     */
    public function getTrancheDSansSI() {
        return $this->trancheDSansSI;
    }

    /**
     * Set the brutal sans s i.
     *
     * @param float $brutalSansSI The brutal sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setBrutalSansSI($brutalSansSI) {
        $this->brutalSansSI = $brutalSansSI;
        return $this;
    }

    /**
     * Set the cum brutal sans s i.
     *
     * @param float $cumBrutalSansSI The cum brutal sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumBrutalSansSI($cumBrutalSansSI) {
        $this->cumBrutalSansSI = $cumBrutalSansSI;
        return $this;
    }

    /**
     * Set the cum tot s i.
     *
     * @param float $cumTotSI The cum tot s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTotSI($cumTotSI) {
        $this->cumTotSI = $cumTotSI;
        return $this;
    }

    /**
     * Set the cum tranche2 s i.
     *
     * @param float $cumTranche2SI The cum tranche2 s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTranche2SI($cumTranche2SI) {
        $this->cumTranche2SI = $cumTranche2SI;
        return $this;
    }

    /**
     * Set the cum tranche2 sans s i.
     *
     * @param float $cumTranche2SansSI The cum tranche2 sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTranche2SansSI($cumTranche2SansSI) {
        $this->cumTranche2SansSI = $cumTranche2SansSI;
        return $this;
    }

    /**
     * Set the cum tranche a s i.
     *
     * @param float $cumTrancheASI The cum tranche a s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTrancheASI($cumTrancheASI) {
        $this->cumTrancheASI = $cumTrancheASI;
        return $this;
    }

    /**
     * Set the cum tranche a sans s i.
     *
     * @param float $cumTrancheASansSI The cum tranche a sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTrancheASansSI($cumTrancheASansSI) {
        $this->cumTrancheASansSI = $cumTrancheASansSI;
        return $this;
    }

    /**
     * Set the cum tranche b s i.
     *
     * @param float $cumTrancheBSI The cum tranche b s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTrancheBSI($cumTrancheBSI) {
        $this->cumTrancheBSI = $cumTrancheBSI;
        return $this;
    }

    /**
     * Set the cum tranche b sans s i.
     *
     * @param float $cumTrancheBSansSI The cum tranche b sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTrancheBSansSI($cumTrancheBSansSI) {
        $this->cumTrancheBSansSI = $cumTrancheBSansSI;
        return $this;
    }

    /**
     * Set the cum tranche c s i.
     *
     * @param float $cumTrancheCSI The cum tranche c s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTrancheCSI($cumTrancheCSI) {
        $this->cumTrancheCSI = $cumTrancheCSI;
        return $this;
    }

    /**
     * Set the cum tranche c sans s i.
     *
     * @param float $cumTrancheCSansSI The cum tranche c sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTrancheCSansSI($cumTrancheCSansSI) {
        $this->cumTrancheCSansSI = $cumTrancheCSansSI;
        return $this;
    }

    /**
     * Set the cum tranche d1 sans s i.
     *
     * @param float $cumTrancheD1SansSI The cum tranche d1 sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTrancheD1SansSI($cumTrancheD1SansSI) {
        $this->cumTrancheD1SansSI = $cumTrancheD1SansSI;
        return $this;
    }

    /**
     * Set the cum tranche d sans s i.
     *
     * @param float $cumTrancheDSansSI The cum tranche d sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setCumTrancheDSansSI($cumTrancheDSansSI) {
        $this->cumTrancheDSansSI = $cumTrancheDSansSI;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tot s i.
     *
     * @param float $totSI The tot s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTotSI($totSI) {
        $this->totSI = $totSI;
        return $this;
    }

    /**
     * Set the tranche2 s i.
     *
     * @param float $tranche2SI The tranche2 s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTranche2SI($tranche2SI) {
        $this->tranche2SI = $tranche2SI;
        return $this;
    }

    /**
     * Set the tranche2 sans s i.
     *
     * @param float $tranche2SansSI The tranche2 sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTranche2SansSI($tranche2SansSI) {
        $this->tranche2SansSI = $tranche2SansSI;
        return $this;
    }

    /**
     * Set the tranche a s i.
     *
     * @param float $trancheASI The tranche a s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTrancheASI($trancheASI) {
        $this->trancheASI = $trancheASI;
        return $this;
    }

    /**
     * Set the tranche a sans s i.
     *
     * @param float $trancheASansSI The tranche a sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTrancheASansSI($trancheASansSI) {
        $this->trancheASansSI = $trancheASansSI;
        return $this;
    }

    /**
     * Set the tranche b s i.
     *
     * @param float $trancheBSI The tranche b s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTrancheBSI($trancheBSI) {
        $this->trancheBSI = $trancheBSI;
        return $this;
    }

    /**
     * Set the tranche b sans s i.
     *
     * @param float $trancheBSansSI The tranche b sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTrancheBSansSI($trancheBSansSI) {
        $this->trancheBSansSI = $trancheBSansSI;
        return $this;
    }

    /**
     * Set the tranche c s i.
     *
     * @param float $trancheCSI The tranche c s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTrancheCSI($trancheCSI) {
        $this->trancheCSI = $trancheCSI;
        return $this;
    }

    /**
     * Set the tranche c sans s i.
     *
     * @param float $trancheCSansSI The tranche c sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTrancheCSansSI($trancheCSansSI) {
        $this->trancheCSansSI = $trancheCSansSI;
        return $this;
    }

    /**
     * Set the tranche d1 sans s i.
     *
     * @param float $trancheD1SansSI The tranche d1 sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTrancheD1SansSI($trancheD1SansSI) {
        $this->trancheD1SansSI = $trancheD1SansSI;
        return $this;
    }

    /**
     * Set the tranche d sans s i.
     *
     * @param float $trancheDSansSI The tranche d sans s i.
     * @return TranchesSIBul Returns this tranches s i bul.
     */
    public function setTrancheDSansSI($trancheDSansSI) {
        $this->trancheDSansSI = $trancheDSansSI;
        return $this;
    }
}
