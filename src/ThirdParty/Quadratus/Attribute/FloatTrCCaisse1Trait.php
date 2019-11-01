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
 * Tr c caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrCCaisse1Trait {

    /**
     * Tr c caisse1.
     *
     * @var float
     */
    private $trCCaisse1;

    /**
     * Get the tr c caisse1.
     *
     * @return float Returns the tr c caisse1.
     */
    public function getTrCCaisse1() {
        return $this->trCCaisse1;
    }

    /**
     * Set the tr c caisse1.
     *
     * @param float $trCCaisse1 The tr c caisse1.
     */
    public function setTrCCaisse1($trCCaisse1) {
        $this->trCCaisse1 = $trCCaisse1;
        return $this;
    }
}
