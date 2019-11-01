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
 * Cum tr c caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrCCaisse1Trait {

    /**
     * Cum tr c caisse1.
     *
     * @var float
     */
    private $cumTrCCaisse1;

    /**
     * Get the cum tr c caisse1.
     *
     * @return float Returns the cum tr c caisse1.
     */
    public function getCumTrCCaisse1() {
        return $this->cumTrCCaisse1;
    }

    /**
     * Set the cum tr c caisse1.
     *
     * @param float $cumTrCCaisse1 The cum tr c caisse1.
     */
    public function setCumTrCCaisse1($cumTrCCaisse1) {
        $this->cumTrCCaisse1 = $cumTrCCaisse1;
        return $this;
    }
}
