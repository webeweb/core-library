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
 * Tx horaire2 tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxHoraire2TpTrait {

    /**
     * Tx horaire2 tp.
     *
     * @var float
     */
    private $txHoraire2Tp;

    /**
     * Get the tx horaire2 tp.
     *
     * @return float Returns the tx horaire2 tp.
     */
    public function getTxHoraire2Tp() {
        return $this->txHoraire2Tp;
    }

    /**
     * Set the tx horaire2 tp.
     *
     * @param float $txHoraire2Tp The tx horaire2 tp.
     */
    public function setTxHoraire2Tp($txHoraire2Tp) {
        $this->txHoraire2Tp = $txHoraire2Tp;
        return $this;
    }
}
