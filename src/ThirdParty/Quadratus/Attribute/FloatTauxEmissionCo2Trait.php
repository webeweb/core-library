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
 * Taux emission co2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxEmissionCo2Trait {

    /**
     * Taux emission co2.
     *
     * @var float
     */
    private $tauxEmissionCo2;

    /**
     * Get the taux emission co2.
     *
     * @return float Returns the taux emission co2.
     */
    public function getTauxEmissionCo2() {
        return $this->tauxEmissionCo2;
    }

    /**
     * Set the taux emission co2.
     *
     * @param float $tauxEmissionCo2 The taux emission co2.
     */
    public function setTauxEmissionCo2($tauxEmissionCo2) {
        $this->tauxEmissionCo2 = $tauxEmissionCo2;
        return $this;
    }
}
