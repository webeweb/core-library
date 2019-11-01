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
 * Valeur39 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur39Trait {

    /**
     * Valeur39.
     *
     * @var float
     */
    private $valeur39;

    /**
     * Get the valeur39.
     *
     * @return float Returns the valeur39.
     */
    public function getValeur39() {
        return $this->valeur39;
    }

    /**
     * Set the valeur39.
     *
     * @param float $valeur39 The valeur39.
     */
    public function setValeur39($valeur39) {
        $this->valeur39 = $valeur39;
        return $this;
    }
}
