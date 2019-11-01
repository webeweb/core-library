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
 * Tx tva creance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxTvaCreanceTrait {

    /**
     * Tx tva creance.
     *
     * @var float
     */
    private $txTvaCreance;

    /**
     * Get the tx tva creance.
     *
     * @return float Returns the tx tva creance.
     */
    public function getTxTvaCreance() {
        return $this->txTvaCreance;
    }

    /**
     * Set the tx tva creance.
     *
     * @param float $txTvaCreance The tx tva creance.
     */
    public function setTxTvaCreance($txTvaCreance) {
        $this->txTvaCreance = $txTvaCreance;
        return $this;
    }
}
