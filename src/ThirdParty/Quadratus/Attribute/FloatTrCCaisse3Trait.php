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
 * Tr c caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrCCaisse3Trait {

    /**
     * Tr c caisse3.
     *
     * @var float
     */
    private $trCCaisse3;

    /**
     * Get the tr c caisse3.
     *
     * @return float Returns the tr c caisse3.
     */
    public function getTrCCaisse3() {
        return $this->trCCaisse3;
    }

    /**
     * Set the tr c caisse3.
     *
     * @param float $trCCaisse3 The tr c caisse3.
     */
    public function setTrCCaisse3($trCCaisse3) {
        $this->trCCaisse3 = $trCCaisse3;
        return $this;
    }
}
