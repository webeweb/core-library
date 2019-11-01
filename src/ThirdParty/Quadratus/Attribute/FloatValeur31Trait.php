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
 * Valeur31 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur31Trait {

    /**
     * Valeur31.
     *
     * @var float
     */
    private $valeur31;

    /**
     * Get the valeur31.
     *
     * @return float Returns the valeur31.
     */
    public function getValeur31() {
        return $this->valeur31;
    }

    /**
     * Set the valeur31.
     *
     * @param float $valeur31 The valeur31.
     */
    public function setValeur31($valeur31) {
        $this->valeur31 = $valeur31;
        return $this;
    }
}
