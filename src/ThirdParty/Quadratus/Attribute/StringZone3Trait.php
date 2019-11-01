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
 * Zone3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone3Trait {

    /**
     * Zone3.
     *
     * @var string
     */
    private $zone3;

    /**
     * Get the zone3.
     *
     * @return string Returns the zone3.
     */
    public function getZone3() {
        return $this->zone3;
    }

    /**
     * Set the zone3.
     *
     * @param string $zone3 The zone3.
     */
    public function setZone3($zone3) {
        $this->zone3 = $zone3;
        return $this;
    }
}
