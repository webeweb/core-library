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
 * Nombre prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNombrePrimeTrait {

    /**
     * Nombre prime.
     *
     * @var float
     */
    private $nombrePrime;

    /**
     * Get the nombre prime.
     *
     * @return float Returns the nombre prime.
     */
    public function getNombrePrime() {
        return $this->nombrePrime;
    }

    /**
     * Set the nombre prime.
     *
     * @param float $nombrePrime The nombre prime.
     */
    public function setNombrePrime($nombrePrime) {
        $this->nombrePrime = $nombrePrime;
        return $this;
    }
}
