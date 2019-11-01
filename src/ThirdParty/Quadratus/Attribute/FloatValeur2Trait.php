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
 * Valeur2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur2Trait {

    /**
     * Valeur2.
     *
     * @var float
     */
    private $valeur2;

    /**
     * Get the valeur2.
     *
     * @return float Returns the valeur2.
     */
    public function getValeur2() {
        return $this->valeur2;
    }

    /**
     * Set the valeur2.
     *
     * @param float $valeur2 The valeur2.
     */
    public function setValeur2($valeur2) {
        $this->valeur2 = $valeur2;
        return $this;
    }
}
