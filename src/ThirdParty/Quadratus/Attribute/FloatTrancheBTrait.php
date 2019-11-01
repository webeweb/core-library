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
 * Tranche b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheBTrait {

    /**
     * Tranche b.
     *
     * @var float
     */
    private $trancheB;

    /**
     * Get the tranche b.
     *
     * @return float Returns the tranche b.
     */
    public function getTrancheB() {
        return $this->trancheB;
    }

    /**
     * Set the tranche b.
     *
     * @param float $trancheB The tranche b.
     */
    public function setTrancheB($trancheB) {
        $this->trancheB = $trancheB;
        return $this;
    }
}
