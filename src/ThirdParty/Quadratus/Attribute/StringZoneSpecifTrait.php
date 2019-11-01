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
 * Zone specif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZoneSpecifTrait {

    /**
     * Zone specif.
     *
     * @var string
     */
    private $zoneSpecif;

    /**
     * Get the zone specif.
     *
     * @return string Returns the zone specif.
     */
    public function getZoneSpecif() {
        return $this->zoneSpecif;
    }

    /**
     * Set the zone specif.
     *
     * @param string $zoneSpecif The zone specif.
     */
    public function setZoneSpecif($zoneSpecif) {
        $this->zoneSpecif = $zoneSpecif;
        return $this;
    }
}
