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
 * Valeur46 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur46Trait {

    /**
     * Valeur46.
     *
     * @var float
     */
    private $valeur46;

    /**
     * Get the valeur46.
     *
     * @return float Returns the valeur46.
     */
    public function getValeur46() {
        return $this->valeur46;
    }

    /**
     * Set the valeur46.
     *
     * @param float $valeur46 The valeur46.
     */
    public function setValeur46($valeur46) {
        $this->valeur46 = $valeur46;
        return $this;
    }
}
