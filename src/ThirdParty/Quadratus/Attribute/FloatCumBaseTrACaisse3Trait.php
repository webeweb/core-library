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
 * Cum base tr a caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrACaisse3Trait {

    /**
     * Cum base tr a caisse3.
     *
     * @var float
     */
    private $cumBaseTrACaisse3;

    /**
     * Get the cum base tr a caisse3.
     *
     * @return float Returns the cum base tr a caisse3.
     */
    public function getCumBaseTrACaisse3() {
        return $this->cumBaseTrACaisse3;
    }

    /**
     * Set the cum base tr a caisse3.
     *
     * @param float $cumBaseTrACaisse3 The cum base tr a caisse3.
     */
    public function setCumBaseTrACaisse3($cumBaseTrACaisse3) {
        $this->cumBaseTrACaisse3 = $cumBaseTrACaisse3;
        return $this;
    }
}
