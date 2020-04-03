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
 * Tranches si bul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesSiBul {

    /**
     * Brut al sans si.
     *
     * @var float
     */
    private $brutAlSansSi;

    /**
     * Cum brut al sans si.
     *
     * @var float
     */
    private $cumBrutAlSansSi;

    /**
     * Cum tot si.
     *
     * @var float
     */
    private $cumTotSi;

    /**
     * Cum tranche2 sans si.
     *
     * @var float
     */
    private $cumTranche2SansSi;

    /**
     * Cum tranche2 si.
     *
     * @var float
     */
    private $cumTranche2Si;

    /**
     * Cum tranche a sans si.
     *
     * @var float
     */
    private $cumTrancheASansSi;

    /**
     * Cum tranche asi.
     *
     * @var float
     */
    private $cumTrancheAsi;

    /**
     * Cum tranche b sans si.
     *
     * @var float
     */
    private $cumTrancheBSansSi;

    /**
     * Cum tranche bsi.
     *
     * @var float
     */
    private $cumTrancheBsi;

    /**
     * Cum tranche c sans si.
     *
     * @var float
     */
    private $cumTrancheCSansSi;

    /**
     * Cum tranche csi.
     *
     * @var float
     */
    private $cumTrancheCsi;

    /**
     * Cum tranche d1 sans si.
     *
     * @var float
     */
    private $cumTrancheD1SansSi;

    /**
     * Cum tranche d sans si.
     *
     * @var float
     */
    private $cumTrancheDSansSi;

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
     * @var DateTime|null
     */
    private $periode;

    /**
     * Tot si.
     *
     * @var float
     */
    private $totSi;

    /**
     * Tranche2 sans si.
     *
     * @var float
     */
    private $tranche2SansSi;

    /**
     * Tranche2 si.
     *
     * @var float
     */
    private $tranche2Si;

    /**
     * Tranche a sans si.
     *
     * @var float
     */
    private $trancheASansSi;

    /**
     * Tranche asi.
     *
     * @var float
     */
    private $trancheAsi;

    /**
     * Tranche b sans si.
     *
     * @var float
     */
    private $trancheBSansSi;

    /**
     * Tranche bsi.
     *
     * @var float
     */
    private $trancheBsi;

    /**
     * Tranche c sans si.
     *
     * @var float
     */
    private $trancheCSansSi;

    /**
     * Tranche csi.
     *
     * @var float
     */
    private $trancheCsi;

    /**
     * Tranche d1 sans si.
     *
     * @var float
     */
    private $trancheD1SansSi;

    /**
     * Tranche d sans si.
     *
     * @var float
     */
    private $trancheDSansSi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the brut al sans si.
     *
     * @return float Returns the brut al sans si.
     */
    public function getBrutAlSansSi() {
        return $this->brutAlSansSi;
    }

    /**
     * Get the cum brut al sans si.
     *
     * @return float Returns the cum brut al sans si.
     */
    public function getCumBrutAlSansSi() {
        return $this->cumBrutAlSansSi;
    }

    /**
     * Get the cum tot si.
     *
     * @return float Returns the cum tot si.
     */
    public function getCumTotSi() {
        return $this->cumTotSi;
    }

    /**
     * Get the cum tranche2 sans si.
     *
     * @return float Returns the cum tranche2 sans si.
     */
    public function getCumTranche2SansSi() {
        return $this->cumTranche2SansSi;
    }

    /**
     * Get the cum tranche2 si.
     *
     * @return float Returns the cum tranche2 si.
     */
    public function getCumTranche2Si() {
        return $this->cumTranche2Si;
    }

    /**
     * Get the cum tranche a sans si.
     *
     * @return float Returns the cum tranche a sans si.
     */
    public function getCumTrancheASansSi() {
        return $this->cumTrancheASansSi;
    }

    /**
     * Get the cum tranche asi.
     *
     * @return float Returns the cum tranche asi.
     */
    public function getCumTrancheAsi() {
        return $this->cumTrancheAsi;
    }

    /**
     * Get the cum tranche b sans si.
     *
     * @return float Returns the cum tranche b sans si.
     */
    public function getCumTrancheBSansSi() {
        return $this->cumTrancheBSansSi;
    }

    /**
     * Get the cum tranche bsi.
     *
     * @return float Returns the cum tranche bsi.
     */
    public function getCumTrancheBsi() {
        return $this->cumTrancheBsi;
    }

    /**
     * Get the cum tranche c sans si.
     *
     * @return float Returns the cum tranche c sans si.
     */
    public function getCumTrancheCSansSi() {
        return $this->cumTrancheCSansSi;
    }

    /**
     * Get the cum tranche csi.
     *
     * @return float Returns the cum tranche csi.
     */
    public function getCumTrancheCsi() {
        return $this->cumTrancheCsi;
    }

    /**
     * Get the cum tranche d1 sans si.
     *
     * @return float Returns the cum tranche d1 sans si.
     */
    public function getCumTrancheD1SansSi() {
        return $this->cumTrancheD1SansSi;
    }

    /**
     * Get the cum tranche d sans si.
     *
     * @return float Returns the cum tranche d sans si.
     */
    public function getCumTrancheDSansSi() {
        return $this->cumTrancheDSansSi;
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
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the tot si.
     *
     * @return float Returns the tot si.
     */
    public function getTotSi() {
        return $this->totSi;
    }

    /**
     * Get the tranche2 sans si.
     *
     * @return float Returns the tranche2 sans si.
     */
    public function getTranche2SansSi() {
        return $this->tranche2SansSi;
    }

    /**
     * Get the tranche2 si.
     *
     * @return float Returns the tranche2 si.
     */
    public function getTranche2Si() {
        return $this->tranche2Si;
    }

    /**
     * Get the tranche a sans si.
     *
     * @return float Returns the tranche a sans si.
     */
    public function getTrancheASansSi() {
        return $this->trancheASansSi;
    }

    /**
     * Get the tranche asi.
     *
     * @return float Returns the tranche asi.
     */
    public function getTrancheAsi() {
        return $this->trancheAsi;
    }

    /**
     * Get the tranche b sans si.
     *
     * @return float Returns the tranche b sans si.
     */
    public function getTrancheBSansSi() {
        return $this->trancheBSansSi;
    }

    /**
     * Get the tranche bsi.
     *
     * @return float Returns the tranche bsi.
     */
    public function getTrancheBsi() {
        return $this->trancheBsi;
    }

    /**
     * Get the tranche c sans si.
     *
     * @return float Returns the tranche c sans si.
     */
    public function getTrancheCSansSi() {
        return $this->trancheCSansSi;
    }

    /**
     * Get the tranche csi.
     *
     * @return float Returns the tranche csi.
     */
    public function getTrancheCsi() {
        return $this->trancheCsi;
    }

    /**
     * Get the tranche d1 sans si.
     *
     * @return float Returns the tranche d1 sans si.
     */
    public function getTrancheD1SansSi() {
        return $this->trancheD1SansSi;
    }

    /**
     * Get the tranche d sans si.
     *
     * @return float Returns the tranche d sans si.
     */
    public function getTrancheDSansSi() {
        return $this->trancheDSansSi;
    }

    /**
     * Set the brut al sans si.
     *
     * @param float $brutAlSansSi The brut al sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setBrutAlSansSi($brutAlSansSi) {
        $this->brutAlSansSi = $brutAlSansSi;
        return $this;
    }

    /**
     * Set the cum brut al sans si.
     *
     * @param float $cumBrutAlSansSi The cum brut al sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumBrutAlSansSi($cumBrutAlSansSi) {
        $this->cumBrutAlSansSi = $cumBrutAlSansSi;
        return $this;
    }

    /**
     * Set the cum tot si.
     *
     * @param float $cumTotSi The cum tot si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTotSi($cumTotSi) {
        $this->cumTotSi = $cumTotSi;
        return $this;
    }

    /**
     * Set the cum tranche2 sans si.
     *
     * @param float $cumTranche2SansSi The cum tranche2 sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTranche2SansSi($cumTranche2SansSi) {
        $this->cumTranche2SansSi = $cumTranche2SansSi;
        return $this;
    }

    /**
     * Set the cum tranche2 si.
     *
     * @param float $cumTranche2Si The cum tranche2 si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTranche2Si($cumTranche2Si) {
        $this->cumTranche2Si = $cumTranche2Si;
        return $this;
    }

    /**
     * Set the cum tranche a sans si.
     *
     * @param float $cumTrancheASansSi The cum tranche a sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheASansSi($cumTrancheASansSi) {
        $this->cumTrancheASansSi = $cumTrancheASansSi;
        return $this;
    }

    /**
     * Set the cum tranche asi.
     *
     * @param float $cumTrancheAsi The cum tranche asi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheAsi($cumTrancheAsi) {
        $this->cumTrancheAsi = $cumTrancheAsi;
        return $this;
    }

    /**
     * Set the cum tranche b sans si.
     *
     * @param float $cumTrancheBSansSi The cum tranche b sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheBSansSi($cumTrancheBSansSi) {
        $this->cumTrancheBSansSi = $cumTrancheBSansSi;
        return $this;
    }

    /**
     * Set the cum tranche bsi.
     *
     * @param float $cumTrancheBsi The cum tranche bsi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheBsi($cumTrancheBsi) {
        $this->cumTrancheBsi = $cumTrancheBsi;
        return $this;
    }

    /**
     * Set the cum tranche c sans si.
     *
     * @param float $cumTrancheCSansSi The cum tranche c sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheCSansSi($cumTrancheCSansSi) {
        $this->cumTrancheCSansSi = $cumTrancheCSansSi;
        return $this;
    }

    /**
     * Set the cum tranche csi.
     *
     * @param float $cumTrancheCsi The cum tranche csi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheCsi($cumTrancheCsi) {
        $this->cumTrancheCsi = $cumTrancheCsi;
        return $this;
    }

    /**
     * Set the cum tranche d1 sans si.
     *
     * @param float $cumTrancheD1SansSi The cum tranche d1 sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheD1SansSi($cumTrancheD1SansSi) {
        $this->cumTrancheD1SansSi = $cumTrancheD1SansSi;
        return $this;
    }

    /**
     * Set the cum tranche d sans si.
     *
     * @param float $cumTrancheDSansSi The cum tranche d sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setCumTrancheDSansSi($cumTrancheDSansSi) {
        $this->cumTrancheDSansSi = $cumTrancheDSansSi;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tot si.
     *
     * @param float $totSi The tot si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTotSi($totSi) {
        $this->totSi = $totSi;
        return $this;
    }

    /**
     * Set the tranche2 sans si.
     *
     * @param float $tranche2SansSi The tranche2 sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTranche2SansSi($tranche2SansSi) {
        $this->tranche2SansSi = $tranche2SansSi;
        return $this;
    }

    /**
     * Set the tranche2 si.
     *
     * @param float $tranche2Si The tranche2 si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTranche2Si($tranche2Si) {
        $this->tranche2Si = $tranche2Si;
        return $this;
    }

    /**
     * Set the tranche a sans si.
     *
     * @param float $trancheASansSi The tranche a sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheASansSi($trancheASansSi) {
        $this->trancheASansSi = $trancheASansSi;
        return $this;
    }

    /**
     * Set the tranche asi.
     *
     * @param float $trancheAsi The tranche asi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheAsi($trancheAsi) {
        $this->trancheAsi = $trancheAsi;
        return $this;
    }

    /**
     * Set the tranche b sans si.
     *
     * @param float $trancheBSansSi The tranche b sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheBSansSi($trancheBSansSi) {
        $this->trancheBSansSi = $trancheBSansSi;
        return $this;
    }

    /**
     * Set the tranche bsi.
     *
     * @param float $trancheBsi The tranche bsi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheBsi($trancheBsi) {
        $this->trancheBsi = $trancheBsi;
        return $this;
    }

    /**
     * Set the tranche c sans si.
     *
     * @param float $trancheCSansSi The tranche c sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheCSansSi($trancheCSansSi) {
        $this->trancheCSansSi = $trancheCSansSi;
        return $this;
    }

    /**
     * Set the tranche csi.
     *
     * @param float $trancheCsi The tranche csi.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheCsi($trancheCsi) {
        $this->trancheCsi = $trancheCsi;
        return $this;
    }

    /**
     * Set the tranche d1 sans si.
     *
     * @param float $trancheD1SansSi The tranche d1 sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheD1SansSi($trancheD1SansSi) {
        $this->trancheD1SansSi = $trancheD1SansSi;
        return $this;
    }

    /**
     * Set the tranche d sans si.
     *
     * @param float $trancheDSansSi The tranche d sans si.
     * @return TranchesSiBul Returns this Tranches si bul.
     */
    public function setTrancheDSansSi($trancheDSansSi) {
        $this->trancheDSansSi = $trancheDSansSi;
        return $this;
    }
}
