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
 * Ad deduction dotation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdDeductionDotationTrait {

    /**
     * Ad deduction dotation.
     *
     * @var float
     */
    private $adDeductionDotation;

    /**
     * Get the ad deduction dotation.
     *
     * @return float Returns the ad deduction dotation.
     */
    public function getAdDeductionDotation() {
        return $this->adDeductionDotation;
    }

    /**
     * Set the ad deduction dotation.
     *
     * @param float $adDeductionDotation The ad deduction dotation.
     */
    public function setAdDeductionDotation($adDeductionDotation) {
        $this->adDeductionDotation = $adDeductionDotation;
        return $this;
    }
}
