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
 * Tranche d sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheDSansSiTrait {

    /**
     * Tranche d sans si.
     *
     * @var float
     */
    private $trancheDSansSi;

    /**
     * Get the tranche d sans si.
     *
     * @return float Returns the tranche d sans si.
     */
    public function getTrancheDSansSi() {
        return $this->trancheDSansSi;
    }

    /**
     * Set the tranche d sans si.
     *
     * @param float $trancheDSansSi The tranche d sans si.
     */
    public function setTrancheDSansSi($trancheDSansSi) {
        $this->trancheDSansSi = $trancheDSansSi;
        return $this;
    }
}
