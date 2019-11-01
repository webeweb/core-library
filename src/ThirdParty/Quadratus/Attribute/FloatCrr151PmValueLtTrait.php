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
 * Crr151 pm value lt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrr151PmValueLtTrait {

    /**
     * Crr151 pm value lt.
     *
     * @var float
     */
    private $crr151PmValueLt;

    /**
     * Get the crr151 pm value lt.
     *
     * @return float Returns the crr151 pm value lt.
     */
    public function getCrr151PmValueLt() {
        return $this->crr151PmValueLt;
    }

    /**
     * Set the crr151 pm value lt.
     *
     * @param float $crr151PmValueLt The crr151 pm value lt.
     */
    public function setCrr151PmValueLt($crr151PmValueLt) {
        $this->crr151PmValueLt = $crr151PmValueLt;
        return $this;
    }
}
