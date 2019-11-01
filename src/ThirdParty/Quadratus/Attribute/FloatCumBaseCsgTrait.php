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
 * Cum base csg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseCsgTrait {

    /**
     * Cum base csg.
     *
     * @var float
     */
    private $cumBaseCsg;

    /**
     * Get the cum base csg.
     *
     * @return float Returns the cum base csg.
     */
    public function getCumBaseCsg() {
        return $this->cumBaseCsg;
    }

    /**
     * Set the cum base csg.
     *
     * @param float $cumBaseCsg The cum base csg.
     */
    public function setCumBaseCsg($cumBaseCsg) {
        $this->cumBaseCsg = $cumBaseCsg;
        return $this;
    }
}
