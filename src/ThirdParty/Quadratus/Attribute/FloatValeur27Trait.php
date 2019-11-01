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
 * Valeur27 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur27Trait {

    /**
     * Valeur27.
     *
     * @var float
     */
    private $valeur27;

    /**
     * Get the valeur27.
     *
     * @return float Returns the valeur27.
     */
    public function getValeur27() {
        return $this->valeur27;
    }

    /**
     * Set the valeur27.
     *
     * @param float $valeur27 The valeur27.
     */
    public function setValeur27($valeur27) {
        $this->valeur27 = $valeur27;
        return $this;
    }
}
