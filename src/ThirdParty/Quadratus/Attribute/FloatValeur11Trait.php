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
 * Valeur11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur11Trait {

    /**
     * Valeur11.
     *
     * @var float
     */
    private $valeur11;

    /**
     * Get the valeur11.
     *
     * @return float Returns the valeur11.
     */
    public function getValeur11() {
        return $this->valeur11;
    }

    /**
     * Set the valeur11.
     *
     * @param float $valeur11 The valeur11.
     */
    public function setValeur11($valeur11) {
        $this->valeur11 = $valeur11;
        return $this;
    }
}
