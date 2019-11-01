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
 * Tx horaire1 tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxHoraire1TpTrait {

    /**
     * Tx horaire1 tp.
     *
     * @var float
     */
    private $txHoraire1Tp;

    /**
     * Get the tx horaire1 tp.
     *
     * @return float Returns the tx horaire1 tp.
     */
    public function getTxHoraire1Tp() {
        return $this->txHoraire1Tp;
    }

    /**
     * Set the tx horaire1 tp.
     *
     * @param float $txHoraire1Tp The tx horaire1 tp.
     */
    public function setTxHoraire1Tp($txHoraire1Tp) {
        $this->txHoraire1Tp = $txHoraire1Tp;
        return $this;
    }
}
