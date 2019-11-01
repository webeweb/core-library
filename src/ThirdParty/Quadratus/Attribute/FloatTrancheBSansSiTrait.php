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
 * Tranche b sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheBSansSiTrait {

    /**
     * Tranche b sans si.
     *
     * @var float
     */
    private $trancheBSansSi;

    /**
     * Get the tranche b sans si.
     *
     * @return float Returns the tranche b sans si.
     */
    public function getTrancheBSansSi() {
        return $this->trancheBSansSi;
    }

    /**
     * Set the tranche b sans si.
     *
     * @param float $trancheBSansSi The tranche b sans si.
     */
    public function setTrancheBSansSi($trancheBSansSi) {
        $this->trancheBSansSi = $trancheBSansSi;
        return $this;
    }
}
