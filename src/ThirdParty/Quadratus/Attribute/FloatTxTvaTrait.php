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
 * Tx tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxTvaTrait {

    /**
     * Tx tva.
     *
     * @var float
     */
    private $txTva;

    /**
     * Get the tx tva.
     *
     * @return float Returns the tx tva.
     */
    public function getTxTva() {
        return $this->txTva;
    }

    /**
     * Set the tx tva.
     *
     * @param float $txTva The tx tva.
     */
    public function setTxTva($txTva) {
        $this->txTva = $txTva;
        return $this;
    }
}
