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
 * Tranche c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheCTrait {

    /**
     * Tranche c.
     *
     * @var float
     */
    private $trancheC;

    /**
     * Get the tranche c.
     *
     * @return float Returns the tranche c.
     */
    public function getTrancheC() {
        return $this->trancheC;
    }

    /**
     * Set the tranche c.
     *
     * @param float $trancheC The tranche c.
     */
    public function setTrancheC($trancheC) {
        $this->trancheC = $trancheC;
        return $this;
    }
}
