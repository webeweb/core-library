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
 * Cum tr b caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrBCaisse3Trait {

    /**
     * Cum tr b caisse3.
     *
     * @var float
     */
    private $cumTrBCaisse3;

    /**
     * Get the cum tr b caisse3.
     *
     * @return float Returns the cum tr b caisse3.
     */
    public function getCumTrBCaisse3() {
        return $this->cumTrBCaisse3;
    }

    /**
     * Set the cum tr b caisse3.
     *
     * @param float $cumTrBCaisse3 The cum tr b caisse3.
     */
    public function setCumTrBCaisse3($cumTrBCaisse3) {
        $this->cumTrBCaisse3 = $cumTrBCaisse3;
        return $this;
    }
}
