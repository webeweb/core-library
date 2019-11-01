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
 * Zone1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone1Trait {

    /**
     * Zone1.
     *
     * @var string
     */
    private $zone1;

    /**
     * Get the zone1.
     *
     * @return string Returns the zone1.
     */
    public function getZone1() {
        return $this->zone1;
    }

    /**
     * Set the zone1.
     *
     * @param string $zone1 The zone1.
     */
    public function setZone1($zone1) {
        $this->zone1 = $zone1;
        return $this;
    }
}
