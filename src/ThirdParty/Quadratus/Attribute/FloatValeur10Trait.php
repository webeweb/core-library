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
 * Valeur10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur10Trait {

    /**
     * Valeur10.
     *
     * @var float
     */
    private $valeur10;

    /**
     * Get the valeur10.
     *
     * @return float Returns the valeur10.
     */
    public function getValeur10() {
        return $this->valeur10;
    }

    /**
     * Set the valeur10.
     *
     * @param float $valeur10 The valeur10.
     */
    public function setValeur10($valeur10) {
        $this->valeur10 = $valeur10;
        return $this;
    }
}
