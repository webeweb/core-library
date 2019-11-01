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
 * Valeur33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur33Trait {

    /**
     * Valeur33.
     *
     * @var float
     */
    private $valeur33;

    /**
     * Get the valeur33.
     *
     * @return float Returns the valeur33.
     */
    public function getValeur33() {
        return $this->valeur33;
    }

    /**
     * Set the valeur33.
     *
     * @param float $valeur33 The valeur33.
     */
    public function setValeur33($valeur33) {
        $this->valeur33 = $valeur33;
        return $this;
    }
}
