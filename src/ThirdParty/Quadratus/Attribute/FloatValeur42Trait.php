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
 * Valeur42 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur42Trait {

    /**
     * Valeur42.
     *
     * @var float
     */
    private $valeur42;

    /**
     * Get the valeur42.
     *
     * @return float Returns the valeur42.
     */
    public function getValeur42() {
        return $this->valeur42;
    }

    /**
     * Set the valeur42.
     *
     * @param float $valeur42 The valeur42.
     */
    public function setValeur42($valeur42) {
        $this->valeur42 = $valeur42;
        return $this;
    }
}
