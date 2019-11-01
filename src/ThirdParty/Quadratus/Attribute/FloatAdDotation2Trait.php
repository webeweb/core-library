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
 * Ad dotation2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdDotation2Trait {

    /**
     * Ad dotation2.
     *
     * @var float
     */
    private $adDotation2;

    /**
     * Get the ad dotation2.
     *
     * @return float Returns the ad dotation2.
     */
    public function getAdDotation2() {
        return $this->adDotation2;
    }

    /**
     * Set the ad dotation2.
     *
     * @param float $adDotation2 The ad dotation2.
     */
    public function setAdDotation2($adDotation2) {
        $this->adDotation2 = $adDotation2;
        return $this;
    }
}
