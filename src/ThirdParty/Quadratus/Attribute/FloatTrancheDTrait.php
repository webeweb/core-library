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
 * Tranche d trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheDTrait {

    /**
     * Tranche d.
     *
     * @var float
     */
    private $trancheD;

    /**
     * Get the tranche d.
     *
     * @return float Returns the tranche d.
     */
    public function getTrancheD() {
        return $this->trancheD;
    }

    /**
     * Set the tranche d.
     *
     * @param float $trancheD The tranche d.
     */
    public function setTrancheD($trancheD) {
        $this->trancheD = $trancheD;
        return $this;
    }
}
