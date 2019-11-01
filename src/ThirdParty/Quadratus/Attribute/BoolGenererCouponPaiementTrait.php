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
 * Generer coupon paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGenererCouponPaiementTrait {

    /**
     * Generer coupon paiement.
     *
     * @var bool
     */
    private $genererCouponPaiement;

    /**
     * Get the generer coupon paiement.
     *
     * @return bool Returns the generer coupon paiement.
     */
    public function getGenererCouponPaiement() {
        return $this->genererCouponPaiement;
    }

    /**
     * Set the generer coupon paiement.
     *
     * @param bool $genererCouponPaiement The generer coupon paiement.
     */
    public function setGenererCouponPaiement($genererCouponPaiement) {
        $this->genererCouponPaiement = $genererCouponPaiement;
        return $this;
    }
}
