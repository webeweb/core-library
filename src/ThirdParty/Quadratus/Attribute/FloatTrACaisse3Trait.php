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
 * Tr a caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrACaisse3Trait {

    /**
     * Tr a caisse3.
     *
     * @var float
     */
    private $trACaisse3;

    /**
     * Get the tr a caisse3.
     *
     * @return float Returns the tr a caisse3.
     */
    public function getTrACaisse3() {
        return $this->trACaisse3;
    }

    /**
     * Set the tr a caisse3.
     *
     * @param float $trACaisse3 The tr a caisse3.
     */
    public function setTrACaisse3($trACaisse3) {
        $this->trACaisse3 = $trACaisse3;
        return $this;
    }
}
