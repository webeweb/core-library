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
 * Cum base ss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseSsTrait {

    /**
     * Cum base ss.
     *
     * @var float
     */
    private $cumBaseSs;

    /**
     * Get the cum base ss.
     *
     * @return float Returns the cum base ss.
     */
    public function getCumBaseSs() {
        return $this->cumBaseSs;
    }

    /**
     * Set the cum base ss.
     *
     * @param float $cumBaseSs The cum base ss.
     */
    public function setCumBaseSs($cumBaseSs) {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }
}
