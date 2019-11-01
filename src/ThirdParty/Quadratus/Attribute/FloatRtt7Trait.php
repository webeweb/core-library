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
 * Rtt7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt7Trait {

    /**
     * Rtt7.
     *
     * @var float
     */
    private $rtt7;

    /**
     * Get the rtt7.
     *
     * @return float Returns the rtt7.
     */
    public function getRtt7() {
        return $this->rtt7;
    }

    /**
     * Set the rtt7.
     *
     * @param float $rtt7 The rtt7.
     */
    public function setRtt7($rtt7) {
        $this->rtt7 = $rtt7;
        return $this;
    }
}
