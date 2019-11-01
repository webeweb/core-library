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
 * Tr a caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrACaisse2Trait {

    /**
     * Tr a caisse2.
     *
     * @var float
     */
    private $trACaisse2;

    /**
     * Get the tr a caisse2.
     *
     * @return float Returns the tr a caisse2.
     */
    public function getTrACaisse2() {
        return $this->trACaisse2;
    }

    /**
     * Set the tr a caisse2.
     *
     * @param float $trACaisse2 The tr a caisse2.
     */
    public function setTrACaisse2($trACaisse2) {
        $this->trACaisse2 = $trACaisse2;
        return $this;
    }
}
