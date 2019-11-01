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
 * Tx imposition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxImpositionTrait {

    /**
     * Tx imposition.
     *
     * @var float
     */
    private $txImposition;

    /**
     * Get the tx imposition.
     *
     * @return float Returns the tx imposition.
     */
    public function getTxImposition() {
        return $this->txImposition;
    }

    /**
     * Set the tx imposition.
     *
     * @param float $txImposition The tx imposition.
     */
    public function setTxImposition($txImposition) {
        $this->txImposition = $txImposition;
        return $this;
    }
}
