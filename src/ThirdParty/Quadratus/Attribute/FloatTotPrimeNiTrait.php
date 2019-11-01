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
 * Tot prime ni trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotPrimeNiTrait {

    /**
     * Tot prime ni.
     *
     * @var float
     */
    private $totPrimeNi;

    /**
     * Get the tot prime ni.
     *
     * @return float Returns the tot prime ni.
     */
    public function getTotPrimeNi() {
        return $this->totPrimeNi;
    }

    /**
     * Set the tot prime ni.
     *
     * @param float $totPrimeNi The tot prime ni.
     */
    public function setTotPrimeNi($totPrimeNi) {
        $this->totPrimeNi = $totPrimeNi;
        return $this;
    }
}
