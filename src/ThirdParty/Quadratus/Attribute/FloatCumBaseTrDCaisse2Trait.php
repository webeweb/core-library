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
 * Cum base tr d caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrDCaisse2Trait {

    /**
     * Cum base tr d caisse2.
     *
     * @var float
     */
    private $cumBaseTrDCaisse2;

    /**
     * Get the cum base tr d caisse2.
     *
     * @return float Returns the cum base tr d caisse2.
     */
    public function getCumBaseTrDCaisse2() {
        return $this->cumBaseTrDCaisse2;
    }

    /**
     * Set the cum base tr d caisse2.
     *
     * @param float $cumBaseTrDCaisse2 The cum base tr d caisse2.
     */
    public function setCumBaseTrDCaisse2($cumBaseTrDCaisse2) {
        $this->cumBaseTrDCaisse2 = $cumBaseTrDCaisse2;
        return $this;
    }
}
