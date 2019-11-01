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
 * Cum tranche d trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheDTrait {

    /**
     * Cum tranche d.
     *
     * @var float
     */
    private $cumTrancheD;

    /**
     * Get the cum tranche d.
     *
     * @return float Returns the cum tranche d.
     */
    public function getCumTrancheD() {
        return $this->cumTrancheD;
    }

    /**
     * Set the cum tranche d.
     *
     * @param float $cumTrancheD The cum tranche d.
     */
    public function setCumTrancheD($cumTrancheD) {
        $this->cumTrancheD = $cumTrancheD;
        return $this;
    }
}
