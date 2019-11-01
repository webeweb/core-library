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
 * Cum base tr a caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrACaisse1Trait {

    /**
     * Cum base tr a caisse1.
     *
     * @var float
     */
    private $cumBaseTrACaisse1;

    /**
     * Get the cum base tr a caisse1.
     *
     * @return float Returns the cum base tr a caisse1.
     */
    public function getCumBaseTrACaisse1() {
        return $this->cumBaseTrACaisse1;
    }

    /**
     * Set the cum base tr a caisse1.
     *
     * @param float $cumBaseTrACaisse1 The cum base tr a caisse1.
     */
    public function setCumBaseTrACaisse1($cumBaseTrACaisse1) {
        $this->cumBaseTrACaisse1 = $cumBaseTrACaisse1;
        return $this;
    }
}
