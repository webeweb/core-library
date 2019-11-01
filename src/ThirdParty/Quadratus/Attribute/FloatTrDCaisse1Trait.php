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
 * Tr d caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrDCaisse1Trait {

    /**
     * Tr d caisse1.
     *
     * @var float
     */
    private $trDCaisse1;

    /**
     * Get the tr d caisse1.
     *
     * @return float Returns the tr d caisse1.
     */
    public function getTrDCaisse1() {
        return $this->trDCaisse1;
    }

    /**
     * Set the tr d caisse1.
     *
     * @param float $trDCaisse1 The tr d caisse1.
     */
    public function setTrDCaisse1($trDCaisse1) {
        $this->trDCaisse1 = $trDCaisse1;
        return $this;
    }
}
