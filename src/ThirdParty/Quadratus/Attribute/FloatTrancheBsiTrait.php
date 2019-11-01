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
 * Tranche bsi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheBsiTrait {

    /**
     * Tranche bsi.
     *
     * @var float
     */
    private $trancheBsi;

    /**
     * Get the tranche bsi.
     *
     * @return float Returns the tranche bsi.
     */
    public function getTrancheBsi() {
        return $this->trancheBsi;
    }

    /**
     * Set the tranche bsi.
     *
     * @param float $trancheBsi The tranche bsi.
     */
    public function setTrancheBsi($trancheBsi) {
        $this->trancheBsi = $trancheBsi;
        return $this;
    }
}
