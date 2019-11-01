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
 * Zone14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone14Trait {

    /**
     * Zone14.
     *
     * @var string
     */
    private $zone14;

    /**
     * Get the zone14.
     *
     * @return string Returns the zone14.
     */
    public function getZone14() {
        return $this->zone14;
    }

    /**
     * Set the zone14.
     *
     * @param string $zone14 The zone14.
     */
    public function setZone14($zone14) {
        $this->zone14 = $zone14;
        return $this;
    }
}
