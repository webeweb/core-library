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
 * Rtt10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt10Trait {

    /**
     * Rtt10.
     *
     * @var float
     */
    private $rtt10;

    /**
     * Get the rtt10.
     *
     * @return float Returns the rtt10.
     */
    public function getRtt10() {
        return $this->rtt10;
    }

    /**
     * Set the rtt10.
     *
     * @param float $rtt10 The rtt10.
     */
    public function setRtt10($rtt10) {
        $this->rtt10 = $rtt10;
        return $this;
    }
}
