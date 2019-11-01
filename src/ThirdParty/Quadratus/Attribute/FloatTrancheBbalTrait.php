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
 * Tranche bbal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheBbalTrait {

    /**
     * Tranche bbal.
     *
     * @var float
     */
    private $trancheBbal;

    /**
     * Get the tranche bbal.
     *
     * @return float Returns the tranche bbal.
     */
    public function getTrancheBbal() {
        return $this->trancheBbal;
    }

    /**
     * Set the tranche bbal.
     *
     * @param float $trancheBbal The tranche bbal.
     */
    public function setTrancheBbal($trancheBbal) {
        $this->trancheBbal = $trancheBbal;
        return $this;
    }
}
