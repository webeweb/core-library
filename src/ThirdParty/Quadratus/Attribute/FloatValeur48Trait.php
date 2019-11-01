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
 * Valeur48 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur48Trait {

    /**
     * Valeur48.
     *
     * @var float
     */
    private $valeur48;

    /**
     * Get the valeur48.
     *
     * @return float Returns the valeur48.
     */
    public function getValeur48() {
        return $this->valeur48;
    }

    /**
     * Set the valeur48.
     *
     * @param float $valeur48 The valeur48.
     */
    public function setValeur48($valeur48) {
        $this->valeur48 = $valeur48;
        return $this;
    }
}
