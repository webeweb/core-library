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
 * Cum tranche c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheCTrait {

    /**
     * Cum tranche c.
     *
     * @var float
     */
    private $cumTrancheC;

    /**
     * Get the cum tranche c.
     *
     * @return float Returns the cum tranche c.
     */
    public function getCumTrancheC() {
        return $this->cumTrancheC;
    }

    /**
     * Set the cum tranche c.
     *
     * @param float $cumTrancheC The cum tranche c.
     */
    public function setCumTrancheC($cumTrancheC) {
        $this->cumTrancheC = $cumTrancheC;
        return $this;
    }
}
