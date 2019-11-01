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
 * Valeur32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur32Trait {

    /**
     * Valeur32.
     *
     * @var float
     */
    private $valeur32;

    /**
     * Get the valeur32.
     *
     * @return float Returns the valeur32.
     */
    public function getValeur32() {
        return $this->valeur32;
    }

    /**
     * Set the valeur32.
     *
     * @param float $valeur32 The valeur32.
     */
    public function setValeur32($valeur32) {
        $this->valeur32 = $valeur32;
        return $this;
    }
}
