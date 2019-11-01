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
 * Net a payer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNetAPayerTrait {

    /**
     * Net a payer.
     *
     * @var float
     */
    private $netAPayer;

    /**
     * Get the net a payer.
     *
     * @return float Returns the net a payer.
     */
    public function getNetAPayer() {
        return $this->netAPayer;
    }

    /**
     * Set the net a payer.
     *
     * @param float $netAPayer The net a payer.
     */
    public function setNetAPayer($netAPayer) {
        $this->netAPayer = $netAPayer;
        return $this;
    }
}
