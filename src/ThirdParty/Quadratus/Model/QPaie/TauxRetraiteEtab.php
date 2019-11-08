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
 * Taux retraite etab.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraiteEtab {

    /**
     * A partir de.
     *
     * @var DateTime|null
     */
    private $aPartirDe;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Taux ret tr2 pp.
     *
     * @var float
     */
    private $tauxRetTr2Pp;

    /**
     * Taux ret tr2 ps.
     *
     * @var float
     */
    private $tauxRetTr2Ps;

    /**
     * Taux ret tr app.
     *
     * @var float
     */
    private $tauxRetTrApp;

    /**
     * Taux ret tr aps.
     *
     * @var float
     */
    private $tauxRetTrAps;

    /**
     * Taux ret tr bpp.
     *
     * @var float
     */
    private $tauxRetTrBpp;

    /**
     * Taux ret tr bps.
     *
     * @var float
     */
    private $tauxRetTrBps;

    /**
     * Taux ret tr cpp.
     *
     * @var float
     */
    private $tauxRetTrCpp;

    /**
     * Taux ret tr cps.
     *
     * @var float
     */
    private $tauxRetTrCps;

    /**
     * Taux ret tr dpp.
     *
     * @var float
     */
    private $tauxRetTrDpp;

    /**
     * Taux ret tr dps.
     *
     * @var float
     */
    private $tauxRetTrDps;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a partir de.
     *
     * @return DateTime|null Returns the a partir de.
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
     * Get the taux ret tr2 pp.
     *
     * @return float Returns the taux ret tr2 pp.
     */
    public function getTauxRetTr2Pp() {
        return $this->tauxRetTr2Pp;
    }

    /**
     * Get the taux ret tr2 ps.
     *
     * @return float Returns the taux ret tr2 ps.
     */
    public function getTauxRetTr2Ps() {
        return $this->tauxRetTr2Ps;
    }

    /**
     * Get the taux ret tr app.
     *
     * @return float Returns the taux ret tr app.
     */
    public function getTauxRetTrApp() {
        return $this->tauxRetTrApp;
    }

    /**
     * Get the taux ret tr aps.
     *
     * @return float Returns the taux ret tr aps.
     */
    public function getTauxRetTrAps() {
        return $this->tauxRetTrAps;
    }

    /**
     * Get the taux ret tr bpp.
     *
     * @return float Returns the taux ret tr bpp.
     */
    public function getTauxRetTrBpp() {
        return $this->tauxRetTrBpp;
    }

    /**
     * Get the taux ret tr bps.
     *
     * @return float Returns the taux ret tr bps.
     */
    public function getTauxRetTrBps() {
        return $this->tauxRetTrBps;
    }

    /**
     * Get the taux ret tr cpp.
     *
     * @return float Returns the taux ret tr cpp.
     */
    public function getTauxRetTrCpp() {
        return $this->tauxRetTrCpp;
    }

    /**
     * Get the taux ret tr cps.
     *
     * @return float Returns the taux ret tr cps.
     */
    public function getTauxRetTrCps() {
        return $this->tauxRetTrCps;
    }

    /**
     * Get the taux ret tr dpp.
     *
     * @return float Returns the taux ret tr dpp.
     */
    public function getTauxRetTrDpp() {
        return $this->tauxRetTrDpp;
    }

    /**
     * Get the taux ret tr dps.
     *
     * @return float Returns the taux ret tr dps.
     */
    public function getTauxRetTrDps() {
        return $this->tauxRetTrDps;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime|null $aPartirDe The a partir de.
     */
    public function setAPartirDe(DateTime $aPartirDe = null) {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the taux ret tr2 pp.
     *
     * @param float $tauxRetTr2Pp The taux ret tr2 pp.
     */
    public function setTauxRetTr2Pp($tauxRetTr2Pp) {
        $this->tauxRetTr2Pp = $tauxRetTr2Pp;
        return $this;
    }

    /**
     * Set the taux ret tr2 ps.
     *
     * @param float $tauxRetTr2Ps The taux ret tr2 ps.
     */
    public function setTauxRetTr2Ps($tauxRetTr2Ps) {
        $this->tauxRetTr2Ps = $tauxRetTr2Ps;
        return $this;
    }

    /**
     * Set the taux ret tr app.
     *
     * @param float $tauxRetTrApp The taux ret tr app.
     */
    public function setTauxRetTrApp($tauxRetTrApp) {
        $this->tauxRetTrApp = $tauxRetTrApp;
        return $this;
    }

    /**
     * Set the taux ret tr aps.
     *
     * @param float $tauxRetTrAps The taux ret tr aps.
     */
    public function setTauxRetTrAps($tauxRetTrAps) {
        $this->tauxRetTrAps = $tauxRetTrAps;
        return $this;
    }

    /**
     * Set the taux ret tr bpp.
     *
     * @param float $tauxRetTrBpp The taux ret tr bpp.
     */
    public function setTauxRetTrBpp($tauxRetTrBpp) {
        $this->tauxRetTrBpp = $tauxRetTrBpp;
        return $this;
    }

    /**
     * Set the taux ret tr bps.
     *
     * @param float $tauxRetTrBps The taux ret tr bps.
     */
    public function setTauxRetTrBps($tauxRetTrBps) {
        $this->tauxRetTrBps = $tauxRetTrBps;
        return $this;
    }

    /**
     * Set the taux ret tr cpp.
     *
     * @param float $tauxRetTrCpp The taux ret tr cpp.
     */
    public function setTauxRetTrCpp($tauxRetTrCpp) {
        $this->tauxRetTrCpp = $tauxRetTrCpp;
        return $this;
    }

    /**
     * Set the taux ret tr cps.
     *
     * @param float $tauxRetTrCps The taux ret tr cps.
     */
    public function setTauxRetTrCps($tauxRetTrCps) {
        $this->tauxRetTrCps = $tauxRetTrCps;
        return $this;
    }

    /**
     * Set the taux ret tr dpp.
     *
     * @param float $tauxRetTrDpp The taux ret tr dpp.
     */
    public function setTauxRetTrDpp($tauxRetTrDpp) {
        $this->tauxRetTrDpp = $tauxRetTrDpp;
        return $this;
    }

    /**
     * Set the taux ret tr dps.
     *
     * @param float $tauxRetTrDps The taux ret tr dps.
     */
    public function setTauxRetTrDps($tauxRetTrDps) {
        $this->tauxRetTrDps = $tauxRetTrDps;
        return $this;
    }
}
