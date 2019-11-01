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
 * Tr c caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrCCaisse2Trait {

    /**
     * Tr c caisse2.
     *
     * @var float
     */
    private $trCCaisse2;

    /**
     * Get the tr c caisse2.
     *
     * @return float Returns the tr c caisse2.
     */
    public function getTrCCaisse2() {
        return $this->trCCaisse2;
    }

    /**
     * Set the tr c caisse2.
     *
     * @param float $trCCaisse2 The tr c caisse2.
     */
    public function setTrCCaisse2($trCCaisse2) {
        $this->trCCaisse2 = $trCCaisse2;
        return $this;
    }
}
