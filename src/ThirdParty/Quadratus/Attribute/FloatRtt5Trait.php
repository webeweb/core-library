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
 * Rtt5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRtt5Trait {

    /**
     * Rtt5.
     *
     * @var float
     */
    private $rtt5;

    /**
     * Get the rtt5.
     *
     * @return float Returns the rtt5.
     */
    public function getRtt5() {
        return $this->rtt5;
    }

    /**
     * Set the rtt5.
     *
     * @param float $rtt5 The rtt5.
     */
    public function setRtt5($rtt5) {
        $this->rtt5 = $rtt5;
        return $this;
    }
}
