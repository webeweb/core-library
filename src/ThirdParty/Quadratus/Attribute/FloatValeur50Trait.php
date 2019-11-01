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
 * Valeur50 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur50Trait {

    /**
     * Valeur50.
     *
     * @var float
     */
    private $valeur50;

    /**
     * Get the valeur50.
     *
     * @return float Returns the valeur50.
     */
    public function getValeur50() {
        return $this->valeur50;
    }

    /**
     * Set the valeur50.
     *
     * @param float $valeur50 The valeur50.
     */
    public function setValeur50($valeur50) {
        $this->valeur50 = $valeur50;
        return $this;
    }
}
