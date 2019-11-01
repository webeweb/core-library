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
 * Cum base prevoyance comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBasePrevoyanceCompTrait {

    /**
     * Cum base prevoyance comp.
     *
     * @var float
     */
    private $cumBasePrevoyanceComp;

    /**
     * Get the cum base prevoyance comp.
     *
     * @return float Returns the cum base prevoyance comp.
     */
    public function getCumBasePrevoyanceComp() {
        return $this->cumBasePrevoyanceComp;
    }

    /**
     * Set the cum base prevoyance comp.
     *
     * @param float $cumBasePrevoyanceComp The cum base prevoyance comp.
     */
    public function setCumBasePrevoyanceComp($cumBasePrevoyanceComp) {
        $this->cumBasePrevoyanceComp = $cumBasePrevoyanceComp;
        return $this;
    }
}
