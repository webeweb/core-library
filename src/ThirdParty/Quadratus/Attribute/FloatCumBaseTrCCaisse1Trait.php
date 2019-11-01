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
 * Cum base tr c caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrCCaisse1Trait {

    /**
     * Cum base tr c caisse1.
     *
     * @var float
     */
    private $cumBaseTrCCaisse1;

    /**
     * Get the cum base tr c caisse1.
     *
     * @return float Returns the cum base tr c caisse1.
     */
    public function getCumBaseTrCCaisse1() {
        return $this->cumBaseTrCCaisse1;
    }

    /**
     * Set the cum base tr c caisse1.
     *
     * @param float $cumBaseTrCCaisse1 The cum base tr c caisse1.
     */
    public function setCumBaseTrCCaisse1($cumBaseTrCCaisse1) {
        $this->cumBaseTrCCaisse1 = $cumBaseTrCCaisse1;
        return $this;
    }
}
