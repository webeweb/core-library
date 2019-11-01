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
 * Valeur18 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur18Trait {

    /**
     * Valeur18.
     *
     * @var float
     */
    private $valeur18;

    /**
     * Get the valeur18.
     *
     * @return float Returns the valeur18.
     */
    public function getValeur18() {
        return $this->valeur18;
    }

    /**
     * Set the valeur18.
     *
     * @param float $valeur18 The valeur18.
     */
    public function setValeur18($valeur18) {
        $this->valeur18 = $valeur18;
        return $this;
    }
}
