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
 * Charge pat tot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChargePatTotTrait {

    /**
     * Charge pat tot.
     *
     * @var float
     */
    private $chargePatTot;

    /**
     * Get the charge pat tot.
     *
     * @return float Returns the charge pat tot.
     */
    public function getChargePatTot() {
        return $this->chargePatTot;
    }

    /**
     * Set the charge pat tot.
     *
     * @param float $chargePatTot The charge pat tot.
     */
    public function setChargePatTot($chargePatTot) {
        $this->chargePatTot = $chargePatTot;
        return $this;
    }
}
