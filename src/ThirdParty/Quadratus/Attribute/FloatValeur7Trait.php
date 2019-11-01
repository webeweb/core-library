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
 * Valeur7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur7Trait {

    /**
     * Valeur7.
     *
     * @var float
     */
    private $valeur7;

    /**
     * Get the valeur7.
     *
     * @return float Returns the valeur7.
     */
    public function getValeur7() {
        return $this->valeur7;
    }

    /**
     * Set the valeur7.
     *
     * @param float $valeur7 The valeur7.
     */
    public function setValeur7($valeur7) {
        $this->valeur7 = $valeur7;
        return $this;
    }
}
