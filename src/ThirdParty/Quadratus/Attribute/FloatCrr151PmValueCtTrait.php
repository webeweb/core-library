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
 * Crr151 pm value ct trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrr151PmValueCtTrait {

    /**
     * Crr151 pm value ct.
     *
     * @var float
     */
    private $crr151PmValueCt;

    /**
     * Get the crr151 pm value ct.
     *
     * @return float Returns the crr151 pm value ct.
     */
    public function getCrr151PmValueCt() {
        return $this->crr151PmValueCt;
    }

    /**
     * Set the crr151 pm value ct.
     *
     * @param float $crr151PmValueCt The crr151 pm value ct.
     */
    public function setCrr151PmValueCt($crr151PmValueCt) {
        $this->crr151PmValueCt = $crr151PmValueCt;
        return $this;
    }
}
