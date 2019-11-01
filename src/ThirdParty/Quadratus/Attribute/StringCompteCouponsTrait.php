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
 * Compte coupons trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCouponsTrait {

    /**
     * Compte coupons.
     *
     * @var string
     */
    private $compteCoupons;

    /**
     * Get the compte coupons.
     *
     * @return string Returns the compte coupons.
     */
    public function getCompteCoupons() {
        return $this->compteCoupons;
    }

    /**
     * Set the compte coupons.
     *
     * @param string $compteCoupons The compte coupons.
     */
    public function setCompteCoupons($compteCoupons) {
        $this->compteCoupons = $compteCoupons;
        return $this;
    }
}
