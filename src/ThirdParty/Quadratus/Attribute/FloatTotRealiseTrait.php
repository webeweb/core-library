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
 * Tot realise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotRealiseTrait {

    /**
     * Tot realise.
     *
     * @var float
     */
    private $totRealise;

    /**
     * Get the tot realise.
     *
     * @return float Returns the tot realise.
     */
    public function getTotRealise() {
        return $this->totRealise;
    }

    /**
     * Set the tot realise.
     *
     * @param float $totRealise The tot realise.
     */
    public function setTotRealise($totRealise) {
        $this->totRealise = $totRealise;
        return $this;
    }
}
