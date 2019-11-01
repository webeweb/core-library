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
 * Zone11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone11Trait {

    /**
     * Zone11.
     *
     * @var string
     */
    private $zone11;

    /**
     * Get the zone11.
     *
     * @return string Returns the zone11.
     */
    public function getZone11() {
        return $this->zone11;
    }

    /**
     * Set the zone11.
     *
     * @param string $zone11 The zone11.
     */
    public function setZone11($zone11) {
        $this->zone11 = $zone11;
        return $this;
    }
}
