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
 * Tr d1 caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrD1Caisse1Trait {

    /**
     * Tr d1 caisse1.
     *
     * @var float
     */
    private $trD1Caisse1;

    /**
     * Get the tr d1 caisse1.
     *
     * @return float Returns the tr d1 caisse1.
     */
    public function getTrD1Caisse1() {
        return $this->trD1Caisse1;
    }

    /**
     * Set the tr d1 caisse1.
     *
     * @param float $trD1Caisse1 The tr d1 caisse1.
     */
    public function setTrD1Caisse1($trD1Caisse1) {
        $this->trD1Caisse1 = $trD1Caisse1;
        return $this;
    }
}
