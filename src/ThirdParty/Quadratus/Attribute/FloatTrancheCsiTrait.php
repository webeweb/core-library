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
 * Tranche csi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheCsiTrait {

    /**
     * Tranche csi.
     *
     * @var float
     */
    private $trancheCsi;

    /**
     * Get the tranche csi.
     *
     * @return float Returns the tranche csi.
     */
    public function getTrancheCsi() {
        return $this->trancheCsi;
    }

    /**
     * Set the tranche csi.
     *
     * @param float $trancheCsi The tranche csi.
     */
    public function setTrancheCsi($trancheCsi) {
        $this->trancheCsi = $trancheCsi;
        return $this;
    }
}
