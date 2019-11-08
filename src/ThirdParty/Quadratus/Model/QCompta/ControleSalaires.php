<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Controle salaires.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ControleSalaires {

    /**
     * Brut.
     *
     * @var float
     */
    private $brut;

    /**
     * Cotis patronales.
     *
     * @var float
     */
    private $cotisPatronales;

    /**
     * Cotis salariales.
     *
     * @var float
     */
    private $cotisSalariales;

    /**
     * Heures.
     *
     * @var float
     */
    private $heures;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Plafond.
     *
     * @var float
     */
    private $plafond;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the cotis patronales.
     *
     * @return float Returns the cotis patronales.
     */
    public function getCotisPatronales() {
        return $this->cotisPatronales;
    }

    /**
     * Get the cotis salariales.
     *
     * @return float Returns the cotis salariales.
     */
    public function getCotisSalariales() {
        return $this->cotisSalariales;
    }

    /**
     * Get the heures.
     *
     * @return float Returns the heures.
     */
    public function getHeures() {
        return $this->heures;
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
     * Get the plafond.
     *
     * @return float Returns the plafond.
     */
    public function getPlafond() {
        return $this->plafond;
    }

    /**
     * Set the brut.
     *
     * @param float $brut The brut.
     */
    public function setBrut($brut) {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the cotis patronales.
     *
     * @param float $cotisPatronales The cotis patronales.
     */
    public function setCotisPatronales($cotisPatronales) {
        $this->cotisPatronales = $cotisPatronales;
        return $this;
    }

    /**
     * Set the cotis salariales.
     *
     * @param float $cotisSalariales The cotis salariales.
     */
    public function setCotisSalariales($cotisSalariales) {
        $this->cotisSalariales = $cotisSalariales;
        return $this;
    }

    /**
     * Set the heures.
     *
     * @param float $heures The heures.
     */
    public function setHeures($heures) {
        $this->heures = $heures;
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
     * Set the plafond.
     *
     * @param float $plafond The plafond.
     */
    public function setPlafond($plafond) {
        $this->plafond = $plafond;
        return $this;
    }
}
