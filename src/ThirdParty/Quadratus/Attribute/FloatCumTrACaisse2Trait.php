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
 * Cum tr a caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrACaisse2Trait {

    /**
     * Cum tr a caisse2.
     *
     * @var float
     */
    private $cumTrACaisse2;

    /**
     * Get the cum tr a caisse2.
     *
     * @return float Returns the cum tr a caisse2.
     */
    public function getCumTrACaisse2() {
        return $this->cumTrACaisse2;
    }

    /**
     * Set the cum tr a caisse2.
     *
     * @param float $cumTrACaisse2 The cum tr a caisse2.
     */
    public function setCumTrACaisse2($cumTrACaisse2) {
        $this->cumTrACaisse2 = $cumTrACaisse2;
        return $this;
    }
}
