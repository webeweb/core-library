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
 * Tr b caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrBCaisse3Trait {

    /**
     * Tr b caisse3.
     *
     * @var float
     */
    private $trBCaisse3;

    /**
     * Get the tr b caisse3.
     *
     * @return float Returns the tr b caisse3.
     */
    public function getTrBCaisse3() {
        return $this->trBCaisse3;
    }

    /**
     * Set the tr b caisse3.
     *
     * @param float $trBCaisse3 The tr b caisse3.
     */
    public function setTrBCaisse3($trBCaisse3) {
        $this->trBCaisse3 = $trBCaisse3;
        return $this;
    }
}
