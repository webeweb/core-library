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
 * Tr b caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrBCaisse1Trait {

    /**
     * Tr b caisse1.
     *
     * @var float
     */
    private $trBCaisse1;

    /**
     * Get the tr b caisse1.
     *
     * @return float Returns the tr b caisse1.
     */
    public function getTrBCaisse1() {
        return $this->trBCaisse1;
    }

    /**
     * Set the tr b caisse1.
     *
     * @param float $trBCaisse1 The tr b caisse1.
     */
    public function setTrBCaisse1($trBCaisse1) {
        $this->trBCaisse1 = $trBCaisse1;
        return $this;
    }
}
