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
 * Crr qte vendue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrrQteVendueTrait {

    /**
     * Crr qte vendue.
     *
     * @var float
     */
    private $crrQteVendue;

    /**
     * Get the crr qte vendue.
     *
     * @return float Returns the crr qte vendue.
     */
    public function getCrrQteVendue() {
        return $this->crrQteVendue;
    }

    /**
     * Set the crr qte vendue.
     *
     * @param float $crrQteVendue The crr qte vendue.
     */
    public function setCrrQteVendue($crrQteVendue) {
        $this->crrQteVendue = $crrQteVendue;
        return $this;
    }
}
