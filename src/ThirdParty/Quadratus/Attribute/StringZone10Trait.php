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
 * Zone10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone10Trait {

    /**
     * Zone10.
     *
     * @var string
     */
    private $zone10;

    /**
     * Get the zone10.
     *
     * @return string Returns the zone10.
     */
    public function getZone10() {
        return $this->zone10;
    }

    /**
     * Set the zone10.
     *
     * @param string $zone10 The zone10.
     */
    public function setZone10($zone10) {
        $this->zone10 = $zone10;
        return $this;
    }
}
