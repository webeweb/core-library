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
 * Cum base tr a caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrACaisse2Trait {

    /**
     * Cum base tr a caisse2.
     *
     * @var float
     */
    private $cumBaseTrACaisse2;

    /**
     * Get the cum base tr a caisse2.
     *
     * @return float Returns the cum base tr a caisse2.
     */
    public function getCumBaseTrACaisse2() {
        return $this->cumBaseTrACaisse2;
    }

    /**
     * Set the cum base tr a caisse2.
     *
     * @param float $cumBaseTrACaisse2 The cum base tr a caisse2.
     */
    public function setCumBaseTrACaisse2($cumBaseTrACaisse2) {
        $this->cumBaseTrACaisse2 = $cumBaseTrACaisse2;
        return $this;
    }
}
