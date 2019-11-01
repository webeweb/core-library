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
 * Cum base tr c caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrCCaisse3Trait {

    /**
     * Cum base tr c caisse3.
     *
     * @var float
     */
    private $cumBaseTrCCaisse3;

    /**
     * Get the cum base tr c caisse3.
     *
     * @return float Returns the cum base tr c caisse3.
     */
    public function getCumBaseTrCCaisse3() {
        return $this->cumBaseTrCCaisse3;
    }

    /**
     * Set the cum base tr c caisse3.
     *
     * @param float $cumBaseTrCCaisse3 The cum base tr c caisse3.
     */
    public function setCumBaseTrCCaisse3($cumBaseTrCCaisse3) {
        $this->cumBaseTrCCaisse3 = $cumBaseTrCCaisse3;
        return $this;
    }
}
