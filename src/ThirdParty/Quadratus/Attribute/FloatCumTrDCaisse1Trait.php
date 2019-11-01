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
 * Cum tr d caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrDCaisse1Trait {

    /**
     * Cum tr d caisse1.
     *
     * @var float
     */
    private $cumTrDCaisse1;

    /**
     * Get the cum tr d caisse1.
     *
     * @return float Returns the cum tr d caisse1.
     */
    public function getCumTrDCaisse1() {
        return $this->cumTrDCaisse1;
    }

    /**
     * Set the cum tr d caisse1.
     *
     * @param float $cumTrDCaisse1 The cum tr d caisse1.
     */
    public function setCumTrDCaisse1($cumTrDCaisse1) {
        $this->cumTrDCaisse1 = $cumTrDCaisse1;
        return $this;
    }
}
