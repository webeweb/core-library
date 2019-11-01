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
 * Cum base tr b caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrBCaisse1Trait {

    /**
     * Cum base tr b caisse1.
     *
     * @var float
     */
    private $cumBaseTrBCaisse1;

    /**
     * Get the cum base tr b caisse1.
     *
     * @return float Returns the cum base tr b caisse1.
     */
    public function getCumBaseTrBCaisse1() {
        return $this->cumBaseTrBCaisse1;
    }

    /**
     * Set the cum base tr b caisse1.
     *
     * @param float $cumBaseTrBCaisse1 The cum base tr b caisse1.
     */
    public function setCumBaseTrBCaisse1($cumBaseTrBCaisse1) {
        $this->cumBaseTrBCaisse1 = $cumBaseTrBCaisse1;
        return $this;
    }
}
