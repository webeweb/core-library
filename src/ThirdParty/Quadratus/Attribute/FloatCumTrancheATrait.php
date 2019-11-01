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
 * Cum tranche a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheATrait {

    /**
     * Cum tranche a.
     *
     * @var float
     */
    private $cumTrancheA;

    /**
     * Get the cum tranche a.
     *
     * @return float Returns the cum tranche a.
     */
    public function getCumTrancheA() {
        return $this->cumTrancheA;
    }

    /**
     * Set the cum tranche a.
     *
     * @param float $cumTrancheA The cum tranche a.
     */
    public function setCumTrancheA($cumTrancheA) {
        $this->cumTrancheA = $cumTrancheA;
        return $this;
    }
}
