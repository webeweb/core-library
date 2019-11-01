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
 * Valeur4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur4Trait {

    /**
     * Valeur4.
     *
     * @var float
     */
    private $valeur4;

    /**
     * Get the valeur4.
     *
     * @return float Returns the valeur4.
     */
    public function getValeur4() {
        return $this->valeur4;
    }

    /**
     * Set the valeur4.
     *
     * @param float $valeur4 The valeur4.
     */
    public function setValeur4($valeur4) {
        $this->valeur4 = $valeur4;
        return $this;
    }
}
