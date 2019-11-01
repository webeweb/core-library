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
 * Cum tranche d1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheD1Trait {

    /**
     * Cum tranche d1.
     *
     * @var float
     */
    private $cumTrancheD1;

    /**
     * Get the cum tranche d1.
     *
     * @return float Returns the cum tranche d1.
     */
    public function getCumTrancheD1() {
        return $this->cumTrancheD1;
    }

    /**
     * Set the cum tranche d1.
     *
     * @param float $cumTrancheD1 The cum tranche d1.
     */
    public function setCumTrancheD1($cumTrancheD1) {
        $this->cumTrancheD1 = $cumTrancheD1;
        return $this;
    }
}
