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
 * Valeur23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur23Trait {

    /**
     * Valeur23.
     *
     * @var float
     */
    private $valeur23;

    /**
     * Get the valeur23.
     *
     * @return float Returns the valeur23.
     */
    public function getValeur23() {
        return $this->valeur23;
    }

    /**
     * Set the valeur23.
     *
     * @param float $valeur23 The valeur23.
     */
    public function setValeur23($valeur23) {
        $this->valeur23 = $valeur23;
        return $this;
    }
}
