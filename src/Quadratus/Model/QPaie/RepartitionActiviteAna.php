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

/**
 * Repartition activite ana model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class RepartitionActiviteAna {

    /**
     * Centre.
     *
     * @var string
     */
    private $centre;

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
     * @return RepartitionActiviteAna Returns this repartition activite ana.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return RepartitionActiviteAna Returns this repartition activite ana.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return RepartitionActiviteAna Returns this repartition activite ana.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the taux ventilation.
     *
     * @param float $tauxVentilation The taux ventilation.
     * @return RepartitionActiviteAna Returns this repartition activite ana.
     */
    public function setTauxVentilation($tauxVentilation) {
        $this->tauxVentilation = $tauxVentilation;
        return $this;
    }

}
