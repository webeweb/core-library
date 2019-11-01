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
 * Cum mt cp pris1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumMtCpPris1Trait {

    /**
     * Cum mt cp pris1.
     *
     * @var float
     */
    private $cumMtCpPris1;

    /**
     * Get the cum mt cp pris1.
     *
     * @return float Returns the cum mt cp pris1.
     */
    public function getCumMtCpPris1() {
        return $this->cumMtCpPris1;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float $cumMtCpPris1 The cum mt cp pris1.
     */
    public function setCumMtCpPris1($cumMtCpPris1) {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }
}
