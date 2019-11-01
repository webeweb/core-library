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
 * Valeur13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur13Trait {

    /**
     * Valeur13.
     *
     * @var float
     */
    private $valeur13;

    /**
     * Get the valeur13.
     *
     * @return float Returns the valeur13.
     */
    public function getValeur13() {
        return $this->valeur13;
    }

    /**
     * Set the valeur13.
     *
     * @param float $valeur13 The valeur13.
     */
    public function setValeur13($valeur13) {
        $this->valeur13 = $valeur13;
        return $this;
    }
}
