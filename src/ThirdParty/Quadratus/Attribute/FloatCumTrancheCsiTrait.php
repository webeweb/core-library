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
 * Cum tranche csi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheCsiTrait {

    /**
     * Cum tranche csi.
     *
     * @var float
     */
    private $cumTrancheCsi;

    /**
     * Get the cum tranche csi.
     *
     * @return float Returns the cum tranche csi.
     */
    public function getCumTrancheCsi() {
        return $this->cumTrancheCsi;
    }

    /**
     * Set the cum tranche csi.
     *
     * @param float $cumTrancheCsi The cum tranche csi.
     */
    public function setCumTrancheCsi($cumTrancheCsi) {
        $this->cumTrancheCsi = $cumTrancheCsi;
        return $this;
    }
}
