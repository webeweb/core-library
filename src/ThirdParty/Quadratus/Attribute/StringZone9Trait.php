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
 * Zone9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone9Trait {

    /**
     * Zone9.
     *
     * @var string
     */
    private $zone9;

    /**
     * Get the zone9.
     *
     * @return string Returns the zone9.
     */
    public function getZone9() {
        return $this->zone9;
    }

    /**
     * Set the zone9.
     *
     * @param string $zone9 The zone9.
     */
    public function setZone9($zone9) {
        $this->zone9 = $zone9;
        return $this;
    }
}
