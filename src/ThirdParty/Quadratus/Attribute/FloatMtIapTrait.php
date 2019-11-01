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
 * Mt iap trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtIapTrait {

    /**
     * Mt iap.
     *
     * @var float
     */
    private $mtIap;

    /**
     * Get the mt iap.
     *
     * @return float Returns the mt iap.
     */
    public function getMtIap() {
        return $this->mtIap;
    }

    /**
     * Set the mt iap.
     *
     * @param float $mtIap The mt iap.
     */
    public function setMtIap($mtIap) {
        $this->mtIap = $mtIap;
        return $this;
    }
}
