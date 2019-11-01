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
 * Rtt6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt6Trait {

    /**
     * Rtt6.
     *
     * @var float
     */
    private $rtt6;

    /**
     * Get the rtt6.
     *
     * @return float Returns the rtt6.
     */
    public function getRtt6() {
        return $this->rtt6;
    }

    /**
     * Set the rtt6.
     *
     * @param float $rtt6 The rtt6.
     */
    public function setRtt6($rtt6) {
        $this->rtt6 = $rtt6;
        return $this;
    }
}
