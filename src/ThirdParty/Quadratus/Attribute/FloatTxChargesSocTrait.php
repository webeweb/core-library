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
 * Tx charges soc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxChargesSocTrait {

    /**
     * Tx charges soc.
     *
     * @var float
     */
    private $txChargesSoc;

    /**
     * Get the tx charges soc.
     *
     * @return float Returns the tx charges soc.
     */
    public function getTxChargesSoc() {
        return $this->txChargesSoc;
    }

    /**
     * Set the tx charges soc.
     *
     * @param float $txChargesSoc The tx charges soc.
     */
    public function setTxChargesSoc($txChargesSoc) {
        $this->txChargesSoc = $txChargesSoc;
        return $this;
    }
}
