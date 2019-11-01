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
 * Valeur34 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur34Trait {

    /**
     * Valeur34.
     *
     * @var float
     */
    private $valeur34;

    /**
     * Get the valeur34.
     *
     * @return float Returns the valeur34.
     */
    public function getValeur34() {
        return $this->valeur34;
    }

    /**
     * Set the valeur34.
     *
     * @param float $valeur34 The valeur34.
     */
    public function setValeur34($valeur34) {
        $this->valeur34 = $valeur34;
        return $this;
    }
}
