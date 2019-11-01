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
 * Tr dcaisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrDcaisse3Trait {

    /**
     * Tr dcaisse3.
     *
     * @var float
     */
    private $trDcaisse3;

    /**
     * Get the tr dcaisse3.
     *
     * @return float Returns the tr dcaisse3.
     */
    public function getTrDcaisse3() {
        return $this->trDcaisse3;
    }

    /**
     * Set the tr dcaisse3.
     *
     * @param float $trDcaisse3 The tr dcaisse3.
     */
    public function setTrDcaisse3($trDcaisse3) {
        $this->trDcaisse3 = $trDcaisse3;
        return $this;
    }
}
