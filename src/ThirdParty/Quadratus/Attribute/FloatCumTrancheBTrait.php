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
 * Cum tranche b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheBTrait {

    /**
     * Cum tranche b.
     *
     * @var float
     */
    private $cumTrancheB;

    /**
     * Get the cum tranche b.
     *
     * @return float Returns the cum tranche b.
     */
    public function getCumTrancheB() {
        return $this->cumTrancheB;
    }

    /**
     * Set the cum tranche b.
     *
     * @param float $cumTrancheB The cum tranche b.
     */
    public function setCumTrancheB($cumTrancheB) {
        $this->cumTrancheB = $cumTrancheB;
        return $this;
    }
}
