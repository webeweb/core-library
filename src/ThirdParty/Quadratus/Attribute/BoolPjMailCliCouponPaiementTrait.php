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
 * Pj mail cli coupon paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPjMailCliCouponPaiementTrait {

    /**
     * Pj mail cli coupon paiement.
     *
     * @var bool
     */
    private $pjMailCliCouponPaiement;

    /**
     * Get the pj mail cli coupon paiement.
     *
     * @return bool Returns the pj mail cli coupon paiement.
     */
    public function getPjMailCliCouponPaiement() {
        return $this->pjMailCliCouponPaiement;
    }

    /**
     * Set the pj mail cli coupon paiement.
     *
     * @param bool $pjMailCliCouponPaiement The pj mail cli coupon paiement.
     */
    public function setPjMailCliCouponPaiement($pjMailCliCouponPaiement) {
        $this->pjMailCliCouponPaiement = $pjMailCliCouponPaiement;
        return $this;
    }
}
