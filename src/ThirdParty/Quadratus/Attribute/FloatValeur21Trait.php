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
 * Valeur21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur21Trait {

    /**
     * Valeur21.
     *
     * @var float
     */
    private $valeur21;

    /**
     * Get the valeur21.
     *
     * @return float Returns the valeur21.
     */
    public function getValeur21() {
        return $this->valeur21;
    }

    /**
     * Set the valeur21.
     *
     * @param float $valeur21 The valeur21.
     */
    public function setValeur21($valeur21) {
        $this->valeur21 = $valeur21;
        return $this;
    }
}
