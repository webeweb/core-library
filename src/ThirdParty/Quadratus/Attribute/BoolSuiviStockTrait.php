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
 * Suivi stock trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviStockTrait {

    /**
     * Suivi stock.
     *
     * @var bool
     */
    private $suiviStock;

    /**
     * Get the suivi stock.
     *
     * @return bool Returns the suivi stock.
     */
    public function getSuiviStock() {
        return $this->suiviStock;
    }

    /**
     * Set the suivi stock.
     *
     * @param bool $suiviStock The suivi stock.
     */
    public function setSuiviStock($suiviStock) {
        $this->suiviStock = $suiviStock;
        return $this;
    }
}
