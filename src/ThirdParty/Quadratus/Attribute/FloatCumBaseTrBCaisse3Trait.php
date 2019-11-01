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
 * Cum base tr b caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrBCaisse3Trait {

    /**
     * Cum base tr b caisse3.
     *
     * @var float
     */
    private $cumBaseTrBCaisse3;

    /**
     * Get the cum base tr b caisse3.
     *
     * @return float Returns the cum base tr b caisse3.
     */
    public function getCumBaseTrBCaisse3() {
        return $this->cumBaseTrBCaisse3;
    }

    /**
     * Set the cum base tr b caisse3.
     *
     * @param float $cumBaseTrBCaisse3 The cum base tr b caisse3.
     */
    public function setCumBaseTrBCaisse3($cumBaseTrBCaisse3) {
        $this->cumBaseTrBCaisse3 = $cumBaseTrBCaisse3;
        return $this;
    }
}
