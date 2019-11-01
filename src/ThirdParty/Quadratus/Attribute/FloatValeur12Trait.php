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
 * Valeur12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur12Trait {

    /**
     * Valeur12.
     *
     * @var float
     */
    private $valeur12;

    /**
     * Get the valeur12.
     *
     * @return float Returns the valeur12.
     */
    public function getValeur12() {
        return $this->valeur12;
    }

    /**
     * Set the valeur12.
     *
     * @param float $valeur12 The valeur12.
     */
    public function setValeur12($valeur12) {
        $this->valeur12 = $valeur12;
        return $this;
    }
}
