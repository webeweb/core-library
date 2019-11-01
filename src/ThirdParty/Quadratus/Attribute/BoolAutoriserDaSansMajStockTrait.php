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
 * Autoriser da sans maj stock trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutoriserDaSansMajStockTrait {

    /**
     * Autoriser da sans maj stock.
     *
     * @var bool
     */
    private $autoriserDaSansMajStock;

    /**
     * Get the autoriser da sans maj stock.
     *
     * @return bool Returns the autoriser da sans maj stock.
     */
    public function getAutoriserDaSansMajStock() {
        return $this->autoriserDaSansMajStock;
    }

    /**
     * Set the autoriser da sans maj stock.
     *
     * @param bool $autoriserDaSansMajStock The autoriser da sans maj stock.
     */
    public function setAutoriserDaSansMajStock($autoriserDaSansMajStock) {
        $this->autoriserDaSansMajStock = $autoriserDaSansMajStock;
        return $this;
    }
}
