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
 * Tot si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotSiTrait {

    /**
     * Tot si.
     *
     * @var float
     */
    private $totSi;

    /**
     * Get the tot si.
     *
     * @return float Returns the tot si.
     */
    public function getTotSi() {
        return $this->totSi;
    }

    /**
     * Set the tot si.
     *
     * @param float $totSi The tot si.
     */
    public function setTotSi($totSi) {
        $this->totSi = $totSi;
        return $this;
    }
}
