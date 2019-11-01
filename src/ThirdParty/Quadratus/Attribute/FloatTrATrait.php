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
 * Tr a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrATrait {

    /**
     * Tr a.
     *
     * @var float
     */
    private $trA;

    /**
     * Get the tr a.
     *
     * @return float Returns the tr a.
     */
    public function getTrA() {
        return $this->trA;
    }

    /**
     * Set the tr a.
     *
     * @param float $trA The tr a.
     */
    public function setTrA($trA) {
        $this->trA = $trA;
        return $this;
    }
}
