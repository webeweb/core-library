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
 * Cum rtt pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumRttPrisTrait {

    /**
     * Cum rtt pris.
     *
     * @var float
     */
    private $cumRttPris;

    /**
     * Get the cum rtt pris.
     *
     * @return float Returns the cum rtt pris.
     */
    public function getCumRttPris() {
        return $this->cumRttPris;
    }

    /**
     * Set the cum rtt pris.
     *
     * @param float $cumRttPris The cum rtt pris.
     */
    public function setCumRttPris($cumRttPris) {
        $this->cumRttPris = $cumRttPris;
        return $this;
    }
}
