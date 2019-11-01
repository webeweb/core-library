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
 * Brut caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutCaisse1Trait {

    /**
     * Brut caisse1.
     *
     * @var float
     */
    private $brutCaisse1;

    /**
     * Get the brut caisse1.
     *
     * @return float Returns the brut caisse1.
     */
    public function getBrutCaisse1() {
        return $this->brutCaisse1;
    }

    /**
     * Set the brut caisse1.
     *
     * @param float $brutCaisse1 The brut caisse1.
     */
    public function setBrutCaisse1($brutCaisse1) {
        $this->brutCaisse1 = $brutCaisse1;
        return $this;
    }
}
