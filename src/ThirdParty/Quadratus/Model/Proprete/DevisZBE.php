<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Devis z b e model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisZBE {

    /**
     * Batiment.
     *
     * @var string
     */
    private $batiment;

    /**
     * Etage.
     *
     * @var string
     */
    private $etage;

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Zone geographique.
     *
     * @var string
     */
    private $zoneGeographique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the batiment.
     *
     * @return string Returns the batiment.
     */
    public function getBatiment() {
        return $this->batiment;
    }

    /**
     * Get the etage.
     *
     * @return string Returns the etage.
     */
    public function getEtage() {
        return $this->etage;
    }

    /**
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
    }

    /**
     * Get the zone geographique.
     *
     * @return string Returns the zone geographique.
     */
    public function getZoneGeographique() {
        return $this->zoneGeographique;
    }

    /**
     * Set the batiment.
     *
     * @param string $batiment The batiment.
     * @return DevisZBE Returns this devis z b e.
     */
    public function setBatiment($batiment) {
        $this->batiment = $batiment;
        return $this;
    }

    /**
     * Set the etage.
     *
     * @param string $etage The etage.
     * @return DevisZBE Returns this devis z b e.
     */
    public function setEtage($etage) {
        $this->etage = $etage;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     * @return DevisZBE Returns this devis z b e.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the zone geographique.
     *
     * @param string $zoneGeographique The zone geographique.
     * @return DevisZBE Returns this devis z b e.
     */
    public function setZoneGeographique($zoneGeographique) {
        $this->zoneGeographique = $zoneGeographique;
        return $this;
    }
}
