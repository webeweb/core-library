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
 * Tx tva creance force trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTxTvaCreanceForceTrait {

    /**
     * Tx tva creance force.
     *
     * @var bool
     */
    private $txTvaCreanceForce;

    /**
     * Get the tx tva creance force.
     *
     * @return bool Returns the tx tva creance force.
     */
    public function getTxTvaCreanceForce() {
        return $this->txTvaCreanceForce;
    }

    /**
     * Set the tx tva creance force.
     *
     * @param bool $txTvaCreanceForce The tx tva creance force.
     */
    public function setTxTvaCreanceForce($txTvaCreanceForce) {
        $this->txTvaCreanceForce = $txTvaCreanceForce;
        return $this;
    }
}
