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
 * Tr b caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrBCaisse2Trait {

    /**
     * Tr b caisse2.
     *
     * @var float
     */
    private $trBCaisse2;

    /**
     * Get the tr b caisse2.
     *
     * @return float Returns the tr b caisse2.
     */
    public function getTrBCaisse2() {
        return $this->trBCaisse2;
    }

    /**
     * Set the tr b caisse2.
     *
     * @param float $trBCaisse2 The tr b caisse2.
     */
    public function setTrBCaisse2($trBCaisse2) {
        $this->trBCaisse2 = $trBCaisse2;
        return $this;
    }
}
