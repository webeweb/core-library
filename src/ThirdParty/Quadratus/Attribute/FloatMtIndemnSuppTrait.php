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
 * Mt indemn supp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtIndemnSuppTrait {

    /**
     * Mt indemn supp.
     *
     * @var float
     */
    private $mtIndemnSupp;

    /**
     * Get the mt indemn supp.
     *
     * @return float Returns the mt indemn supp.
     */
    public function getMtIndemnSupp() {
        return $this->mtIndemnSupp;
    }

    /**
     * Set the mt indemn supp.
     *
     * @param float $mtIndemnSupp The mt indemn supp.
     */
    public function setMtIndemnSupp($mtIndemnSupp) {
        $this->mtIndemnSupp = $mtIndemnSupp;
        return $this;
    }
}
