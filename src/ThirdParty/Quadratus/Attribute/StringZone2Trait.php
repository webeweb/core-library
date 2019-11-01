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
 * Zone2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone2Trait {

    /**
     * Zone2.
     *
     * @var string
     */
    private $zone2;

    /**
     * Get the zone2.
     *
     * @return string Returns the zone2.
     */
    public function getZone2() {
        return $this->zone2;
    }

    /**
     * Set the zone2.
     *
     * @param string $zone2 The zone2.
     */
    public function setZone2($zone2) {
        $this->zone2 = $zone2;
        return $this;
    }
}
