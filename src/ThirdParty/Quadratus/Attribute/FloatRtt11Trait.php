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
 * Rtt11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt11Trait {

    /**
     * Rtt11.
     *
     * @var float
     */
    private $rtt11;

    /**
     * Get the rtt11.
     *
     * @return float Returns the rtt11.
     */
    public function getRtt11() {
        return $this->rtt11;
    }

    /**
     * Set the rtt11.
     *
     * @param float $rtt11 The rtt11.
     */
    public function setRtt11($rtt11) {
        $this->rtt11 = $rtt11;
        return $this;
    }
}
