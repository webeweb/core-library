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
 * Valeur14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur14Trait {

    /**
     * Valeur14.
     *
     * @var float
     */
    private $valeur14;

    /**
     * Get the valeur14.
     *
     * @return float Returns the valeur14.
     */
    public function getValeur14() {
        return $this->valeur14;
    }

    /**
     * Set the valeur14.
     *
     * @param float $valeur14 The valeur14.
     */
    public function setValeur14($valeur14) {
        $this->valeur14 = $valeur14;
        return $this;
    }
}
