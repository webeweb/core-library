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
 * Arbitrage auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArbitrageAutoTrait {

    /**
     * Arbitrage auto.
     *
     * @var string
     */
    private $arbitrageAuto;

    /**
     * Get the arbitrage auto.
     *
     * @return string Returns the arbitrage auto.
     */
    public function getArbitrageAuto() {
        return $this->arbitrageAuto;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string $arbitrageAuto The arbitrage auto.
     */
    public function setArbitrageAuto($arbitrageAuto) {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }
}
