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
 * Cum tr c caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrCCaisse2Trait {

    /**
     * Cum tr c caisse2.
     *
     * @var float
     */
    private $cumTrCCaisse2;

    /**
     * Get the cum tr c caisse2.
     *
     * @return float Returns the cum tr c caisse2.
     */
    public function getCumTrCCaisse2() {
        return $this->cumTrCCaisse2;
    }

    /**
     * Set the cum tr c caisse2.
     *
     * @param float $cumTrCCaisse2 The cum tr c caisse2.
     */
    public function setCumTrCCaisse2($cumTrCCaisse2) {
        $this->cumTrCCaisse2 = $cumTrCCaisse2;
        return $this;
    }
}
