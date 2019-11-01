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
 * Rtt4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt4Trait {

    /**
     * Rtt4.
     *
     * @var float
     */
    private $rtt4;

    /**
     * Get the rtt4.
     *
     * @return float Returns the rtt4.
     */
    public function getRtt4() {
        return $this->rtt4;
    }

    /**
     * Set the rtt4.
     *
     * @param float $rtt4 The rtt4.
     */
    public function setRtt4($rtt4) {
        $this->rtt4 = $rtt4;
        return $this;
    }
}
