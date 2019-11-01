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
 * Tranche bbanl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheBbanlTrait {

    /**
     * Tranche bbanl.
     *
     * @var float
     */
    private $trancheBbanl;

    /**
     * Get the tranche bbanl.
     *
     * @return float Returns the tranche bbanl.
     */
    public function getTrancheBbanl() {
        return $this->trancheBbanl;
    }

    /**
     * Set the tranche bbanl.
     *
     * @param float $trancheBbanl The tranche bbanl.
     */
    public function setTrancheBbanl($trancheBbanl) {
        $this->trancheBbanl = $trancheBbanl;
        return $this;
    }
}
