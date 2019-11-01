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
 * Zone4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone4Trait {

    /**
     * Zone4.
     *
     * @var string
     */
    private $zone4;

    /**
     * Get the zone4.
     *
     * @return string Returns the zone4.
     */
    public function getZone4() {
        return $this->zone4;
    }

    /**
     * Set the zone4.
     *
     * @param string $zone4 The zone4.
     */
    public function setZone4($zone4) {
        $this->zone4 = $zone4;
        return $this;
    }
}
