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
 * Cum rtt dus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumRttDusTrait {

    /**
     * Cum rtt dus.
     *
     * @var float
     */
    private $cumRttDus;

    /**
     * Get the cum rtt dus.
     *
     * @return float Returns the cum rtt dus.
     */
    public function getCumRttDus() {
        return $this->cumRttDus;
    }

    /**
     * Set the cum rtt dus.
     *
     * @param float $cumRttDus The cum rtt dus.
     */
    public function setCumRttDus($cumRttDus) {
        $this->cumRttDus = $cumRttDus;
        return $this;
    }
}
