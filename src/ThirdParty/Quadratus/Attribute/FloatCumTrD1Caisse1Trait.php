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
 * Cum tr d1 caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrD1Caisse1Trait {

    /**
     * Cum tr d1 caisse1.
     *
     * @var float
     */
    private $cumTrD1Caisse1;

    /**
     * Get the cum tr d1 caisse1.
     *
     * @return float Returns the cum tr d1 caisse1.
     */
    public function getCumTrD1Caisse1() {
        return $this->cumTrD1Caisse1;
    }

    /**
     * Set the cum tr d1 caisse1.
     *
     * @param float $cumTrD1Caisse1 The cum tr d1 caisse1.
     */
    public function setCumTrD1Caisse1($cumTrD1Caisse1) {
        $this->cumTrD1Caisse1 = $cumTrD1Caisse1;
        return $this;
    }
}
