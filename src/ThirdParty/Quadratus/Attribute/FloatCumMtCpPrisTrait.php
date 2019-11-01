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
 * Cum mt cp pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumMtCpPrisTrait {

    /**
     * Cum mt cp pris.
     *
     * @var float
     */
    private $cumMtCpPris;

    /**
     * Get the cum mt cp pris.
     *
     * @return float Returns the cum mt cp pris.
     */
    public function getCumMtCpPris() {
        return $this->cumMtCpPris;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float $cumMtCpPris The cum mt cp pris.
     */
    public function setCumMtCpPris($cumMtCpPris) {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }
}
