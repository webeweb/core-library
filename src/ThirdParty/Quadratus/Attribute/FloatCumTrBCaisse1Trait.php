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
 * Cum tr b caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrBCaisse1Trait {

    /**
     * Cum tr b caisse1.
     *
     * @var float
     */
    private $cumTrBCaisse1;

    /**
     * Get the cum tr b caisse1.
     *
     * @return float Returns the cum tr b caisse1.
     */
    public function getCumTrBCaisse1() {
        return $this->cumTrBCaisse1;
    }

    /**
     * Set the cum tr b caisse1.
     *
     * @param float $cumTrBCaisse1 The cum tr b caisse1.
     */
    public function setCumTrBCaisse1($cumTrBCaisse1) {
        $this->cumTrBCaisse1 = $cumTrBCaisse1;
        return $this;
    }
}
