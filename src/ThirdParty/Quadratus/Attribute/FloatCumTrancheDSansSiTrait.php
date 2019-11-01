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
 * Cum tranche d sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheDSansSiTrait {

    /**
     * Cum tranche d sans si.
     *
     * @var float
     */
    private $cumTrancheDSansSi;

    /**
     * Get the cum tranche d sans si.
     *
     * @return float Returns the cum tranche d sans si.
     */
    public function getCumTrancheDSansSi() {
        return $this->cumTrancheDSansSi;
    }

    /**
     * Set the cum tranche d sans si.
     *
     * @param float $cumTrancheDSansSi The cum tranche d sans si.
     */
    public function setCumTrancheDSansSi($cumTrancheDSansSi) {
        $this->cumTrancheDSansSi = $cumTrancheDSansSi;
        return $this;
    }
}
