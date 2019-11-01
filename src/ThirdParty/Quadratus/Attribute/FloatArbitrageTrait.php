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
 * Arbitrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatArbitrageTrait {

    /**
     * Arbitrage.
     *
     * @var float
     */
    private $arbitrage;

    /**
     * Get the arbitrage.
     *
     * @return float Returns the arbitrage.
     */
    public function getArbitrage() {
        return $this->arbitrage;
    }

    /**
     * Set the arbitrage.
     *
     * @param float $arbitrage The arbitrage.
     */
    public function setArbitrage($arbitrage) {
        $this->arbitrage = $arbitrage;
        return $this;
    }
}
