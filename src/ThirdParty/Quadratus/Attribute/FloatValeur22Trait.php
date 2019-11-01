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
 * Valeur22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur22Trait {

    /**
     * Valeur22.
     *
     * @var float
     */
    private $valeur22;

    /**
     * Get the valeur22.
     *
     * @return float Returns the valeur22.
     */
    public function getValeur22() {
        return $this->valeur22;
    }

    /**
     * Set the valeur22.
     *
     * @param float $valeur22 The valeur22.
     */
    public function setValeur22($valeur22) {
        $this->valeur22 = $valeur22;
        return $this;
    }
}
