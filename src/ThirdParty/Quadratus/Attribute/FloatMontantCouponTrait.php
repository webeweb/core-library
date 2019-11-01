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
 * Montant coupon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCouponTrait {

    /**
     * Montant coupon.
     *
     * @var float
     */
    private $montantCoupon;

    /**
     * Get the montant coupon.
     *
     * @return float Returns the montant coupon.
     */
    public function getMontantCoupon() {
        return $this->montantCoupon;
    }

    /**
     * Set the montant coupon.
     *
     * @param float $montantCoupon The montant coupon.
     */
    public function setMontantCoupon($montantCoupon) {
        $this->montantCoupon = $montantCoupon;
        return $this;
    }
}
