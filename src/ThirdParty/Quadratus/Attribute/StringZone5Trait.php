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
 * Zone5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone5Trait {

    /**
     * Zone5.
     *
     * @var string
     */
    private $zone5;

    /**
     * Get the zone5.
     *
     * @return string Returns the zone5.
     */
    public function getZone5() {
        return $this->zone5;
    }

    /**
     * Set the zone5.
     *
     * @param string $zone5 The zone5.
     */
    public function setZone5($zone5) {
        $this->zone5 = $zone5;
        return $this;
    }
}
