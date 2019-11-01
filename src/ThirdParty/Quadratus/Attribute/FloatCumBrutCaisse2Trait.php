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
 * Cum brut caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBrutCaisse2Trait {

    /**
     * Cum brut caisse2.
     *
     * @var float
     */
    private $cumBrutCaisse2;

    /**
     * Get the cum brut caisse2.
     *
     * @return float Returns the cum brut caisse2.
     */
    public function getCumBrutCaisse2() {
        return $this->cumBrutCaisse2;
    }

    /**
     * Set the cum brut caisse2.
     *
     * @param float $cumBrutCaisse2 The cum brut caisse2.
     */
    public function setCumBrutCaisse2($cumBrutCaisse2) {
        $this->cumBrutCaisse2 = $cumBrutCaisse2;
        return $this;
    }
}
