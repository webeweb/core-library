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
 * Rtt9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt9Trait {

    /**
     * Rtt9.
     *
     * @var float
     */
    private $rtt9;

    /**
     * Get the rtt9.
     *
     * @return float Returns the rtt9.
     */
    public function getRtt9() {
        return $this->rtt9;
    }

    /**
     * Set the rtt9.
     *
     * @param float $rtt9 The rtt9.
     */
    public function setRtt9($rtt9) {
        $this->rtt9 = $rtt9;
        return $this;
    }
}
