<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Repartition activite bul model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class RepartitionActiviteBul {

    /**
     * Code service.
     *
     * @var string
     */
    private $codeService;

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
     * Taux ventilation.
     *
     * @var float
     */
    private $tauxVentilation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code service.
     *
     * @return string Returns the code service.
     */
    public function getCodeService() {
        return $this->codeService;
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
     * Get the taux ventilation.
     *
     * @return float Returns the taux ventilation.
     */
    public function getTauxVentilation() {
        return $this->tauxVentilation;
    }

    /**
     * Set the code service.
     *
     * @param string $codeService The code service.
     * @return RepartitionActiviteBul Returns this repartition activite bul.
     */
    public function setCodeService($codeService) {
        $this->codeService = $codeService;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return RepartitionActiviteBul Returns this repartition activite bul.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return RepartitionActiviteBul Returns this repartition activite bul.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return RepartitionActiviteBul Returns this repartition activite bul.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the taux ventilation.
     *
     * @param float $tauxVentilation The taux ventilation.
     * @return RepartitionActiviteBul Returns this repartition activite bul.
     */
    public function setTauxVentilation($tauxVentilation) {
        $this->tauxVentilation = $tauxVentilation;
        return $this;
    }

}
