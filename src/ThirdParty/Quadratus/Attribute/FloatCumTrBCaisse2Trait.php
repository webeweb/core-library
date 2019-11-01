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
 * Cum tr b caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrBCaisse2Trait {

    /**
     * Cum tr b caisse2.
     *
     * @var float
     */
    private $cumTrBCaisse2;

    /**
     * Get the cum tr b caisse2.
     *
     * @return float Returns the cum tr b caisse2.
     */
    public function getCumTrBCaisse2() {
        return $this->cumTrBCaisse2;
    }

    /**
     * Set the cum tr b caisse2.
     *
     * @param float $cumTrBCaisse2 The cum tr b caisse2.
     */
    public function setCumTrBCaisse2($cumTrBCaisse2) {
        $this->cumTrBCaisse2 = $cumTrBCaisse2;
        return $this;
    }
}
