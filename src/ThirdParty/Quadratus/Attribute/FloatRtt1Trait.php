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
 * Rtt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt1Trait {

    /**
     * Rtt1.
     *
     * @var float
     */
    private $rtt1;

    /**
     * Get the rtt1.
     *
     * @return float Returns the rtt1.
     */
    public function getRtt1() {
        return $this->rtt1;
    }

    /**
     * Set the rtt1.
     *
     * @param float $rtt1 The rtt1.
     */
    public function setRtt1($rtt1) {
        $this->rtt1 = $rtt1;
        return $this;
    }
}
