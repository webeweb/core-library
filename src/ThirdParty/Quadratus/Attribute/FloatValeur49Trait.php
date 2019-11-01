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
 * Valeur49 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur49Trait {

    /**
     * Valeur49.
     *
     * @var float
     */
    private $valeur49;

    /**
     * Get the valeur49.
     *
     * @return float Returns the valeur49.
     */
    public function getValeur49() {
        return $this->valeur49;
    }

    /**
     * Set the valeur49.
     *
     * @param float $valeur49 The valeur49.
     */
    public function setValeur49($valeur49) {
        $this->valeur49 = $valeur49;
        return $this;
    }
}
