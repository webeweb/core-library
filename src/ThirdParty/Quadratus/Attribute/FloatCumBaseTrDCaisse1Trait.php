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
 * Cum base tr d caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrDCaisse1Trait {

    /**
     * Cum base tr d caisse1.
     *
     * @var float
     */
    private $cumBaseTrDCaisse1;

    /**
     * Get the cum base tr d caisse1.
     *
     * @return float Returns the cum base tr d caisse1.
     */
    public function getCumBaseTrDCaisse1() {
        return $this->cumBaseTrDCaisse1;
    }

    /**
     * Set the cum base tr d caisse1.
     *
     * @param float $cumBaseTrDCaisse1 The cum base tr d caisse1.
     */
    public function setCumBaseTrDCaisse1($cumBaseTrDCaisse1) {
        $this->cumBaseTrDCaisse1 = $cumBaseTrDCaisse1;
        return $this;
    }
}
