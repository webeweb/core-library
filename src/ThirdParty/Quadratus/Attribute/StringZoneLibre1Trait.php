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
 * Zone libre1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZoneLibre1Trait {

    /**
     * Zone libre1.
     *
     * @var string
     */
    private $zoneLibre1;

    /**
     * Get the zone libre1.
     *
     * @return string Returns the zone libre1.
     */
    public function getZoneLibre1() {
        return $this->zoneLibre1;
    }

    /**
     * Set the zone libre1.
     *
     * @param string $zoneLibre1 The zone libre1.
     */
    public function setZoneLibre1($zoneLibre1) {
        $this->zoneLibre1 = $zoneLibre1;
        return $this;
    }
}
