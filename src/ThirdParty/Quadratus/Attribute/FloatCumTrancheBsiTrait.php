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
 * Cum tranche bsi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheBsiTrait {

    /**
     * Cum tranche bsi.
     *
     * @var float
     */
    private $cumTrancheBsi;

    /**
     * Get the cum tranche bsi.
     *
     * @return float Returns the cum tranche bsi.
     */
    public function getCumTrancheBsi() {
        return $this->cumTrancheBsi;
    }

    /**
     * Set the cum tranche bsi.
     *
     * @param float $cumTrancheBsi The cum tranche bsi.
     */
    public function setCumTrancheBsi($cumTrancheBsi) {
        $this->cumTrancheBsi = $cumTrancheBsi;
        return $this;
    }
}
