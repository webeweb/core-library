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
 * Cum cp pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumCpPrisTrait {

    /**
     * Cum cp pris.
     *
     * @var float
     */
    private $cumCpPris;

    /**
     * Get the cum cp pris.
     *
     * @return float Returns the cum cp pris.
     */
    public function getCumCpPris() {
        return $this->cumCpPris;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float $cumCpPris The cum cp pris.
     */
    public function setCumCpPris($cumCpPris) {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }
}
