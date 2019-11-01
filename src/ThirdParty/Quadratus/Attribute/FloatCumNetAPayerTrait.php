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
 * Cum net a payer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumNetAPayerTrait {

    /**
     * Cum net a payer.
     *
     * @var float
     */
    private $cumNetAPayer;

    /**
     * Get the cum net a payer.
     *
     * @return float Returns the cum net a payer.
     */
    public function getCumNetAPayer() {
        return $this->cumNetAPayer;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float $cumNetAPayer The cum net a payer.
     */
    public function setCumNetAPayer($cumNetAPayer) {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }
}
