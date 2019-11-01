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
 * Zone navigo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZoneNavigoTrait {

    /**
     * Zone navigo.
     *
     * @var string
     */
    private $zoneNavigo;

    /**
     * Get the zone navigo.
     *
     * @return string Returns the zone navigo.
     */
    public function getZoneNavigo() {
        return $this->zoneNavigo;
    }

    /**
     * Set the zone navigo.
     *
     * @param string $zoneNavigo The zone navigo.
     */
    public function setZoneNavigo($zoneNavigo) {
        $this->zoneNavigo = $zoneNavigo;
        return $this;
    }
}
