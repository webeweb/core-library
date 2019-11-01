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
 * Valeur25 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur25Trait {

    /**
     * Valeur25.
     *
     * @var float
     */
    private $valeur25;

    /**
     * Get the valeur25.
     *
     * @return float Returns the valeur25.
     */
    public function getValeur25() {
        return $this->valeur25;
    }

    /**
     * Set the valeur25.
     *
     * @param float $valeur25 The valeur25.
     */
    public function setValeur25($valeur25) {
        $this->valeur25 = $valeur25;
        return $this;
    }
}
