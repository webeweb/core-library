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
 * Cum tr c caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrCCaisse3Trait {

    /**
     * Cum tr c caisse3.
     *
     * @var float
     */
    private $cumTrCCaisse3;

    /**
     * Get the cum tr c caisse3.
     *
     * @return float Returns the cum tr c caisse3.
     */
    public function getCumTrCCaisse3() {
        return $this->cumTrCCaisse3;
    }

    /**
     * Set the cum tr c caisse3.
     *
     * @param float $cumTrCCaisse3 The cum tr c caisse3.
     */
    public function setCumTrCCaisse3($cumTrCCaisse3) {
        $this->cumTrCCaisse3 = $cumTrCCaisse3;
        return $this;
    }
}
