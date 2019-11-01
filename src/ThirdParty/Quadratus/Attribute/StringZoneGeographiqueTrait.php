<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Zone geographique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZoneGeographiqueTrait {

    /**
     * Zone geographique.
     *
     * @var string
     */
    private $zoneGeographique;

    /**
     * Get the zone geographique.
     *
     * @return string Returns the zone geographique.
     */
    public function getZoneGeographique() {
        return $this->zoneGeographique;
    }

    /**
     * Set the zone geographique.
     *
     * @param string $zoneGeographique The zone geographique.
     */
    public function setZoneGeographique($zoneGeographique) {
        $this->zoneGeographique = $zoneGeographique;
        return $this;
    }
}
