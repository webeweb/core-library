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
 * Zone trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZoneTrait {

    /**
     * Zone.
     *
     * @var string
     */
    private $zone;

    /**
     * Get the zone.
     *
     * @return string Returns the zone.
     */
    public function getZone() {
        return $this->zone;
    }

    /**
     * Set the zone.
     *
     * @param string $zone The zone.
     */
    public function setZone($zone) {
        $this->zone = $zone;
        return $this;
    }
}
