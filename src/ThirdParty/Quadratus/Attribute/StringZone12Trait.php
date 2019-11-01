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
 * Zone12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone12Trait {

    /**
     * Zone12.
     *
     * @var string
     */
    private $zone12;

    /**
     * Get the zone12.
     *
     * @return string Returns the zone12.
     */
    public function getZone12() {
        return $this->zone12;
    }

    /**
     * Set the zone12.
     *
     * @param string $zone12 The zone12.
     */
    public function setZone12($zone12) {
        $this->zone12 = $zone12;
        return $this;
    }
}
