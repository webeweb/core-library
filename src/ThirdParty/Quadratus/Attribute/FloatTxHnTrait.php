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
 * Tx hn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxHnTrait {

    /**
     * Tx hn.
     *
     * @var float
     */
    private $txHn;

    /**
     * Get the tx hn.
     *
     * @return float Returns the tx hn.
     */
    public function getTxHn() {
        return $this->txHn;
    }

    /**
     * Set the tx hn.
     *
     * @param float $txHn The tx hn.
     */
    public function setTxHn($txHn) {
        $this->txHn = $txHn;
        return $this;
    }
}
