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
 * Cum tr dcaisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrDcaisse2Trait {

    /**
     * Cum tr dcaisse2.
     *
     * @var float
     */
    private $cumTrDcaisse2;

    /**
     * Get the cum tr dcaisse2.
     *
     * @return float Returns the cum tr dcaisse2.
     */
    public function getCumTrDcaisse2() {
        return $this->cumTrDcaisse2;
    }

    /**
     * Set the cum tr dcaisse2.
     *
     * @param float $cumTrDcaisse2 The cum tr dcaisse2.
     */
    public function setCumTrDcaisse2($cumTrDcaisse2) {
        $this->cumTrDcaisse2 = $cumTrDcaisse2;
        return $this;
    }
}
