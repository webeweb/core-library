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
 * Brut caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutCaisse2Trait {

    /**
     * Brut caisse2.
     *
     * @var float
     */
    private $brutCaisse2;

    /**
     * Get the brut caisse2.
     *
     * @return float Returns the brut caisse2.
     */
    public function getBrutCaisse2() {
        return $this->brutCaisse2;
    }

    /**
     * Set the brut caisse2.
     *
     * @param float $brutCaisse2 The brut caisse2.
     */
    public function setBrutCaisse2($brutCaisse2) {
        $this->brutCaisse2 = $brutCaisse2;
        return $this;
    }
}
