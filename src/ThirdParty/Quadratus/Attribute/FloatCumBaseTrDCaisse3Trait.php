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
 * Cum base tr d caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrDCaisse3Trait {

    /**
     * Cum base tr d caisse3.
     *
     * @var float
     */
    private $cumBaseTrDCaisse3;

    /**
     * Get the cum base tr d caisse3.
     *
     * @return float Returns the cum base tr d caisse3.
     */
    public function getCumBaseTrDCaisse3() {
        return $this->cumBaseTrDCaisse3;
    }

    /**
     * Set the cum base tr d caisse3.
     *
     * @param float $cumBaseTrDCaisse3 The cum base tr d caisse3.
     */
    public function setCumBaseTrDCaisse3($cumBaseTrDCaisse3) {
        $this->cumBaseTrDCaisse3 = $cumBaseTrDCaisse3;
        return $this;
    }
}
