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
 * Valeur20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur20Trait {

    /**
     * Valeur20.
     *
     * @var float
     */
    private $valeur20;

    /**
     * Get the valeur20.
     *
     * @return float Returns the valeur20.
     */
    public function getValeur20() {
        return $this->valeur20;
    }

    /**
     * Set the valeur20.
     *
     * @param float $valeur20 The valeur20.
     */
    public function setValeur20($valeur20) {
        $this->valeur20 = $valeur20;
        return $this;
    }
}
