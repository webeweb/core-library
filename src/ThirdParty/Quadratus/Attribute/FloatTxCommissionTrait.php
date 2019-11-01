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
 * Tx commission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxCommissionTrait {

    /**
     * Tx commission.
     *
     * @var float
     */
    private $txCommission;

    /**
     * Get the tx commission.
     *
     * @return float Returns the tx commission.
     */
    public function getTxCommission() {
        return $this->txCommission;
    }

    /**
     * Set the tx commission.
     *
     * @param float $txCommission The tx commission.
     */
    public function setTxCommission($txCommission) {
        $this->txCommission = $txCommission;
        return $this;
    }
}
