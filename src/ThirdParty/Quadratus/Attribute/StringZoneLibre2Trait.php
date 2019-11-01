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
 * Zone libre2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZoneLibre2Trait {

    /**
     * Zone libre2.
     *
     * @var string
     */
    private $zoneLibre2;

    /**
     * Get the zone libre2.
     *
     * @return string Returns the zone libre2.
     */
    public function getZoneLibre2() {
        return $this->zoneLibre2;
    }

    /**
     * Set the zone libre2.
     *
     * @param string $zoneLibre2 The zone libre2.
     */
    public function setZoneLibre2($zoneLibre2) {
        $this->zoneLibre2 = $zoneLibre2;
        return $this;
    }
}
