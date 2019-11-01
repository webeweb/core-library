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
 * Tx horaire2 rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxHoraire2RsTrait {

    /**
     * Tx horaire2 rs.
     *
     * @var float
     */
    private $txHoraire2Rs;

    /**
     * Get the tx horaire2 rs.
     *
     * @return float Returns the tx horaire2 rs.
     */
    public function getTxHoraire2Rs() {
        return $this->txHoraire2Rs;
    }

    /**
     * Set the tx horaire2 rs.
     *
     * @param float $txHoraire2Rs The tx horaire2 rs.
     */
    public function setTxHoraire2Rs($txHoraire2Rs) {
        $this->txHoraire2Rs = $txHoraire2Rs;
        return $this;
    }
}
