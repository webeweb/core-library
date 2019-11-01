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
 * Ad amort anterieur2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdAmortAnterieur2Trait {

    /**
     * Ad amort anterieur2.
     *
     * @var float
     */
    private $adAmortAnterieur2;

    /**
     * Get the ad amort anterieur2.
     *
     * @return float Returns the ad amort anterieur2.
     */
    public function getAdAmortAnterieur2() {
        return $this->adAmortAnterieur2;
    }

    /**
     * Set the ad amort anterieur2.
     *
     * @param float $adAmortAnterieur2 The ad amort anterieur2.
     */
    public function setAdAmortAnterieur2($adAmortAnterieur2) {
        $this->adAmortAnterieur2 = $adAmortAnterieur2;
        return $this;
    }
}
