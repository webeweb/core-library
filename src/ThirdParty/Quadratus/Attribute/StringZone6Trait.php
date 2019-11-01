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
 * Zone6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone6Trait {

    /**
     * Zone6.
     *
     * @var string
     */
    private $zone6;

    /**
     * Get the zone6.
     *
     * @return string Returns the zone6.
     */
    public function getZone6() {
        return $this->zone6;
    }

    /**
     * Set the zone6.
     *
     * @param string $zone6 The zone6.
     */
    public function setZone6($zone6) {
        $this->zone6 = $zone6;
        return $this;
    }
}
