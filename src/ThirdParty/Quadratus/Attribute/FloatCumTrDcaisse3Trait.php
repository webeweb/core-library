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
 * Cum tr dcaisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrDcaisse3Trait {

    /**
     * Cum tr dcaisse3.
     *
     * @var float
     */
    private $cumTrDcaisse3;

    /**
     * Get the cum tr dcaisse3.
     *
     * @return float Returns the cum tr dcaisse3.
     */
    public function getCumTrDcaisse3() {
        return $this->cumTrDcaisse3;
    }

    /**
     * Set the cum tr dcaisse3.
     *
     * @param float $cumTrDcaisse3 The cum tr dcaisse3.
     */
    public function setCumTrDcaisse3($cumTrDcaisse3) {
        $this->cumTrDcaisse3 = $cumTrDcaisse3;
        return $this;
    }
}
