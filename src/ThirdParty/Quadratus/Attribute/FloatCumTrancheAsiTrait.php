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
 * Cum tranche asi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheAsiTrait {

    /**
     * Cum tranche asi.
     *
     * @var float
     */
    private $cumTrancheAsi;

    /**
     * Get the cum tranche asi.
     *
     * @return float Returns the cum tranche asi.
     */
    public function getCumTrancheAsi() {
        return $this->cumTrancheAsi;
    }

    /**
     * Set the cum tranche asi.
     *
     * @param float $cumTrancheAsi The cum tranche asi.
     */
    public function setCumTrancheAsi($cumTrancheAsi) {
        $this->cumTrancheAsi = $cumTrancheAsi;
        return $this;
    }
}
