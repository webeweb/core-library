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
 * Valeur28 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur28Trait {

    /**
     * Valeur28.
     *
     * @var float
     */
    private $valeur28;

    /**
     * Get the valeur28.
     *
     * @return float Returns the valeur28.
     */
    public function getValeur28() {
        return $this->valeur28;
    }

    /**
     * Set the valeur28.
     *
     * @param float $valeur28 The valeur28.
     */
    public function setValeur28($valeur28) {
        $this->valeur28 = $valeur28;
        return $this;
    }
}
