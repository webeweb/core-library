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
 * Valeur5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur5Trait {

    /**
     * Valeur5.
     *
     * @var float
     */
    private $valeur5;

    /**
     * Get the valeur5.
     *
     * @return float Returns the valeur5.
     */
    public function getValeur5() {
        return $this->valeur5;
    }

    /**
     * Set the valeur5.
     *
     * @param float $valeur5 The valeur5.
     */
    public function setValeur5($valeur5) {
        $this->valeur5 = $valeur5;
        return $this;
    }
}
