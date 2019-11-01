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
 * Rtt8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt8Trait {

    /**
     * Rtt8.
     *
     * @var float
     */
    private $rtt8;

    /**
     * Get the rtt8.
     *
     * @return float Returns the rtt8.
     */
    public function getRtt8() {
        return $this->rtt8;
    }

    /**
     * Set the rtt8.
     *
     * @param float $rtt8 The rtt8.
     */
    public function setRtt8($rtt8) {
        $this->rtt8 = $rtt8;
        return $this;
    }
}
