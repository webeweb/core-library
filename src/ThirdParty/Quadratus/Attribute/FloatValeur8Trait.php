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
 * Valeur8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur8Trait {

    /**
     * Valeur8.
     *
     * @var float
     */
    private $valeur8;

    /**
     * Get the valeur8.
     *
     * @return float Returns the valeur8.
     */
    public function getValeur8() {
        return $this->valeur8;
    }

    /**
     * Set the valeur8.
     *
     * @param float $valeur8 The valeur8.
     */
    public function setValeur8($valeur8) {
        $this->valeur8 = $valeur8;
        return $this;
    }
}
