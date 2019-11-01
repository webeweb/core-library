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

use DateTime;

/**
 * Periode transfert stock trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeTransfertStockTrait {

    /**
     * Periode transfert stock.
     *
     * @var DateTime|null
     */
    private $periodeTransfertStock;

    /**
     * Get the periode transfert stock.
     *
     * @return DateTime|null Returns the periode transfert stock.
     */
    public function getPeriodeTransfertStock() {
        return $this->periodeTransfertStock;
    }

    /**
     * Set the periode transfert stock.
     *
     * @param DateTime|null $periodeTransfertStock The periode transfert stock.
     */
    public function setPeriodeTransfertStock(DateTime $periodeTransfertStock = null) {
        $this->periodeTransfertStock = $periodeTransfertStock;
        return $this;
    }
}
