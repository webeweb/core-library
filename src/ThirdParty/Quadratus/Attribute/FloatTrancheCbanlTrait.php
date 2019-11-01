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
 * Tranche cbanl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheCbanlTrait {

    /**
     * Tranche cbanl.
     *
     * @var float
     */
    private $trancheCbanl;

    /**
     * Get the tranche cbanl.
     *
     * @return float Returns the tranche cbanl.
     */
    public function getTrancheCbanl() {
        return $this->trancheCbanl;
    }

    /**
     * Set the tranche cbanl.
     *
     * @param float $trancheCbanl The tranche cbanl.
     */
    public function setTrancheCbanl($trancheCbanl) {
        $this->trancheCbanl = $trancheCbanl;
        return $this;
    }
}
