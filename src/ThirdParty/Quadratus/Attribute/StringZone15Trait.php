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
 * Zone15 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone15Trait {

    /**
     * Zone15.
     *
     * @var string
     */
    private $zone15;

    /**
     * Get the zone15.
     *
     * @return string Returns the zone15.
     */
    public function getZone15() {
        return $this->zone15;
    }

    /**
     * Set the zone15.
     *
     * @param string $zone15 The zone15.
     */
    public function setZone15($zone15) {
        $this->zone15 = $zone15;
        return $this;
    }
}
