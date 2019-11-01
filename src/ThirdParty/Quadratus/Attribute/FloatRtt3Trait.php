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
 * Rtt3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt3Trait {

    /**
     * Rtt3.
     *
     * @var float
     */
    private $rtt3;

    /**
     * Get the rtt3.
     *
     * @return float Returns the rtt3.
     */
    public function getRtt3() {
        return $this->rtt3;
    }

    /**
     * Set the rtt3.
     *
     * @param float $rtt3 The rtt3.
     */
    public function setRtt3($rtt3) {
        $this->rtt3 = $rtt3;
        return $this;
    }
}
