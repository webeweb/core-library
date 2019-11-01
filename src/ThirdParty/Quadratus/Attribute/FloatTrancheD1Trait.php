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
 * Tranche d1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheD1Trait {

    /**
     * Tranche d1.
     *
     * @var float
     */
    private $trancheD1;

    /**
     * Get the tranche d1.
     *
     * @return float Returns the tranche d1.
     */
    public function getTrancheD1() {
        return $this->trancheD1;
    }

    /**
     * Set the tranche d1.
     *
     * @param float $trancheD1 The tranche d1.
     */
    public function setTrancheD1($trancheD1) {
        $this->trancheD1 = $trancheD1;
        return $this;
    }
}
