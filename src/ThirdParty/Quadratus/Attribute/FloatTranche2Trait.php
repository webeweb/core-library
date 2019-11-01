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
 * Tranche2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTranche2Trait {

    /**
     * Tranche2.
     *
     * @var float
     */
    private $tranche2;

    /**
     * Get the tranche2.
     *
     * @return float Returns the tranche2.
     */
    public function getTranche2() {
        return $this->tranche2;
    }

    /**
     * Set the tranche2.
     *
     * @param float $tranche2 The tranche2.
     */
    public function setTranche2($tranche2) {
        $this->tranche2 = $tranche2;
        return $this;
    }
}
