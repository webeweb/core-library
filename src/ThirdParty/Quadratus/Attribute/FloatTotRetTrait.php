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
 * Tot ret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotRetTrait {

    /**
     * Tot ret.
     *
     * @var float
     */
    private $totRet;

    /**
     * Get the tot ret.
     *
     * @return float Returns the tot ret.
     */
    public function getTotRet() {
        return $this->totRet;
    }

    /**
     * Set the tot ret.
     *
     * @param float $totRet The tot ret.
     */
    public function setTotRet($totRet) {
        $this->totRet = $totRet;
        return $this;
    }
}
