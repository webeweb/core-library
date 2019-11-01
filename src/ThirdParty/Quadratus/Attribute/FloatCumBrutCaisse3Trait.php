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
 * Cum brut caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBrutCaisse3Trait {

    /**
     * Cum brut caisse3.
     *
     * @var float
     */
    private $cumBrutCaisse3;

    /**
     * Get the cum brut caisse3.
     *
     * @return float Returns the cum brut caisse3.
     */
    public function getCumBrutCaisse3() {
        return $this->cumBrutCaisse3;
    }

    /**
     * Set the cum brut caisse3.
     *
     * @param float $cumBrutCaisse3 The cum brut caisse3.
     */
    public function setCumBrutCaisse3($cumBrutCaisse3) {
        $this->cumBrutCaisse3 = $cumBrutCaisse3;
        return $this;
    }
}
