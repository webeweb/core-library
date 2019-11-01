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
 * Longitude trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatLongitudeTrait {

    /**
     * Longitude.
     *
     * @var float
     */
    private $longitude;

    /**
     * Get the longitude.
     *
     * @return float Returns the longitude.
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Set the longitude.
     *
     * @param float $longitude The longitude.
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        return $this;
    }
}
