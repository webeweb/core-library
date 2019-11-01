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
 * Num cpt stock trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptStockTrait {

    /**
     * Num cpt stock.
     *
     * @var string
     */
    private $numCptStock;

    /**
     * Get the num cpt stock.
     *
     * @return string Returns the num cpt stock.
     */
    public function getNumCptStock() {
        return $this->numCptStock;
    }

    /**
     * Set the num cpt stock.
     *
     * @param string $numCptStock The num cpt stock.
     */
    public function setNumCptStock($numCptStock) {
        $this->numCptStock = $numCptStock;
        return $this;
    }
}
