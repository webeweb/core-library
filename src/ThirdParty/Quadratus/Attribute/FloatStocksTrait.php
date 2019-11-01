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
 * Stocks trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatStocksTrait {

    /**
     * Stocks.
     *
     * @var float
     */
    private $stocks;

    /**
     * Get the stocks.
     *
     * @return float Returns the stocks.
     */
    public function getStocks() {
        return $this->stocks;
    }

    /**
     * Set the stocks.
     *
     * @param float $stocks The stocks.
     */
    public function setStocks($stocks) {
        $this->stocks = $stocks;
        return $this;
    }
}
