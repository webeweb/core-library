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
 * Zone libre3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZoneLibre3Trait {

    /**
     * Zone libre3.
     *
     * @var string
     */
    private $zoneLibre3;

    /**
     * Get the zone libre3.
     *
     * @return string Returns the zone libre3.
     */
    public function getZoneLibre3() {
        return $this->zoneLibre3;
    }

    /**
     * Set the zone libre3.
     *
     * @param string $zoneLibre3 The zone libre3.
     */
    public function setZoneLibre3($zoneLibre3) {
        $this->zoneLibre3 = $zoneLibre3;
        return $this;
    }
}
