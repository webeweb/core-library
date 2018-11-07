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
 * Repartition activite ana bul model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class RepartitionActiviteAnaBul {

    /**
     * Centre.
     *
     * @var string
     */
    private $centre;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

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
     * Get the centre.
     *
     * @return string Returns the centre.
     */
    public function getCentre() {
        return $this->centre;
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
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
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
     * Set the centre.
     *
     * @param string $centre The centre.
     * @return RepartitionActiviteAnaBul Returns this repartition activite ana bul.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return RepartitionActiviteAnaBul Returns this repartition activite ana bul.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return RepartitionActiviteAnaBul Returns this repartition activite ana bul.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return RepartitionActiviteAnaBul Returns this repartition activite ana bul.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return RepartitionActiviteAnaBul Returns this repartition activite ana bul.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the taux ventilation.
     *
     * @param float $tauxVentilation The taux ventilation.
     * @return RepartitionActiviteAnaBul Returns this repartition activite ana bul.
     */
    public function setTauxVentilation($tauxVentilation) {
        $this->tauxVentilation = $tauxVentilation;
        return $this;
    }

}
