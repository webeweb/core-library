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
 * Cum tr d1caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrD1caisse2Trait {

    /**
     * Cum tr d1caisse2.
     *
     * @var float
     */
    private $cumTrD1caisse2;

    /**
     * Get the cum tr d1caisse2.
     *
     * @return float Returns the cum tr d1caisse2.
     */
    public function getCumTrD1caisse2() {
        return $this->cumTrD1caisse2;
    }

    /**
     * Set the cum tr d1caisse2.
     *
     * @param float $cumTrD1caisse2 The cum tr d1caisse2.
     */
    public function setCumTrD1caisse2($cumTrD1caisse2) {
        $this->cumTrD1caisse2 = $cumTrD1caisse2;
        return $this;
    }
}
