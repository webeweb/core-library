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
 * Tot prime ns trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotPrimeNsTrait {

    /**
     * Tot prime ns.
     *
     * @var float
     */
    private $totPrimeNs;

    /**
     * Get the tot prime ns.
     *
     * @return float Returns the tot prime ns.
     */
    public function getTotPrimeNs() {
        return $this->totPrimeNs;
    }

    /**
     * Set the tot prime ns.
     *
     * @param float $totPrimeNs The tot prime ns.
     */
    public function setTotPrimeNs($totPrimeNs) {
        $this->totPrimeNs = $totPrimeNs;
        return $this;
    }
}
