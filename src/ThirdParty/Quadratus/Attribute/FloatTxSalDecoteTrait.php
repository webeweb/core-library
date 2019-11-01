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
 * Tx sal decote trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxSalDecoteTrait {

    /**
     * Tx sal decote.
     *
     * @var float
     */
    private $txSalDecote;

    /**
     * Get the tx sal decote.
     *
     * @return float Returns the tx sal decote.
     */
    public function getTxSalDecote() {
        return $this->txSalDecote;
    }

    /**
     * Set the tx sal decote.
     *
     * @param float $txSalDecote The tx sal decote.
     */
    public function setTxSalDecote($txSalDecote) {
        $this->txSalDecote = $txSalDecote;
        return $this;
    }
}
