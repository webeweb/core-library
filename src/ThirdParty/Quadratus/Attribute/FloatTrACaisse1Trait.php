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
 * Tr a caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrACaisse1Trait {

    /**
     * Tr a caisse1.
     *
     * @var float
     */
    private $trACaisse1;

    /**
     * Get the tr a caisse1.
     *
     * @return float Returns the tr a caisse1.
     */
    public function getTrACaisse1() {
        return $this->trACaisse1;
    }

    /**
     * Set the tr a caisse1.
     *
     * @param float $trACaisse1 The tr a caisse1.
     */
    public function setTrACaisse1($trACaisse1) {
        $this->trACaisse1 = $trACaisse1;
        return $this;
    }
}
