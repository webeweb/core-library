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
 * Charge pat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChargePatTrait {

    /**
     * Charge pat.
     *
     * @var float
     */
    private $chargePat;

    /**
     * Get the charge pat.
     *
     * @return float Returns the charge pat.
     */
    public function getChargePat() {
        return $this->chargePat;
    }

    /**
     * Set the charge pat.
     *
     * @param float $chargePat The charge pat.
     */
    public function setChargePat($chargePat) {
        $this->chargePat = $chargePat;
        return $this;
    }
}
