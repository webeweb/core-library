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
 * Cum base tr a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrATrait {

    /**
     * Cum base tr a.
     *
     * @var float
     */
    private $cumBaseTrA;

    /**
     * Get the cum base tr a.
     *
     * @return float Returns the cum base tr a.
     */
    public function getCumBaseTrA() {
        return $this->cumBaseTrA;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float $cumBaseTrA The cum base tr a.
     */
    public function setCumBaseTrA($cumBaseTrA) {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }
}
