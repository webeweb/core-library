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
 * Cum tranche b sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheBSansSiTrait {

    /**
     * Cum tranche b sans si.
     *
     * @var float
     */
    private $cumTrancheBSansSi;

    /**
     * Get the cum tranche b sans si.
     *
     * @return float Returns the cum tranche b sans si.
     */
    public function getCumTrancheBSansSi() {
        return $this->cumTrancheBSansSi;
    }

    /**
     * Set the cum tranche b sans si.
     *
     * @param float $cumTrancheBSansSi The cum tranche b sans si.
     */
    public function setCumTrancheBSansSi($cumTrancheBSansSi) {
        $this->cumTrancheBSansSi = $cumTrancheBSansSi;
        return $this;
    }
}
