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
 * Cum tr a caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrACaisse1Trait {

    /**
     * Cum tr a caisse1.
     *
     * @var float
     */
    private $cumTrACaisse1;

    /**
     * Get the cum tr a caisse1.
     *
     * @return float Returns the cum tr a caisse1.
     */
    public function getCumTrACaisse1() {
        return $this->cumTrACaisse1;
    }

    /**
     * Set the cum tr a caisse1.
     *
     * @param float $cumTrACaisse1 The cum tr a caisse1.
     */
    public function setCumTrACaisse1($cumTrACaisse1) {
        $this->cumTrACaisse1 = $cumTrACaisse1;
        return $this;
    }
}
