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
 * Ad dotation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdDotationTrait {

    /**
     * Ad dotation.
     *
     * @var float
     */
    private $adDotation;

    /**
     * Get the ad dotation.
     *
     * @return float Returns the ad dotation.
     */
    public function getAdDotation() {
        return $this->adDotation;
    }

    /**
     * Set the ad dotation.
     *
     * @param float $adDotation The ad dotation.
     */
    public function setAdDotation($adDotation) {
        $this->adDotation = $adDotation;
        return $this;
    }
}
