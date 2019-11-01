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
 * Hors stock trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHorsStockTrait {

    /**
     * Hors stock.
     *
     * @var bool
     */
    private $horsStock;

    /**
     * Get the hors stock.
     *
     * @return bool Returns the hors stock.
     */
    public function getHorsStock() {
        return $this->horsStock;
    }

    /**
     * Set the hors stock.
     *
     * @param bool $horsStock The hors stock.
     */
    public function setHorsStock($horsStock) {
        $this->horsStock = $horsStock;
        return $this;
    }
}
