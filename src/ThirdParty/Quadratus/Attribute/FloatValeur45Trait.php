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
 * Valeur45 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur45Trait {

    /**
     * Valeur45.
     *
     * @var float
     */
    private $valeur45;

    /**
     * Get the valeur45.
     *
     * @return float Returns the valeur45.
     */
    public function getValeur45() {
        return $this->valeur45;
    }

    /**
     * Set the valeur45.
     *
     * @param float $valeur45 The valeur45.
     */
    public function setValeur45($valeur45) {
        $this->valeur45 = $valeur45;
        return $this;
    }
}
