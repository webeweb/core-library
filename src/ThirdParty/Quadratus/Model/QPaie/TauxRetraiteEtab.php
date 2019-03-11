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
 * Taux retraite etab model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraiteEtab {

    /**
     * A partir de.
     *
     * @var DateTime
     */
    private $aPartirDe;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Taux ret tr2 p p.
     *
     * @var float
     */
    private $tauxRetTr2PP;

    /**
     * Taux ret tr2 p s.
     *
     * @var float
     */
    private $tauxRetTr2PS;

    /**
     * Taux ret tr a p p.
     *
     * @var float
     */
    private $tauxRetTrAPP;

    /**
     * Taux ret tr a p s.
     *
     * @var float
     */
    private $tauxRetTrAPS;

    /**
     * Taux ret tr b p p.
     *
     * @var float
     */
    private $tauxRetTrBPP;

    /**
     * Taux ret tr b p s.
     *
     * @var float
     */
    private $tauxRetTrBPS;

    /**
     * Taux ret tr c p p.
     *
     * @var float
     */
    private $tauxRetTrCPP;

    /**
     * Taux ret tr c p s.
     *
     * @var float
     */
    private $tauxRetTrCPS;

    /**
     * Taux ret tr d p p.
     *
     * @var float
     */
    private $tauxRetTrDPP;

    /**
     * Taux ret tr d p s.
     *
     * @var float
     */
    private $tauxRetTrDPS;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a partir de.
     *
     * @return DateTime Returns the a partir de.
     */
    public function getAPartirDe() {
        return $this->aPartirDe;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the taux ret tr2 p p.
     *
     * @return float Returns the taux ret tr2 p p.
     */
    public function getTauxRetTr2PP() {
        return $this->tauxRetTr2PP;
    }

    /**
     * Get the taux ret tr2 p s.
     *
     * @return float Returns the taux ret tr2 p s.
     */
    public function getTauxRetTr2PS() {
        return $this->tauxRetTr2PS;
    }

    /**
     * Get the taux ret tr a p p.
     *
     * @return float Returns the taux ret tr a p p.
     */
    public function getTauxRetTrAPP() {
        return $this->tauxRetTrAPP;
    }

    /**
     * Get the taux ret tr a p s.
     *
     * @return float Returns the taux ret tr a p s.
     */
    public function getTauxRetTrAPS() {
        return $this->tauxRetTrAPS;
    }

    /**
     * Get the taux ret tr b p p.
     *
     * @return float Returns the taux ret tr b p p.
     */
    public function getTauxRetTrBPP() {
        return $this->tauxRetTrBPP;
    }

    /**
     * Get the taux ret tr b p s.
     *
     * @return float Returns the taux ret tr b p s.
     */
    public function getTauxRetTrBPS() {
        return $this->tauxRetTrBPS;
    }

    /**
     * Get the taux ret tr c p p.
     *
     * @return float Returns the taux ret tr c p p.
     */
    public function getTauxRetTrCPP() {
        return $this->tauxRetTrCPP;
    }

    /**
     * Get the taux ret tr c p s.
     *
     * @return float Returns the taux ret tr c p s.
     */
    public function getTauxRetTrCPS() {
        return $this->tauxRetTrCPS;
    }

    /**
     * Get the taux ret tr d p p.
     *
     * @return float Returns the taux ret tr d p p.
     */
    public function getTauxRetTrDPP() {
        return $this->tauxRetTrDPP;
    }

    /**
     * Get the taux ret tr d p s.
     *
     * @return float Returns the taux ret tr d p s.
     */
    public function getTauxRetTrDPS() {
        return $this->tauxRetTrDPS;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime $aPartirDe The a partir de.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setAPartirDe(DateTime $aPartirDe = null) {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the taux ret tr2 p p.
     *
     * @param float $tauxRetTr2PP The taux ret tr2 p p.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTr2PP($tauxRetTr2PP) {
        $this->tauxRetTr2PP = $tauxRetTr2PP;
        return $this;
    }

    /**
     * Set the taux ret tr2 p s.
     *
     * @param float $tauxRetTr2PS The taux ret tr2 p s.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTr2PS($tauxRetTr2PS) {
        $this->tauxRetTr2PS = $tauxRetTr2PS;
        return $this;
    }

    /**
     * Set the taux ret tr a p p.
     *
     * @param float $tauxRetTrAPP The taux ret tr a p p.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTrAPP($tauxRetTrAPP) {
        $this->tauxRetTrAPP = $tauxRetTrAPP;
        return $this;
    }

    /**
     * Set the taux ret tr a p s.
     *
     * @param float $tauxRetTrAPS The taux ret tr a p s.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTrAPS($tauxRetTrAPS) {
        $this->tauxRetTrAPS = $tauxRetTrAPS;
        return $this;
    }

    /**
     * Set the taux ret tr b p p.
     *
     * @param float $tauxRetTrBPP The taux ret tr b p p.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTrBPP($tauxRetTrBPP) {
        $this->tauxRetTrBPP = $tauxRetTrBPP;
        return $this;
    }

    /**
     * Set the taux ret tr b p s.
     *
     * @param float $tauxRetTrBPS The taux ret tr b p s.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTrBPS($tauxRetTrBPS) {
        $this->tauxRetTrBPS = $tauxRetTrBPS;
        return $this;
    }

    /**
     * Set the taux ret tr c p p.
     *
     * @param float $tauxRetTrCPP The taux ret tr c p p.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTrCPP($tauxRetTrCPP) {
        $this->tauxRetTrCPP = $tauxRetTrCPP;
        return $this;
    }

    /**
     * Set the taux ret tr c p s.
     *
     * @param float $tauxRetTrCPS The taux ret tr c p s.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTrCPS($tauxRetTrCPS) {
        $this->tauxRetTrCPS = $tauxRetTrCPS;
        return $this;
    }

    /**
     * Set the taux ret tr d p p.
     *
     * @param float $tauxRetTrDPP The taux ret tr d p p.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTrDPP($tauxRetTrDPP) {
        $this->tauxRetTrDPP = $tauxRetTrDPP;
        return $this;
    }

    /**
     * Set the taux ret tr d p s.
     *
     * @param float $tauxRetTrDPS The taux ret tr d p s.
     * @return TauxRetraiteEtab Returns this taux retraite etab.
     */
    public function setTauxRetTrDPS($tauxRetTrDPS) {
        $this->tauxRetTrDPS = $tauxRetTrDPS;
        return $this;
    }
}
