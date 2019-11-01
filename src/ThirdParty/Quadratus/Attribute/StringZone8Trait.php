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
 * Zone8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone8Trait {

    /**
     * Zone8.
     *
     * @var string
     */
    private $zone8;

    /**
     * Get the zone8.
     *
     * @return string Returns the zone8.
     */
    public function getZone8() {
        return $this->zone8;
    }

    /**
     * Set the zone8.
     *
     * @param string $zone8 The zone8.
     */
    public function setZone8($zone8) {
        $this->zone8 = $zone8;
        return $this;
    }
}
