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
 * Qte stock mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteStockMiniTrait {

    /**
     * Qte stock mini.
     *
     * @var float
     */
    private $qteStockMini;

    /**
     * Get the qte stock mini.
     *
     * @return float Returns the qte stock mini.
     */
    public function getQteStockMini() {
        return $this->qteStockMini;
    }

    /**
     * Set the qte stock mini.
     *
     * @param float $qteStockMini The qte stock mini.
     */
    public function setQteStockMini($qteStockMini) {
        $this->qteStockMini = $qteStockMini;
        return $this;
    }
}
