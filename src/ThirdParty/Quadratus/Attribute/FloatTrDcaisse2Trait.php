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
 * Tr dcaisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrDcaisse2Trait {

    /**
     * Tr dcaisse2.
     *
     * @var float
     */
    private $trDcaisse2;

    /**
     * Get the tr dcaisse2.
     *
     * @return float Returns the tr dcaisse2.
     */
    public function getTrDcaisse2() {
        return $this->trDcaisse2;
    }

    /**
     * Set the tr dcaisse2.
     *
     * @param float $trDcaisse2 The tr dcaisse2.
     */
    public function setTrDcaisse2($trDcaisse2) {
        $this->trDcaisse2 = $trDcaisse2;
        return $this;
    }
}
