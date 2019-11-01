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
 * Rtt12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt12Trait {

    /**
     * Rtt12.
     *
     * @var float
     */
    private $rtt12;

    /**
     * Get the rtt12.
     *
     * @return float Returns the rtt12.
     */
    public function getRtt12() {
        return $this->rtt12;
    }

    /**
     * Set the rtt12.
     *
     * @param float $rtt12 The rtt12.
     */
    public function setRtt12($rtt12) {
        $this->rtt12 = $rtt12;
        return $this;
    }
}
