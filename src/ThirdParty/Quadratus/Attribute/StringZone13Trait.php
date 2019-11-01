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
 * Zone13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZone13Trait {

    /**
     * Zone13.
     *
     * @var string
     */
    private $zone13;

    /**
     * Get the zone13.
     *
     * @return string Returns the zone13.
     */
    public function getZone13() {
        return $this->zone13;
    }

    /**
     * Set the zone13.
     *
     * @param string $zone13 The zone13.
     */
    public function setZone13($zone13) {
        $this->zone13 = $zone13;
        return $this;
    }
}
