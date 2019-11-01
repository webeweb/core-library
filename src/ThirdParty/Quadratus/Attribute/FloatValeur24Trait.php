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
 * Valeur24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur24Trait {

    /**
     * Valeur24.
     *
     * @var float
     */
    private $valeur24;

    /**
     * Get the valeur24.
     *
     * @return float Returns the valeur24.
     */
    public function getValeur24() {
        return $this->valeur24;
    }

    /**
     * Set the valeur24.
     *
     * @param float $valeur24 The valeur24.
     */
    public function setValeur24($valeur24) {
        $this->valeur24 = $valeur24;
        return $this;
    }
}
