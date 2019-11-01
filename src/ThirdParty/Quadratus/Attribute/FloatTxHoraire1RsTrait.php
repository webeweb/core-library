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
 * Tx horaire1 rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxHoraire1RsTrait {

    /**
     * Tx horaire1 rs.
     *
     * @var float
     */
    private $txHoraire1Rs;

    /**
     * Get the tx horaire1 rs.
     *
     * @return float Returns the tx horaire1 rs.
     */
    public function getTxHoraire1Rs() {
        return $this->txHoraire1Rs;
    }

    /**
     * Set the tx horaire1 rs.
     *
     * @param float $txHoraire1Rs The tx horaire1 rs.
     */
    public function setTxHoraire1Rs($txHoraire1Rs) {
        $this->txHoraire1Rs = $txHoraire1Rs;
        return $this;
    }
}
