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
 * Tr d1caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrD1caisse2Trait {

    /**
     * Tr d1caisse2.
     *
     * @var float
     */
    private $trD1caisse2;

    /**
     * Get the tr d1caisse2.
     *
     * @return float Returns the tr d1caisse2.
     */
    public function getTrD1caisse2() {
        return $this->trD1caisse2;
    }

    /**
     * Set the tr d1caisse2.
     *
     * @param float $trD1caisse2 The tr d1caisse2.
     */
    public function setTrD1caisse2($trD1caisse2) {
        $this->trD1caisse2 = $trD1caisse2;
        return $this;
    }
}
