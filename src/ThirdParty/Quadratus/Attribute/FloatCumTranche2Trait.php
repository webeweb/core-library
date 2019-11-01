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
 * Cum tranche2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTranche2Trait {

    /**
     * Cum tranche2.
     *
     * @var float
     */
    private $cumTranche2;

    /**
     * Get the cum tranche2.
     *
     * @return float Returns the cum tranche2.
     */
    public function getCumTranche2() {
        return $this->cumTranche2;
    }

    /**
     * Set the cum tranche2.
     *
     * @param float $cumTranche2 The cum tranche2.
     */
    public function setCumTranche2($cumTranche2) {
        $this->cumTranche2 = $cumTranche2;
        return $this;
    }
}
