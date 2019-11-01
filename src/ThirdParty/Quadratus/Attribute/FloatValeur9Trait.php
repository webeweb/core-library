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
 * Valeur9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur9Trait {

    /**
     * Valeur9.
     *
     * @var float
     */
    private $valeur9;

    /**
     * Get the valeur9.
     *
     * @return float Returns the valeur9.
     */
    public function getValeur9() {
        return $this->valeur9;
    }

    /**
     * Set the valeur9.
     *
     * @param float $valeur9 The valeur9.
     */
    public function setValeur9($valeur9) {
        $this->valeur9 = $valeur9;
        return $this;
    }
}
