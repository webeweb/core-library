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
 * Zone7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone7Trait {

    /**
     * Zone7.
     *
     * @var string
     */
    private $zone7;

    /**
     * Get the zone7.
     *
     * @return string Returns the zone7.
     */
    public function getZone7() {
        return $this->zone7;
    }

    /**
     * Set the zone7.
     *
     * @param string $zone7 The zone7.
     */
    public function setZone7($zone7) {
        $this->zone7 = $zone7;
        return $this;
    }
}
