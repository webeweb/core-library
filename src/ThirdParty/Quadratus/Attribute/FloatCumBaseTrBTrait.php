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
 * Cum base tr b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrBTrait {

    /**
     * Cum base tr b.
     *
     * @var float
     */
    private $cumBaseTrB;

    /**
     * Get the cum base tr b.
     *
     * @return float Returns the cum base tr b.
     */
    public function getCumBaseTrB() {
        return $this->cumBaseTrB;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float $cumBaseTrB The cum base tr b.
     */
    public function setCumBaseTrB($cumBaseTrB) {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }
}
