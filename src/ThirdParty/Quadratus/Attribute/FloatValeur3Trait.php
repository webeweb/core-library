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
 * Valeur3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur3Trait {

    /**
     * Valeur3.
     *
     * @var float
     */
    private $valeur3;

    /**
     * Get the valeur3.
     *
     * @return float Returns the valeur3.
     */
    public function getValeur3() {
        return $this->valeur3;
    }

    /**
     * Set the valeur3.
     *
     * @param float $valeur3 The valeur3.
     */
    public function setValeur3($valeur3) {
        $this->valeur3 = $valeur3;
        return $this;
    }
}
