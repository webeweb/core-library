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
 * Ad dotation except trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdDotationExceptTrait {

    /**
     * Ad dotation except.
     *
     * @var float
     */
    private $adDotationExcept;

    /**
     * Get the ad dotation except.
     *
     * @return float Returns the ad dotation except.
     */
    public function getAdDotationExcept() {
        return $this->adDotationExcept;
    }

    /**
     * Set the ad dotation except.
     *
     * @param float $adDotationExcept The ad dotation except.
     */
    public function setAdDotationExcept($adDotationExcept) {
        $this->adDotationExcept = $adDotationExcept;
        return $this;
    }
}
