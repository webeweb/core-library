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
 * Brut caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutCaisse3Trait {

    /**
     * Brut caisse3.
     *
     * @var float
     */
    private $brutCaisse3;

    /**
     * Get the brut caisse3.
     *
     * @return float Returns the brut caisse3.
     */
    public function getBrutCaisse3() {
        return $this->brutCaisse3;
    }

    /**
     * Set the brut caisse3.
     *
     * @param float $brutCaisse3 The brut caisse3.
     */
    public function setBrutCaisse3($brutCaisse3) {
        $this->brutCaisse3 = $brutCaisse3;
        return $this;
    }
}
