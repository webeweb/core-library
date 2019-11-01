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
 * Valeur6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur6Trait {

    /**
     * Valeur6.
     *
     * @var float
     */
    private $valeur6;

    /**
     * Get the valeur6.
     *
     * @return float Returns the valeur6.
     */
    public function getValeur6() {
        return $this->valeur6;
    }

    /**
     * Set the valeur6.
     *
     * @param float $valeur6 The valeur6.
     */
    public function setValeur6($valeur6) {
        $this->valeur6 = $valeur6;
        return $this;
    }
}
