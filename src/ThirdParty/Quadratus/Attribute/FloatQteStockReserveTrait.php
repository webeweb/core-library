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
 * Qte stock reserve trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteStockReserveTrait {

    /**
     * Qte stock reserve.
     *
     * @var float
     */
    private $qteStockReserve;

    /**
     * Get the qte stock reserve.
     *
     * @return float Returns the qte stock reserve.
     */
    public function getQteStockReserve() {
        return $this->qteStockReserve;
    }

    /**
     * Set the qte stock reserve.
     *
     * @param float $qteStockReserve The qte stock reserve.
     */
    public function setQteStockReserve($qteStockReserve) {
        $this->qteStockReserve = $qteStockReserve;
        return $this;
    }
}
