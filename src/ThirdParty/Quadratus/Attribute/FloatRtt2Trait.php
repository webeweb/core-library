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
 * Rtt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt2Trait {

    /**
     * Rtt2.
     *
     * @var float
     */
    private $rtt2;

    /**
     * Get the rtt2.
     *
     * @return float Returns the rtt2.
     */
    public function getRtt2() {
        return $this->rtt2;
    }

    /**
     * Set the rtt2.
     *
     * @param float $rtt2 The rtt2.
     */
    public function setRtt2($rtt2) {
        $this->rtt2 = $rtt2;
        return $this;
    }
}
