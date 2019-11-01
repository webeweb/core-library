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
 * Cum tr a caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrACaisse3Trait {

    /**
     * Cum tr a caisse3.
     *
     * @var float
     */
    private $cumTrACaisse3;

    /**
     * Get the cum tr a caisse3.
     *
     * @return float Returns the cum tr a caisse3.
     */
    public function getCumTrACaisse3() {
        return $this->cumTrACaisse3;
    }

    /**
     * Set the cum tr a caisse3.
     *
     * @param float $cumTrACaisse3 The cum tr a caisse3.
     */
    public function setCumTrACaisse3($cumTrACaisse3) {
        $this->cumTrACaisse3 = $cumTrACaisse3;
        return $this;
    }
}
