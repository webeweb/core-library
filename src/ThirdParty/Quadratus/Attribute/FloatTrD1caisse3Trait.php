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
 * Tr d1caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrD1caisse3Trait {

    /**
     * Tr d1caisse3.
     *
     * @var float
     */
    private $trD1caisse3;

    /**
     * Get the tr d1caisse3.
     *
     * @return float Returns the tr d1caisse3.
     */
    public function getTrD1caisse3() {
        return $this->trD1caisse3;
    }

    /**
     * Set the tr d1caisse3.
     *
     * @param float $trD1caisse3 The tr d1caisse3.
     */
    public function setTrD1caisse3($trD1caisse3) {
        $this->trD1caisse3 = $trD1caisse3;
        return $this;
    }
}
